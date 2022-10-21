<?php  
 $connect = mysqli_connect("localhost", "root", "", "school_data");  
 $query ="SELECT * FROM school_details";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>school list</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">schools in sangli</h3>  
                <br />  
                <form method="post" action="export_home.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>
                <br></br>
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>school id</td>  
                                    <td>school name</td>  
                                    <td>school phone </td>  
                                    <td>Library</td>  
                                    <td>computer</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["sc_id"].'</td>  
                                    <td>'.$row["sc_name"].'</td>  
                                    <td>'.$row["sc_phone"].'</td>  
                                    <td>'.$row["sc_lib"].'</td>  
                                    <td>'.$row["sc_comp"].'</td>  
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>