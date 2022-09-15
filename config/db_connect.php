<?php 

// connect to database
$conn = mysqli_connect('localhost', 'ilyas', 'test1234', 'ilyas pizza');

// check connection
if(!$conn){
    echo 'Connection error: ' .  mysqli_connect_error();
}

?>