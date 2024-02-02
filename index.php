<?php

  class Movie {
    // Variabili
    public $title;
    public $director;
    public $releaseYear;

    // Costruttore
    public function __construct($title, $director, $releaseYear) {
      $this->title = $title;
      $this->director = $director;
      $this->releaseYear = $releaseYear;
    }

    // Metodo (stampare a schermo le info del film)
    public function getMovieInfo() {
      return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->releaseYear};";
    }
  }

  $movie1 = new Movie("Povere creature!", "Yorgos Lanthimos", 2024);
  $movie2 = new Movie("Forrest Gump", "Robert Zemeckis", 1995);

  echo "<h2>Film 1:</h2>";
  echo $movie1->getMovieInfo();
  echo "<h2>Film 2:</h2>";
  echo $movie2->getMovieInfo();
