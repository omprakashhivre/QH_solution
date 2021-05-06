<?php
session_start();

$submit=$_POST;
if($submit)
{
  // echo "<script> alert('Hi')</script>";
  //$role=$_POST['role'];
  $email=$_POST['email'];
  $pwd=$_POST['password'];
  // echo "<script> alert('$role')</script>";
  $conn=mysqli_connect('localhost','root','','hoteldc');
  if(!$conn){
   die("error while connecting!!");
   
  }

 $pwd=md5($pwd);
 
 if($role=='customer')
 {
  $sql="SELECT * FROM admin WHERE Email='$email' AND Password='$pwd'";
 }

 else{
  $sql="SELECT * FROM admin WHERE Email='$email' AND Password='$pwd'";
 }
 
 $res=mysqli_query($conn,$sql);
 if($res)
 {
  $rows=mysqli_num_rows($res);
  if($rows==0){

  echo "<script>alert('Incorrect Email Id or Password!!');
  window.location.href='admin.html';</script>";
  //header("Location:login.html");
}
else
{ 
  // $ip=getHostByName(getHostName());
  // setcookie("remember",md5('sggs'.$email.$ip.'salt'),time()+(86400*30),"/");
 // echo "<script> alert('true')</script>";
  $_SESSION['email']=$email;
  header("Location:get.php");
 }

}

 
}
?>
