<?php 

$con= new mysqli('localhost','root','','hash');

if(!$con)
{
    die(mysqli_error($con));
}

?>