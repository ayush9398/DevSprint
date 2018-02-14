<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'lol');
define('DB_NAME', 'dtu');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




$name = $_FILES['file']['name'];
//$size = $_FILES['file']['size'];
//$type = $_FILES['file']['type'];

$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
    if(!empty($name)) {

        $location = 'files/';

        if(move_uploaded_file($tmp_name, $location.$name)) {
            echo "Uploaded!";
        }

    } else{
        echo 'Please choose a file';
    }
}


?>
