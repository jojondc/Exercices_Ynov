<?php


class Triangle
{
    private $_longueur1;
    private $_longueur2;
    private $_longueur3;

    function __construct($_longueur1, $_longueur2, $_longueur3)
    {
        $this->_longueur1 = $_longueur1;
        $this->_longueur2 = $_longueur2;
        $this->_longueur3 = $_longueur3;
    }
}
$monTriangle = new Triangle("20","21", "24");

echo get_class($monChat). "  " . $monChat;