<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>

 <form action="welcome_get.php" method="get">
 Name: <input type="text" name="name"><br>
 E-mail: <input type="text" name="email"><br>
 <input type="submit">
 </form>
    
 </body>
  
</html>
