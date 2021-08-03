<?php
include "Jeeg.php";
// JeegRobot de acero 
// 2 brazos que pueden cambiar (motosierra, espada, taladro)
// las piernas (tanque, cohete)

$miJeeg = new Jeeg("SuperJeegGalactico", new Taladro, new Brazo, new Tanque);
$miJeeg2 = new Jeeg("Juanito",new Motosierra, new Taladro, new Piernas);

$miJeeg->atacar();
$miJeeg->cambiarExtD(new Motosierra);
$miJeeg->cambiarExtI(new Taladro);
$miJeeg->cambiarExtInf(new Piernas);
$miJeeg->atacar();

// crear X jeeg robots con las extremidades random

$miEjercito = Jeeg::generator(100);

// cada jeeg robot lanza un ataque

Jeeg::ataqueDeMasa($miEjercito);



