#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <netinet/in.h>
#include <sys/socket.h>
#include <errno.h>

#define PORT	1337
#define BACKLOG	1

void greet(int client_fd);

int main(int argc, char const *argv[])
{
	int server_fd;

	if ((server_fd = socket(AF_INET, SOCK_STREAM, 0)) < 0)
	{
		goto error;
	}

	struct sockaddr_in address;
	socklen_t address_length = sizeof(struct sockaddr_in);

	address.sin_family = AF_INET;
	address.sin_addr.s_addr = INADDR_ANY;
	address.sin_port = htons(PORT);

	if (bind(server_fd, (struct sockaddr *)&address, sizeof(struct sockaddr_in)) < 0)
	{
		goto error_bind;
	}

	if (listen(server_fd, BACKLOG) < 0)
	{
		goto error_listen;
	}

	int client_fd;

	printf("Listening on 0.0.0.0:%d ...\n", PORT);

	while (1)
	{
		client_fd = accept(server_fd, (struct sockaddr *)&address, &address_length);

		if (client_fd > -1)
		{
			greet(client_fd);
			close(client_fd);
		}
		else
		{
			fprintf(stderr,"error: %s\n",strerror(errno));
		}
	}

	close(server_fd);
	return 0;

error_listen:
error_bind:
	close(server_fd);
error:
	fprintf(stderr,"error: %s\n",strerror(errno));
	return -1;
}

const char greeting_prompt[] = "Name: ";

void greet(int client_fd)
{
	char greeting[1024];
	char name[4096];
	int name_length;

	if (send(client_fd, greeting_prompt, strlen(greeting_prompt), 0) < 0)
	{
		return;
	}

	if ((name_length = recv(client_fd, name, sizeof(name), 0)) < 0)
	{
		return;
	}

	memcpy(greeting, "Hello, ", 7);
	memcpy(greeting+7, name, name_length);

	if (send(client_fd, greeting, strlen(greeting), 0) < 0)
	{
		return;
	}
}
