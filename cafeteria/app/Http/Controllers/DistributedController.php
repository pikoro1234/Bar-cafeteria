<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Distribuidor;
use Illuminate\Support\Facades\DB;

class DistributedController extends Controller
{
    function formDistribuidor(){

        return \view('crearDistributed');
    }
}
