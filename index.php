<?php
include "moviesList.php";

$filmUno = new Movie("Guerre stellari","25 maggio 1977","Gary Kurtz","20th century fox" );
$filmDue = new Movie("L'Impero colpisce ancora","21 maggio 1980","Gary Kurtz","20th century fox");

// var_dump($filmUno);

$filmUno->renderFilm();

$filmDue->renderFilm();

// var_dump($filmDue);
