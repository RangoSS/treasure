<?php
// including the database connection file
include_once("db.php");

if(isset($_POST['update']))
{	

	$user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['first_name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['last_name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$name = mysqli_real_escape_string($mysqli, $_POST['password']);
	$age = mysqli_real_escape_string($mysqli, $_POST['address1']);
	$email = mysqli_real_escape_string($mysqli, $_POST['address2']);	
	
	// checking empty fields
	if(empty($first_name) || empty($last_name) || empty($email) || empty(password) || empty(address1) || empty(address2)) {	
			
		if(empty($first_name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($last_name)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
       if(empty($password)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
         if(empty($address1)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
         if(empty($address2)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}				
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE user_info SET first_name='$fist_name',last_name='$last_name',email='$email',password='$password',address1='$address1',address2='$address2' WHERE user_id=$user_id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$user_id = $_GET['user_id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM user_info WHERE user_id=$user_id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['first name'];
	$age = $res['last_name'];
	$email = $res['email'];
	$name = $res['password'];
	$age = $res['address1'];
	$email = $res['address2'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>first name</td>
				<td><input type="text" name="first_namename" value="<?php echo $first_namename;?>"></td>
			</tr>
			<tr> 
				<td>Last name</td>
				<td><input type="text" name="last_name" value="<?php echo $last_name;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $password;?>"></td>
			</tr>
			<tr> 
				<td>address1</td>
				<td><input type="text" name="address1" value="<?php echo $address1;?>"></td>
			</tr>
			<tr> 
				<td>address2</td>
				<td><input type="text" name="address2" value="<?php echo $address2;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="user_id" value=<?php echo $_GET['user_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
