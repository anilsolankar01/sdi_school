<?php

$con = mysqli_connect('localhost','root','','temp_staff') or die('Unable To connect');
$a=$_POST['a'];
$result = mysqli_query($con,"INSERT INTO test_comp values ('$a' , 'asdd') ");


?>
<?php
echo 'h'
?>