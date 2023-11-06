<?php 

class Movie{

  public $title;
  public $genre;
  public $cast;
  public $movie_poster;

  public function __construct(string $_title, string $_genre, array $_cast, Poster $_image=null ) {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->cast = $_cast;
    $this->movie_poster = $_image;
  }

  public function setImage(Poster $_image) {
    $this->movie_poster = $_image;
  }

}

?>