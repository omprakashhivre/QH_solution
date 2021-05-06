<?php include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE room set Id='" . $_POST['ID'] . "', Name='" . $_POST['cosname'] . "', Address='" . $_POST['address'] . "', Email='" . $_POST['email'] . "' ,Adate='" . $_POST['adate'] . "',Ddate='" . $_POST['ddate'] . "',Members='" . $_POST['members'] . "',Country='" . $_POST['country'] . "' WHERE Id='" . $_POST['ID'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM room WHERE Id='" . $_POST['ID'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div> <div align="right" style="padding-bottom:5px;"><a href="get.php" class="link"><title='List'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>ID</label></td>
<td><input type="number" name="ID" class="txtField" value="<?php echo $row['ID']; ?>"></td>
</tr>
<tr>
<td><label>Name</label></td>
<td><input type="text" name="cosname" class="txtField" value="<?php echo $row['cosname']; ?>"></td>
</tr>
<td><label>Address</label></td>
<td><input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
	<td><label>Mobile</label></td>
<td><input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>"></td>
</tr>
<tr>
	<td><label>Arrival Date</label></td>
<td><input type="text" name="adate" class="txtField" value="<?php echo $row['adate']; ?>"></td>
</tr>
<tr>
	<td><label>Departure Date</label></td>
<td><input type="text" name="ddate" class="txtField" value="<?php echo $row['ddate']; ?>"></td>
</tr>
<tr>
<td><label>Members</label></td>
<td><input type="text" name="members" class="txtField" value="<?php echo $row['members']; ?>"></td>
</tr>
<td><label>Country</label></td>
<td><input type="text" name="country" class="txtField" value="<?php echo $row['country']; ?>"></td>
</tr>
<tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 