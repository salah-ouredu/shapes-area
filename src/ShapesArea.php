<?php

namespace Spatie\ShapesArea;


use Spatie\ShapesArea\Shapes\Circle;
use Spatie\ShapesArea\Shapes\Rectangle;
use InvalidArgumentException;
use Spatie\ShapesArea\Shapes\ShapeInterface;
use Spatie\ShapesArea\Shapes\Triangle;

class ShapesArea {
    public static function Shape(string $shapeType, array $params): ShapeInterface
    {
        return match (strtolower($shapeType)) {
            'circle' => new Circle($params['radius'] ?? throw new InvalidArgumentException("Radius required")),
            'rectangle' => new Rectangle(
                $params['width'] ?? throw new InvalidArgumentException("Width required"),
                $params['height'] ?? throw new InvalidArgumentException("Height required")
            ),
            'triangle' => new Triangle(
                $params['base'] ?? throw new InvalidArgumentException("Base required"),
                $params['height'] ?? throw new InvalidArgumentException("Height required")
            ),
            default => throw new InvalidArgumentException("Invalid shape type"),
        };
    }
}

