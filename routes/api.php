<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/estado', function () {
        return response()->json([
            'sistema'       => config('app.name'),
            'version_api'   => 'v1.0-mvp',
            'laravel'       => app()->version(),
            'zona_horaria'  => config('app.timezone'),
            'hora_servidor' => now()->toDateTimeString(),
            'base_datos'    => DB::connection()->getDatabaseName(),
            'estado'        => 'OPERATIVO',
        ]);
    })->name('api.v1.estado');
});