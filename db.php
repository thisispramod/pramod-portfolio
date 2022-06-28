<?php
// $conn = new mysqli('sql210.epizy.com', 'epiz_27528713', 'PRAmod@1999', 'epiz_27528713_portfolio');
// $con = new mysqli('localhost', 'root', '', 'stock');
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'portfolio');
?>