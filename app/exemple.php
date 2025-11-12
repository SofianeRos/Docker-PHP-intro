<?php
$prenom = "sofiane";
$nom = "ros";
$_toto = "truc";
$toto3 = "";
$is_active = true;
$age = 24;
$prix = 19.99;
var_dump($prix);
$array = ["pomme", "banane", "orange"];
var_dump($array);


$concatenation = "Bonjour $prenom $nom";

//! condition if else 

if ($age >= 18) {
    echo "Tu es majeur";
} else {
    echo "Tu es mineur";
}

//! condition if else if else 

$couleur1 = "rouge";
$couleur2 = "bleu";

if ($couleur1 == "rouge" && $couleur2 == "bleu") {
    echo "Les couleurs sont bonne ";
} elseif ($couleur1 == "rouge" || $couleur2 == 'bleu') {
    echo "une des deux couleurs est bonne ";
} else {
    echo "aucune couleur n'est bonne ";
}

//!tableaux

//! tableau numerique 
$tab = ["pomme", "banane", "orange"];
$tab2 = array("pomme", "banane", "orange"); // syntaxe historique 

//! pour inserer un element dans un tableau
$tab[] = "fraise"; // ajoute a la fin du tableau
var_dump($tab);

//! tableau associatif 

$identite = [
    "prenom" => "sofiane",
    "nom" => "ros",
    "age" => 24
];

//!boucle
//!for 

for ($i = 0; $i < 10; $i++){
    print "boucle FOR numero :". $i+1 . "<br>";
}
print "<br>";
print "<br>";
//!While
$j = 0;
while ($j < 10){
    print "boucle WHILE numero :". $j+1 . "<br>";
    $j++;
}
print "<br>";
print "<br>";
foreach ($tab as $fruit){
    print "je mange une  " . $fruit . "<br>";
}


//! tableau un peu plus complexe

$array =[
    "fruits" => ["pomme", "banane", "orange"],
    "animaux" => ["chien", "chat", "poisson"],
    "pays" => ["france", "espagne", "italie"]
];
print "<br>";
print "<br>";
foreach ($array as $key => $value) {
    print 'la cle du parent est : ' . $key . " <br>";  
    print "ses enfants ont pour valeur : <br>";
    //afficher les enfants
    
    foreach ($value as $child) {
        print " => $child <br>";
    }
}


function hello(){
    print "Hello world by function ";

}

function bonjour($prenom){
    print "salut $prenom";
}

function sum($a, $b){
    print 'la somme de ' . $a . ' + ' . $b . ' = ' . $a + $b;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro php</title>
</head>

<body>
    <h1>Salut <?php echo $prenom ?></h1>
    <h2>tu as <?= $age ?> ans </h2>
    <p><?php hello() ?></p>
    <p><?php bonjour("sofiane")?></p>
    <p><?php sum(254,500) ?></p>
    <script>

    console.log("Hello world");
</script>
</body>

</html>