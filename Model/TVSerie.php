<?php 

class TVSerie extends Production {

  use productionYear;

  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(string $_title, array $_genre, array $_cast, Poster $_image=null, $_aired_from_year, $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons) {
    
    parent::__construct( $_title,  $_genre,  $_cast, $_image);

    if(!is_numeric($_aired_from_year) | !is_numeric($_aired_to_year)) {

      throw new Exception("Devi inserire un valori numerico come anno di produzione del primo e ultimo episodio");

    }else{

      $this->aired_from_year = $_aired_from_year;
      $this->aired_to_year = $_aired_to_year == 0 ? 'In produzione' : $_aired_to_year;
    }
  
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
  }
}

?>