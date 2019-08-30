<?php

namespace App\Shapes;

use \App\Shapes\ShapesBaseShape;

class Square extends BaseShape
{
    const COMPONENT_NAME = 'ShapeSquare';

    public static function generateRandom(){
        return new self([
            'r' => rand(50, 250),
        ]);
    }

    public function getExtent(){
        return round(4 * $this->data['r'], 3);
    }
}
