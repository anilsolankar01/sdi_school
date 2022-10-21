<?php
session_start();
$con = mysqli_connect('localhost','root','','school_data') or die('Unable To connect');
$z=$_GET['id'];
$result = mysqli_query($con,"SELECT * FROM school_details WHERE sc_id='$z' ");
$row  = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>SMC homepage</title>
<style>
.navbar {
  overflow: hidden;
  background-color: indigo;
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
                    <a href="#contact"><?php //echo $_SESSION["name"] ?></a>
                    <a href="./logout.php">Logout</a>
                  </div>
              </div>
        </div>
      <div class="banner"> <h2>welcome to SMC  <?php // echo $_SESSION["name"] ?> </h2></div>
		<div class="">
			<div class="left">
                <div>
                    <ul>
                        <li><a class="active" href="#home">Details</a></li>
                        <li><a href="survey/index.html">Photos</a></li>
                        <li><a href="./smc_objection.php?id=<?php echo $row['sc_id']?>">raise objection</a></li>
                        
                      </ul>
                </div>

            </div>
			<div class="right" >  
                <div >
                    <form action="school_data_insert.php" method="post">
                      
                      <h3>basic school details</h3>
                      <hr>
                            <div class="ip1">
                              <label for="fname">School ID</label>
                              <input style="color: red;" type="text" id="fname"  value="<?php echo $row["sc_id"] ?>" disabled name="a" placeholder="">
                          
                              <label for="lname">School Name</label>
                              <input type="text" id="lname" value="<?php echo $row["sc_name"] ?>"  name="b" placeholder="">
                            </div>
                            
                            <div class="ip1">
                              <label style="margin-right: 27px;" for="lname">Email</label>
                              <input type="text" id="lname" value="<?php echo $row["sc_email"] ?>" name="c" placeholder="">
        
                              <label style="margin-right: 46px;" for="lname">phone</label>
                              <input type="text" id="lname" value="<?php echo $row["sc_phone"] ?>" name="d" placeholder="">
                            </div>
                        
                          <div class="ip1">
                            <label style="margin-right: 7px;" for="lname">block ID</label>
                            <input style="color: red;" type="text" id="lname" value="<?php echo $row["sc_block_id"] ?>" disabled name="e" placeholder="">
                            <label style="margin-right: 22px;" for="lname">cluster ID</label>
                            <input style="color: red;" type="text" id="lname" value="<?php echo $row["sc_clstr_id"] ?>" disabled name="f" placeholder="">
                          </div>
                            
                          <div class="ip1">
                            <label style="margin-right: 15px;" for="lname">address </label>
                            <input type="text" id="lname" value="<?php echo $row["sc_add"] ?>" name="g" placeholder="">
                            <label style="margin-right: 40px;"for="lname">district</label>
                            <input type="text" id="lname" value="<?php echo $row["sc_dist"] ?>" name="h" placeholder="">
                          
                          </div>
                            
                          <div class="ip1">
                            <label style="margin-right: 34px;"for="lname">state</label>
                            <input type="text" id="lname" value="<?php echo $row["sc_state"] ?>" name="i" placeholder="">
                            <label style="margin-right: 35px;"for="lname">pincode</label>
                            <input type="text" id="lname" value="<?php echo $row["sc_pincode"] ?>" name="j" placeholder="">
                          </div>

                   <h3>school profile</h3>
                   <hr>
                          <div class="ip1">
                            <label for="fname">School Management</label>
                            <input type="text" id="" value="<?php echo $row["sc_mng"] ?>" name="k" placeholder="">
                        
                            <label for="lname">if, govt. state/central</label>
                            <input type="text" id="" value="<?php echo $row["sc_govt"] ?>" name="l" placeholder="">
                          </div>

                          <div class="ip1">
                            <label style="margin-right: 10px;"for="fname">primary/secondary</label>
                            <input type="text" id="" value="<?php echo $row["sc_pri_sc"] ?>" name="m" placeholder="">
                        
                            <label style="margin-right: 60px;"for="lname">classrooms</label>
                            <input style="width: 30% ;" value="<?php echo $row["sc_class"] ?>" type="text" id="" name="n" placeholder="">
                          </div>

                          <div class="ip2">
                            <label for="fname">Max capacity</label>
                            <input type="text" id="" value="<?php echo $row["sc_max_cap"] ?>" name="o" placeholder="">
                        
                            <label for="lname">boys</label>
                            <input type="text" id="" value="<?php echo $row["sc_boys"] ?>" name="p" placeholder="">

                            <label for="fname">girls</label>
                            <input type="text" id="" value="<?php echo $row["sc_girls"] ?>" name="q" placeholder="">
                        
                          </div>
                          <div class="ip2">
                            
                            <label style="margin-right: 35px;" for="lname">teachers</label>
                            <input type="text" id="" value="<?php echo $row["sc_thr"] ?>" name="r" placeholder="">
                          
                            <label for="fname">male</label>
                            <input type="text" id="" value="<?php echo $row["sc_thr_m"] ?>" name="s" placeholder="">
                        
                            <label for="lname">female</label>
                            <input type="text" id="" value="<?php echo $row["sc_thr_f"] ?>" name="t" placeholder="">
                          
                          </div>
                   <h3>Facilites details</h3>
                   <hr>
                          <div class="ip2">                                   
                                <label style="margin-right: 30px ;" for="lname">Toilet</label>
                                <input type="text" id="" value="<?php echo $row["sc_toi"] ?>" name="u" placeholder="">
                              
                                <label style="margin-right:5px;" for="fname">male</label>
                                <input type="text" id="" value="<?php echo $row["sc_toi_b"] ?>" name="v" placeholder="">
                            
                                <label style="margin-right:30px ;" for="lname">female</label>
                                <input type="text" id="" value="<?php echo $row["sc_toi_g"] ?>" name="w" placeholder="">
                          
                          </div>
                          <div class="ip2">          
                                <label for="lname">Electricity</label>
                                <input type="text" id="" value="<?php echo $row["sc_ele"] ?>" name="x" placeholder="">
                              
                                <label for="fname">water</label>
                                <input type="text" id="" value="<?php echo $row["sc_water"] ?>" name="y" placeholder="">
                            
                                <label for="lname">playground</label>
                                <input type="text" id="" value="<?php echo $row["sc_playg"] ?>" name="z" placeholder="">
                              
                          </div>
                          <div class="ip1">
                                <label for="fname">computer</label>
                                <input type="text" value="<?php echo $row["sc_comp"] ?>" id="" name="a1" placeholder="">
                            
                                <label for="lname">library</label>
                                <input type="text" id="" value="<?php echo $row["sc_lib"] ?>" name="a2" placeholder="">
                          </div>
                          <div class="ip2">
                                    
                                <label for="lname">mid-day meal</label>
                                <input type="text" id="" value="<?php echo $row["sc_midm"] ?>" name="a3" placeholder="">
                              
                                <label for="fname">free books</label>
                                <input type="text" id="" value="<?php echo $row["sc_frebok"] ?>" name="a4" placeholder="">
                            
                                <label for="lname">free uniform</label>
                                <input type="text" id="" value="<?php echo $row["sc_fre_unif"] ?>" name="a5" placeholder="">
                          
                          </div>
                          <div class="ip1">
                            <label for="fname">nearest station </label>
                            <input type="text" id="" value="<?php echo $row["sc_nr_stn"] ?>" name="a6" placeholder="">
                        
                            <label for="lname">distance in kms</label>
                            <input type="text" id="" value="<?php echo $row["sc_nr_stn_dist"] ?>" name="a7" placeholder="">
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