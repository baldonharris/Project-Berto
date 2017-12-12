<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Project BERTO: Bohol Ecotourism Routing System</title>
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.css') ?>">
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
        <style>
            [class*="inline"] > img { width: 100%; }
            [class*="inline"] > h1 {margin-top: 0 !important;}
            [class*="inline"] { display: inline-block; vertical-align: top;}
            [class*="inline"]:last-of-type {margin-left: 25px;}
            .inline-25 { width: 20%; }
            .inline-75 { width: 60%; }
			.inline-25 { 
				float: left;
				margin-right: 10px;
				margin-bottom: 5px;
				border: solid black 1px;
				padding: 2px;
			}
			.inline-75 { 
				float: right;
				margin-right: 2px;
				margin-bottom: 5px;
				padding: 2px;
			}
            .custom-row {margin-bottom: 25px;}
			.picture-tourist {height: 200px; width : 300px; background-size: cover;}
        </style>
    </head>
    <body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">Project BERTO:</a></h1>
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
			<ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
						<li><a href="<?= base_url('tourist/spots') ?>" class="nav-link">Spots</a></li>
						<li><a href="<?= base_url('tourist/aboutus') ?>" class="nav-link">About Us</a></li>
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
			</ul>
            </div><!-- /.container-fluid -->
        </nav>
	</div>
	</div>
        <div id="page">
		<div id="content">
			<div id="banner"><img src="images/Optimized-bohol-banner.jpg" alt="" /></div>
			<div class="post">
				<h2 class="title"><a href="#">Project BERTO </a></h2>
				<p class="meta">Bohol Ecotourism Routing System</p>
				<div class="entry">
					<p>The <strong>Project BERTO: Bohol Ecotourism Routing System</strong> is a website that provide list of all tourist spots in Bohol.</p>
					<p>There are 5 tourist spot types: Adventure, Arts/Crafts, Heritage, Nature and Wildlife. Every tourist spot types there is a list of tourist spot with their picture and description. This website is one of the ways to develop a new technology for the tourism industry.</p>
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<h2>Welcome to Bohol!</h2>
					<p>At the heart of the Philippines archipelago lies our most enchanting and beautiful island province, where indeed, more fun and excitement awaits every visitor.</p>
				</li>
				<li>
					<h2>Tourist Spot Types</h2>
					<ul>
						<li><span></span><a>Adventure</a></li>
						<li><span></span><a>Arts/Crafts</a></li>
						<li><span></span><a>Heritage</a></li>
						<li><span></span><a>Nature</a></li>
						<li><span></span><a>Wildlife</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer-content">
	<div class="column1">
		<h2>Address</h2>
		<p>Project BERTO Developers</p>
		<p>Bohol Island State University - Bilar Campus</p>
		<p>Zamora, Bilar, Bohol 6317</p>
	</div>
	<div class="column2">
		<h2>You can call this number</h2>
		<ul class="list">
			<li><a href="#">Globe: 09556309051</a></li>
			<li><a href="#">Talk n Text: 09485565733 or 09091633619</a></li>
		<h2>You can visit this website</h2>
			<li><a href="http://www.boholtourismph.com/">Bohol Tourism Website</a></li>			
		</ul>
	</div>
</div>
<div id="footer">
	<p> (c) 2017 Project BERTO </p>
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
