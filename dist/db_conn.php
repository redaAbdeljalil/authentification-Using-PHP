<?php
$conn= mysqli_connect('localhost','root','','signloginphp');
if(!$conn){
    echo ("Error in DataBase: ".mysqli_connect_error());
}
?>