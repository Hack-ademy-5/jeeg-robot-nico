<?php
include "ExtremidadSuperior.php";
include "ExtremidadInferior.php";
include "Taladro.php";
include "Brazo.php";
include "Motosierra.php";
include "Tanque.php";
include "Piernas.php";

class Jeeg {
    public $name;
    // extremidad d
    protected $extD;
    // extremidad i
    protected $extI;

    // extremidades inf
    protected $extInf;
    


    public function __construct($n, ExtremidadSuperior $ed, ExtremidadSuperior $ei, ExtremidadInferior $einf)
    {
        $this->name = $n;
        $this->extD = $ed;
        $this->extI = $ei;
        $this->extInf = $einf;
    }
    
    public function atacar()
    {
        $this->extInf->avanzar();
        $this->extD->atacar();
        $this->extD->atacar();
        $this->extI->atacar();
    }
    // super ataque
    public function superAtaque()
    {
        for ($i=0; $i < 10; $i++) { 
            $this->extI->atacar();
            $this->extD->atacar();
        }
    }
    // defender
    public function defender()
    {
        $this->extInf->retroceder();
        $this->extD->defender();
        $this->extI->defender();
    }

    public function cambiarExtD(ExtremidadSuperior $ed)
    {
        $this->extD = $ed;
    }

    public function cambiarExtI(ExtremidadSuperior $ei)
    {
        $this->extI = $ei;
    }

    public function cambiarExtInf(ExtremidadInferior $einf)
    {
        $this->extInf = $einf;
    }

    public static function generator($n)
    {
        $jeegs = [];
        $extSup = ['Taladro','Motosierra','Brazo'];
        $extInf = ['Piernas','Tanque'];
        for ($i=0; $i < $n; $i++) { 
           $jeegs[] = new Jeeg("jeeg-$i", self::getRandExt($extSup), self::getRandExt($extSup), self::getRandExt($extInf));
        }
    
        return $jeegs;
    }

    public static function ataqueDeMasa($ej)
    {
        foreach ($ej as $jeeg) {
            $jeeg->atacar();
        }
    }
    
    private static function getRandExt($ext)
    {
        $len = count($ext);
        $index = rand(0,$len-1); // 0
        $randExt = $ext[$index]; // Taladro
        
        return new $randExt; // new Taladro
    }
    

}