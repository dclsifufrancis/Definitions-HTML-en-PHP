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
        <h1>FORM</h1>
<h1><em>Définition:</em></h1>
<p>
<em>La balise <strong>FORM</strong> représente une section d'un document qui contient des </em><br>
<em>contrôles interactifs permettant à un utilisateur d'envoyer des données à <strong>un serveur web</strong>.</em>

</p>    
</article>
<article class="exemple">
<h1><em>Exemple:</em></h1>
<p>
  <em><xmp>
    <form action="" method="get" class="form-example">
      <div class="form-example">
        <label for="name">Enter your name: </label>
        <input type="text" name="name" id="name" required>
      </div>
      <div class="form-example">
        <label for="email">Enter your email: </label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-example">
        <input type="submit" value="Subscribe!">
      </div>
    </form>
</xmp></em>
</p>

    </section>
</article>
</body>

<footer>
<?php include('footer_.php'); ?>
</footer>
</html>