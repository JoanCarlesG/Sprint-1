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
?>