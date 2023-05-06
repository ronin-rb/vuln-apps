all: run

build: Dockerfile
	docker build -t vuln-apps-cmdi-php .

run: build
	docker run --rm -it -p 8080:80 vuln-apps-cmdi-php

clean:
	docker image rm vuln-apps-cmdi-php

.PHONY: all build run clean
