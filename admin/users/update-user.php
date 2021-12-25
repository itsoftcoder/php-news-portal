<?php
include 'user.php';


if(isset($_REQUEST['save'])){
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $uname = $_REQUEST['username'];
    $email = $_REQUEST['email'];

    if($user->update($id,$name,$uname,$email)){
        header('location: list-user.php');

    }else{
        echo "something went to wrong!";
    }

}else{
    header("location: edit-user.php?id=$id");
}