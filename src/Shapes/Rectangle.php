<?php

namespace Spatie\ShapesArea\Shapes;

class Rectangle implements ShapeInterface
{
    private float $width;
    private float $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return number_format($this->width * $this->height , 1 , '.' ,'');
    }
}
