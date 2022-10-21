<?php  
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "school_data");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('school_ID', 'school Name', 'email', 'phone', 'block id', 'cluster id','address','district','state','state','pincode','management','government','primary school','class','max capacity','boys','girls','teacher male','teacher female','toilet','toilet boys','toilet girls','electricity','water','playground','computer','library','mid-day meal','freebooks','free uniforms','nearest stand','stand distance'));  
      $query = "SELECT * from school_details ";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?> 