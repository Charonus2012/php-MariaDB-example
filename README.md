# MariaDB PHP example


Database prepare for this example:

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
