<?php

/*
class Student {
    public $name;
    public $email;
    public $age;

    function __construct($name, $email, $age){

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;

    }

    

}

$utente1 = new Student("marco", "dghbs@gmail.com", 24);
$utente2 = new Student("matteo", "dghbs@gmail.com", 37);
$utente3 = new Student("mario", "dghbs@gmail.com", 56);

var_dump($utente1);
var_dump($utente2);
var_dump($utente3);

echo "{$utente1->getAge()}\n";

*/




class Student {
    public $name;
    public $email;
    private $age;
    public $ageRange;
    private $classes = [];
    

    function __construct($name, $email, $age) {

        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->ageRange = $ageRange;
        
    }

        
    private function getAge() {

        if ($this->age >= 18 && $this->age <= 30){
            return "18 - 30";
        } else if ($this->age >= 31 && $this->age <= 50){
            return "31 - 50";
        } else if ($this->age > 50){
            return "50+";
        }
       
    }

    function ageRange(){
        echo "lo studente si trova nella fascia d'eta:{$this->getAge()}\n";
    }

    function addClass(){

    }
     
}

$utente1 = new Student("marco", "dghbs@gmail.com", 24);
$utente2 = new Student("matteo", "dghbs@gmail.com", 37);
$utente3 = new Student("mario", "dghbs@gmail.com", 56);

var_dump($utente1);
var_dump($utente2);
var_dump($utente3);

//echo "{$utente1->getAge()}\n";
echo "{$utente1->ageRange()},{$utente2->ageRange()},{$utente3->ageRange()}";