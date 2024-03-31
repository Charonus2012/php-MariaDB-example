<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MariaDB php example</title>
    <link rel="stylesheet" href="style.css">
    <!--script src="script.js"></script-->
  </head>
  <body>
    <!-- page content -->
    <h3>Sign up</h3>
    <form action="./store_example.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <Button>Sign up</Button>
    </form>
    <h3>Show name of id</h3>
    <form action="./get_example.inc.php" method="post">
        <input type="number" name="id" placeholder="id"><br>
        <Button>Show name of id</Button>
    </form>
    
  </body>
</html>


