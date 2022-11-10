<?php 
//EXERCICI 1
class Employee{
    //Attributes
    public $name = "";
    public $sou = 0;
    //Methods
    public function initialize($name, $sou){
        $this->name = $name;
        $this->sou = $sou;
    }
    public function print(){
        $txt = "";
        if ($this->sou > 6000){
            $txt = "Sou: $this->sou, ha de pagar impostos";
        } else{
            $txt = "Sou: $this->sou, no ha de pagar impostos";
        }
        return "$this->name <br> $txt";
    }
}

$employee1 = new Employee;

$employee1->initialize("John", 10000);
echo $employee1->print();

//EXERCICI 2
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
class Triangle extends Shape{
    function __construct($ample, $alt){
        parent::__construct($ample, $alt);
    }
    public function area(){
        return (parent::getAmple() * parent::getAlt() / 2);
    }
}
class Rectangle extends Shape{
    function __construct($ample, $alt){
        parent::__construct($ample, $alt);
    }
    public function area(){
        return (parent::getAmple() * parent::getAlt());
    }
}

$triangle1 = new Triangle (4,7);
$rectangle1 = new Rectangle(8,3);

echo $triangle1->area(), "<br>";
echo $rectangle1->area();

?>