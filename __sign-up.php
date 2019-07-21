<!DOCTYPE HTML>
<html>
	<head>
		<title>Mi Cuenta | Crear Cuenta :: Monteverde - Servicios Ambientales y Forestales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<script src="js/Chart.js"></script>
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.10.2.min.js"></script>
		
	</head>
	
	<body class="sign-in-up">
		<script>
			function statusChangeCallback(response) {
				console.log('statusChangeCallback');
				if (response.status === 'connected') {
					location.replace(location.origin + '/step.php');
					document.getElementById('status').innerHTML = 'Bienvenido, espere mientras lo redireccionamos...';
				} else {
					testAPI();
				}
			}
			function checkLoginState() {
				console.log('checkLoginState');
				Mv.getLoginStatus(function(response) {
					statusChangeCallback(response);
				});
			}

			window.MonteverdeAPIInit = function() {
				Mv.init({
					clientId   : '10000000001',
					version     : '2.0.0',
					domain: 'micuenta.monteverdeltda.com',
					baseURL: 'https://micuenta.monteverdeltda.com',
					cookie: {
						cookieName: 'MV-XSRF-TOKEN',
						headerName: 'MV-X-XSRF-TOKEN'
					},
				});

				Mv.getLoginStatus(function(response) {
					console.log('Mv.getLoginStatus Front: ');
					console.log(response);
					statusChangeCallback(response);
				});
			};

			(function () {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.src = 'https://connect.monteverdeltda.com/';
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			})();

			function testAPI() {
				// document.getElementById('status').innerHTML = 'Ingresa tus datos para continuar.';
				// 10354293
				// Mv.AddInRegister('#app', 'users_guests');
				
				/*
				*/
				Mv.createFormNewUserGuest({
					'elementId': '#commentForm',
					'elementAlerts': '#elementAlerts',
					//'errorLabelContainer': 'messageBox',
				}, function(r){
					console.log('Respuesta del login manual.');
					console.log(r);
					if(r.status == 'connected'){
						location.reload();
					}
				});
			}
		</script>

		<section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h3>Registrate Aquí</h3>
						<p class="creating">Having hands on experience in creating innovative designs,I do offer design solutions which harness.</p>
						
						<mv:register:user_guest></mv:register:user_guest>
						
						<form class="form-horizontal" id="commentForm" method="POST" action="javascript: return false;">
							<h6>Information de Ingreso</h6>
							<div class="form-group">
								<label for="identification-type-register-guest-monteverde" class="col-sm-4 control-label">Tipo de Identificación *</label>
								<div class="col-sm-8">
									<select id="identification-type-register-guest-monteverde" name="identification-type-register-guest-monteverde" class="form-control">
										<option></option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label for="identification-number-register-guest-monteverde" class="col-sm-4 control-label">Numero de Identificación *</label>
								<div class="col-sm-8">
									<input id="identification-number-register-guest-monteverde" name="identification-number-register-guest-monteverde" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="password-register-guest-monteverde" class="col-sm-4 control-label">Contraseña *</label>
								<div class="col-sm-8">
									<input id="password-register-guest-monteverde" name="password-register-guest-monteverde" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="confirmpassword-register-guest-monteverde" class="col-sm-4 control-label">Confirmar contraseña *</label>
								<div class="col-sm-8">
									<input id="confirmpassword-register-guest-monteverde" name="confirmpassword-register-guest-monteverde" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<h6>Information Personal</h6>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Nombres *</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Apellidos *</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Correo Electronico *</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Teléfono Fijo *</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Teléfono Móvil/Celular</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">inputPassword3</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">inputPassword3</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
						
							<h6>Information de Empresa</h6>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Nombre de la Empresa</label>
								<div class="col-sm-8">
									<input id="inputPassword3" name="inputPassword3" type="text" class="form-control" placeholder="">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-4 control-label">Cargo</label>
								<div class="col-sm-8">
									<select id="identification-type-register-guest-monteverde" name="identification-type-register-guest-monteverde" class="form-control">
										<option></option>
									</select>
								</div>
							</div>
						
							<div class="sub_home">
								<div class="sub_home_left">
									<p>
										<div>
											<ul class="list-group" id="messageBox"></ul>
											<div id="elementAlerts"></div>
										</div>
										<center>
											<div id="status"></div>
										</center>
									</p>
									
									<form>
										<input type="submit" value="Crear Mi Cuenta">
									</form>
								</div>
								<div class="sub_home_right">
									<p>¿Ya tienes una cuenta? <a href="/index.php">Ingresar</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		<!--footer section start-->
			<footer>
			   <p>&copy 2019 Monteverde Servicios Ambientales y Forestales. Todos los derechos reservados. | Developed by <a href="https://github.com/Feliphegomez" target="_blank">FelipheGomez.</a></p> | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
			</footer>
        <!--footer section end-->
	</section>
	

	
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>