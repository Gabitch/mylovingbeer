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
        <title>Mon compte</title>
        
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
        if(isset($_POST['submit_general'])) {
            $last_name = $_POST['last_name'];
            $first_name = $_POST['first_name'];
            $mail = $_POST['mail'];
            
            $query = "UPDATE users SET last_name = '".utf8_decode($last_name)."', first_name = '".utf8_decode($first_name)."', mail = '".utf8_decode($mail)."' WHERE id = '".$_SESSION['id']."' ";
            $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
            if($result) {
                echo('<div class="account_success"><p>Les informations générales ont été modifiées avec succès !</p></div>');
            }
            else {
                echo('<div class="account_error"><p>Il y a eu un problème lors de la mise à jour de vos informations générales !</p></div>');
            }
        }

        if(isset($_POST['submit_password'])) {
            $password = sha1($_POST['password']);
            $new_password = sha1($_POST['new_password']);
            $verify_password = sha1($_POST['verify_password']);
            
            
            $query = "SELECT password FROM users WHERE id = '".$_SESSION['id']."' ";
            $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
            $data = mysqli_fetch_array($result);
            
            if($password == $data['password']) {
                if($new_password == $verify_password) {
                    $query = "UPDATE users SET password='".$new_password."' WHERE id = '".$_SESSION['id']."' ";
                    if($result = mysqli_query($bdd, $query) or die(mysqli_error($bdd))) {
                        echo('<div class="account_success"><p>Votre mot de passe a été modifié avec succès !</p></div>');
                    }
                    else {
                        echo('<div class="account_error"><p>Il y a eu un problème lors de la mise à jour de votre mot de passe !</p></div>');
                    }
                }
                else {
                    echo('<div class="account_error"><p>Les mots de passe ne correspondent pas !</p></div>');
                }
            }
            else {
                echo('<div class="account_error"><p>Le mot de passe est erroné !</p></div>');
            }
        }

        if(isset($_POST['submit_avatar'])) {
            $query = "SELECT pseudo FROM users WHERE id = '".$_SESSION['id']."' ";
            $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
            $data = mysqli_fetch_array($result);
            $pseudo = $data['pseudo'];
            
            $avatar = $_FILES['avatar'];
            $ext = strtolower(substr($avatar['name'], -3));
            $ext_allow = array('png', 'jpg', 'gif');
            
            if(in_array($ext, $ext_allow)) {
                if($avatar['size'] <= 1048576) {
                    move_uploaded_file($avatar['tmp_name'], 'src/img/users/'.$pseudo.'.'.$ext);
                
                    $query = "UPDATE users SET avatar = '".$pseudo.".".$ext."' WHERE id = '".$_SESSION['id']."' ";
                    $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
                    
                    if($result) {
                        echo('<div class="account_success"><p>Votre avatar a été modifié avec succès !</p></div>');
                    }
                    else {
                        echo('<div class="account_error"><p>Il y a eu un problème lors de la mise à jour de votre avatar !</p></div>');
                    }
                }
                else {
                    echo('<div class="account_error"><p>Le fichier dépasse la taille autorisée !</p></div>');
                }
            }
            else {
                echo('<div class="account_error"><p>L\'extention du fichier n\'est pas autorisée !</p></div>');
            }
        }



        if($_SESSION != null) {
            include('src/shts/parts/account.html');
        }
        else {
            include('src/shts/parts/access_denied.html');
        }
?>
   
        </div>
        <?php include('src/shts/parts/footer.html'); ?>
        
    </body>
</html>