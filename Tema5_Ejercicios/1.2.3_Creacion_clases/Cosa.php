<?php
class Cosa{
    public static $id=1;
    public $nombre;
    public function __construct()
    {
        $this->nombre="cosa número = ".self::$id;
        self::$id++;
        
    }
}

?>