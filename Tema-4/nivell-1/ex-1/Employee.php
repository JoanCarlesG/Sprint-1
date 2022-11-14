<?php
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
?>