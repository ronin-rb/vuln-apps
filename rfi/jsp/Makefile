all: run

build: Dockerfile
	docker build -t vuln-apps-rfi-jsp .

run: build
	docker run --rm -it -p 8080:8080 vuln-apps-rfi-jsp

clean:
	docker image rm vuln-apps-rfi-jsp

.PHONY: all build run clean
