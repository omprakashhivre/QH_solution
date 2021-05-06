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
  $sql="SELECT * FROM customercustomerid WHERE Email='$email' AND Password='$pwd'";
 }

 else{
  $sql="SELECT * FROM customercustomerid WHERE Email='$email' AND Password='$pwd'";
 }
 
 $res=mysqli_query($conn,$sql);
 if($res)
 {
  $rows=mysqli_num_rows($res);
  if($rows==0){

  echo "<script>alert('Emailid or password is incorrect!!');
  window.location.href='login.html';</script>";
  //header("Location:login.html");
}
else
{ 
  // $ip=getHostByName(getHostName());
  // setcookie("remember",md5('sggs'.$email.$ip.'salt'),time()+(86400*30),"/");
  echo "<script> alert('true')</script>";
  $_SESSION['email']=$email;
  header("Location:index1.php");
 }

}

 
}
?>
