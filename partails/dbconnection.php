<?php 
$server = "localhost";
$username = "root";
$password = " ";
$database = "practice";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "Success";
// }else{
    die ("Error". mysqli_connect_error());
}
