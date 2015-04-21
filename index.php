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
        <title>My Loving Beer</title>
        
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
            <div id="index">
                <div id="articles">

<?php
                    $query = "SELECT * FROM articles WHERE published = '1' ORDER BY created_at DESC LIMIT 100";
                    $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
                    while($data = mysqli_fetch_array($result)) {
                        include('src/shts/parts/index.html');
                    }
?>

                </div>
                
                <div id="addons">
                    <a href="http://www.facebook.com" target="_blank">
                        <img src="src/img/parts/facebook.jpg" class="button" id="facebook" alt="FACEBOOK">
                    </a>
                    <a href="http://www.twitter.com" target="_blank">
                        <img src="src/img/parts/twitter.jpg" class="button" id="twitter" alt="TWITTER">
                    </a>
                    <a href="http://www.youtube.com" target="_blank">
                        <img src="src/img/parts/youtube.jpg" class="button" id="youtube" alt="YOUTUBE">
                    </a>
                    <a href="http://plus.google.com/" target="_blank">
                        <img src="src/img/parts/google.jpg" class="button" id="google" alt="GOOGLE+">
                    </a>
                </div>
                
                <div class="clear"></div>
            </div>
        </div>
        <?php include('src/shts/parts/footer.html'); ?>
    </body>
</html>