<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Log In </title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  
  <form action="login.php" method="post">
  <h1>Log In</h1>
    <?php if (isset($_GET['error'])){?>
      <p class="error"><?php echo $_GET['error']?></p>
    <?php }?>
    <label>User Name</label>
    <input type="text" name="uname" placeholder="User Name">
    <label>Password</label>
    <input type="password" name="pword" placeholder="Password">
    <button type="submit">Log In</button>
  </form>
</body>
</html>