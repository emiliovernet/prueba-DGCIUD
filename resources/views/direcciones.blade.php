<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Direcciones</title>
</head>
<body>
    <h1>Direcciones</h1>

    @if ($error)
        <p style="color: red; padding:10px;">{{ $error }}</p>
    @else
        <ul>
            @foreach ($direccionesNormalizadas as $direccion)
                <li>
                    Dirección: {{ $direccion['direccion'] }} <br>
                    Calle: {{ $direccion['nombre_calle'] }}
                </li>
            @endforeach
        </ul>
    @endif
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    h1 {
        text-align: center;
        margin-top: 50px;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        background-color: #fff;
        padding: 20px;
        margin: 10px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
</style>

</html>

