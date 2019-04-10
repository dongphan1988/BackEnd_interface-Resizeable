<?php

class Circle implements Resizeable
{
public $name;
public $radius;
public function __construct($_name,$_radius)
{
    $this->name = $_name;
    $this->radius = $_radius;
}
public function getRadius(){
    return $this->radius;
}
public function valuePerimeter(){
    return 2*pi()*$this->radius;
}

    public function resize($randomRate)
    {
        $this->radius += $randomRate*$this->radius/100;
    }
}

