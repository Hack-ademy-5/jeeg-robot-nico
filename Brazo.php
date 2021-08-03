<?php

class Brazo extends ExtremidadSuperior{

    public function atacar()
    {
       echo "Toma este puñetazo!!!\n";
    }

    public function defender()
    {
        echo "Bloqueado, no me has hecho nada!\n";
    }
}