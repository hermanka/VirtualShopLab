# VirtualShop Vulnerable Website

VirtualShop is a website that contains known vulnerabilities. Based on [Adam Doupe's WackoPicko](https://github.com/adamdoupe/WackoPicko)

## Docker Image

Build

  docker build -t hermanka/virtualshop

Simply run the following, which will map your local port `8080` to the
port `80` in the container. Change the `8080` to another port if you
like:

	docker run -p 127.0.0.1:8080:80 -it hermanka/virtualshop

Once the docker image is downloaded and running, you should be able to
access virtualshop on your browser:
[http://localhost:8080](http://localhost:8080).

Note that Windows users might need some additional steps to do the
port forwarding correctly. Google is your friend, use it well. 

## Valid Logins

### Regular users
* scanner1/scanner1
* scanner2/scanner2
* bryce/bryce
