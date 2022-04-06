<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Pagina principal</title>
</head>
    <body>
        <div class="container">
            <br>
            <h1>Vista index del registro de estudiantes</h1>
            <br>
            <button wire:click ="crear()" class="btn btn-success">Nuevo</button>
            @if($modal)
                @include('estudiantes.create')
            @endif
            <br>
            <br>
            <table class="table ">
                <thead>
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo Electrónico</th>
                    <th>Accion 1</th>
                    <th>Accion 2</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $x)
                    <tr>
                        <td>{{ $x->id }}</td>
                        <td>{{ $x->codigo }}</td>
                        <td>{{ $x->nombre }}</td>
                        <td>{{ $x->direccion }}</td>
                        <td>{{ $x->telefono }}</td>
                        <td>{{ $x->email }}</td>
                        <td><button type="button" class="btn btn-warning" wire:click="edit({{$x->id}})">Editar</button></td>
                        <td><button type="button" class="btn btn-danger" wire:click="eliminar({{$x->id}})">Eliminar</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>

