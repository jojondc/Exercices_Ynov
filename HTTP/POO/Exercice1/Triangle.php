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

/**
 * @return mixed
 */
public function getLongueur1()
{
    return $this->_longueur1;
}

/**
 * @param mixed longueur1
 */
public function setLongueur1($_longueur1)
{
    $this->_longueur1 = $_longueur1;
}

/**
 * @return mixed
 */
public function getLongueur2()
{
    return $this->_longueur2;
}

/**
 * @param mixed longueur2
 */
public function setLongueur2($_longueur2)
{
    $this->_longueur2 = $_longueur2;
}
/**
 * @return mixed
 */
public function getLongueur3()
{
    return $this->_longueur3;
}

/**
 * @param mixed longueur3
 */
public function setLongueur3($_longueur3)
{
    $this->_longueur3 = $_longueur3;
}
// A=B ou A=C ou B=C
public  function est_isocelle(){
    if($this->_longueur1 == $this->_longueur2 || $this->_longueur1 == $this->_longueur3 || $this->_longueur2 ==$this->_longueur3 ){
        return true;
    }else{
        return false;
    }
}

//A = B = C
public  function est_equilateral(){
    if($this->_longueur1 == $this->_longueur2 && $this->_longueur1  == $this->_longueur3 ){
        return true;
    }else{
        return false;
    }
}

//A² = B² + C².
public  function est_recatangle(){
    if(pow($this->_longueur1,2) == pow($this->_longueur2,2 ) + pow($this->_longueur3,2 )){
        return true;
    }else{
        return false;
    }
}

//A != B != C
public  function est_scaléne(){
    if($this->_longueur1 != $this->_longueur2 && $this->_longueur1  != $this->_longueur3 ){
        return true;
    }else{
        return false;
    }
}


}
?>