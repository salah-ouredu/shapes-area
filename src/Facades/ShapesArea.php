<?php

namespace Spatie\ShapesArea\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\ShapesArea\ShapesArea
 */
class ShapesArea extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Spatie\ShapesArea\ShapesArea::class;
    }
}
