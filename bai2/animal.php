<?php

class Animal
{
    public $name;
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
}

$animal1 = new Animal("Cậu vàng", 20);
$animal2 = new Animal("Mèo Tom", 5);

// var_dump($animal1);
$animal1->getInfo();
$animal2->getInfo();
