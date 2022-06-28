
<?php  
    session_start();
    include 'db.php'; 

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql_query = "SELECT email FROM login WHERE `email` LIKE '$email'  AND `password` LIKE '$password';";
    $result = mysqli_query($conn,$sql_query);
    if(mysqli_num_rows($result) > 0 )
    {
        $row = mysqli_fetch_assoc($result);
        $email = $row["email"];
        $_SESSION['email'] = $email;
        header('location:dashboard.php');
    }
    else
    {
        // echo ''.mysqli_error();
        echo "<script>alert('no sql injection is allowed ')</script> ";
        
    }
}
?>
