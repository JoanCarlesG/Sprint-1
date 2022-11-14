<?php 
class PokerDice{
    public $face;
    public function __construct()
    {
        $this->face = "";
    }
    public function throw(){
        $num = rand(1, 6);
        echo $num;
        switch ($num){
            case 1:
                $this->face = "As";
                break;
            case 2:
                $this->face = "K";
                break;
            case 3:
                $this->face = "Q";
                break;
            case 4:
                $this->face = "J";
                break;
            case 5:
                $this->face = "7";
                break;
            case 6:
                $this->face = "8";
                break;
        }
    }
    public function shapeName(){
        echo "Ha sortit $this->face.<br>";
    }
}
?>