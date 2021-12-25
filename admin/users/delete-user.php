<?php
include 'user.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if($user->delete($id)){
        header("location: list-user.php");
    }
}else{
    header('location: list-user.php');
}

?>