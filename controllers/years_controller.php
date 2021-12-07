<?php
require('../models/year_model.php');


if(isset($_POST['value']) AND !empty($_POST['value'])){

echo JSON_encode(getFilmByYear($_POST['value'], $bdd));

}
else{
echo 'Erreur';
}

?>
