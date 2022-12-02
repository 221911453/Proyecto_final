<!DOCTYPE html>
<html lang="en">
css
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Bienvenido a mi Formulario</title>
</head>

<body>
    <center>
    <div class="container-form sign-up">
        <div class="welcome-back">
        </div>
        <form class="formulario" id="form" action="{{ route('salvar1',['id'=> $usu->id]) }}" method="POST" role="form">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
                    <br>
                    <h1>Editar un usuario</h1>
                    <br>
                    <hr><hr><hr><hr><hr><hr>
                    <br>
                    <br><br>
                    <div class="formulario__grupo" id="grupo__nombre">
                        <label for="nombre" class="formulario__label">nombre</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="nombre" id="nombre" value="{{ $usu->nombre }}" class="form-control" required placeholder="Nombre">
                            @error('nombre')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El Nombre debe ser de 4 a 20 digitos <strong>Letras</strong></p>
                    </div>
                    <div class="formulario__grupo" id="grupo__app">
                        <label for="app" class="formulario__label">Apellido Peterno</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="app" id="app" value="{{ $usu->app }}" class="form-control" required placeholder="Apellido Paterno">
                            @error('app')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El Apellido paterno debe ser de 4 a 16 digitos <strong>Letras</strong></p>
                    </div>
                    <div class="formulario__grupo" id="grupo__apm">
                        <label for="apm" class="formulario__label">Apellido Materno</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name=" apm" id="apm" value="{{$usu->apm }}" class="form-control" required placeholder="Apellido Materno">
                            @error('apm')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El apellido materno debe ser de 4 a 16 digitos <strong>Letras</strong></p>
                    </div>
                    <div class="formulario__grupo" id="grupo__fecha">
                        <label for="fecha" class="formulario__label">Fecha Nacimiento</label>
                        <div class="formulario__grupo-input">
                            <input type="date" class="formulario__input" name=" fecha" id="fecha" value="{{ $usu->fecha }}" class="form-control" required placeholder="Fecha de Nacimiento">
                            @error('fecha')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">Debe seleccionar su fecha de nacimiento</p>
                    </div>
                    <div class="formulario__grupo" id="grupo__direccion">
                        <label for="direccion" class="formulario__label">Direccion</label>
                        <div class="formulario__grupo-input">
                            <input type="text" class="formulario__input" name="direccion" id="direccion" value="{{ $usu->direccion }}" class="form-control" required placeholder="Direccion">
                            @error('direccion')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La direccion debe ser de 4 a 50 digitos</p>
                    </div>
                    <div class="formulario__grupo" id="grupo__telefono1">
                        <label for="telefono1" class="formulario__label">Telefono 1</label>
                        <div class="formulario__grupo-input">
                            <input type="number" class="formulario__input" name=" telefono1" id="telefono1" value="{{ $usu->telefono1 }}" class="form-control" required placeholder="Telefono1">
                            @error('telefono1')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El Telefono debe ser de 10 numeros</p>
                    </div>
                    <div class="formulario__grupo" id="grupo__telefono2">
                        <label for="telefono2" class="formulario__label">Telefono 2</label>
                        <div class="formulario__grupo-input">
                            <input type="number" class="formulario__input" name="telefono2" id="telefono2" value="{{ $usu->telefono2 }}" class="form-control" required placeholder="Telefono2">
                            @error('telefono2')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El Telefono debe ser de 10 numeros</p>
                    </div>
                    <div class="formulario__grupo" id="grupo__email">
                        <label for="email" class="formulario__label">Correo</label>
                        <div class="formulario__grupo-input">
                            <input type="email" class="formulario__input" name="email" id="email" value="{{ $usu->email}}" class="form-control" required placeholder="Email">
                            @error('email')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El Correo debe llevar un @ y ser de tipo email</p>
                    </div>
                    <div class="formulario__grupo" id="grupo__pass">
                        <label for="pass" class="formulario__label">Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="pass" value="{{ $usu->pass }}" class="form-control" required placeholder="Password">
                            @error('pass')
                            <p class="error-message">{{ $message }}</p>
                            @enderror
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La contraseña debe ser de 8 a 16 digitos</p>
                    </div><br><br>
                    Seleccione el Tipo de usuario
                    <br><br>
              <select name="id_tipousuario" id="">
                @foreach($usuarios as $tipo)
                @if($usu->id_tipousuario == $tipo->id)
                <option class="formulario__btn" value="{{ $tipo->id}}">{{$tipo->nombre}}</option>
                @endif
                @endforeach
                @foreach($usuarios as $tipo)
                  @if($usu->id_tipousuario != $tipo->id)
                    <option class="formulario__btn" value="{{ $tipo->id}}">{{$tipo->nombre}}</option>
                  @endif
                @endforeach
              </select>

            <br><br>
            <button type="submit"  class="formulario__btn" value="Salvar">Salvar</button>
        </form>
    </div>
    </center>
    <script src="script.js"></script>
    <script src="js/form-usuarios.js"></script>
</body>

</html>
