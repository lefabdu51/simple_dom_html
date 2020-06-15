<!doctype html>
<html lang="fr">
    <head>
        <!-- Encodage des caractères pour que les accents s'affichent correctement-->
        <meta charset="utf-8" />
        <!-- Le titre de ma page  -->
        <title>TITRE</title>
    </head>
    <body>
        <!-- j'ai besoin du langage php pour faire ce que je veux -->
        <?php
// j'appelle le fichier externe simple_html_dom.php qui va traiter les opérations de parsing
include('simple_html_dom.php');

// détermination de la page source http://www.lemonde.fr/
$html = file_get_html('https://comparatifs-informaticien51.joomla.com');
// on peut aussi récuperer et parser une chaîne de caractères à la recherche de code HTML en utilisant la syntaxe ci dessous:
// $str = 'ma chaîne de texte';
// $html = str_get_html($str);
        ?>
        <!-- je rebascule en mode HTML -->
        <p>&darr; à partir d'ici, je récupère tous les éléments h2 de la page source http://www.lemonde.fr &darr; </p>
        <!-- et je rebascule en mode PHP -->
        <?php
// trouver tous les éléments  de la page source
foreach($html->find('p') as $e)
    //… et les afficher dans cette page
	if ($e) {
	echo 'lien = outertext: ' . $e->outertext . '<br>';
echo 'lien = innertext: ';echo $e->innertext . '<br>';
echo 'lien = text: ';echo $e->text . '<br>';
echo 'lien = xmltext: ';echo $e->xmltext . '<br>';
    }    ?>
    </body>
</html>
