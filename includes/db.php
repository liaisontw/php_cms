<?php ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "#Wp.Local_0";
$db['db_name'] = "cms";

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
//$query = "SET NAMES utf8";
//mysqli_query($connection,$query);


//$connection = mysqli_connect("localhost", "root","#Wp.Local_0","cms");
// if($connection) {
//     echo "We are connected";
// }else{
//     echo "We are not connected";
// }








?>