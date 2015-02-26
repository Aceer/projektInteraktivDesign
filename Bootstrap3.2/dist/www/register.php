<?php
	require "../lessphp/lessc.inc.php";
	$less = new lessc;
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="demoApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>Hyr lokal - Regristrera</title>

	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<style>
	<?php echo $less->compileFile("this-site.less"); ?>
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script language="javascript" type="text/javascript">
	</script>
</head>
<body>
	<nav class="navbar navbar-apple navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
				</button>
				<a class="navbar-brand" href="#"><b>Dinlokal.se</b></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Start</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Sök efter lokal</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li id="user-profile"><a href=""><span class="glyphicon glyphicon-user"></span> Profil</a></li>
					<li>
					<div class="navbar-form" method="GET">
						<div class="form-group" id="form-input">
							<input type="text" class="form-control" id="inputEmail" placeholder="email"/>
							<input type="password" class="form-control"  placeholder="password" id="inputPassword"/>
						</div>
						<button class="btn btn-success" id="btn-login">Logga in</button>
						
						<span class="message-box">
							<div id="message-login-error"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Fel lösenord!</div>
						</span>
					</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<div id="wrapper-body">
	<div id="wrapper-head">
		<div class="head-box">
			<div class="container">
				<!-- Head welcome -->
					<h1>Registera</h1>
					<div class="row">
						<div class="col-md-9">
							<p>Regristrera dig för att hyra ut din lokal.</p>
						</div>
					</div>
			<ul class="nav nav-tabs" id="register-meny">
				<li role="presentation" class="active"><a href="#">Företag</a></li>
				<li role="presentation"><a href="#">Privatperson</a></li>
			</ul>
			</div>
		</div>
	</div>
	
	
<div class="container">
	<div class="panel">
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<label class="control-label">Namn</label>
						<input type="text" class="form-control" aria-label="..."/ placeholder="Namnet på företaget">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<label class="control-label">Registreringsnummer</label>
						<div class="input-group">
							<span class="input-group-addon">?</span>
							<input type="text" class="form-control" aria-label="..."/ placeholder="SE999999999901">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<label class="control-label">Kontakt person</label>
						<input type="text" class="form-control" aria-label="..."/ placeholder="Skriv hela namnet: Elin Larsson">
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<label class="control-label">Info</label>
						<input type="text" class="form-control" aria-label="..."/ placeholder="....">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<label class="control-label">info</label>
						<div class="input-group">
							<span class="input-group-addon">?</span>
							<input type="text" class="form-control" aria-label="..."/ placeholder="Namnet på företaget">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="form-group">
						<label class="control-label">Registreringsnummer</label>
						<div class="input-group">
							<span class="input-group-addon">?</span>
							<input type="text" class="form-control" aria-label="..."/ placeholder="SE999999999901">
						</div>
					</div>
				</div>
			</div>
		</div>								
	</div>
</div>
									
		<!-- Site footer -->
		<footer id="footer">
			<div class="container">
				<p>&copy; Dinlokal 2015 - <b>Mail:</b> dinlokal@mail.se - <b>Tel:</b> 07-02923 300 - <b>Adress:</b> Hamngatan 7 Karlskrona 436 10 </p>
			</div>
		</footer>
</div>

</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
	$(document).ready(function(){

		var btnLogin = document.getElementById('btn-login'),
			btnSearch = document.getElementById('btn-start-search'),
			btnAdvanceSearch = document.getElementById('btn-start-advance-search');
			
		var searchOpen = 1,
			heighSize;
			
	
		btnLogin.onclick = function(){
			var inputPassword = document.getElementById('inputPassword').value,
				inputEmail = document.getElementById('inputEmail').value,
				loginMessage = document.getElementById('message-login-error'),
				profile = document.getElementById('user-profile'),
				formInput = document.getElementById('form-input');
				
			if(inputEmail == ''){
				console.log('no email');
				loginMessage.style.display = 'block';
				loginMessage.innerHTML = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Ingen email';
				document.getElementById('inputEmail').style.backgroundColor = "#eee";
				return false;
			}else{
				console.log('redirect');
				loginMessage.style.display = 'none';	
				formInput.style.display = 'none';
				btnLogin.className = 'btn btn-warning';
				btnLogin.innerHTML = 'Logga ut';
				profile.style.display = 'inline-block';
				return false;
				//window.location.replace('index2.php');
			}
		};	
		
		btnAdvanceSearch.onclick = function(){
			searchOpen++;
 
			if(searchOpen % 2 == 1){
				heighSize = -300;
			}else{
				heighSize = 300;
			}
			
			$('#wrapper-head').animate({
					paddingBottom: heighSize
				},200, function(){
					// animate complete
			});
		};
		
		btnSearch.onclick = function(){
			
		}

	});
</script>
</html> 