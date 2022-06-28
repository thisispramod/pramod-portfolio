<?php 
session_start();
include 'db.php';

if (isset($_POST['submit'])){
	$project_url =$_POST['project_url'];
	$starting_date =$_POST['starting_date'];
	$ending_date =$_POST['ending_date'];
	$developer_name =$_POST['developer_name'];
	$technology=$_POST['technology'];
	$descriptions=$_POST['descriptions'];
	$filename = $_FILES['image']['name'];
    $filepath = $_FILES['image']['tmp_name'];
    $fileerror = $_FILES['image']['error'];
    if(isset($_FILES['image']) and $_FILES['image']['size']!=0){
        $destfile = "project_image/".$filename;
        move_uploaded_file($filepath, $destfile);
		$sqlquery = "INSERT INTO `project` (`project_url`, `starting_date`, `ending_date`, `developer_name`, `technology`,`image`,`descriptions`) VALUES
		('$project_url', '$starting_date', '$ending_date', '$developer_name', '$technology', '$destfile','$descriptions')";
		if ($conn->query($sqlquery) === TRUE) {
			$_SESSION['message'] = "Project Added Successfully !";
			header('location:project.php');
		}  else {
			echo "Error: " . $sqlquery . "<br>" . $con->error;
		}
	}
}