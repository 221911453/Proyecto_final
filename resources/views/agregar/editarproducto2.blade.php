<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
        <form action="{{ route('salvar2',['id' => $produc->id]) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <br>
            <h1>Editar un Producto</h1>
            <br>
            <hr><hr><hr><hr><hr><hr>
            <br>
            <br><br>
            <div class="formulario__grupo" id="grupo__nombre">
                <label for="nombre" class="formulario__label">nombre</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="nombre" id="nombre" value="{{ $produc->nombre }}" placeholder="Nombre" class="form-control" >
                    @error('nombre')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El Nombre debe ser de 4 a 20 digitos</p>
            </div>
            <div class="formulario__grupo" id="grupo__foto">
                <label for="foto" class="formulario__label">Foto</label>
                <div class="formulario__grupo-input">
                    <input type="file" name="foto1" >
                    <input type="file" class="formulario__input" name="foto" id="foto" value="{{ $produc->foto }}"  placeholder="Foto" class="form-control" >
                    @error('foto')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Debes elegir una foto </p>
            </div>
            <div class="formulario__grupo" id="grupo__descripcion">
                <label for="descripcion" class="formulario__label">Descripcion</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="descripcion" id="descripcion"  value="{{ $produc->descripcion }}" placeholder="descripcion" class="form-control" >
                    @error('descripcion')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">La descripcion puede contener 50 caracteres</p>
            </div>
            <div class="formulario__grupo" id="grupo__costo">
                <label for="costo" class="formulario__label">Costo</label>
                <div class="formulario__grupo-input">
                    <input type="integer" class="formulario__input" name="costo" id="costo" value="{{ $produc->costo }}" placeholder="costo" class="form-control" >
                    @error('costo')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El costo debe ser con numeros</p>
            </div>
            <div class="formulario__grupo" id="grupo__color">
                <label for="color" class="formulario__label">color</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="color" id="color" value="{{ $produc->color }}" placeholder="color" class="form-control" >
                    @error('color')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El color debe ser de 4 a 10 digitos</p>
            </div>
            <div class="formulario__grupo" id="grupo__medida">
                <label for="medida" class="formulario__label">medida</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="medida" id="medida" value="{{ $produc->medida }}" placeholder="medida" class="form-control" >
                    @error('medida')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Ela medida debe ser de 1 a 10 digitos</p>
            </div>
            <div class="formulario__grupo" id="grupo__material">
                <label for="material" class="formulario__label">material</label>
                <div class="formulario__grupo-input">
                    <input type="text" class="formulario__input" name="material" id="material" value="{{ $produc->material }}" placeholder="material" class="form-control" >
                    @error('material')
                    <p class="error-message">{{ $message }}</p>
                    @enderror
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">El material debe ser de 4 a 20 digitos</p>
            </div>
            <br><br>
            <button type="submit" class="formulario__btn" value="registrar">guardar</button>

        </form>
    </div>
    </center>
    <script src="script.js"></script>
    <script src="js/form-productos.js"></script>
    
</body>

</html>
