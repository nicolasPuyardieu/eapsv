<?php
#defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>eapsv</title>

	<style type="text/css">

	
	</style>
</head>
<body>
<div>
<div id="container">
	<div id="body">
		<h1>formulario </h1>
	</div>
	<div>
		<form method="post", action="guardar", enctype="multipart/form-data">
			<input type="number" name="cuil">
			<input type="text" name="nombre">
			<input type="text" name="apellido">
			<input type="text" name="calle">
			<input type="number" name="numero">
			<input type="number" name="piso">
			<input type="text" name="dpto">
			<select name="ciudad">
				<?php
					foreach ($ciudades -> result() as $fila ) {
						?>
						<option value="<php$fila->id?>" ><?php echo $fila->nombre  ?></option>
						<?php  
					}

				  ?>
			</select>
			<input type="file" name="imagen">
			<br></br>
			<input type="submit" name="submit">
		</form>
	</div>

</div>

</body>
</html>