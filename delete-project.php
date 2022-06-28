<?php 
include "db.php"; 

$id = $_GET['id'];

$query = "DELETE FROM `project` WHERE `project`.`id` = $id";
//echo $id;

mysqli_query($conn,$query);
header('location:all-project.php');



?>