<?php
	session_start();
	if(isset($_SESSION['flag1']))
	{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right">
			<?php include 'head.php';?>

			</td>
		</tr>
		<tr height = "200px">
			<td colspan="2" align="center">
				<form method="POST" action="../controller/checkLogin.php">
					<fieldset style="width: 25%">
						<legend> <b>Login</b></legend>
							<table>
							<tr>
								<td>UserName: </td>
								<td> <input type="text" name="name"/> 
								<br/> </td>
							</tr>

							<tr>
								<td> Password: </td>
								<td> <input type="password" name="Password"/> <br/></td>
							</tr>
						</table>
						<hr>
						<input type="checkbox" name="checkbox"> Remember Me
						<br> <br>
						<input type="submit" name="Submit" value="Submit"> <a href="forgotPassword.php"> Forgot Password? </a>
					</fieldset>
				</form>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="2">
			<?php include 'foot.php';?>

			</td>
		</tr>
	</table>
</body>
</html>

<?php

	}else{
		echo "Please do Registration before login in";
		header('location: registration.php');
	}

?>
