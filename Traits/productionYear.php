<?php 

trait productionYear{
  public $published_year;
  public $aired_from_year;
  public $aired_to_year;


  public function getStringYear(){

    // if(is_nan($this->published_year) | is_nan($this->aired_from_year) | is_nan($this->aired_to_year)){
    // }

    if(isset($this->published_year)){
        
        return $this->published_year;
      

    }else if(isset($this->aired_from_year) && isset($this->aired_to_year)){

        return "$this->aired_from_year - $this->aired_to_year";

    }
  }

}

?>