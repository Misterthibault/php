<!DOCTYPE html>

    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
    </body>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
            <?php echo("Celle-ci a été écrite entièrement en PHP."); ?>
        </p
        <?php
        
        
$variable = "Mon \"nom\" est Mathieu";
$variable = 'Je m\'appelle Mathieu';

?>
>
<?php
//condition (if then else ...)
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Tu es vraiment un gros nul !!!";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu es très mauvais";
        break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Tu es mauvais";
        break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
        break;
    
    case 12:
        echo "Tu es assez bon";
        break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    ;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    ;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<br>
<?php
// boucle
$lines = 1;

while ($lines <= 10)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++; 
}
?>

<?php
//tableau numéroté car c'est nombre ne pas oublié pas qu'un tableau numéroté commence à 0 !
$recipes[0] = 'bruger';
$recipes[1] = 'pizza';
$recipes[2] = 'hot dog';
?>

<?php
//tableau asociatif car c'est des nom
$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;
?>
<pre> 
<?php
echo $recipe['title'];
?>
<pre> 
<?php
//tableau de tableau
$recipees = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 1; $lines++) {
    echo $recipes[$lines][0];
}
?>
<?php
//fonction qui va faire une multipliquation
$a = 0;
$b = 0;
function multiple($a,$b){
    return $a * $b;
    
}
?>
<?php
//fonction qui dis mon prenom
$prenom = "";
function hello($prenom){
    echo "coucou".' '.$prenom;
}
echo hello('thibault'); //peut être changer ici
echo multiple(5,6);
?>
<?php
function trueAndFalse(){
    //fonction qui applique une condition
    $cookie = true;
    
    if( $cookie = true){
    echo 'Its true';
    }else echo 'its false';
}
    echo trueAndFalse()

    ?>

<?php  
//fonction qui fait une boucle
function poulet(){
    $pate = 1;

    while ($pate <= 5) 
    {
        echo 'Ceci est le poulet n°' . $pate . '<br />';
        $pate++; 
    }
}
echo poulet()

    ?>

<?php
//fonction dans une fonction
function miseEnAbime(){


function miseEnAbime2(){
    echo 'ceci est une mise en abime';
}

}
echo miseEnAbime();
echo miseEnAbime2()
?>

<?php

// Informations de connexion à la base de données
$host = 'mysql'; // nom du service du conteneur MySQL dans Docker
$dbName = 'couscous';
$user = 'root';
$password = 'root';

try {
    // Connexion à la base de données MySQL
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

    // Configuration des options de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Exemple de requête pour récupérer des données
    $query = 'SELECT * FROM ma_table';
    $stmt = $pdo->query($query);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        echo 'ID: ' . $row['id'] . ', Nom: ' . $row['nom'] . '<br>';
    }
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();



    // ALTER TABLE `categorie` ADD CONSTRAINT `pizza_id` FOREIGN KEY (`id`) REFERENCES `pizza`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
}