<?php
$fname=$_GET['fullname'];
$email=$_GET['email'];
$country=$_GET['country'];
$subject=$_GET['subject'];
$con=mysqli_connect('localhost','root','','hoteldc');
if(!$con)
echo "false";
else
echo "DATA SAVED SUCCESS";

$sql="insert into `contact_us`(`Full_Name`,`Email`,`Country`,`Subject`) values('$fname','$email','$country','$subject')";

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
  <a href="Contact_us.html"><button type="submit" class="button button3">Back</button></a>
<a href="index.php"><button type="submit" class="button button3">Home</button></a>
</body>
</html>
