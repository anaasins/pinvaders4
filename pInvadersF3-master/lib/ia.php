<?php
/**
 * Creacion de la clase ia. Ana Asins.
 */
class ia
{
    //Propiedades Fila, columna y naves
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;

  //Arrays
  public $navesHumano=[];

  public $navesIA=[
    0=>array(
      "tipo"=>"naveIA",
      "fil"=>3,
      "col"=>0,
    ),
    1=>array(
      "tipo"=>"naveIA",
      "fil"=>3,
      "col"=>1,
    ),
    2=>array(
      "tipo"=>"naveIA",
      "fil"=>3,
      "col"=>2,
    ),
  ];
  //getters columna, fila y naves
  public function getColumna(){
    return $this->mapaCol;
  }

  public function getFila(){
    return $this->mapaFil;
  }

  public function gatNave(){
    return $this->numNaves;
  }

  public function getNaveHumano(){
    return $this->navesHumano;
  }

  public function getNavesIA(){
    return $this->navesIA;
  }
  //Setters fila, columna y naves
  public function setmapaCol($mapaCol){
    if ($mapaCol<0) {
      $this->mapaCol=0;
    }elseif ($mapaCol>3) {
      $this->mapaCol=3;
    }else {
      $this->mapaCol=$mapaCol;
    }
  }

  public function setmapaFil($mapaFil){
    if ($mapaFil<0) {
      $this->mapaFil=0;
    }elseif ($mapaFil>3) {
      $this->mapaFil=3;
    }else {
      $this->mapaFil=$mapaFil;
    }
  }

  public function setNaveHumana($tipo, $col, $fil){
    $this->navesHumano[]=[
      "tipo"=>$tipo,
      "fil"=>$fil,
      "col"=>$col,
    ];
  }

    public function setNavesIA($navesIA){
      return $this->navesIA = $navesIA;
    }

//moviendo las naves de forma aleatoria
  public function randomPos(){
    $this->columna=rand(0,3);
    $this->fila=rand(0,3);
  }
}
 ?>
