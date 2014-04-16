<html>

<head>
<style>
  #main
  {
    margin-left:550px;
  }
</style>
</head>
<body>
  <?php
    if (!@$_COOKIE["mycookie_name"]) {
      ?>
  <div id = "main" >
    <form action="login.php" style = "font-size: 200%; font-style: Arial " method="POST">
      Name : <input type="text"; name="name1"/><br>
      Password : <input type="password" name="password1"/><br>
      <input type="submit" value = "login" style = "font-size: 80%";/>
    </form>

    <form action="register.php" style = "font-size: 200%" method="POST">
      Name : <input type="text" name="name2"/><br>
      Password : <input type="password" name="password2"/><br>
      <input type="submit" value = "register" style = "font-size: 80%"/>
    </form> 
  </div>
<?php } else { ?>
  You already logged in. <a href="logout.php">logout</a>
<?php } ?>
</body>
</html>
