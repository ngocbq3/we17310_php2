<?php

use Animal as GlobalAnimal;

class Animal
{
    protected $name;
    public $weight;
    //Phương thức khởi tạo
    public function __construct($name, $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
    }
    public function getInfo()
    {
        echo "Con vật có tên {$this->name} có cân nặng {$this->weight}<br />";
    }

    //setter and getter
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
}

class Dog extends Animal
{
    public $color;
    public function __construct($name, $weight, $color)
    {
        parent::__construct($name, $weight);
        $this->color = $color;
    }

    public function say()
    {
        echo "{$this->name} có màu {$this->color} đang nói Gâu gâu ...<br />";
    }
}

$dog = new Dog("Cậu vàng", 20, "Vàng");
$dog->getInfo();
$dog->say();

$animal = new Animal("Tom mèo", 6);
echo $animal->getName();
$animal->setName('Mèo tom');
echo "<br />" . $animal->getName();
