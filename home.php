<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <p class="name">Hello, <?php echo $_SESSION['user_name'] ?></p>
  <a href="logout.php" class="logout">Log Out </a>
</body>
</html>
<?php 
} 
else{
  header("Location: index.php? error");
  exit();
}
?>