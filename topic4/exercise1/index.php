<?php
class Employee {
//Atributes
    public $name;
    public $salary;

///method construct
public function __construct($name, $salary){ // opzetten in inizialiseren van het object en parameters
 $this-> name = $name;
 $this-> salary = $salary;
}
public function printTaxInformation(){
    if ($this->salary > 6000){
        echo $this-> name . ", you have to pay taxes.";    
    }
    else {
        echo $this-> name . ", you dont have to pay taxes.";     
    }
   }


//creation object
$employee= new Employee("Bart", 7000);
//call or envoke the method
$employee-> printTaxInformation();




    


?>