<?php

class Movie
{

  public function __construct($_title, $_year, $_length)
  {
    $this->title = $_title;
    $this->year = $_year;
    $this->length = $_length;
  }
  public $isInCinema = false;

  public function getInfo()
  {
    return "Questo film si chiama $this->title, è uscito nel $this->year e dura $this->length minuti";
  }
}
