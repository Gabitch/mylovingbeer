<?php
session_start();
include('src/shts/parts/bdd.html');
if(empty($_SESSION) OR $_SESSION['status'] != 'admin') {
    header('Location: index.php');
}

if(isset($_POST)) {
    $id = $_POST['id'];
    if($_POST['choose'] == 'published') {
        $published = 1;
        $blocked = 0;
    }
    else {
        $published = 0;
        $blocked = 1;
    }
    
    $query = "UPDATE articles SET published = '".$published."', blocked = '".$blocked."' WHERE id = '".$id."' ";
    $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
}

header('Location: admin.php?p=waiting_articles');
?>