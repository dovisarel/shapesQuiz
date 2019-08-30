<?php

namespace App\Shapes;

use \App\Shapes\ShapesBaseShape;

class Circle extends BaseShape
{
    const COMPONENT_NAME = 'ShapeCircle';

    public static function generateRandom(){
        $extent = rand(100, 900);

        return new self([
            'radius' => $extent / 2 / M_PI,
        ]);
    }

    public function getExtent(){
        return round(2 * M_PI * $this->data['radius'], 3);
    }
}
