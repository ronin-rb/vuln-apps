all: run

build: Dockerfile
	docker build -t vuln-apps-sqli-php .

run: build
	docker run --rm -it -p 8080:80 vuln-apps-sqli-php

clean:
	docker image rm vuln-apps-sqli-php

.PHONY: all build run clean
