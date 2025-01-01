<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\RedesSociales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InicioController extends Controller
{
    public function index()
    {
        $redes_sociales = Cache::get('redes_sociales_list') ?? [];
       
        return view('web.index')->with('redes_sociales', $redes_sociales);
    }
}
