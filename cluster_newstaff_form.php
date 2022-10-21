<?php
session_start();

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
                text-align: center;
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

</style>
<head>
<body>
	<div class="wrap">
		
		<div class="nav">
            <div class="navbar">
                    <a href="#home">Home</a>
                    <a href="#news">News</a>
                    <a href="#contact">Contact</a>
                    <div class="topnav-right " style="float: right">
                    <a href="#contact"><?php echo $_SESSION["name"] ?></a>
                    <a href="staff_login.php">Logout</a>
                  </div>
              </div>
        </div>
        <div class="banner"> <h2>welcome , <?php echo $_SESSION["name"] ?> <?php echo $_SESSION["userid"]; ?>... please fill the details  </h2></div>
		<div class="">
			<div class="left">
                <div>
                    <ul>
                        <li><a  href="cluster_incharge.php">List</a></li>
                        <li><a class="active" href="#">add new school</a></li> 
                        <li><a href="#news">Profile</a></li>
                        
                        
                      </ul>
                </div>

            </div>
			<div class="right" >  
                <div >
                    <form action="cluster_newstaff_script.php" method="post">
                      
                      <h3>NEW STAFF REGISTRATION</h3>
                      <hr>
                            <div class="ip1">
                              <label for="fname">School ID</label>
                              <input style="color: red;" type="text" id="fname"  name="a" placeholder="">
                          
                              <label for="lname">cluster ID</label>
                              <input type="text" id="lname" value="<?php echo $_SESSION["userid"]; ?>"  name="b" placeholder="">
                            </div>
                            
                            <div class="ip1">
                              <label style="margin-right: 27px;" for="lname">Email</label>
                              <input type="text" id="lname"  name="c" placeholder="">
        
                              <label style="margin-right: 46px;" for="lname">phone</label>
                              <input type="text" id="lname"  name="d" placeholder="">
                            </div>
                        
                            <div class="ip1">
                                <label style="margin-right: 7px;" for="lname">username</label>
                                <input style="color: red;" type="text" id="lname"   name="e" placeholder="">
                                <label style="margin-right: 22px;" for="lname">password</label>
                                <input style="color: red;" type="text" id="lname"   name="f" placeholder="">
                            </div>
                            
                          
                          
                            
                          
                 <!--
                    <label for="country">Country</label>
                      <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                      </select>
                  
                      <label for="subject">Subject</label>
                      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                 -->     
                  
                      <input type="submit" value="Submit">
                  
                    </form>
                </div>
                
			
		</div>
		
	</div>
</div>
</body>
</html>