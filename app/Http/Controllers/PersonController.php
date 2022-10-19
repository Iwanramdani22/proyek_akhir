<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //membuat attribute name
    private $name = "Iwan Ramdani";

    // membuat method index
    public function index() {
        // mengembalikan nilai attribute name
        return $this->name;
    }

    public function show($param) {
        $this->name = $param;
        return $this->name;
    }
}