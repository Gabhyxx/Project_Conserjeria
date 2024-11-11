<?php

namespace App\Controllers;

use App\Models\Call;
use App\Core\View;
class CallController{

public function __construct(){
    $this->index();
}
public function index(){
    $call = new call;
    $calls = call->all();
    new view ("callList", ["call" => $calls]); }
    }

}