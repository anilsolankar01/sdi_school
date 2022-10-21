<?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "school_data";
      
      session_start();
      

      if(!$_SESSION["name"]) 
      {
             echo "<h1>Please login first .</h1>";
      ?>
      <a href="login.php">click here to login</a>
      <?php
      }
         



      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $a=$_SESSION["userid"];
      $sql = "SELECT * FROM `cluster_users` WHERE `block_id`='$a' ";
      $result = $conn->query($sql);
/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["sc_id"]."<br>";
    }
} else {
    echo "0 results";
}
*/
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>my webpage</title>
<style>
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 29px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}



*{
	margin:0;
}

.header{
	height:150px;
	background:rgb(247, 10, 10);
}
.nav{
	height:50px;
	background:#000;
    position: fixed;
}
.container{
	background:#ccc;
}
.left{
	width:25%;
	height:200px;
	float:left;
	background:rgb(33, 226, 20);
    margin-top: -41px
    
}
.right{
	width:70%;
	height:200px;
	float:left;
    margin-left: 2%;
    margin-top: 2%;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 15px  16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}


        
            input[type=text], select, textarea {
              
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
            }

            /* Style the submit button with a specific background color etc */
            input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            /* When moving the mouse over the submit button, add a darker green color */
            input[type=submit]:hover {
            background-color: #45a049;
            }

            /* Add a background color and some padding around the form */
            .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            }

            .banner{
                margin-top: 4%;
                
            }
            
            .ip1  input[type=text] {
              width: 30%;
            }
            .ip2  input[type=text] {
              width: 15%;
            }
            .ip1 label{
              padding-left: 3%;
              padding-right: 3%;
            }
            .ip2 label{
              padding-left: 3%;
              padding-right: 3%;
            }



            #table1 {
              font-family: Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            #table1 td, #table1 th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            #table1 tr:nth-child(even){background-color: #f2f2f2;}

            #table1 tr:hover {background-color: #ddd;}

            #table1 th {
              padding-top: 12px;
              padding-bottom: 12px;
              text-align: left;
              background-color: #04AA6D;
              color: white;
            }

            .button {
                display: inline-block;
                border-radius: 8px;
                
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 15px;
                padding: 10px;
                width: 80px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 0px;
              }

              .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
              }

              .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
              }

              .button:hover span {
                padding-right: 25px;
              }

              .button:hover span:after {
                opacity: 1;
                right: 0;
              }

</style>
<head>
<body>
	<div class="wrap">
		
		<div class="nav">
            <div class="navbar">
                <a href="#home">Home1</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <div class="topnav-right " style="float: right">
                    <a href="#">Profile</a>
                    <a href="logout.php">Logout</a>
                  </div>
              </div>
        </div>
        
        <div class="banner" style="margin-left: 45px;    margin-left: 420px;" >
         <h2>welcome , <?php echo $_SESSION["name"]; ?> ... your Block code is : <?php echo $_SESSION["userid"]; ?> </h2>
        
        </div>
		<div class="">
			<div class="left">
                <div>
                    <ul>
                        <li><a class="active" href="#home">Home2</a></li> 
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#about">About</a></li>
                      </ul>
                </div>

            </div>
			<div class="right" >  
      <div >
                    <h2></h2>
                    <div>
                      <div class=" mt-5">
                        <div class="row">
                          <div class="col-xl-12 col-lg-12 col-md-12 col-12 m-auto">
                            <table class="table table-bordered table-hovered table-striped" id="table1">
                              <thead>
                                
                                <th> #</th>
                                <th> school id </th>
                                <th> Cluster ID  </th>
                                <th> cluster incharge name </th>
                                
                                <th> B status  </th>
                                <th> B remark </th>
                                <th> action </th>
                              </thead>
                    
                              <tbody>
                    
                              <?php
                                  // LOOP TILL END OF DATA
                                   while($rows=$result->fetch_assoc())
                                   {
                              ?>
                                    <tr>
                                        <!-- FETCHING DATA FROM EACH
                                            ROW OF EVERY COLUMN -->
                                        <td></td>
                                        <td><?php echo $rows['sc_id']?></td>
                                        <td><?php echo $rows['cluster_id']?></td>
                                        <td><?php echo $rows['username']?></td>
                                       
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <button class="button" style="vertical-align:middle; background-color: #008CBA;"><span>View </span></button>
                                        <button class="button" style="vertical-align:middle; background-color: forestgreen;"><span>aprrove </span></button>
                                        </td>
                                        
                                    </tr>
                                    <?php
                                    }
                                    ?>	
                              </tbody>	
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>
                
                
			
		</div>
		
	</div>
</div>
</body>
</html>