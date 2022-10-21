<?php
  
     $con = mysqli_connect('localhost','root','','school_data') or die('Unable To connect');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $d = $_POST['status']; 

        $sql = "UPDATE `school_details` SET `sc_clstr_status`=$d WHERE `sc_id`='$id'";

        if($con->query($sql) === TRUE){
            header('Location: http://localhost/try1/notfill/cluster_incharge.php');
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "invalid";
    }
?>

