<?php

namespace Spatie\ShapesArea\Shapes;

class Circle implements ShapeInterface
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return number_format(pi() * pow($this->radius, 2), 1, '.', '');
    }
}
