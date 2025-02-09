<?php

use Spatie\ShapesArea\ShapesArea;

it('can calculate rectangle area', function () {
    $area = ShapesArea::Shape('rectangle' , ['width' => 5 , 'height'=> 6])->getArea();
    expect($area)->toBe(30.0);
});

it('can calculate circle area', function () {
    $area = ShapesArea::Shape('circle' , ['radius' => 5])->getArea();
    expect($area)->toBe(78.5);
});

it('can calculate triangle area', function () {
    $area = ShapesArea::Shape('triangle' , ['base' => 5 , 'height' => 3])->getArea();
    expect($area)->toBe(7.5);
});
