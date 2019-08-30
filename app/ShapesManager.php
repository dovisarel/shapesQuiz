<?php

namespace App;

use \App\Shapes\Square;
use \App\Shapes\Rectangle;
use \App\Shapes\Circle;

class ShapesManager
{
    private static $shapes = [
        Square::class,
        Rectangle::class,
        Circle::class,
    ];

    public static function generateRandom(){
        $shapeClass = self::$shapes[array_rand(self::$shapes)];

        $shape = $shapeClass::generateRandom();

        return $shape;
    }

    public static function generateFromData($data){
        $componentName = $data['component'];

        $classes = array_filter(self::$shapes, function($cls) use($componentName) {
            return $cls::COMPONENT_NAME === $componentName;
        });

        if( count($classes) !== 1 ){
            throw new Exception("Error, shape class not found.", 1);
        }

        $shapeClass = reset($classes);

        $shape = new $shapeClass($data['data']);

        return $shape;
    }
}
