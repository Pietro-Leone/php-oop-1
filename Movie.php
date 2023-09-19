<?php

class Movie {
  public $title;
  public $director;
  public $year;
  public $runtime;
  public $genres;

  function __construct($title, $year) {
    $this->title = $title;
    $this->year = $year;
  }

  public function getInfo(){
    return $this->title . ' ' . $this->year;
  }
}
