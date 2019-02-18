<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/estiloLogin.css">
</head>
		<!-- Basicamente lo que mostramos antes de poder entrar al administrador o ser rechasados por ingresar mal el nombre y contraseña
		si intentas entrar cuando el administrador esta iniciado este lo rechasara devolviendolo a la vista principal -->
		<body>
		<div class="container">
		<div class="content w3-animate-zoom">
		<div class="container">
		</div>
		<div class="d-flex justify-content-center h-100">
		<div class="card">
		<div class="card-header">
		<h3>Iniciar Sesion</h3>
		</div>
		<div class="card-body">
		<form action="session_all.php" method="post">
		<div class="input-group form-group">
		<div class="input-group-prepend">
		<span class="input-group-text"><i class="fas fa-user"></i></span>
		</div>
		<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario">

		</div>
		<div class="input-group form-group">
		<div class="input-group-prepend">
		<span class="input-group-text"><i class="fas fa-key"></i></span>
		</div>
		<input type="text" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña">
		</div>
		<div class="row align-items-center remember">
		<input type="checkbox">Recordar
		</div>
		<div class="form-group">
		<input type="submit" value="Iniciar" class="btn float-right login_btn">
		</div>
		</form>
		</div>
		<div class="card-footer">
		<div class="d-flex justify-content-center">

		<a href="#">No recuerdas tu contrasena?</a>
		</div>
		</div>
		</div>
		</div>
		</div>
		</body>

</html>