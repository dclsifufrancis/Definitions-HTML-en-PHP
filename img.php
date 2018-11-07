<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css">
     <title>Définitions des Balises html</title>

</head>

<header>
<?php include('header.php'); ?>
</header>

<body>
    <section>
        <article class="definition">
        <h1><strong>IMG</strong></h1>
<h1><em>Définition:</em></h1>
<p>
<em>Balise d'image, qui doit être suivi de sa source (url,jpeg,gif,...) et de sa description et/ou de sa taille.</em>

</p>    
</article>
<article class="exemple">
<h1><em>Exemple:</em></h1>
    <em><xmp>
        <img src="url"> 
        <img src="Exemple_rex_le_chien.jpeg" alt="Chien marron et noir"> 
        <img src="Exemple.gif" alt="chien marron et noir qui avance et recule"
        <img src="Exemple_rex_le_chien.jpeg" alt="Chien marron et noir" width="500" height="600"> 
        </xmp></em>

    </section>
</article>    
</body>

    <footer>
    <?php include('footer_.php'); ?>
    </footer>
</html>