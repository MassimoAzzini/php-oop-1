<?php 

class TVSerie extends Production {

  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(string $_title, array $_genre, array $_cast, Poster $_image=null, int $_aired_from_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons) {
    
    parent::__construct( $_title,  $_genre,  $_cast, $_image);
  
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
  }
}

?>