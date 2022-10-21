<?php
$con = mysqli_connect('localhost','root','','school_data') or die('Unable To connect');

$e=$_POST['e'];
$f=$_POST['f'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$sql="INSERT INTO `staff_users` VALUES ( '$e' , '$f' , '$a' , '$b' , '$c' , 0 ) ";
$result = mysqli_query($con,$sql);
if($result)
{
    //echo "new user registerd";
    header("Location:cluster_incharge.php");
}
?>