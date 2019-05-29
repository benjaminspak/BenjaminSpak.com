# Intro to PDO & MySQL

```SQL
mysql> show databases;
mysql> create database mytodo;
mysql> use mytodo;
mysql> show tables;
mysql> create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);
mysql> show tables;
mysql> describe todos;
mysql> insert into todos (description, completed) values('Go to the store', false);
mysql> select * from todos;
```

```php  
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
} catch(PDOException $e) {
    die('Could not connect.');
}


?>
```