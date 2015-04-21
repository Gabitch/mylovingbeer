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
        <title>Connexion</title>
        
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
        <!-- Includes -->
        <?php include('src/shts/parts/header.html'); ?>
        <div class="page">
        
<?php
        if(isset($_POST['submit'])) {
            $pseudo = $_POST['pseudo'];
            $password = sha1($_POST['password']);

            $query = "SELECT * FROM users WHERE pseudo = '".utf8_decode($pseudo)."' ";
            $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
            $data = mysqli_fetch_array($result);
            
            if($password == $data['password'] AND $data['status'] != 'ban') {
                $_SESSION['id'] = $data['id'];
                $_SESSION['last_name'] = $data['last_name'];
                $_SESSION['first_name'] = $data['first_name'];
                $_SESSION['pseudo'] = $data['pseudo'];
                $_SESSION['mail'] = $data['mail'];
                $_SESSION['avatar'] = $data['avatar'];
                $_SESSION['status'] = $data['status'];
                $_SESSION['write_block'] = $data['write_block'];
                $_SESSION['comment_block'] = $data['comment_block'];
                
                echo('<script language="Javascript"> document.location.replace("index.php"); </script>'); 
            }
            else {
                echo('<div class="form_error"><p>La combinaison pseudo / mot de passe est fausse !</p></div>');
                include('src/shts/parts/login.html');
            }
        }
        else {
            include('src/shts/parts/login.html');
        }
?>
        
        </div>
        <?php include('src/shts/parts/footer.html'); ?>
        
    </body>
</html>