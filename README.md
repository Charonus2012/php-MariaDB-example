# MariaDB PHP example

> Download MariaDB and run it

## PHP
Everywhere you see database_name it means that is your database name

First set database information in includes\dbh.inc.php:
Set main information:
```php
$dsn = "mysql:host=localhost;dbname=database_name";
```
Set username(normally set to root):
```php
$username = "";
```
Set password:
```php
$password = "";
```

## Database

Database prepare for this example(sql language):
First create database:
```sql
CREATE DATABASE database_name;
```

Then create table with id, username, password:
```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT NOT NULL,
  username VARCHAR(100) NOT NULL,
  pwd VARCHAR(150),
  PRIMARY KEY(id),
  UNIQUE INDEX(username)
);
```

## At the end

Run in terminal:

> php -S localhost:8000

if you want to put it locally on your network then:

> php -S your_ip_here:8000


You can set the port to 80. That is the port that your browser automatically opens.

if you selected localhost then write *localhost:port*

if you selected the second way then *your_ip_here:port*
