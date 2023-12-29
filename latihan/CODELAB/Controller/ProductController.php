<?php

namespace Controller;


include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

// Disimulasikan ini adalah class controller Product
class ProductController extends Controller
{
    // Gunakan traits yang sudah di buat
    use ResponseFormatter;

    // Magic Method, Method ini akan diakses pada saat pembuatan object.
    public function __construct()
    {
        // set Attribute controllerName pada parent class Controller
        $this->controllerName = "Get All Product";
        // set Attribute controllerMethod pada parent class Controller
        $this->controllerMethod = "GET";
    }

    // Disimulasikan ini Method untuk Get data Product
    public function getAllProduct()
    {
        // Array Dummy Data
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Sepaghetti",
            "Jus Jambu"
        ];

        $response = [
            "controller_attribute" => $this->GetControllerAttribute(), //ambil method GetControllerAttribute dari parent class
            "product" => $dummyData
        ];

        // gunakan method dari trait yang sudah dibuat
        return $this->responseFormatter(200, "success", $response);
    }
}
