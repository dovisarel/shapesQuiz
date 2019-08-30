<?php

namespace App\Shapes;

use \App\Shapes\ShapesBaseShape;

class Rectangle extends BaseShape
{
    const COMPONENT_NAME = 'ShapeRectangle';

    public static function generateRandom(){
        return new self([
            'x' => rand(50, 250),
            'y' => rand(50, 250),
        ]);
    }

    public function getExtent(){
        return round(2 * $this->data['x'] + 2 * $this->data['y'], 3);
    }
}
