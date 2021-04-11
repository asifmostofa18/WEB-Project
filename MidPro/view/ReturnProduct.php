<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Return Product</title>
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
			<td colspan="2">
                <h1>Dear Sir you haveto submit which one would you like to return and the reason behind it</h1>
				<!--<form method="post" action="checkReturn.php">-->
				<!--<form method="post" action="../controller/checkReqmed.php">-->

				<form method="post" action="../controller/checkReturn.php">

                    <fieldset align="center">
                    <legend>Category</legend>
            
                        <select name="select">
                                <option value="Tablet" selected>Tablet</option>
                                <option value="Syrup">Syrup</option>
                                <option value="Drop">Drop</option>
                                <option value="Others">Others</option>
                                
                            </select>
            
              
                <br>
                <legend>Reason behind return</legend>
			   <input type="text" name="myname" value=""> <br>
			<hr>
                <input type="submit" name="submit" value="Submit">
                
            </fieldset>
			</td>
		</tr>
		<tr height = "50px">
			<td colspan="3">
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