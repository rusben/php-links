# php-links

Download the code and set permissions to `/var/www/links.local`:

```console
sudo chmod -R 775 /var/www/links.local
sudo chown -R usuario:www-data /var/www/links.local
```

Create the VirtualHost:
```console
<VirtualHost *:80>
    ServerAdmin admin@links.local
    ServerName www.links.local
    ServerAlias links.local
    DocumentRoot /var/www/links.local/public
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

Download the libraries:
```console
composer install
```

Execute the SQL into your database:
```console
src/db/schema.sql
```

Set your credentials in `DatabaseController.php`