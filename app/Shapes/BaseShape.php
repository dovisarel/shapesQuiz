<?php

namespace App\Shapes;

use \JsonSerializable;

abstract class BaseShape implements JsonSerializable
{
    protected $data = null;

    abstract public static function generateRandom();

    public function __construct($data){
        $this->data = $data;
    }

    public function getData(){
        return $this->data;
    }

    public function jsonSerialize(){
        return [
            'component' => $this::COMPONENT_NAME,
            'data' => $this->data,
            'DEBUG' => [
                'extent' => $this->getExtent(),
            ],
        ];
    }

}
