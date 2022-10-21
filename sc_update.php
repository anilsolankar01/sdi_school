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
                <form action="./sc_update_script.php?id=<?=$id ?>" method="POST">
                <h3>Update Status</h3>
                    <div class="form-group">
                        <label for="name">school Name</label>
                        <input type="text" class="form-control"  disabled name="pname" id="name" value="<?= $data['sc_name']?>">
                    </div>
                    <div class="form-group">
                        <label for="name">school Name</label>
                        <input type="text" class="form-control"  disabled name="pname" id="name" value="<?= $data['sc_id']?>">
                    </div>
                    <div class="form-group">
                        <label for="price">cluster remark</label>
                        <textarea class="form-control" disabled name="pdescription" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                                <label for="status" >cluster Status</label>
                                <select id='status' name="status" class="form-control">
                                    <option value='1'>approved </option>
                                    <option value='2'>not approved</option>
                                </select>              
                    </div>
                    
                    <input type="submit" name="editForm" value="submit" class="btn btn-primary btn-block">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

