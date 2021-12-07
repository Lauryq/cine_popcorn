<?php
  require "controllers/home_controller.php";
  include "includes/header.php";
?>

  <h1>CinéPopCorn</h1>
  <!-- <a id="button"><i class="fas fa-chevron-up"></i></a> -->
<a href="#" class="btn_up">
  <img src="assets/images/pop_corn_up.png" class="pop-corn_sm_1" alt="boîte de pop-corn cinéma rayée rouge et blanche">
</a>
<img src="assets/images/pop-corn.png" class="pop-corn_lg_1" alt="boîte de pop-corn cinéma rayée rouge et blanche">
<img src="assets/images/pop-corn.png" class="pop-corn_lg_2" alt="boîte de pop-corn cinéma rayée rouge et blanche">
<img src="assets/images/pop-corn.png" class="pop-corn_sm_2" alt="boîte de pop-corn cinéma rayée rouge et blanche">

<main>
  <form method="POST" class="dropdown nav_home_view">
    <p>FILTRES</p>
    <a class="btn" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
      Genres <span><i class="fas fa-chevron-down"></i></span>
    </a>
    <div class="collapse" id="collapseExample">
      <div class="card card-body">
        <ul class="nav_home_ul">
          <li>
            <button class="categories " href="#" value="Action" data-bs-toggle="collapse" data-bs-target="#collapseExample">Action</button>
          </li>
          <li>
            <button class="categories " href="#" value="Comédie" data-bs-toggle="collapse" data-bs-target="#collapseExample">Comédie</button>
          </li>
          <li>
            <button class="categories " href="#" value="Drame" data-bs-toggle="collapse" data-bs-target="#collapseExample">Drame</button>
          </li>
          <li>
            <button class="categories " href="#" value="Romance" data-bs-toggle="collapse" data-bs-target="#collapseExample">Romance</button>
          </li>
          <li>
            <button class="categories " href="#" value="Fantastique" data-bs-toggle="collapse" data-bs-target="#collapseExample">Fantastique</button>
          </li>
          <li>
            <button class="categories " href="#" value="Thriller" data-bs-toggle="collapse" data-bs-target="#collapseExample">Thriller</button>
          </li>
          <li>
            <button class="categories " href="#" value="Policier" data-bs-toggle="collapse" data-bs-target="#collapseExample">Policier</button>
          </li>
          <li>
            <button class="categories " href="#" value="Animation" data-bs-toggle="collapse" data-bs-target="#collapseExample">Animation</button>
          </li>
          <li>
            <button class="categories " href="#" value="Science-fiction" data-bs-toggle="collapse" data-bs-target="#collapseExample">Science-Fiction</button>
          </li>
          <li>
            <button class="categories " href="#" value="Horreur" data-bs-toggle="collapse" data-bs-target="#collapseExample">Horreur</button>
          </li>
          <li>
            <button class="categories " href="#" value="Aventure" data-bs-toggle="collapse" data-bs-target="#collapseExample">Aventure</button>
          </li>
          <li>
            <button class="categories " href="#" value="Biopic" data-bs-toggle="collapse" data-bs-target="#collapseExample">Biopic</button>
          </li>
          <li>
            <button class="categories " href="#" value="Surréaliste" data-bs-toggle="collapse" data-bs-target="#collapseExample">Surréaliste</button>
          </li>
          <li>
            <button class="categories " href="#" value="Psychologique" data-bs-toggle="collapse" data-bs-target="#collapseExample">Psychologique</button>
          </li>
          <li>
            <button class="categories " href="#" value="Gangster" data-bs-toggle="collapse" data-bs-target="#collapseExample">Gangster</button>
          </li>
          <li>
            <button class="categories " href="#" value="Autobiographique" data-bs-toggle="collapse" data-bs-target="#collapseExample">Autobiographique</button>
          </li>
          <li>
            <button class="categories " href="#" value="Film de pirates" data-bs-toggle="collapse" data-bs-target="#collapseExample">Films de pirates</button>
          </li>
          <li>
            <button class="categories " href="#" value="Jeunesse" data-bs-toggle="collapse" data-bs-target="#collapseExample">Jeunesse</button>
          </li>
          <li>
            <button class="categories " href="#" value="Animation japonais" data-bs-toggle="collapse" data-bs-target="#collapseExample">Animé japonais</button>
          </li>
        </ul>
      </div>
    </div>
    <a class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
      Années <span><i class="fas fa-chevron-down"></i></span>
    </a>
    <div class="collapse" id="collapseExample2">
      <div class="card card-body">
        <ul class="nav_home_ul ul_year">
          <li>
            <button class="years" href="#" value="1974" data-bs-toggle="collapse" data-bs-target="#collapseExample">1974</button>
          </li>
          <li>
            <button class="years" href="#" value="1978" data-bs-toggle="collapse" data-bs-target="#collapseExample">1978</button>
          </li>
          <li>
            <button class="years" href="#" value="1982" data-bs-toggle="collapse" data-bs-target="#collapseExample">1982</button>
          </li>
          <li>
            <button class="years" href="#" value="1989" data-bs-toggle="collapse" data-bs-target="#collapseExample">1989</button>
          </li>
          <li>
            <button class="years" href="#" value="1992" data-bs-toggle="collapse" data-bs-target="#collapseExample">1992</button>
          </li>
          <li>
            <button class="years" href="#" value="1994" data-bs-toggle="collapse" data-bs-target="#collapseExample">1994</button>
          </li>
          <li>
            <button class="years" href="#" value="1995" data-bs-toggle="collapse" data-bs-target="#collapseExample">1995</button>
          </li>
          <li>
            <button class="years" href="#" value="1998" data-bs-toggle="collapse" data-bs-target="#collapseExample">1998</button>
          </li>
          <li>
            <button class="years" href="#" value="1999" data-bs-toggle="collapse" data-bs-target="#collapseExample">1999</button></button>
          </li>
          <li>
            <button class="years" href="#" value="2000" data-bs-toggle="collapse" data-bs-target="#collapseExample">2000</button>
          </li>
          <li>
            <button class="years" href="#" value="2001" data-bs-toggle="collapse" data-bs-target="#collapseExample">2001</button>
          </li>
          <li>
            <button class="years" href="#" value="2002" data-bs-toggle="collapse" data-bs-target="#collapseExample">2002</button>
          </li>
          <li>
            <button class="years" href="#" value="2003" data-bs-toggle="collapse" data-bs-target="#collapseExample">2003</button>
          </li>
          <li>
            <button class="years" href="#" value="2004" data-bs-toggle="collapse" data-bs-target="#collapseExample">2004</button>
          </li>
          <li>
            <button class="years" href="#" value="2006" data-bs-toggle="collapse" data-bs-target="#collapseExample">2006</button>
          </li>
          <li>
            <button class="years" href="#" value="2007" data-bs-toggle="collapse" data-bs-target="#collapseExample">2007</button>
          </li>
          <li>
            <button class="years" href="#" value="2008" data-bs-toggle="collapse" data-bs-target="#collapseExample">2008</button>
          </li>
          <li>
            <button class="years" href="#" value="2009" data-bs-toggle="collapse" data-bs-target="#collapseExample">2009</button>
          </li>
          <li>
            <button class="years" href="#" value="2010" data-bs-toggle="collapse" data-bs-target="#collapseExample">2010</button>
          </li>
          <li>
            <button class="years" href="#" value="2013" data-bs-toggle="collapse" data-bs-target="#collapseExample">2013</button>
          </li>
          <li>
            <button class="years" href="#" value="2014" data-bs-toggle="collapse" data-bs-target="#collapseExample">2014</button>
          </li>
          <li>
            <button class="years" href="#" value="2015" data-bs-toggle="collapse" data-bs-target="#collapseExample">2015</button>
          </li>
          <li>
            <button class="years" href="#" value="2016" data-bs-toggle="collapse" data-bs-target="#collapseExample">2016</button>
          </li>
          <li>
            <button class="years" href="#" value="2017" data-bs-toggle="collapse" data-bs-target="#collapseExample">2017</button>
          </li>
          <li>
            <button class="years" href="#" value="2018" data-bs-toggle="collapse" data-bs-target="#collapseExample">2018</button>
          </li>
          <li>
            <button class="years" href="#" value="2019" data-bs-toggle="collapse" data-bs-target="#collapseExample">2019</button>
          </li>
          <li>
            <button class="years" href="#" value="2020" data-bs-toggle="collapse" data-bs-target="#collapseExample">2020</button>
          </li>
        </ul>
      </div>
    </div>
  </form>

<section class="allCards">

<!-- Card type pour tous les films -->
<?php foreach ($films as $film): ?> 
  
    <a href="#demo_modal<?php echo $film['idfilms']?>" class="cards_film" data-aos="fade-up">
      <img  class="img_cards" src="<?php echo $film['affiche']?>"  alt="Affiche film <?php echo $film['titre']?>" >
      <h4><?php echo $film['titre']?></h4>
    </a>

    <!-- Modal pour info films -->
    <div id="demo_modal<?php echo $film['idfilms']?>" class="modal">
          <div class="modal_content">
            <img src="<?php echo $film['affiche']?>" alt="affiche film <?php echo $film['titre']?>" class="img_modal">
            <div class="modal_column">
              <h3><?php echo $film['titre']?></h3>
              <p class="modal_description"><?php echo $film['description']?></p>
              <p class="modal_annee"><?php echo $film['annee']?></p>
              <p class="modal_genre"><?php echo $film['genres']?></p>
              <a href="#close" class="modal_close">&times;</a>
            </div>
          </div>
        </div>

<?php endforeach; ?>

  </section>

  <section class="catCards"></section>

</main>

<?php
  include "views/includes/footer.php"  
?>