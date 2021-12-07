<?php

// Requête pour récupérer les films par année avec toutes les infos (id, affiche, description, titre, genre )
require('../_config/db.php');

function getFilmByYear($yearValue, $bdd){

$req_year = $bdd->prepare("SELECT idfilms, films.titre, films.description, Annees.annee, Realisateurs.realisateurs, films.affiche
FROM films
INNER JOIN films_has_Genres
ON films_has_Genres.films_idfilms =films.idfilms
INNER JOIN Genres
ON films_has_Genres.Genres_idGenres = Genres.idGenres
JOIN Annees
ON films.Annees_idAnnee = Annees.idAnnee
JOIN Realisateurs
ON films.Realisateurs_idRealisateurs = Realisateurs.idRealisateurs
WHERE Annees.annee LIKE '%$yearValue%'
GROUP BY films.idfilms, films.titre,films.description");

$req_year->execute();
$yearFilms = $req_year->fetchAll(PDO::FETCH_NUM);

return $yearFilms;
}

?>