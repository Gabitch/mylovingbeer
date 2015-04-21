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
        <title>CGU</title>
        
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
        
            <?php include('src/shts/parts/cgu.html'); ?>

        </div>
        <?php include('src/shts/parts/footer.html'); ?>
    </body>
</html>