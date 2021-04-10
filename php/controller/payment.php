<?php
if(isset($_POST['select'])){
$selected_item = $_POST['select'];
echo "Dear Sir you can able to payment :" .$selected_item;
echo"<br>";
echo "Thanks for using payment with: " .$selected_item;
}
?>