# vuln-apps

## Description

A collection of simple vulnerable web apps for testing vulnerability scanners or
educational purposes.

## Apps

* `cmdi/`
  * [php/](cmdi/php) - A PHP app demonstrating various types of Command
    Injection.
* `lfi/`
  * [php/](lfi/php) - A PHP app demonstrating various types of Local File
    Inclusion (LFI).
* `rfi/`
  * [php/](rfi/php) - A PHP app demonstrating Remote File Inclusion (RFI).
  * [jsp/](rfi/jsp) - A JSP/Tomcat app demonstrating Remote File Inclusion
    (RFI).
* `sqli/`
  * [php/](sqli/php) - A PHP app demonstrating various types of SQL injections
    (SQLi).
* `open_redirect/`
  * [php/](open_redirect/php) - A PHP app demonstrating Open Redirect
    vulnerabilities.

## Contributing

### New Apps

* Must exist within a directory.
* Must contain a `Dockerfile` to build the app as a docker image.
* Must contain a `docker-compose.yml` file for quickly starting up the docker
  image.
* Must contain a `Makefile` for building the docker image and running either
  the app or the docker image.
* Must contain an `index.html` page which describes the vulnerability and links
  to the vulnerable webpage.
* Must contain a `README.md` file containing basic instructions on how to run
  and view the web app.
