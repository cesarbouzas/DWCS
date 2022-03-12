<?php 
class Persona{
    public static  $id;
    private $nombre;
    private $perfil;
    public function __construct(){
        $this->perfil="Público";
    }
}

$p1=new Persona();

var_dump($p1);


print_r($p1);

?>