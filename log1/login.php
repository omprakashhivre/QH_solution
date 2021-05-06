<?php
   //include("config.php");
   session_start();
   $submit=$_POST;
   if($submit) {
      echo "hi";
      // username and password sent from form 
      $conn=mysqli_connect('localhost','root','','hoteldc');
        $myusername=$_POST['username'];
        $mypassword=$_POST['password'];
      //$myusername = mysqli_real_escape_string($db,$_POST['username']);
      //$mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM customercustomerid WHERE Email='$myusername' AND Password='$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count >= 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         echo "true";
         //header("location: index1.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
?>
