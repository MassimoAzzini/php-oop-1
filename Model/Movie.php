<?php 

class Movie extends Production {

  use productionYear;
  
  public $runnning_time;

  public function __construct(string $_title, array $_genre, array $_cast, Poster $_image=null, int $_published_year, string $_runnning_time) {
    
    parent::__construct( $_title,  $_genre,  $_cast, $_image);
  
    $this->published_year = $_published_year;
    $this->runnning_time = $_runnning_time;
  }
}

?>