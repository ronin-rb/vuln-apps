all: run

build: greeter

greeter: greeter.c
	$(CC) -O0 -o greeter greeter.c

run: greeter
	./greeter

gdb: greeter
	gdb greeter

clean:
	rm -f greeter

.PHONY: all build run clean
