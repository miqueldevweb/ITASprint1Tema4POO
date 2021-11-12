<?php
class Employee{
    private $name;
    private $salary;

    //Constructor per proves
    public function __construct($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    //Initialize-> funcio de constructor
    public function initialize($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    //Print
    public function print(){
        $message;
        if($this->salary > 6000){
            $message = "has de pagar impostos";
        }else{
            $message = "no has de pagar impostos";
        }
        return $this->name . " " . $message;
    }
}

//Proves
//Fem servir el constructor
$lola = new Employee("lola", 10000);
echo $lola->print();

echo "<br>";

//Fem servir initialize
$sandokan = new Employee("",0);
$sandokan->initialize("sandokan", 2000);
echo $sandokan->print();
?>