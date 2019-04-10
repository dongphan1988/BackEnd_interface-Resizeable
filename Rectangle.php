<?php
class Rectangle implements Resizeable
{
    public $height;
    public $length;

    public function __construct($_height,$_length)
    {
        $this->height = $_height;
         $this->length = $_length;
    }
public function getlength(){
        return $this->length;
}
public function getHeight(){
        return $this->height;
}
    public function resize($randomRate)
    {
        $this->height += $randomRate * $this->height / 100;
        $this->length += $randomRate * $this->length / 100;
    }
}


