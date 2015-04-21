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
        <title>Ecrire un article</title>
        
        <!-- CSS -->
        <link rel="stylesheet" href="src/css/app.css" type="text/css" />
        
        <!-- Icons -->
        <link rel="stylesheet" href="src/css/icons/css/ionicons.min.css" type="text/css" />
        
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css' />
        
        <!-- Javascript -->
        <script src="src/js/jquery.js" type="text/javascript"></script>
        <script src="src/js/app.js" type="text/javascript"></script>
        <script src="src/ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include('src/shts/parts/header.html'); ?>
        <div class="page">
        
<?php
        if($_SESSION != null) {
            if($_POST) {
                if($_POST['content']) {
                    $verification = 0;
                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $type = $_POST['type'];
                    if(isset($_POST['comments'])) {
                        $comments = 0;
                    }
                    else {
                        $comments = 1;
                    }
                    
                    if(strlen($title) > 50) {
                        $verification = 1;
                        echo('<div class="write_error"><p>Le titre de l\'article est trop long, il fait ' . strlen($title) .' caractères !</p></div>');
                        include('src/shts/parts/write.html');
                    }
                    
                    if(isset($_FILES['article_img']) AND $_FILES['article_img']['error'] == 0) {
                        $article_img = $_FILES['article_img'];
                        $ext = strtolower(substr(strrchr($article_img['name'], '.'), 1));
                        $ext_allow = array('png', 'jpg', 'jpeg', 'gif');
                        
                        if(in_array($ext, $ext_allow)) {
                            if($article_img['size'] <= 1048576) {
                                $img_name = md5(uniqid(rand(), true)) . '.' . $ext;
                                move_uploaded_file($article_img['tmp_name'], 'src/img/articles/'.$img_name);
                            }
                            else {
                                $verification = 1;
                                echo('<div class="write_error"><p>Le fichier dépasse la taille autorisée !</p></div>');
                                include('src/shts/parts/write.html');
                            }
                        }
                        else {
                            $verification = 1;
                            echo('<div class="write_error"><p>L\'extention n\'est pas autorisée !</p></div>');
                            include('src/shts/parts/write.html');
                        }
                    }
                    else {
                        $img_name = $type . '.png';
                    }
                    
                    if($_SESSION['status'] == 'admin' OR $_SESSION['status'] == 'writer') {
                        $published = 1;
                    }
                    else {
                        $published = 0;
                    }
                    
                    if($verification == 0) {
                        $query = "INSERT INTO articles (author_key, title, content, type, img, published, comments, created_at)
                            VALUES ('".$_SESSION['id']."', '".utf8_decode($title)."', '".utf8_decode($content)."', '".$type."', '".$img_name."', '".$published."', '".$comments."', NOW());";
                        $result = mysqli_query($bdd, $query) or die(mysqli_error($bdd));
                        echo('<script language="Javascript"> document.location.replace("index.php"); </script>');   
                    }
                    
                    
                }
                else {
                    echo('<div class="write_error"><p>Vous n\'avez pas entré de contenu !</p></div>');
                    include('src/shts/parts/write.html');
                }
            }
            else {
                include('src/shts/parts/write.html');
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