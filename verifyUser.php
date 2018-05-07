<?php
session_start();

include 'connect.php';
$connect = getDBConnection();

//Checking credentials in database
print_r($_POST);

//redirecting user to quiz if credentials are valid
if(isset($user['username'])){

    
} else {

    
}
?>