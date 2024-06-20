Create a .htaccess file if you want to make it like a shorten url 
RewriteEngine On 
RewriteRule ^(.*)/?$ index.php?url=$1 [L] 
