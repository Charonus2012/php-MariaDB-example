# MariaDB PHP example


Database prepare for this example:

First create database:
```sql
CREATE DATABASE database_name;
```

Then create table with id, username, password:
```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  pwd VARCHAR(150),
  UNIQUE INDEX(username)
);
```
