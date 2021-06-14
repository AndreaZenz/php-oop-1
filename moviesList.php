<?php
class Movie {
    public $name;
    public $date;
    public $production;
    public $distribution;

    function __construct($filmName, $filmDate, $filmProduction, $filmDistribution)
    {
        $this->name = $filmName;
        $this->date = $filmDate;
        $this->production = $filmProduction;
        $this->distribution = $filmDistribution;
    }

    public function renderFilm(){
        echo "<h1>" . $this->name . "</h1>";
        echo "<h2>" . $this->date . "</h2>";
        echo "<p> production of " . $this->production . "</p>";
        echo "<small> distribution: " . $this->distribution . "</small>";
    }
}

// $movie = [
//     [
//         "name" => "Guerre stellari (Star Wars: Episodio IV - Una nuova speranza)",
//         "date" => "25 maggio 1977",
//         "production" => "Gary Kurtz",
//         "distribution" => "20th century fox"
//     ], 
//     [
//         "name" => "L'Impero colpisce ancora (Star Wars: Episodio V - L'Impero colpisce ancora)",
//         "date" => "21 maggio 1980",
//         "production" => "Gary Kurtz",
//         "distribution" => "20th century fox"
//     ],
//     [
//         "name" => "Star Wars: L'ascesa di Skywalker (Star Wars: Episodio IX - L'ascesa di Skywalker)",
//         "date" => "18 dicembre 2019",
//         "production" => "Kathleen Kennedy",
//         "distribution" => "Walt Disney Studios Motion Pictures"
//     ]

// ];