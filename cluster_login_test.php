<?php
	
    session_start();
      
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','school_data') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM cluster_users WHERE username='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["name"] = $row['username'];
            $_SESSION["userid"] = $row['cluster_id'];
            if(isset($_SESSION["name"])) {
                header("Location:cluster_incharge.php");
                }
        } else {
         echo "failed";
        }
    }
    
?>