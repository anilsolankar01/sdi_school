<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school_data";


    if(!isset($_GET['id'])){
        // redirect to show page
        die('id not provided');
    }
    
    $id =  $_GET['id'];

    $conn = new mysqli($servername, $username, $password, $dbname);
    $result = mysqli_query($conn,"SELECT * FROM school_details where sc_id ='$id' ");
    
   // $sql = "SELECT * FROM `product` where id = $id";
   // $result = $con->query($sql);
    if($result->num_rows != 1){
        // redirect to show page
        die('id is not in db');
    }
    $data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 col-sm-12">
                <form action="./smc_objection_script.php" method="GET">
                <h3>Raise objection</h3>
                    <div class="form-group">
                        <label for="name">school Name</label>
                        <input type="text" class="form-control"  disabled name="scname" id="scname" value="<?= $data['sc_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="name">school ID</label>
                        <input type="text" class="form-control"   name="scid" id="scid" value="<?= $data['sc_id']?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Objection in details of </label>
                        <select id='objcat' name="objcat" class="form-control">
                                    <option value='1'>school details</option>
                                    <option value='2'>Infrastructre</option>
                                    <option value='2'>facilities</option>
                                </select>  
                       
                    </div>
                    <div class="form-group">
                                <label for="status" >write in brief</label>
                                <textarea class="form-control"  name="objdesc" id="description" cols="30" rows="10"></textarea>            
                    </div>
                    
                    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

