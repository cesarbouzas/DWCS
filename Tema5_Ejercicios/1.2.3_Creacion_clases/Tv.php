<?php
include_once "Producto.php";

class Tv extends Producto{

    
    public $pulgadas;
    public $tecnologia;

    /*public function __construct($row){
        parent::__construct($row);
        $this->pulgadas=$row['pulgadas'];
        $this->tecnologia=$row['tecnologia'];
    }*/
    public function muestra(){
        echo "<p>Pulgadas".$this->pulgadas."</p>";
    }
}

$fila=['cod'=>"123",'nombre'=>'Sansung','nombre_corto'=>"S60",'pvp'=>'1600','pulgadas'=>"60",'tecnologia'=>"plasma"];
$television=new Tv($fila);


print_r($television);
$television->muestra();
if($television instanceof Producto){
    echo"\ntrue\n";
}else{
    echo"\nfasle\n";
}

?>