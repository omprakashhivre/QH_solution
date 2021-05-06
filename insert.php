<?php

//$ID=$_GET['id'];
$CustomerName=$_POST['name'];
$Address=$_POST['add'];
$City=$_POST['city'];
$Email=$_POST['email'];
$PostalCode=$_POST['post'];
$Country=$_POST['country'];
$Password=$_POST['psw'];
$con=mysqli_connect('localhost','root','','hoteldc');
if(!$con)
{
echo "Database connection error, try again later!!";
exit();
}
$Password=md5($Password);
$sql="select Email from customercustomerid where Email='$Email'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
  echo "Given Email is already Registered";
  // header("Location: http://localhost/master-project-master/regisration.html");
  exit();
}
$sql="INSERT INTO `customercustomerid` (`CustomerName`, `Address`,`Email`,`City`, `PostalCode`, `Country`,`Password`) VALUES
('$CustomerName', '$Address', '$Email','$City', '$PostalCode', '$Country','$Password')";

if(!mysqli_query($con,$sql))
{
echo "Currently unable to register,please try again later";
exit();
}
//$conn->close();
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
<a href="registration.html"><button type="submit" class="button button3">Back</button></a>
        <a href="login.html"><button type="submit" class="button button3">Login </button></a>
</body>
</html>

