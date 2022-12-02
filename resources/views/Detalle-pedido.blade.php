<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .titulo{
      text-align: center;
      color: blue;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
      width: 100%;
    }
    #container{
      background-color: rgb(251, 245, 245);
      width: 200px;
      height: 90px;
      margin-left:auto; margin-right:0;
    }
  </style>
</head>
<body>
<center>
  <h2>Reporte de la venta</h2>
  <hr>
  <h4><p>Numero de Pedido:</p>6576576</h4>
  <h4><strong><p>Cliente:</p></strong> {{session('session_name')}} {{session('session_app')}} </h4>
  <h4></h4>
  <br>
  <?php $valor=0 ?>
    <table style="border: 1px solid black;
    border-collapse: collapse;">
		<thead>
			<tr>
				<th>No. </th>
				<th>cantidad</th>
				<th>nombre</th>
				<th>Precio</th>
        <th>Total</th>
			</tr>
		</thead>
		@foreach (Cart::getContent() as $item)
    <?php $valor += $item['price'] * $item['quantity']?>
      <tbody>
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->quantity}}</td>
          <td>{{$item->name}}</td>
          <td>$ {{$item->price}}</td>
          <td>$ {{$item->price * $item->quantity}}</td>
        </tr>
      </tbody>
	  @endforeach
    </table>
    <br>
    <div id="container">
      <table>
        <tr>
              <td><strong> Subtotal:</strong>  ${{$valor}} </td>
        </tr>
        <tr>
              <td><strong>IVA: </strong>  16%</td>
        </tr>
        <tr>
              <td><dt><strong>Total:</strong> ${{$valor+$valor*0.16}}</dt></td>
        </tr>
      </table>
  </div>
    <hr> 
    <br>
    <br>
    <br>
    <h5>¡¡¡ Gracias por su preferencia !!!</h5>
    <label>Para mas informacion puede diregirse a nuestro correo electronico de <a href="https://mail.google.com/mail/u/0/#inbox">fabricadelavaderos.eltigre@gmail.com</a></label> 
    </center>

</body>
</html>