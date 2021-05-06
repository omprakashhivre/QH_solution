<?php
$con=mysqli_connect('localhost','root','','hoteldc');
if(!$con){
die("error while connecting!!");
}
else{
echo "DATA SAVED SUCCESS";
}
$sql="SELECT * FROM room";  
$res=mysqli_query($con,$sql);
if(!$res)
{
	echo "false";
}
else
{
	// echo "true";
	$row=mysqli_num_rows($res);
	 echo "<table><tr><th>ID</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th><th>Arrival date</th><th>Depature Date</th><th>Members</th></tr>";
    // output data of each row
    while($row = $res->fetch_assoc()) { 

        echo "<tr><td>" . $row["ID"]. "</td><td>". $row["cosname"]. "</td><td>" . $row["address"]. " </td><td>" . $row["mobile"]. " </td><td>" . $row["email"]. " </td><td>" . $row["adate"]. " </td><td>" . $row["ddate"]. " </td><td>" . $row["members"]. " </td></tr>";
    }
    echo "</table>";

}

echo "LOGIN DATA";
$sql="SELECT * FROM customercustomerid"; 
$res=mysqli_query($con,$sql);
if(!$res)
{
	echo "false";
}
else
{
	// echo "true";
	$row=mysqli_num_rows($res);
	 echo "<table><tr><th>ID</th><th>Username</th><th>Email</th></tr>";
    // output data of each row
    while($row = $res->fetch_assoc()) { 

        echo "<tr><td>" . $row["CustomerID"]. "</td><td>" . $row["CustomerName"]. " </td><td>" . $row["Email"]. " </td></tr>";
    }
    echo "</table>";

}
?>