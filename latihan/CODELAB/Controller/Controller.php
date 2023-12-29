<?php

namespace Controller;

class Controller
{

    // Variable Atribut
    var $controllerName;
    var $controllerMethod;

    // Method Untuk Mengambil Atribut
    public function GetControllerAttribute()
    {
        return [
            "ControllerName" => $this->controllerName,
            "Method" => $this->controllerMethod
        ];
    }
}
