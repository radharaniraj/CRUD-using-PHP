<?php
$db = new Mysqli;
$db->connect('localhost','root','','CRUD');
if(!$db){
    echo"success";
}
?>