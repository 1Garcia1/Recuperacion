<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parqueo - clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h4>
            Gestion de clientes
        </h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{route('cliente.index')}}" method="get">
                    <div class="form-row">
                        <div class="col-sm-4 my-2">
                            <input type="text" class="form-control" name="texto" value ="{{$texto}}">

                        </div>
                        <div class="col-auto my-2">
                            <input type="submit" class="btn btn-primary" values ="buscar">

                        </div>
                        <div class="col-auto my-2">
                            <a href="{{route('cliente.create')}}" class ="btn btn-success">Nuevo</a>   

                            
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <head>
                            <tr>
                                <th>opciones</th>
                                <th>Id_cliente</th>
                                <th>Codigo_cliente</th>
                                <th>NOmbre</th>
                                <th>Apellido</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                            </tr>

                        </head>
                        <tbody>
                            @foreach ($clientes as $cliente)

                                <tr>
                                    <td>editar | eliminar</td>
                                    <td>{{$cliente->Id_cliente}}</td>
                                    <td>{{$cliente->Codigo_cliente}}</td>
                                    <td>{{$cliente->Nombre}}</td>
                                    <td>{{$cliente->Apellido}}</td>
                                    <td>{{$cliente->Direccion}}</td>
                                    <td>{{$cliente->Telefono}}</td>
                                    <td>{{$cliente->Correo}}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>