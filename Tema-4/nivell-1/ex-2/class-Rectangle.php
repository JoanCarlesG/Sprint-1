<?php 
class Rectangle extends Shape{
    function __construct($ample, $alt){
        parent::__construct($ample, $alt);
    }
    public function area(){
        return (parent::getAmple() * parent::getAlt());
    }
}
?>