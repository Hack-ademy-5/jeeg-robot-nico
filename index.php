<?php
include "Jeeg.php";
// JeegRobot de acero 
// 2 brazos que pueden cambiar (motosierra, espada, taladro)
// las piernas (tanque, cohete)

$miJeeg = new Jeeg("SuperJeegGalactico", new Taladro, new Brazo, new Tanque);
$miJeeg2 = new Jeeg("Juanito",new Motosierra, new Taladro, new Piernas);

$miJeeg->atacar();
$miJeeg->defender();


$miJeeg2->superAtaque();

// posibilidad de cambiar una extremidad durante su vida

// crear X jeeg robots con las extremidades random
