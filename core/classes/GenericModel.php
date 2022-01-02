<?php

namespace Core\Classes;

abstract class GenericModel {
    public function __construct(array $data = null){
        if($data) {
            $this->hydrate($data);
        }
    }

    public function hydrate(array $data = null) {
        if($data) {
            foreach ($data as $attribute => $value) {
                $methodName = "set" . ucfirst($attribute);
                if(method_exists($this, $methodName)) {
                    $this->$methodName($value);
                }
            }
        }
    }
}