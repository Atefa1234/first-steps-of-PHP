<?php
class Car{
    public $brand;
    public $price;
    public $color;
    public $door;
    function set_brand($brands){
        $this->brand = $brands;
    }
    function get_brand(){
       return $this->brand;
    }
    function set_door($door){
        $this->door = $door;
    }
    function get_door(){
        return $this->door;
    }
}
$BMW = new Car();
$BMW->set_brand('BMW');
echo $BMW->get_brand();
$BMW->set_door('4');
echo $BMW->get_door();



?>