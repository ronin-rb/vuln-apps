all: run

build: Dockerfile
	docker build -t vuln-apps-rfi-php .

run: build
	docker run --rm -it -p 8080:80 vuln-apps-rfi-php

clean:
	docker image rm vuln-apps-rfi-php

.PHONY: all build run clean
