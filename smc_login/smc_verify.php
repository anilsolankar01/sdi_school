<?php
			$conn = mysqli_connect('localhost','root','','school_data') or die('Unable To connect');
			
			 
			  session_start();
			  
			  $us=$_POST['username'];
			  $ps=$_POST['password'];
			 
			  
			  $result=$conn->query("select * from smc_users where user='$us' and password='$ps'");
			  $row  = mysqli_fetch_array($result);
			  if($result->num_rows>0)
			  {
				  $_SESSION["username"]=$us;
				  $_SESSION["password"]=$ps;
				  $_SESSION["sc_id"]=$row;
				  ?>
				  <script type="text/javascript">
				  alert("login successful");
				  location.href="./smc_home.php?id=<?php echo $row['sc_id']?>";
				  </script>
				  <?php
			  }
			  else
			  {
				 ?>
				 <script type="text/javascript">
				  alert("invalid username and password");
				  location.href="./index.php";
				  </script>
				  <?php
			  }
    
              
?>
<html>
<head>
    <style>
        body{
                    background-image: url("images/main.jpg");
                    background-repeat: no-repeat;
                    background-size: cover;
                    font-family: Roboto;          
            }
    </style>
</head>
<body>   
 aaaa
</body>
</html>