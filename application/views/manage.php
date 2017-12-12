<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.css') ?>">
		<!-- TABLE STYLES-->
		<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
		<style>
		body {
			margin: 0;
			padding: 0;
			background: #F7F7F7 url(images/img01.jpg) repeat left top;
			background-size: cover;
			font-family: Georgia, "Times New Roman", Times, serif;
			font-size: 14px;
			color: black;
		}
		</style>
    </head>
    <body>
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
                    <a class="navbar-brand" href="#">Project BERTO:Bohol Ecotourism Routing System</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Manage<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#" class="nav-link manage-link" data-toggle="tourist">Tourist Spots</a></li>
                                <li><a href="#" class="nav-link manage-link" data-toggle="account">Accounts</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('account')[0]['name'] ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('login/logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid" id="tourist-container">
            <div class="row">
                <div class="col-md-1">
                    <button type="button" class="btn btn-success create-tourist">Add Tourist Spot</button>
                </div>
                <div class="col-md-2 col-md-offset-9">
                    <select class="form-control" id="filter-type" data-retrieve="<?= base_url('tourist/retrieve') ?>">
                        <option value="all" selected>All</option>
                        <option value="adventure">Adventure</option>
                        <option value="artscrafts">Arts/Crafts</option>
                        <option value="heritage">Heritage</option>
                        <option value="nature">Nature</option>
                        <option value="wildlife">Wildlife</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">	 
                    <table class="table table-hover table-bordered table-responsive" id="tourist-table">
                        <thead>
                            <tr>
                                <th>Spot Name</th>                               
                                <th>Spot Address</th>
                                <th>Spot Description</th>
                                <th style="display:none;">Entrance Fee</th>
                                <th style="display:none;">Activity/Service</th>
								<th style="display:none;">Rate of Activity/Service</th>
                                <th style="display:none;">Spot Latitude</th>
                                <th style="display:none;">Spot Longitude</th>
                                <th>Spot Picture</th>
                                <th>Spot Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
						</tbody>
                    </table>
            </div>
        </div>
		</div>
        <div class="container hidden" id="account-container">
            <div class="row">
                <div class="col-md-1">
                    <button type="button" class="btn btn-success manage-account" data-mode="Create">Add User</button>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-12">
                    <table class="table table-hover table-bordered table-responsive" id="account-table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="manageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="manageModalLabel"><span></span> Tourist Spot</h4>
                    </div>
                    <div class="modal-body">
                        <form id="manageTourist" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Tourist Spot Name</label>
                                <input type="text" class="form-control" name="name" id="name"  placeholder="Spot Name Here" required="required" />
                            </div>                           
                            <div class="form-group">
                                <label for="address">Tourist Spot Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Spot Address Here" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="description">Tourist Spot Description</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="Spot Description Here" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="fee">Tourist Spot Entrance Fee</label>
                                <input type="text" class="form-control" name="fee" id="fee" placeholder="Spot Entrance Fee here" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="service">Tourist Spot Activity/Service Offer</label>
                                <input type="text" class="form-control" name="service" id="service" placeholder="Spot Activity/Service Here" required="required" />
                            </div>
							<div class="form-group">
                                <label for="type">Rate of Activity/Service Offer</label>
                                <input type="text" class="form-control" name="rate" id="rate" placeholder="Rate of Activity/Service Here" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="longitude">Tourist Spot Longitude</label>
                                <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude Here" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="latitude">Tourist Spot Latitude</label>
                                <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude Here" required="required" />
                            </div>
                            <div class="form-group">
    							<label for="picture">Tourist Spot Picture</label>
    							<input type="file" class="form-control" name="picture" id="picture" required="required" />
    							<p class="help-block">Max dimension: 1024x768 px | Max filesize: 2MB | Accepts only: jpeg,png,jpg</p>
    						</div>
                            <div class="form-group">
                                <label for="spot_type">Tourist Spot Type</label>
                                <select class="form-control" name="spot_type" id="spot_type">
                                    <option value="adventure">Adventure</option>
                                    <option value="artscrafts">Arts/Crafts</option>
                                    <option value="heritage">Heritage</option>
                                    <option value="nature">Nature</option>
                                    <option value="wildlife">Wildlife</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-update="<?= base_url('tourist/update') ?>" data-create="<?= base_url('tourist/create') ?>" id="submit-manage-tourist">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title">Preview Picture</h4>
                    </div>
                    <div class="modal-body text-center">
                        <img src="" class="img-responsive img-thumbnail" alt=""/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="accountModalLabel"><span></span> User Account</h4>
                    </div>
                    <div class="modal-body">
                        <form id="manageAccount" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username Here">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password Here">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name Here">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" data-update="<?= base_url('account/update') ?>" data-create="<?= base_url('account/create') ?>" id="submit-manage-account">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?= base_url('assets/js/plugins/jquery.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/bootstrap.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/underscore-min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/loadingoverlay.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/loadingoverlay_progress.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugins/jquery.form.min.js') ?>"></script>
        <script src="<?= base_url('assets/plugins/sweetalert-master/dist/sweetalert.min.js') ?>"></script>
        <script type="text/template" id="data-template">
            <tr data-id="<%= id %>">
                <td data-name="name"><%= name %></td>             
                <td data-name="address"><%= address %></td>
                <td data-name="description"><%= description %></td>
                <td data-name="fee" style="display:none;"><%= fee %></td>
                <td data-name="service" style="display:none;"><%= service %></td>
				<td data-name="rate" style="display:none;"><%= rate %></td>
                <td data-name="longitude" style="display:none;"><%= longitude %></td>
                <td data-name="latitude" style="display:none;"><%= latitude %></td>
                <td data-name="picture"><a href="<%= picture %>" class="preview-picture"><%= picture %></a></td>
                <td data-name="spot_type"><%= spot_type %></td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-warning update-tourist" data-mode="update">Update</button>
                        <button type="button" data-delete="<?= base_url('tourist/delete') ?>" class="btn btn-sm btn-danger delete">Delete</button>
                    </div>
                </td>
            </tr>
        </script>
        <script type="text/template" id="account-template">
            <tr data-id="<%= id %>">
                <td data-name="username"><%= username %></td>
                <td data-name="name"><%= name %></td>
                <td>
                    <div class="btn-group <%= mode %>" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-warning manage-account" data-mode="Update">Update</button>
                        <button type="button" data-delete="<?= base_url('account/delete') ?>" class="btn btn-sm btn-danger delete">Delete</button>
                    </div>
                </td>
            </tr>
        </script>
		<!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
		<!-- DATA TABLE SCRIPTS -->
		<script src="assets/js/dataTables/jquery.dataTables.js"></script>
		<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
			
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
			});
		</script>
        <script src="<?= base_url('assets/js/manage.js') ?>"></script>
    </body>
</html>
