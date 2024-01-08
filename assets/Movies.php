<?php

class Movie {
   public $title;
   public $actors;
   public $releaseDate;
   public $genre;

    public function __construct($title, $actors, $releaseDate, $genre)
    {
        $this->title = $title;
        $this->actors = $actors;
        $this->releaseDate = $releaseDate;
        $this->genre = $genre;
    }

  }
   
?>

