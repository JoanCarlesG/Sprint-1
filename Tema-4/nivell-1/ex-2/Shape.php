<?php 
class Shape{
    //Attributes
    public $ample = 0;
    public $alt = 0;
    //Methods
    function __construct($ample, $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }
    function getAmple(){
        return $this->ample;
    }
    function getAlt(){
        return $this->alt;
    }

}
?>