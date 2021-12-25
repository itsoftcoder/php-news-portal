<?php
include 'user.php';


if(isset($_REQUEST['save'])){
    
    $name = $_REQUEST['name'];
    $uname = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $reg_date = $_REQUEST['reg_date'];


    if($user->create($name,$uname,$email,$reg_date)){
        header('location: list-user.php');

    }else{
        echo "something went to wrong!";
    }

}else{
    header('location: create-user.php');
}