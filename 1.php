<?php
class AnalizarRango
{
  public $num = array();

  public function __construct($numeros)
  {
    $this->num =$numeros;
    $cantidad=count($this->num);
    $inicio=$this->num[0];
    $fin=$this->num[$cantidad-1];
    $this->num=range($inicio, $fin);
    $this->num=array_diff($this->num,$numeros);
    if(empty($this->num))
    {
      return $this->num[0]=false;
    }
    else {

      return $this->num;
    }
  }

}
$arregloNumeros = array (1,2,7,9);
$arregloNumero = new AnalizarRango($arregloNumeros);
var_dump($arregloNumero);
?>
