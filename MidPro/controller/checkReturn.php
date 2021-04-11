<?php
if(isset($_POST['select'])){
$selected_item = $_POST['select'];
echo "Dear Sir you your category is :" .$selected_item;
echo "<br>";

}

if(isset($_POST['submit'])){

    $name 		= $_POST['myname'];


    if($name == ""){
        echo "null submission";
    }else{
        echo "We will review your request soon";
    }

}else{
    echo "invalid request";
}


?>

