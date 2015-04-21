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
        <title>Inscription</title>
        
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
            $last_name = $_POST['last_name'];
            $first_name = $_POST['first_name'];
            $pseudo = strtolower($_POST['pseudo']);
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            
            $signin = 0;
            
            
            $query_pseudo = "SELECT pseudo FROM users WHERE pseudo = '".utf8_decode($pseudo)."' ";
            $result_pseudo = mysqli_query($bdd, $query_pseudo) or die(mysqli_error($bdd));
            $data_pseudo = mysqli_fetch_array($result_pseudo);
            if($data_pseudo != null) {
                echo('<div class="form_error"><p>Ce pseudo est déjà utilisé !</p></div>');
                include('src/shts/parts/signin.html');
                $signin = 1;
            }
            
            $pseudo_lenth = strlen($pseudo);
            if($pseudo_lenth > 25) {
                echo('<div class="form_error"><p>Le pseudo doit faire moins de 25 caractères !</p></div>');
                include('src/shts/parts/signin.html');
                $signin = 1;
            }
            
            $query_mail = "SELECT mail FROM users WHERE mail = '".utf8_decode($mail)."' ";
            $result_mail = mysqli_query($bdd, $query_mail) or die(mysqli_error($bdd));
            $data_mail = mysqli_fetch_array($result_mail);
            if($data_mail != null) {
                echo('<div class="form_error"><p>Cette adresse mail est déjà utilisée !</p></div>');
                include('src/shts/parts/signin.html');
                $signin = 1;
            }
            
            if(strlen($password) < 8) {
                echo('<div class="form_error"><p>Le mot de passe ne fait pas 8 caractères !</p></div>');
                include('src/shts/parts/signin.html');
                $signin = 1;
            }
            
            if($password != $password_confirm) {
                echo('<div class="form_error"><p>Les mots de passe ne correspondent pas !</p></div>');
                include('src/shts/parts/signin.html');
                $signin = 1;
            }
            
            if($signin == 0) {
                $query = "INSERT INTO users (last_name, first_name, pseudo, mail, password)
                    VALUES ('".utf8_decode($last_name)."', '".utf8_decode($first_name)."', '".utf8_decode($pseudo)."', '".utf8_decode($mail)."', '".sha1($password)."');";
                $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
                
                echo('<script language="Javascript"> document.location.replace("index.php"); </script>'); 
            }
        }
        else {
            include('src/shts/parts/signin.html');
        }
?>
   
        </div>
        <?php include('src/shts/parts/footer.html'); ?>
        
    </body>
</html>