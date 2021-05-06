<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
// variables for input data

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city_name = $_POST['city_name'];
$email = $_POST['email'];
// sql query for inserting data into database

mysqli_query($conn,"INSERT INTO `room` (`cosname`, `address`, `mobile`, `email`, `adate`, `ddate`, `members`, `country`) VALUES ('$cname', '$address', '$phone', '$email', '$start', '$end', '$mem', '$country')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 
$sql="INSERT INTO `room` (`cosname`, `address`, `mobile`, `email`, `adate`, `ddate`, `members`, `country`) VALUES ('$cname', '$address', '$phone', '$email', '$start', '$end', '$mem', '$country')";
