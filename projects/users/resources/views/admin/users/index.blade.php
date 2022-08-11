<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-mx">
            <div class="card border-0 shadow">
                <div class="card-header">Nuevo Usuario</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach($errors->all() as $error)
                                - {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('users.store') }}" method="POST">
                        <div class="mb-3">
                            <label for="name">Nombre</label>
                            <input type="text" placeholder="Nombre" id="name" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="Correo Electronico">Correo Electronico</label>
                            <input type="email"  placeholder="correo electronico" id="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>
                        <div class="mb-3">
                            <label for="password">Contraseña</label>
                            <input type="password" placeholder="contraseña" id="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="age">Edad</label>
                            <input type="text" placeholder="Edad" id="age" name="age" class="form-control" value="{{ old('age') }}">
                        </div>
                        <div class="mb-3">
                            @csrf
                            <input type="submit" class="btn btn-primary btn-sm" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Usuarios
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('¡Desea eliminar el usuario {{ $user->name }}?')">
                                            Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
