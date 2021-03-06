 <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.css') ?>">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <style>
            [class*="inline"] > img { width: 100%; }
            [class*="inline"] > h1 {margin-top: 0 !important;}
            [class*="inline"] { display: inline-block; vertical-align: top;}
            [class*="inline"]:last-of-type {margin-left: 25px;}
            .inline-25 { width: 20%; }
            .inline-75 { width: 71%; }
            .custom-row {margin-bottom: 25px;}
			.picture-tourist {height: 200px; width : 300px; background-size: cover;}
			body {
				margin: 0;
				padding: 0;
				background-image: url(../images/img01.jpg);
				background-size: cover;
				font-family: Georgia, "Times New Roman", Times, serif;
				font-size: 14px;
				color: black;
			}
			#wrapper {
				margin: 0px;
				padding: 0px;
				background: url(../images/img02.jpg) repeat-x left top;
			}
			#header {
				width: 1000px;
				height: 235px;
				margin: 0px auto;
				padding: 0px;
				background: url(../images/img03.jpg) no-repeat left top;
			}
			#logo {
				float: left;
				margin: 0;
				padding: 115px 0px 0px 50px;
				color: #000000;
			}

			#logo h1, #logo p {
				margin: 0;
				padding: 0;
				font-family: Georgia, "Times New Roman", Times, serif;
			}

			#logo h1 {
				letter-spacing: -1px;
				text-transform: lowercase;
				font-size: 44px;
			}

			#logo h1 a {
				color: black;
			}

			#logo p {
				margin: -30px 0px 0px 0px;
				padding: 26px 0 0 2px;
				font: normal 19px Georgia, "Times New Roman", Times, serif;
				color: black;
			} 

			#logo a {
				border: none;
				background: none;
				text-decoration: none;
				color: #C5E8FF;
			}
			#menu {
				width: 1250px;
				height: 50px;
				margin: 0 auto;
				padding: 0;
				background: none;
			}

			#menu ul {
				float: left;
				margin: 0;
				padding: 0px 25px 0px 0px;
				list-style: none;
				line-height: normal;
			}

			#menu li {
				float: left;
			}

			#menu a {
				display: block;
				width: 120px;
				height: 39px;
				margin-left: 10px;
				padding-top: 15px;
				background: url(images/img05.jpg) repeat-x left top;
				font-family: Georgia, "Times New Roman", Times, serif;
				text-decoration: none;
				text-align: center;
				font-size: 18px;
				font-weight: normal;
				color: black;
				border: none;
			}

			#menu a:hover, #menu .current_page_item a {
				text-decoration: none;
			}

			#menu .current_page_item a {
				background: url(images/img06.jpg) no-repeat left top;
				padding-left: 0;
				color: #493E2B;
			}
			#page {
				width: 1250px;
				height: 412px;
				margin: 0px auto;
				padding: 40px 50px 0px 50px;
				background: #FFFFFF;
			}
        </style>
    </head>
    <body>
	<div id="wrapper">
		<div id="header">
		<div id="logo">
			<h1><a href="">Project BERTO:</a></h1>
			<p>Bohol Ecotourism Routing System</p>
		</div>
		</div>
	<div id="menu">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#">Project BERTO:Bohol Ecotourism Routing System</a> -->
                </div>

                <?php $session = $this->session->userdata('account'); ?>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
						<li><a href="<?= base_url('tourist/spots') ?>" class="nav-link">Spots</a></li>
						<li class="active"><a href="<?= base_url('tourist/aboutus') ?>" class="nav-link">About Us</a></li>
						<li><a href="<?= base_url('tourist/contactus') ?>" class="nav-link">Contact Us</a></li>
						<li><a href="<?= base_url ('login/input') ?>" class="nav-link">Login</a></li>
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (count($session) > 0) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $session[0]['name'] ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">
								<?php if (count($session) > 0) { ?>
                            <li><a href="<?= base_url('tourist') ?>" class="nav-link">Manage</a></li>
                        <?php } ?>
                                    <li><a href="<?= base_url('login/logout') ?>">Logout</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
		</div>
		</div>
		<div id="page">
        <div class="container">
            <div id="posts">
				<div class="post">
					<h2 class="title">Project BERTO</h2>     
						<div class="story">
							<p><strong>Project BERTO: Bohol Ecotourism Routing System</strong> is a website that provide list of all tourist spots in Bohol. There are 5 tourist spot types: Adventure, Arts/Crafts, Heritage, Nature and Wildlife. Every tourist spot types there is a list of tourist spot with their picture and description. This website is one of the ways to develop a new technology for the tourism industry.</p>
						</div>
				</div>
			</div>
			
			<!-- CODE HERE -->
			
		</div>
		</div>
        <script src="<?= base_url('assets/js/plugins/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/underscore-min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/loadingoverlay.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/loadingoverlay_progress.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/jquery.form.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.min.js') ?>"></script>
        <script type="text/template" id="row-template">
            <div class="row custom-row" data-id="<%= id %>">
                <div class="inline-25 picture-tourist" style="background-image: url(<%= picture %>)"></div>
                <div class="inline-75">
                    <h3><%= name %></h3>
                    <p><%= description %></p>
                </div>
            </div>
        </script>
    </body>
</html>
