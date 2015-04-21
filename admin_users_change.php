<?php
session_start();
include('src/shts/parts/bdd.html');
if(empty($_SESSION) OR $_SESSION['status'] != 'admin') {
    header('Location: index.php');
}

if(isset($_POST)) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    if(isset($_POST['write_block'])) {
        $write_block = 1;
    }
    else {
        $write_block = 0;
    }
    if(isset($_POST['comment_block'])) {
        $comment_block = 1;
    }
    else {
        $comment_block = 0;
    }
    
    $query = "UPDATE users SET status = '".$status."', write_block = '".$write_block."', comment_block = '".$comment_block."' WHERE id = '".$id."' ";
    $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
}

header('Location: admin.php?p=users');
?>