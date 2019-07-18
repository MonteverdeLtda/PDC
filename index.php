<!DOCTYPE HTML>
<html>
	<head>
		<title>Mi Cuenta | Ingreso :: Monteverde - Servicios Ambientales y Forestales</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		 <!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- Graph CSS -->
		<link href="css/font-awesome.css" rel="stylesheet"> 
		<!-- jQuery -->
		<!-- lined-icons -->
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<!-- //lined-icons -->
		<!-- chart -->
		<script src="js/Chart.js"></script>
		<!-- //chart -->
		<!--animate-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
			 new WOW().init();
		</script>
		<!--//end-animate-->
		<!----webfonts--->
		<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
		<!---//webfonts---> 
		 <!-- Meters graphs -->
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
				document.getElementById('status').innerHTML = 'Ingresa tus datos para continuar.';
				
				Mv.createFormLogin({
					'elementId': '#commentForm',
					'elementAlerts': '#commentForm',
					//'errorLabelContainer': 'messageBox',
				}, function(r){
					console.log('Respuesta del login manual.');
					console.log(r);
					if(r.status == 'connected'){
						location.reload();
					}
				})
				
				
			}
		</script>

		<section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Monteverde</span> <a href="index.html">Mi Cuenta</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									<label class="checkbox">
										Olvido su contraseña?
										<!-- // <input type="checkbox" name="checkbox" checked=""> -->
									</label>
								 </span>
								<p><a href="#">Haz clic aquí</a> </p>
								<div class="clearfix"> </div>
							</div>
							<form class="cmxform" id="commentForm" method="POST" action="javascript: return false;">
								<div class="log-input">
									<fieldset>
										<div class="log-input-left">
											<div class="form-group has-feedback">
												 <input id="username-login-monteverde" required="" name="username-login-monteverde" type="text" class="user" />
											</div>
										</div>
										<span class="checkbox2">
											 <label class="checkbox">
												<!-- // <i class="fa fa-check"></i> -->
											</label>
										</span>
										<div class="clearfix"> </div>
									</fieldset>
								</div>
								<div class="log-input">
									<fieldset>
										<div class="log-input-left">
											<div class="form-group has-feedback">
												<input id="password-login-monteverde" required="" name="password-login-monteverde" type="password" class="lock" />
											</div>
										</div>
										<span class="checkbox2">
											 <label class="checkbox">
												<!-- // <i class="fa fa-check"></i> -->
											</label>
										</span>
										<div class="clearfix"> </div>
									</fieldset>
								</div>
								
								<p>
									<div>
										<ul class="list-group" id="messageBox"></ul>
										<div id="elementAlerts"></div>
									</div>
									<center>
										<div id="status"></div>
									</center>
								</p>
								<input name="login" type="submit" value="Ingresar a mi cuenta">
								<!-- // <button name="login" type="submit">Ingresar a mi cuenta</button> -->
							</form>
							<style>
								.error {
									padding: 1em 1em 1em 1em;
								}
							</style>
						</div>
						<div class="new_people">
							<h4>Para gente nueva</h4>
							<p>
								
							</p>
							<p><a href="sign-up.html">¡Regístrate ahora!</a><br></p>
							<p>
								¿Tienes problemas para ingresar?
								Intenta con este botón.<br>
							</p>
							<p><mv:login-button scope="email" onlogin="checkLoginState();"></mv:login-button></p>
						</div>
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
		<!-- <script src="js/scripts.js"></script> -->
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
