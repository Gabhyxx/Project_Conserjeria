<?php

namespace App\Controllers;

use App\Models\Call;
use App\Core\View;
class CallController{

public function __construct(){

    if (isset($_GET["action"]) && ($_GET["action"] =="delete"))
{
    $this->delete($_GET["id"]);
}
        return;

    $this->index();
}
public function index(){

    $call = new call;
    $calls = call->all();
    new view ("callList", ["call" => $calls]); }
    }
    public function delete ($id){
        $callDelete = new call;
        $call =  $callDelete->
    }
}    

