
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "school_data");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $a =  $_REQUEST['a'];
        $b = $_REQUEST['b'];
        $c =  $_REQUEST['c'];
        $d = $_REQUEST['d'];
        $e = $_REQUEST['e'];
        $f = $_REQUEST['f']; 
        $g = $_REQUEST['g'];
        $h = $_REQUEST['h'];
        $i = $_REQUEST['i'];
        $j = $_REQUEST['j'];
        $k = $_REQUEST['k'];
        $l = $_REQUEST['l'];
        $m = $_REQUEST['m'];
        $n = $_REQUEST['n'];
        $o = $_REQUEST['o'];
        $p = $_REQUEST['p'];
        $q = $_REQUEST['q'];
        $r = $_REQUEST['r'];
        $s = $_REQUEST['s'];
        $t = $_REQUEST['t'];
        $u = $_REQUEST['u'];
        $v = $_REQUEST['v'];
        $w = $_REQUEST['w'];
        $x = $_REQUEST['x'];
        $y = $_REQUEST['y'];
        $z = $_REQUEST['z'];
        $a1 =  $_REQUEST['a1'];
        $a2 =  $_REQUEST['a2'];
        $a3 =  $_REQUEST['a3'];
        $a4 =  $_REQUEST['a4'];
        $a5 =  $_REQUEST['a5'];
        $a6 =  $_REQUEST['a6'];
        $a7 =  $_REQUEST['a7'];











        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO `school_details` (`sc_id`, `sc_name`, `sc_email`, `sc_phone`, `sc_block_id`, `sc_clstr_id`, `sc_add`, `sc_dist`, `sc_state`, `sc_pincode`, `sc_mng`, `sc_govt`, `sc_pri_sc`, `sc_class`, `sc_max_cap`, `sc_boys`, `sc_girls`, `sc_thr`, `sc_thr_m`, `sc_thr_f`, `sc_toi`, `sc_toi_b`, `sc_toi_g`, `sc_ele`, `sc_water`, `sc_playg`, `sc_comp`, `sc_lib`, `sc_midm`, `sc_frebok`, `sc_fre_unif`, `sc_nr_stn`, `sc_nr_stn_dist`) VALUES ('$a', '$b', '$c', '$d', '$e', '$f',  '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x', '$y', '$z', '$a1', '$a2', '$a3', '$a4','$a5','$a6','$a7')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
         //   echo nl2br("\n$first_name\n $last_name\n "
         //       . "$gender\n $address\n $email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    