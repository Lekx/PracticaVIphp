<!-- sesiones, cookies, pruebas de unidad, pruebas funcionales (checkout selenium and prolog) -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF8">
		<title>
			Practica VI 
		</title>
		<style>
			body
			{
				font-size:20px;
				font-family:"Magneto", arial;
				margin:auto;
				padding:auto;
				background-color:#000;
				color:#BEF73E;
			}
			fieldset
			{
				float:left;
				border:3px solid #BEF73E;
				text-align:right;
				padding:20px;
				margin:20px;
				width:350px;
				height:100px;
				border-radius:10px;
			}
			input{
				border:1px solid #BEF73E;
				background-color:transparent;
				color:#BEF73E;
				padding:2px;
			}
			.boton{
				margin-left:450px;
				clear:both;
				border:2px solid #BEF73E;
				padding:10px;
				width:400px;
				border-radius:10px;
			}
			table{
				margin-top:100px;
				margin-left:400px;
				width:500px;
				text-align:center;
				border:1px solid #BEF73E;
				color:#BEF73E;
				border-collapse: collapse;
			}
			th{
				background-color:#BEF73E;
				color:#000;
			}
			tr{
				border:1px solid #BEF73E;
			}
			td{
				width:50px;
				border:1px solid #BEF73E;
			}
		</style>
	</head>
	<body>
	<form action="" method="post">
	<fieldset>
		<legend>
			Artículo 1
		</legend>
			<label>
				Nombre <input type="text" name="nombre1" />
			</label>
			<br/>
			<label>
				Precio <input type="text" name="precio1" />
			</label>
	</fieldset>
	<fieldset>
		<legend>
			Artículo 2
		</legend>
			<label>
				Nombre <input type="text" name="nombre2" />
			</label>
			<br/>
			<label>
				Precio <input type="text" name="precio2" />
			</label>
	</fieldset>
	<fieldset>
		<legend>
			Artículo 3
		</legend>
			<label>
				Nombre <input type="text" name="nombre3" />
			</label>
			<br/>
			<label>
				Precio <input type="text" name="precio3" />
			</label>
	</fieldset>
	<input type="submit" value="Enviar!!" class="boton">
		</form>
		<?php if( (isset($_POST["nombre1"]) && isset($_POST["precio1"])) or (isset($_POST["nombre2"]) && isset($_POST["precio2"])) or (isset($_POST["nombre3"]) && isset($_POST["precio3"])) ){?>
			<table>
				<tr>
					<th>
						#
					</th>
					<th>
						Nombre
					</th>
					<th>
						Precio
					</th>
				</tr>
				<?php
					$subtotal = 0;
					for($x = 1; $x<=3; $x++){
						$precio = $_POST["precio".$x];
						$subtotal+=$precio;
						echo"<tr><td>$x</td><td>".$_POST["nombre".$x]."</td><td>$precio</td></tr>";
					}
					$iva = $subtotal * .16;
					$total = $iva + $subtotal;
				?>
				<tr><td colspan="2">SubTotal</td><td><?php echo $subtotal;?></td></tr>
				<tr><td colspan="2">Iva</td><td><?php echo $iva;?></td></tr>
				<tr><td colspan="2">Total</td><td><?php echo $total;?></td></tr>
			</table>
		<?php }?>

	</body>
</html>
