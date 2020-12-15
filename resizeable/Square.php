<?php
include_once ('Rectangle.php');
include_once ('Resizeable.php');
class Square extends Rectangle
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
    public function resize($ratio)
    {
        $this->width = $this->width * $ratio;
    }
}