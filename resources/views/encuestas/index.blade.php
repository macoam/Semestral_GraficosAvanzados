<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de encuestas cinemex</title>
</head>
<body>
    <h1>Registros de encuestas cinemex</h1>
    @if(Session::has('exito'))
        <p>{{Session::get('exito')}}</p>
    @endif
    @if(Session::has('error'))
        <p>{{Session::get('error')}}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>id_ciudad</th>
                <th>id_sucursal</th>
                <th>id_pelicula</th>
                <th>id_calificacion</th>
                <th>Opinion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($encuestas as $encuesta)
                <tr>
                    <td>{{$encuesta->nombre}}</td>
                    <td>{{$encuesta->id_ciudad}}</td>
                    <td>{{$encuesta->id_sucursal}}</td>
                    <td>{{$encuesta->id_pelicula}}</td>
                    <td>{{$encuesta->id_calificacion}}</td>
                    <td>{{$encuesta->opinion}}</td>
                    <td>
                        <form method="POST" action="{{ route('encuestas.destroy', $encuesta->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>