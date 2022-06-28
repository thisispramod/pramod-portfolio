<?php
session_start();
include 'db.php';

if(isset($_POST['contact_submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $insert_query = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES('$name', '$email','$message')";

  $query = mysqli_query($conn,$insert_query);
  if($query){
    $_SESSION['message'] = "Message sent successfully " ;
    header('location:index.php');
  }
  else{
    echo ''.mysql_error();
  }

}
?>