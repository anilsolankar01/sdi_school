<?php

$server = 'localhost';
$username = 'postgres';
$password = 'root';
$db_name = 'survey_application';

$dbconn = pg_connect("host=$server port=5432 dbname=$db_name user=$username password=$password");
if(!$dbconn) {
    echo "Error : Unable to open database\n";
 } else {
    echo "Opened database successfully\n";
 }

?>