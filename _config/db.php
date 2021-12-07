
<?php

try
{
// $bdd = new PDO('mysql:host=localhost;dbname=lauryq_db_projet_film;charset=utf8', 'lauryq', '5VfLpqpdqTzKgQ==');
 $bdd = new PDO('mysql:host=localhost;dbname=projet_film;charset=utf8', '', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

?>
