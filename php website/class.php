<?php
class Couple{
    public $number;
    private $nameWom;
    private $nameMan;
    private $ageWom;
    private $ageMen;

    public function __construct($name1, $name2){
        if (!$name1 instanceof Women && !$name1 instanceof Men){
            throw new InvalidArgumentExeption();
        }
        $this->nameWom = $name1->name;
        $this->nameMan = $name2->name;
        $this->ageWom = $name1->age;
        $this->ageMen = $name2->age;

    }
    public function result(){
        return "Name of man: {$this->nameMan}. Name of woman: {$this->nameWom}. Age of man: {$this->ageMen}. Age of woman: {$this->ageWom}";
    }
}

class Women extends Couple{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function by(){
        echo $this->name;
    }
}

class Men extends Couple{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function by(){
        echo $this->name;
    }
}
?>