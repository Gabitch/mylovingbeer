<?php
session_start();
include('src/shts/parts/bdd.html');
if(empty($_SESSION) OR $_SESSION['status'] != 'admin') {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Encoding -->
        <meta charset="utf-8" />
        
        <!-- Title -->
        <title>Admin MLB</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="src/css/app.css" type="text/css" />
        <link rel="stylesheet" href="src/css/admin.css" type="text/css" />
        
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
            <div id="admin">
                <div id="navbar">
                    <ul>
                        <li><a href="admin.php?p=users">UTILISATEURS</a></li>
                        <li><a href="admin.php?p=articles">ARTICLES</a></li>
                        <li><a href="admin.php?p=waiting_articles">ARTICLES EN ATTENTE</a></li>
                    </ul>
                </div>
                
<?php
if(isset($_GET['p'])) {
    if($_GET['p'] == 'users') {
        include('src/shts/parts/admin_users.html');
    }
    if($_GET['p'] == 'articles') {
        include('src/shts/parts/admin_articles.html');
    }
    if($_GET['p'] == 'waiting_articles') {
        include('src/shts/parts/admin_waiting_articles.html');
    }
}
?>
            </div>        
        </div>
        <?php include('src/shts/parts/footer.html'); ?>
    </body>
</html>