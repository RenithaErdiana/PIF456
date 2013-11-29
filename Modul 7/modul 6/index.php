<!DOCTYPE HTML>
<html>
<head>
	<title>Import</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../dist/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
 <nav class="navbar navbar-default" role="navigation">
 			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar navbar-inverse">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
			      	<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
      				<span class="icon-bar"></span>
    			</button>
    		<a class="navbar-brand" href="#">Pemrograman Web</a>
  			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="../index.php">Home</a></li>
      				<li><a href="#">About</a></li>
      				<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Modul 4 <b class="caret"></b></a>
        				<ul class="dropdown-menu">
          					<li><a href="../mod4/studikasus.php">Studi Kasus</a></li>
          					<li><a href="../mod4/tugas/login.php">Tugas Praktikum</a></li>
        				</ul>
      				</li>
      				<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">MODUL 5 <b class="caret"></b></a>
        				<ul class="dropdown-menu">
          					<li><a href="../mod5/studikasus.php">Studi Kasus</a></li>
          					<li><a href="../mod5/tugaspraktikum.php">Tugas Praktikum</a></li>
        				</ul>
      				</li>
    			</ul>
    			<ul class="nav navbar-nav navbar-right">
      				<li class="dropdown">
        				<a href = "#"  class ="dropdown-toggle" data-toggle="dropdown">
    						<span class="glyphicon glyphicon-user"></span>
			    			renithaerdiana
    						<b class="caret"></b>					
                        </a>
    					<ul class="dropdown-menu">
							<li><a href="#">Profille</a></li>
    					</ul>
      				</li>
    			</ul>
  			</div><!-- /.navbar-collapse -->
			</div>
		</nav>
<div class="container">
	<div class="hero-unit">
    	<h2 class="heading">IMPORT DATA MAHASISWA</h2>
      	<form method="post" enctype="multipart/form-data" action="proses.php">
        	upload file xls only : <input name="input" type="file" class="btn btn-mini btn-info"  placeholder="" required> <br>
            <button type="submit" class="btn btn-info" name="upload">import</button>
		</form>
     </div>
</div>     
	<script src="../dist/js/jquery.js"></script>
	<script src="../dist/js/bootstrap-transition.js"></script>
	<script src="../dist/js/bootstrap-alert.js"></script>
	<script src="../dist/js/bootstrap-modal.js"></script>
    <script src="../dist/js/bootstrap-dropdown.js"></script>
    <script src="../dist/js/bootstrap-scrollspy.js"></script>
    <script src="../dist/js/bootstrap-tab.js"></script>
    <script src="../dist/js/bootstrap-tooltip.js"></script>
    <script src="../dist/js/bootstrap-popover.js"></script>
    <script src="../dist/js/bootstrap-button.js"></script>
    <script src="../dist/js/bootstrap-collapse.js"></script>
    <script src="../dist/js/bootstrap-carousel.js"></script>
    <script src="../dist/js/bootstrap-typeahead.js"></script>
	</body>
</html>