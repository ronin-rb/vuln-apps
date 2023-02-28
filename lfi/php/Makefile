all: run

build: Dockerfile
	docker build -t vuln-apps-lfi-php .

run: build
	docker run --rm -it -p 8080:80 vuln-apps-lfi-php

clean:
	docker image rm vuln-apps-lfi-php

.PHONY: all build run clean
