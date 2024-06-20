<?php
session_start();

if(!empty($_SESSION['id'])){
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'],$_GET['id']);
    if(empty($_SESSION['price'])){
        $_SESSION['price'] = array();
    }
    array_push($_SESSION['price'],$_GET['price']);
    header('Location: index.php');

}else{
    header('Location: login.php');
}




?>