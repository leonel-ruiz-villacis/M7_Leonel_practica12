<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware' => ['adb']], function() {
    Route::get('/', [ControladorAdmin::class, 'index'])->name('principalAdmin');
    Route::get('articulos', [ControladorAdmin::class, 'articulos'])->name('articulosAdmin');
    Route::get('clientes', [ControladorAdmin::class, 'clientes'])->name('clientesAdmin');
    Route::get('contabilidad', [ControladorAdmin::class, 'contabilidad'])->name('contabilidadAdmin');
    Route::get('facturacion', [ControladorAdmin::class, 'facturacion'])->name('facturacionAdmin');
});