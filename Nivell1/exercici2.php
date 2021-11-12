<?php
class Shape{
    protected $ample;
    protected $alt;

    //Constructor
    public function __construct($ample, $alt){
        $this->ample = $ample;
        $this->alt = $alt;
    }
}

class Triangle extends Shape{
    public function area(){
        return ($this->ample * $this->alt) / 2;
    }
}

class Rectangle extends Shape{
    public function area(){
        return ($this->ample * $this->alt);
    }
}
?>