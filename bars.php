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
        <title>Bars</title>
        
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
            <div id="news">
                <div class="title">
                    <h1>NEWS</h1>
                </div>
<?php
                $query = "SELECT * FROM articles WHERE type = 'bar' AND published = '1' ORDER BY id DESC LIMIT 25";
                $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
                while($data = mysqli_fetch_array($result)) {
                    include('src/shts/parts/news_tests.html');
                }
?>
            </div>
        </div>
        
        <?php include('src/shts/parts/footer.html'); ?>

    </body>
</html>