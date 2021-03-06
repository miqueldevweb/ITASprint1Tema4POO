<?php
class Acount{
    private $countNumber;
    private $name;
    private $surnameFirst;
    private $surnameSecond;
    private $founds;

    //Constructor
    public function __construct($name, $surnameFirst, $surnameSecond, $founds){
        $this->countNumber = rand(1000000, 9999999);
        $this->name = $name;
        $this->surnameFirst = $surnameFirst;
        $this->surnameSecond = $surnameSecond;
        $this->founds = $founds;
    }
    //Getters/Setters
    public function getFounds(){
        return $this->founds;
    }
    public function setFounds($founds){
        $this->founds = $founds;
    }

    //Metodes
    private function deposit($amount){
        $this->founds += $amount;
    }

    public function withdraw($amount){
        $check = FALSE;
        if($this->founds < $amount){
            $check = FALSE;
        }else{
            $this->founds -= $amount;
            $check = TRUE;
        }
        return $check;
    }

    public function selection($option,$amount){
        switch($option){
            case "ingresa":
                $this->deposit($amount);
                break;
            case "retira":
                $this->withdraw($amount);
        }
        return $this->founds;
    }
}
?>