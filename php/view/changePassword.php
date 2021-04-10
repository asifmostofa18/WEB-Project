<?php
	session_start();
	if (isset($_POST['cPassword']) && $_POST['cPassword'] !== $_SESSION['password']) { echo "Your entered Current Password is not correct! ";}
	elseif (isset($_POST['nPassword']) && $_POST['cPassword'] === $_POST['nPassword']) { echo "Your entered the old password as new password! ";}
	elseif (isset($_POST['rnPassword']) && $_POST['rnPassword'] !== $_POST['nPassword']) { echo "Please enter password carefully!";} 
	elseif (isset($_POST['rnPassword']) && $_POST['rnPassword'] === $_POST['nPassword']) { $_SESSION['password'] = $_POST['nPassword']; echo "Password Chnaged!"; }
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
	<table border="1" width="100%" cellspacing="0">
		<tr>
			<td align="right" colspan="3">
			<?php include 'head.php';?>

			</td>
		</tr>
		<tr height = "200px">
			<td width="33%">
				<h4> &nbsp &nbsp &nbsp Account </h4>
				<hr width="90%">
				<ul>
				<?php include 'item.php';?>

				</ul>
			</td>
			<td colspan="2" align="center">
				<br>
				<form method="POST" action="">
				<fieldset style="width: 50%">
					<legend> <b> CHANGE PASSWORD </b></legend>
						<table>
							<tr>
								<td> Current Password: </td>
								<td>
									<input type="password" name="cPassword">
								</td>
							</tr>

							<tr>
								<td>
									New Password:
								</td>
								<td>
									<input type="password" name="nPassword">
								</td>
							</tr>

							<tr>
								<td>
									Retype New Password:
								</td>
								<td>
									<input type="password" name="rnPassword" >
								</td>
							</tr>
						</table>
				</fieldset>
					<hr width="80%">
					<input type="submit" name="Submit" value="Submit">
				</fieldset>
				</form>
				<br> 
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
				<center> Sister Concern of ABC Pharmacy</center>
			</td>
		</tr>
	</table>
</body>
</html>