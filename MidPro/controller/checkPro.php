<?php

	if(isset($_POST['signup'])){

		$username = $_POST['username'];
		$category = $_POST['category'];
		#$repass = $_POST['repass'];
		#$email = $_POST['email'];

		if($username == "" || $category == ""){
			echo "null submission...";
		}else{

			

				$userValidationInfo = [
										 'user' => $username,
										 'cat' => $category,
										 #'rPass' => $repass,
										 #'email' => $email,
				      				  ];

				$allData = json_encode($userValidationInfo);
				$userData = fopen("../model/userValidationInfo.json", "w");
				fwrite($userData, $allData);
				fclose($userData);
				header('location: ../view/confirmProduct.html');
			
		}

	}
?>