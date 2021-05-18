<?php
$titre="Les dents de la mer de Seb";
$realisateur="John Doe";
$annee=1954;
$evaluation=5;
$genre="Horreur";
$pitch="Trop top!!";
$acteurs="";
$duree="On s'endort facilement";
$afficheLink="https://p7.storage.canalblog.com/77/98/1349409/105761364.jpg";
$copyrights="Table2 4 Ever!";

$films=array(
    array('titre'=>"Forrest Gump",'annee'=>"2015",'pitch'=>"Quelques décennies d'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l'étrange odyssée d'un homme simple et pur, Forrest Gump."),
    array('titre'=>"La Liste de Schindler",'annee'=>"2019",'pitch'=>"Evocation des années de guerre d'Oskar Schindler, industriel autrichien rentré à Cracovie en 1939 avec les troupes allemandes. Il va, tout au long de la guerre, protéger des juifs en les faisant travailler dans sa fabrique. "),
    array('titre'=>"La Ligne verte",'annee'=>"????",'pitch'=>"Paul Edgecomb, Gardien-chef du pénitencier de Cold Mountain en 1935, était chargé de veiller au bon déroulement des exécutions capitales. Parmi les prisonniers se trouvait un colosse du nom de John Coffey... "),
    array('titre'=>"12 hommes en colère",'annee'=>"2007",'pitch'=>"Lors d'un procès, un juré émet l'hypothèse que l'homme qu'il doit juger n'est peut-être pas coupable. Il va tenter de convaincre les onze autres jurés. "),
    array('titre'=>"Le Parrain",'annee'=>"2013",'pitch'=>"En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone marie sa fille à un bookmaker. Sollozzo, \"parrain\" de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue... "),
    array('titre'=>"Les Evadés",'annee'=>"???",'pitch'=>"L'amitié d'un jeune banquier condamné à la prison à vie pour le meurtre de sa femme et d'un vétéran de la prison de Shawshank, le pénitencier le plus sévère de l'Etat du Maine"),
);

array_push($films,[
    'titre' => "Le Cinquième Elément",
    'annee' => "1997",
    'pitch' => "En 1914, dans un temple en Égypte, un archéologue italien décrit à son jeune assistant anglophone sa compréhension d'une fresque gravée sur un mur du bâtiment. Selon, lui il s'agirait d'un plan de bataille opposant d'un côté le Mal absolu, dont la venue est permise par un alignement de planètes qui a lieu tous les 5 000 ans, et de l'autre le Bien, dont l'arme est constituée de quatre éléments, entourant un être de forme humanoïde, un cinquième élément. ",
],
[
    'titre' => "Dragons",
    'annee' => "2010",
    'pitch' => "Sur l'île de Berk, le sport favori des habitants est la chasse aux dragons qui les attaquent sans cesse et volent leurs moutons. Harold est un jeune viking créatif et intelligent. ... Avec une arme qu'il a lui-même fabriquée, il arrive à blesser en plein vol une Furie Nocturne, un dragon que personne n'a jamais vu.",
],
[
    'titre' =>"Premier Contact",
    'annee'=> "2016",
    'pitch' => "Lorsque de mystérieux vaisseaux venus du fond de l'espace surgissent un peu partout sur Terre, une équipe d'experts est rassemblée sous la direction de la linguiste Louise Banks afin de tenter de comprendre leurs intentions. Face à l'énigme que constituent leur présence et leurs messages mystérieux, les réactions dans le monde sont extrêmes et l'humanité se retrouve bientôt au bord d'une guerre absolue. Louise Banks et son équipe n'ont que très peu de temps pour trouver des réponses.",
] );

//var_dump($films);
$categories = array(
    "Action", "Dramatique", "Comédie", "Fantastique", "Horreur", "Science-Fiction", "Polar", "Thriller", "Historique", "Policier"
);
//var_dump($categories);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix V2 :D C'est mieux !</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    
</head>
<body id="body">
    <div class="container">
        <div class="row row-cols-2">
            <h1 class="bg-danger text-center text-white col-12">Catalogue de Films</h1>
            <h2 class="col-12"><?php echo $titre;?></h2>
            <img class="col-12 mb-3 img-fluid imgSize" src="<?php echo $afficheLink;?>" alt="Fuck Google">
            <p class="col-6">Genre : <?php echo $genre; ?></p>
            <p class="col-6">Durée de l'oeuvre : <?php echo $duree; ?></p>
            <p class="col-6">Année de Réalisation : <?php echo $annee; ?></p>
            <p class="col-6">Réalisateur : <?php echo $realisateur; ?></p>  
            <p class="col-12">Synopsis : <?php echo $pitch; ?></p>
            <p class="col-6">Acteurs principaux : <?php echo $acteurs; ?></p>
            <p class="col-6">Evaluation : <?php echo $evaluation; ?> sur 5</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><!--utiliser jquery-->
    <script src="js/script.js"></script>
</body>
</html>