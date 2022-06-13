<html>
<head>
<title>Mon premier site PHP </title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
include 'header.php';
include 'utile.php';

$artic=getArticles(3);
?>
    <h5>Les3 derniers articles:</h5>

        <?php foreach($artic as $article):?>
            <div class="article"> 
            <h2><?php echo $article['Titre'] ?></h2>
            <h5><?php echo $article['Auteur'] ?></h5>
            <h6><?php echo $article['Date'] ?></h6>
            <p><?php echo $article['Texte'] ?></p>
            <a class="btn btn-primary" href="delete_post.php?id=<?php echo $article['id']?>">Supprimer</a>
        <?php endforeach ?>
        </div>
      
        <?php include 'footer.php';?>
</body>
</html>