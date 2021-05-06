<?php
include_once '.\templates\db_connect.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete employee data</title>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>Address</td>
<td>Email</td>
<td>Mobile</td>
<td>Adate</td>
<td>Ddate</td>
<td>Members</td>
<td>Country</td>


</tr>
<?php
$i=0;
 while($row = $res->fetch_assoc()){
 
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["ID"]; ?></td>
<td><?php echo $row["cosname"]; ?></td>
<td><?php echo $row["address"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["adate"]; ?></td>
<td><?php echo $row["ddate"]; ?></td>
<td><?php echo $row["members"]; ?></td>
<td><?php echo $row["country"]; ?></td>
<td><a href="update-process.php?userid=<?php echo $row["ID"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>