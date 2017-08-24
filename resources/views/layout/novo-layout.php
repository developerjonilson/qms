<!doctype html>
<html lang="pt-br">

<head>
	<title>Painel de Controle | QMS - Operador</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">1</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Altere sua senha agora</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Bem-Vindo ao QMS</a></li>
								<li><a href="#" class="more">Ver Todas as Notificações</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Ajuda</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Manual de Usuário</a></li>
								<li><a href="#">Falar com Administrador</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Fábio</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="perfil.html"><i class="lnr lnr-user"></i> <span>Meu Perfil</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mensagens</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Configurações</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Sair</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<!-- meus itens meu -->
						<li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Painel de Controle</span></a></li>

						<li>
							<a href="#subPaciente" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Paciente</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPaciente" class="collapse ">
								<ul class="nav">
									<li><a href="cadastrar-paciente.html" class="">Cadastrar Paciente</a></li>
									<li><a href="pesquisar-paciente.html" class="">Pesquisar Paciente</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subConsulta" data-toggle="collapse" class="collapsed"><i class="fa fa-stethoscope"></i> <span>Consultas</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subConsulta" class="collapse ">
								<ul class="nav">
									<li><a href="agendar-consulta.html" class="">Agendar Consulta Médica</a></li>
									<li><a href="pesquisar-consultas.html" class="">Pesquisar Consultas</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subRelatorio" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Relatórios</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subRelatorio" class="collapse ">
								<ul class="nav">
									<li><a href="page-profile.html" class="">Diário</a></li>
									<li><a href="page-profile.html" class="">Mensal</a></li>
									<li><a href="page-profile.html" class="">Personalizado</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Agendar consulta</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- PANEL HEADLINE -->
							<div class="panel panel-headline">
								<div class="panel-heading">
									<h3 class="panel-title">Dados do paciente</h3>
									<p class="panel-subtitle">O campo abaixo é obrigatórios</p>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-md-4">
											<h4>Informe o CNS:</h4><input class="form-control" type="number" name="" value="" placeholder="">
										</div>
									</div><br>
                  <div class="row">
                    <div class="col-md-3">
                      <button type="button" class="btn btn-success"><i class="fa fa-search"></i> Buscar</button>
                    </div>
                  </div>
                  <div class="row">
										<div class="col-md-4">
											<h4>Paciente:</h4><div class="form-control">Carlos Henrique Matias</div>
									  </div>
								  </div>
									<div class="row">
										<div class="col-md-4">
											<h4>Data da consulta:</h4><input class="form-control" type="date" name="" value="">
									  </div>
								  </div>
									<div class="row">
										<div class="col-md-4">
											<h4>Especialidade:</h4>
											<select class="form-control">
												<option value="cheese">Selecione</option>
												<option value="tomatoes"></option>
												<option value="mozarella"></option>
											</select>
									  </div>
								  </div>
									<div class="row">
										<div class="col-md-10">
											<h4>Nome do médico:</h4><input class="form-control" type="text" name="" value="">
									  </div>
								  </div><br>
									<div class="row">
                    <div class="col-md-3">
                      <button type="button" class="btn btn-success"><i class="fa fa-calendar"></i> Agendar consulta</button>
                    </div>
                  </div>
								</div>
							</div>
							<!-- END PANEL HEADLINE -->
						</div>

					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<!-- <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p> -->
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
