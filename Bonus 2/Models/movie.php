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