<?php
include_once "Cosa.php";
class Persona_2{
    private static $id=0;
    private $nombre;
    private $perfil;
    private $dni;
    public function __construct($n,$p){
        $this->nombre=$n;
        $this->perfil=$p;
        $this->dni=self::$id;
        self::$id++;
    }
    //private function __clone(){
    //    $this->dni=self::$id;
    //    self::$id++;
    //}
    
        
    
    public function get_Nombre(){
        return $this->nombre;
    }
    public function __destruct(){
        self::$id--;
    }
    public function __toString():String{
    return "\nLa persona con id= ".self::$id." con nonbre :".$this->nombre."\n"; 
    }
}
$p1=new Persona_2("cesar","publico");
$p2=new Persona_2("Pedro","publico");
$p3=new Persona_2("juan","privado");

$personas=array($p1,$p2,$p3);
for($i=0;$i<3;$i++){
   array_push($personas,new Cosa());
    }
foreach($personas as $valor){
    print_r($valor);
    if($valor instanceof Persona_2 ){
        print($valor->get_Nombre()." es una persona \n");  
    }else{
        print($valor->nombre."No es una persona \n"); 
    }
    //var_dump($valor);
}
//print_r(get_declared_classes());


$p4=clone($p1);
$p5=& $p1;
if($p4==$p1){
 print($p4."".$p1." SI son iguales en valores de atributos");
}else{
    print($p4."".$p1." NO son iguales en valores de atributos");  
}
if($p4===$p1){
    print($p4."".$p1." Son el mismo objeto");
   }else{
       print($p4."".$p1." NO son el mimos obejto");  
   }

   if($p5===$p1){
    print($p5."".$p1." Son el mismo objeto");
   }else{
       print($p5."".$p1." NO son el mismo objeto");  
   }

$s=serialize($p1);

//print_r("\n".$s);

if($p1===unserialize($s)){
    print "true";
}else{
    print "false";
}
//var_dump($p2);

session_start();
$_SESSION['producto']=$s;
//para poder desarializar es necesario que este definida su 

?>