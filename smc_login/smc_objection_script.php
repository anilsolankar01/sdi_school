<?php
  
     $con = mysqli_connect('localhost','root','','school_data') or die('Unable To connect');

    if(isset($_GET['scid'])){
        $id = $_GET['scid'];
        $a=$_GET['scname'];
        $c=$_GET['objdesc'];
        $b = $_GET['objcat']; 

        $sql = "INSERT INTO `scm_obj`(`sc_id`, `sc_name`, `obj_cat`, `obj_desc`) VALUES ('$id','$a',$b,'$c')";

        if($con->query($sql) === TRUE){
            header('Location: http://localhost/try1/notfill/smc_login/smc_home.php?id='.$id);
        }else{
            echo "something went wrong";
        }
        
    }else{
        echo "invalid";
    }
?>

