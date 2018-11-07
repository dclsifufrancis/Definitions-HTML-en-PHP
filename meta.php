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
        <h1>META</h1>
<h1><em>Définition:</em></h1>
<p>
<em>La balise <strong>META</strong> sont les informations relatives à la page.</em><br>
<em>Les données du Metadata ne sont pas affichés sur la page mais sont "traduit" par la machine.</em><br>
<em>Les éléments du meta sont généralement la description de la page, les mots clés, l'auteur de la page, la date de dernière modification...</em><br>
<em>Les metadatas peuvent être utilisé par les navigateurs lui donnant les informations sur le contenu, par les moteurs de recherche mais également d'autres services en lignes.</em><br>

</p>    
            </article>

            <article class="exemple">
<h1><em>Exemple:</em></h1>
<p>
    <em><xmp>    
Afficher des mots clés pour les moteurs de recherche:
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">

Décrire sa page :
<meta name="description" content="Free Web tutorials on HTML and CSS">

Raffraichir la page toutes les 30s:
<meta http-equiv="refresh" content="30">


    </xmp></em>
</p>
            </article>
    </section>
</body>


<footer>
<?php include('footer_.php'); ?>
</footer>
</html>