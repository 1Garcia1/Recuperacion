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
        <h4>Crear Usuario</h4>
        <div class="row">
            <div class="col-xl-12">

                <form action="{{route('cliente.store')}}" method="post">
                    @csrf 
                    <div class="form-group">
                        <label for="Codigo_cliente">Codigo cliente</label>
                        <input type="text" class="form-control" name ="Codigo_cliente" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" name ="Nombre" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Apellido">Apellido</label>
                        <input type="text" class="form-control" name ="Apellido" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Direccion">Direccion</label>
                        <input type="text" class="form-control" name ="Direccion" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Telefono">Telefono</label>
                        <input type="text" class="form-control" name ="Telefono" require maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="Correo">Correo</label>
                        <input type="text" class="form-control" name ="Correo" require maxlength="50">
                    </div>
                    <div class="form-grup">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <input type="reset" class="btn btn-default" value="Cancelar">
                        <a href="javascript:history.back()">ir al listado</a>
                    </div>
                </form>
            
            </div>
        </div>
    </div>
</body>
</html>