<?php

$cname=$_GET['cname'];
$address=$_GET['add'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$start=$_GET['adate'];
$end=$_GET['ddate'];
$mem=$_GET['mem'];
$country=$_GET['country'];

$con=mysqli_connect('localhost','root','','hoteldc');
if(!$con)
echo "false";
else
echo "DATA SAVED SUCCESS";

$sql="INSERT INTO `room` (`cosname`, `address`, `mobile`, `email`, `adate`, `ddate`, `members`, `country`) VALUES ('$cname', '$address', '$phone', '$email', '$start', '$end', '$mem', '$country')";


mysqli_query($con,$sql);


?>

<!DOCTYPE html>
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {border-radius: 8px;}
</style>
</head>
<body>
</br>
  <a href="book.html"><button type="submit" class="button button3">Back</button></a>
        <a href="index.php"><button type="submit" class="button button3">Home</button></a>
</body>
</html>

