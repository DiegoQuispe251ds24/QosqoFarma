@extends('layouts.app')

@section('titulo', 'Panel Principal')

@section('contenido')
    <article>
        <header>
            <h2>Sistema Logístico y Trazabilidad FEFO · Región Cusco</h2>
        </header>
        <p>Bienvenido a <strong>QosqoFarma v1.0 (MVP)</strong> corriendo sobre Laravel {{ app()->version() }}.</p>
        
        <ul>
            <li><strong>Base de datos conectada:</strong> {{ DB::connection()->getDatabaseName() }}</li>
            <li><strong>Zona horaria configurada:</strong> {{ config('app.timezone') }}</li>
            <li><strong>Estado de la API RESTful:</strong> <code>/api/v1</code> operativa</li>
        </ul>

        <footer>
            <a href="/api/v1/estado" role="button" target="_blank">Probar Endpoint API (/api/v1/estado)</a>
        </footer>
    </article>
@endsection