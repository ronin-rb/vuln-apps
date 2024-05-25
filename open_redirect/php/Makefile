all: run

build: Dockerfile
	docker build -t vuln-apps-open-redirect-php .

run: build
	docker run --rm -it -p 8080:80 vuln-apps-open-redirect-php

clean:
	docker image rm vuln-apps-open-redirect-php

.PHONY: all build run clean
