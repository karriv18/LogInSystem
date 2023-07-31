<?php 
session_start();  // starts session 

include "db_conn.php";
$uname = $_POST['uname'];
$pass = $_POST['pword'];
if(isset($uname) && isset($pass)){
  // function to validate data 
  // function to validate
  $uname = validate($_POST['uname']);
  $pass = validate($_POST['pword']);

  if (empty($uname)){
    header('Location: index.php?error=User Name is required'); // error for header
    exit();
  }
  else if(empty($pass)){
    header('Location: index.php?error=Password is required'); // error for header
    exit();
  }
  else{
    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";   // sql query to check the users 
    $result = mysqli_query($conn, $sql);   // querying connection and sql 
    
    if (mysqli_num_rows($result) === 1){  // checking if there is existing data in query
      $row = mysqli_fetch_assoc($result);
      if($row['user_name'] === $uname && $row['password'] === $pass){
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
      }
      else{
        echo "Wrong";
      }
      
    }
    else{
      header('Location: index.php?error=Incorrect User Name or Password'); // error for header
      exit();
    }

  }
}else{
  header("Location: index.php");
  exit();
}

function validate($data){
  $data = trim($data);    // removing whitespace
  $data = stripslashes($data);
  $data = htmlspecialchars($data);  // avoiding xss attacks
  return $data;
}
