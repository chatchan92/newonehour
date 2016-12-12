<?php 
var_dump($__POST);
die(1);
$link = mysql_connect("localhost", "root", "0000")
    or die("Impossible de se connecter : " . mysql_error());
echo 'Connexion réussie';
$db_selected = mysql_select_db('chanLoveyan', $link);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
$result = mysql_query('SELECT * from user');

if (!$result) {
    die('Requête invalide : ' . mysql_error());
}
else{
	print_r($row = mysql_fetch_assoc($result));

}
mysql_close($link);

 ?>