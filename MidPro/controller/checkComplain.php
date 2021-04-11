<?php


	
	if(isset($_POST['submit'])){

		$name 		= $_POST['myname'];
	

		if($name == ""){
			echo "null submission";
		}else{
			echo "Sir!!!! Your feeback will be taken care";
		}

	}else{
		echo "invalid request";
	}
?>