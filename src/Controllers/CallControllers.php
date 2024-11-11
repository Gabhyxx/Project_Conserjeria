<?php

namespace App\Controllers;

use App\Models\Call;

class Controller{

public function __construct(){
    $this->index();
}
public function index(){
    $call = new call;
    $calls = new call;->all();
    }

}