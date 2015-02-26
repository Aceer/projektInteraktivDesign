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

	<title>Hyr en lokal - Start</title>

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
							<input type="text" class="form-control" id="inputEmail" placeholder="E-post"/>
							<input type="password" class="form-control"  placeholder="Lösenord" id="inputPassword"/>
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
		<div class="container">
			<!-- Head welcome -->
			<div class="jumbotron">
				<h1>Hyr en lokal snabbt och enkelt!</h1>
				<div class="row">
					<div class="col-md-9">
						<p>Här kan lätt och enkelt söka efter en lokal att hyra för alla typer
						av evenemang. Det finns mängder av olika lokaler för till exempel kalas,bröllop,
						kräftskiva eller bara för komma bort ett tag med släkt eller vänner.</p>
					</div>
				</div>
				<div class="row">
					Snabbsök:
				</div>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="input-group input-group-lg">
							<div class="input-group-btn">
								<button type="button" class="btn apple-bar dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="btn-start-advance-search">Sökfilter<span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" id="box-start-search">
									<li>
										<div class="checkbox">
											<label><input type="checkbox" aria-label="..." checked /> Sök hela landet</label>
											
										</div>
										<div class="input-group">
											<span class="input-group-addon">Län</span>
											<input type="text" class="form-control" placeholder="Blekinge län" disabled />
											<span class="input-group-addon"><span class="caret"></span></span>
										</div>
										<div class="input-group">
											<span class="input-group-addon">Kommun</span>
											<input type="text" class="form-control" placeholder="Karlskrona komun" disabled />
											<span class="input-group-addon"><span class="caret"></span></span>
										</div>
										<div class="input-group">
											<span class="input-group-addon">Plats</span>
											<input type="text" class="form-control" placeholder="Karlskrona" disabled />
											<span class="input-group-addon"><span class="caret"></span></span>
										</div>
										<br>
										Pris per dag
										<br>
										<img src="bilder/range-slider1.png"/>
										<br>
										<p class="bg-info info-message">Vill du göra en mer detaljerad sökning gå in på "sök efter lokal" längs upp i menyn</p>
										
									</li>
								</ul>
							</div>
							<input type="text" class="form-control" aria-label="..." placeholder="Sök efter lokalens namn,plats,kommun eller stad"/>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<button type="button" class="btn btn-primary btn-lg" id="btn-start-search">Sök</button>
					</div>
				</div>
					<div class="center"><img src="bilder/ajax-loader.gif" id="ajax-loader-main-search"></div>
			</div>
		</div>
	</div>
	<div id="wrapper-search">
		<div class="container">
			<div class="row">
				<div class="panel">
					<div class="panel-body">
						<p>adsd<p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="wrapper-jumbotron2">
		<div class="container">
			<div class="jumbotron">
				<div class="row">
					<h2>Vill du hyra ut en lokal?</h2>
				</div>
				<div class="row">
					<div id="text-register" class="col-md-9">
						<p>Regristrera dig och lägg ut din lokal eller lokaler för uthyrning. Får en bra
						överblick av dina lokaler och ändra sjäv enkelt priset för alla årets dagar.
						Betalningen kommer direkt till ditt konto och det ända du behöver ha koll på 
						är nycklar till lokalen och eventuellt egna regler som du har.
						Så skapa ett konto snabbt och enlekt eller om du redan har ett konto så är
						det bara att logga in.</p>
					</div>
					<div class="col-md-3">
						<button type="text" class="btn btn-success btn-lg btn-block">Regristrera</button>
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
			ajaxLoaderMain = document.getElementById('ajax-loader-main-search'),
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
				heighSize = 0;
			}else{
				heighSize = 350;
			}
			
			$('#wrapper-head').animate({
					paddingBottom: heighSize
				},200, function(){
					// animate complete
			});
		};
		
		btnSearch.onclick = function(){
			ajaxLoaderMain.style.display = 'block';
						console.log('change class');
			document.getElementById('text-register').className = "hidden-lg";
			var jumbatronE = document.getElementById('wrapper-jumbotron2').getElementsByClassName('jumbotron')[0];
				jumbatronE.style.paddingTop = "0px";
				
			$('#wrapper-search').delay(4000).slideDown('slow',function(){
				document.getElementById('ajax-loader-main-search').style.display = 'none';
			});
		}

	});
</script>
</html> 