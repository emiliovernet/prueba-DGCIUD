<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiProductoController extends Controller
{

    private function validateProductData(Request $request)
    {
        $messages = [
            'required' => 'El campo :attribute es obligatorio.',
            'string' => 'El campo :attribute debe ser de tipo texto.',
            'max' => 'El campo :attribute debe tener un máximo de :max caracteres.',
            'numeric' => 'El campo :attribute debe ser un número.',
            'integer' => 'El campo :attribute debe ser un número entero.',
        ];

        $validator = Validator::make(request()->all(), [
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
        ], $messages);

        return $validator;
    }

    public function index()
    {
        try {
            return Producto::all();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al obtener los productos'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validator = $this->validateProductData($request);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $producto = Producto::create($request->all());

            return response()->json($producto, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el producto'], 500);
        }
    }

    public function show($id)
    {
        try {
            $producto = Producto::find($id);

            if (!$producto) {
                return response()->json(['message' => 'Producto no encontrado'], 404);
            }

            return response()->json($producto);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al obtener el producto'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = $this->validateProductData($request);

            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $producto = Producto::find($id);

            if (!$producto) {
                return response()->json(['message' => 'Producto no encontrado'], 404);
            }

            $producto->update($request->all());

            return response()->json($producto);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al actualizar el producto'], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $producto = Producto::find($id);

            if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
            }

            $producto->delete();

            return response()->json(['message' => 'Producto eliminado', 'id' => $producto->id]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al eliminar el producto'], 500);
        }
    }
}
