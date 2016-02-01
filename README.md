#Info#
If you want an apache2 php container built for apache then pull this repo and run the following:

 > docker build -t apache .
 > docker run -d -p 80:80 apache
 (Change the port as required)

Put your project files in html folder

After you run the docker container visit the URL http://localhost/index.php or http://localhost/about
If you change your hosts file and add:
 127.0.0.1 dev.sohrabkhan.com

Then visit http://dev.sohrabkhan.com/about