<?php
include "Jeeg.php";
// JeegRobot de acero 
// 2 brazos que pueden cambiar (motosierra, espada, taladro)
// las piernas (tanque, cohete)

$miJeeg = new Jeeg("SuperJeegGalactico", new Brazo, new Brazo, new Piernas);
$miJeeg->atacar();
$miJeeg->defender();
var_dump($miJeeg);