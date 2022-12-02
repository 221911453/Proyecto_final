<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesaje recibido</title>
</head>
<body>
    <p><strong>Recibiste un mensaje de:</strong> {{ $msg['Nombre'] }}</p>
    <p><strong>Correo Electronico:</strong> {{ $msg['Correo'] }}</p>
    <p><strong>Asunto:</strong> {{ $msg['Sujeto'] }}</p>
    <p><strong>Mensaje:</strong> {{ $msg['Mensaje'] }}</p>

</body>
</html>
