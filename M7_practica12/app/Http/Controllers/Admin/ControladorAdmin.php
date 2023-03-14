<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function index() {
        return view('Admin.index')->with(['text' => 'Benvinguts a la pàgina admin']);
    }

    public function articulos() {
        return view('Admin.mensajeAdmin')->with(['text' => 'Benvinguts a la pàgina articles']);
    }

    public function clientes() {
        return view('Admin.mensajeAdmin')->with(['text' => 'Benvinguts a la pàgina clientes']);
    }

    public function contabilidad() {
        return view('Admin.mensajeAdmin')->with(['text' => 'Benvinguts a la pàgina contabilidad']);
    }

    public function facturacion() {
        return view('Admin.mensajeAdmin')->with(['text' => 'Benvinguts a la pàgina facturación']);
    }
}
