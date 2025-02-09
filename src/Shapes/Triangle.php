<?php

namespace Spatie\ShapesArea\Shapes;

class Triangle implements ShapeInterface
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(): float
    {
        return number_format(0.5 * $this->base * $this->height , 1 , '.' , '');
    }
}
