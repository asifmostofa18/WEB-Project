<?php
	session_start();

	if(isset($_POST['Submit']))
	{
		$allOk = true;

		if($_POST['name'] === "")
		{
			echo "UserName field is empty! \r\n";
			$allOk = false;
		}
		elseif($_POST['Password'] === "")
		{
			echo "Password field is empty! \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST["name"])<2)
		{
			echo "User Name must contain at least two (2) characters \r\n";
			$allOk = false;
		}
		elseif(strlen($_POST['Password'])<8)
		{
			echo "Password must not be less than eight (8) characters \r\n";
			$allOk = false;
		}

		if($allOk)
		{
			if(isset($_SESSION['userName']) && isset($_SESSION['password']) && $_POST['name'] === $_SESSION['userName'] && $_POST['Password'] === $_SESSION['password'])
			{
				if(isset($_SESSION['flag1']))
				{
                    $_SESSION['flag']= true;
					header('location:../view/home.php');
				}
				else
				{
					echo "Please register first!";
				}
			}
			else
			{
				echo "Please check username and password";
			}
		}
	} 
?>