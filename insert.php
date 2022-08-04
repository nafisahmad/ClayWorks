<?php
$con = mysqli_connect("localhost", "root");
mysqli_select_db($con, "clayworks");

extract($_POST);

if(isset($_POST['submit'])){
    $q= "insert into form (name, tel, email, company, requirement,area) values ('$name', '$tel', '$email', '$company', '$requirement', '$area')";
    
    $query = mysqli_query($con, $q);
    header("location:insert.php");
}
?>