<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.css') ?>">
    </head>
    <body>
        <div class="container">
			<div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-12" style="margin-top:5%">
				<div class="panel panel-default">
					<div class="panel-body">
						<h1 style="text-align:center">
							Project BERTO
						</h1>
						<form class="form-horizontal" id="login_form" data-baseurl="<?= base_url('tourist') ?>" action="<?=base_url('login/login')?>" method="post">
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<input type="text" name="username" class="form-control" placeholder="Username" required="" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<input type="password" name="password" class="form-control" placeholder="Password" required="" />
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12 col-xs-12">
									<button type="submit" class="btn btn-default submit btn-block btn-warning">Log in</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<p style="text-align:center"><small>©2017 All Rights Reserved.</small></p>
			</div>
		</div>
        <script src="<?= base_url('assets/js/plugins/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/underscore-min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/loadingoverlay.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/loadingoverlay_progress.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/jquery.form.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/login.js') ?>"></script>
    </body>
</html>
