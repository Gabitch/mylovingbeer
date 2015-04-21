<?php
session_start();
include('src/shts/parts/bdd.html');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Encoding -->
        <meta charset="utf-8" />
        
        <!-- Title -->
        <title>Article</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="src/css/app.css" type="text/css" />
        
        <!-- Icons -->
        <link rel="stylesheet" href="src/css/icons/css/ionicons.min.css" type="text/css" />
        
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css' />
        
        <!-- Javascript -->
        <script src="src/js/jquery.js" type="text/javascript"></script>
		<script src="src/js/app.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include('src/shts/parts/header.html'); ?>
        <div class="page">

<?php

        if(isset($_SESSION['id'])) {
            if(isset($_POST['submit_comment'])) {
                $query_comment_input = "INSERT INTO comments (article_id, user_id, content, created_at)
                    VALUES ('".$_GET['id']."', '".$_SESSION['id']."', '".utf8_encode($_POST['content_comment'])."', NOW() );";
                $result_comment_input = mysqli_query($bdd, $query_comment_input) or die(mysqli_error($bdd));
            }
            
            if(isset($_POST['submit_mark'])) {
                $query_tracker_info = "SELECT * FROM tracker WHERE article_key = '".$_GET['id']."' AND user_key = '".$_SESSION['id']."' ";
                $result_tracker_info = mysqli_query($bdd, $query_tracker_info) or die(mysqli_error($bdd));
                $data_tracker_info = mysqli_fetch_array($result_tracker_info);
                $verification = 0;
                if(($_POST['submit_mark'] == 1 AND $data_tracker_info['mark'] == 0)) {
                    $query_mark_tracker_update = "UPDATE tracker SET mark = '1' WHERE user_key = '".$_SESSION['id']."' AND article_key = '".$_GET['id']."' ";
                    $result_mark_tracker_update = mysqli_query($bdd, $query_mark_tracker_update) or die(mysqli_error($bdd));
                    $verification = 1;
                }
                elseif($_POST['submit_mark'] == -1 AND $data_tracker_info['mark'] == 0) {
                    $query_mark_tracker_update = "UPDATE tracker SET mark = '-1' WHERE user_key = '".$_SESSION['id']."' AND article_key = '".$_GET['id']."' ";
                    $result_mark_tracker_update = mysqli_query($bdd, $query_mark_tracker_update) or die(mysqli_error($bdd));
                    $verification = 1;
                }
                elseif($_POST['submit_mark'] == 2 AND $data_tracker_info['mark'] == -1) {
                    $query_mark_tracker_update = "UPDATE tracker SET mark = '1' WHERE user_key = '".$_SESSION['id']."' AND article_key = '".$_GET['id']."' ";
                    $result_mark_tracker_update = mysqli_query($bdd, $query_mark_tracker_update) or die(mysqli_error($bdd));
                    $verification = 1;
                }
                elseif($_POST['submit_mark'] == -2 AND $data_tracker_info['mark'] == 1) {
                    $query_mark_tracker_update = "UPDATE tracker SET mark = '-1' WHERE user_key = '".$_SESSION['id']."' AND article_key = '".$_GET['id']."' ";
                    $result_mark_tracker_update = mysqli_query($bdd, $query_mark_tracker_update) or die(mysqli_error($bdd));
                    $verification = 1;
                }
                else {
                    $verification = 0;
                }
                
                if($verification == 1) {
                    $query_article_select = "SELECT * FROM articles WHERE id = '".$_GET['id']."' ";
                    $result_article_select = mysqli_query($bdd, $query_article_select) or die(mysqli_error($bdd));
                    $data_article_select = mysqli_fetch_array($result_article_select);
                    
                    $new_mark = $data_article_select['mark'] + $_POST['submit_mark'];
                    
                    $query_mark_article_update = "UPDATE articles SET mark = '".$new_mark."' WHERE id = '".$_GET['id']."' ";
                    $result_mark_article_update = mysqli_query($bdd, $query_mark_article_update) or die(mysqli_error($bdd));
                }
            }
        }
        
        if(isset($_GET['id'])) {
            $article_id = $_GET['id'];
            if(isset($_SESSION['id'])) {
                if($_SESSION['status'] == 'admin') {
                    $query_article = "SELECT * FROM articles WHERE id = '".$article_id."' ";
                }
                else {
                    $query_article = "SELECT * FROM articles WHERE id = '".$article_id."' AND published = '1' ";
                }
            }
            else {
                $query_article = "SELECT * FROM articles WHERE id = '".$article_id."' AND published = '1' ";
            }
            $result_article = mysqli_query($bdd, $query_article) or die(mysqli_error($bdd));
            if($data_article = mysqli_fetch_array($result_article)) {
                if(isset($_SESSION['id'])) {
                    $query_tracker = "SELECT * FROM tracker WHERE article_key = '".$article_id."' AND user_key = '".$_SESSION['id']."' ";
                    $result_tracker = mysqli_query($bdd, $query_tracker) or die(mysqli_error($bdd));
                    
                    if($data_tracker = mysqli_fetch_array($result_tracker) == null) {
                        $query_tracker_input = "INSERT INTO tracker (user_key, article_key, read_at)
                            VALUES ('".$_SESSION['id']."', '".$article_id."', NOW());";
                        $result_tracker_input = mysqli_query($bdd, $query_tracker_input) or die(mysqli_error($bdd));
                    }
                    else {
                        $query_tracker_update = "UPDATE tracker SET read_at = NOW() WHERE article_key = '".$article_id."' AND user_key = '".$_SESSION['id']."' ";
                        $result_tracker_update = mysqli_query($bdd, $query_tracker_update) or die(mysqli_error($bdd));
                        
                    }
                }
                
                include('src/shts/parts/article.html');
                
            }
            else {
                include('src/shts/parts/access_denied.html');
            }
        }
        else {
            include('src/shts/parts/access_denied.html');
        }
?>
   
        </div>
        <?php include('src/shts/parts/footer.html'); ?>
        
    </body>
</html>