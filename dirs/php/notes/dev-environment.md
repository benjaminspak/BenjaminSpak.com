## Setting up local dev environment
### Install the LAMP Stack -- Ubuntu 18.04
+ https://www.vultr.com/docs/how-to-install-apache-mysql-and-php-on-ubuntu-16-04

#### Install Apache

``` bash
sudo apt-get update -y &&
sudo apt-get install apache2 -y &&
sudo systemctl start apache2.service
```

#### Install MySQL

``` bash
sudo apt-get install mysql-server -y &&
sudo /usr/bin/mysql_secure_installation
```

#### Install PHP

```
sudo apt-get install php libapache2-mod-php
```

+ May run into a dependency issue.

``` bash
Package php-mcrypt is not available, but is referred to by another package.
This may mean that the package is missing, has been obsoleted, or
is only available from another source

E: Package 'php-mcrypt' has no installation candidate
```

##### Install php-mcrypt (Optional)
+ https://serverpilot.io/docs/how-to-install-the-php-mcrypt-extension
+ https://stackoverflow.com/questions/52078688/sudo-pecl7-2-sp-command-not-found

``` bash
sudo apt-get install php-pear php-dev
sudo pecl install geoip-beta
```

### Install the LAMP Stack Cont ...
+ https://hostadvice.com/how-to/how-to-install-apache-mysql-php-on-an-ubuntu-18-04-vps/

#### Testing your MySQl server

```bash
sudo mysql -u root -p
Create database <databasename>
```

#### Testing PHP

```bash
sudo nano /var/www/html/info.php
```

```php
<?php
 
phpinfo();
 
?>
```

#### Restart Apache
+ [Start / Stop and Restart Apache 2 Web Server Commands](https://www.cyberciti.biz/faq/star-stop-restart-apache2-webserver/)

```bash
sudo systemctl restart apache2
```
test this bitch!!! brahhhh!!!! WTF awesome!!

#### Test Local Server

```
localhost/info.php
```

##### Sync Working Dir Files to Local Apache2 Server Dir

```
sudo cp -r ~/Desktop/projects/Notes--PHP_Laravel/PDO_mySQL/ /var/www/html/
```