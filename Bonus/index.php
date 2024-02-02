<?php

  class Movie {
    // Variabili
    public $title;
    public $director;
    public $releaseYear;
    public $genres = [];

    // Costruttore
    public function __construct($title, $director, $releaseYear, $genres = []) {
      $this->title = $title;
      $this->director = $director;
      $this->releaseYear = $releaseYear;
      $this->genres = $genres;
    }

    // Metodo (stampare a schermo le info del film)
    public function getMovieInfo() {
      $genresJoin = join(', ', $this->genres);
      return "Titolo: {$this->title}, Regista: {$this->director}, Anno: {$this->releaseYear}, Generi: {$genresJoin}";
    }
  }

  $movie1 = new Movie("Povere creature!", "Yorgos Lanthimos", 2024, ['Commedia', 'Horror']);
  $movie2 = new Movie("Forrest Gump", "Robert Zemeckis", 1995, ['Commedia', 'Romantico']);

  echo "<h2>Film 1:</h2>";
  echo $movie1->getMovieInfo();
  echo "<h2>Film 2:</h2>";
  echo $movie2->getMovieInfo();
