<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DireccionesController extends Controller
{
    public function normalizar(Request $request)
    {
        $error = null;
        $direccionesNormalizadas = [];

        $response = Http::get('http://servicios.usig.buenosaires.gob.ar/normalizar/', [
            'direccion' => $request->input('direccion'),
        ]);

        if ($response->failed() || empty($response->json()['direccionesNormalizadas'])) {
            $error = $response->json()['errorMessage'] ?? 'No se encontró la dirección';
        } else {
            $direccionesNormalizadas = $response->json()['direccionesNormalizadas'];
        }

        return view('direcciones', [
            'direccionesNormalizadas' => $direccionesNormalizadas,
            'error' => $error,
        ]);
    }
}