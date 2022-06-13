
<html>
<head>
<title>Mon premier site PHP </title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<?php
include 'header.php';
include 'utile.php';
?>
        <?php foreach($articles as $article):?>
        <div class="article"> 
            <h2><?php echo $article['Titre'] ?></h2>
            <h3><?php echo $article['Auteur'] ?></h3>
            <h6>Publié le <?php echo $article['Date'] ?></h6>
            <p><?php echo $article['Texte'] ?></p>
            <a class="btn btn-primary" href="delete_post.php?id=<?php echo $article['id']?>">Supprimer</a>
        </div>
        <?php endforeach ?>
<?php include 'footer.php';?>
</body>
</html>
<?php
include 'utile.php';
?>