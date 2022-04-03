<?php
class Producto{
 public $codigo;
 public $nombre;
 public $nombre_corto;
 public $pvp;

public function __construct($row){
    $this->codigo=$row['cod'];
    $this->nombre=$row['nombre'];
    $this->nombre=$row['nombre_corto'];
    $this->pvp=$row['pvp'];
}

 public function muestra(){
     echo "<p>".$this->codigo."</p>";
 }

}

?>