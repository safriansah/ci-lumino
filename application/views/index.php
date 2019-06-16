<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?=base_url();?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet">
	<link rel='shortcut icon' type='image/x-icon' href='<?=base_url();?>assets/img/logo.ico' />
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/datatables/datatables.css">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="<?=base_url();?>img/adm.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?=$user?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="<?=base_url()?>login/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Tabel Berita (10 Berita)
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
					</div>
					<div class="panel-body">
						<table id="dataTable" role="grid" aria-describedby="example_info" class="table table-hover" style="width: 100%;" cellspacing="0">
                  			<thead>
                    			<tr>
                      				<th>No</th>
                      				<th>Url</th>
                      				<th>Judul</th>
                      				<th>Isi</th>
                      				<th>Kategori</th>
                      				<th>Tanggal Crawl</th>
									<th>Opsi</th>
                    			</tr>
                  			</thead>
                  			<tbody>
                    			<tr>
                      				<td>no</td>
                      				<td>url</td>
                      				<td>judul</td>
                      				<td>isi</td>
                      				<td>kategori</td>
                      				<td>tanggal</td>
                      				<td>
									  	<button style="margin:6px" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="id">
									  		<i class="fa fa-eye" aria-hidden="true"></i>
										</button>
										<form action="php/aksi.php" method="post" onsubmit="return confirm('Hapus data berita id');">
											<input type="text" name="id" hidden value="id">
											<button style="margin:6px" class="btn btn-danger" name="hapus" type="submit" value="hapus">
									  			<i class="fa fa-trash" aria-hidden="true"></i>
											</button>
										</form>
									</td>
                    			</tr>
								<tr>
                      				<td>no</td>
                      				<td>url</td>
                      				<td>judul</td>
                      				<td>isi</td>
                      				<td>kategori</td>
                      				<td>tanggal</td>
                      				<td style="text-align:center">
									  	<button style="margin:6px" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="id">
									  		<i class="fa fa-eye" aria-hidden="true"></i>
										</button>
										<form action="php/aksi.php" method="post" onsubmit="return confirm('Hapus data berita id');">
											<input type="text" name="id" hidden value="id">
											<button style="margin:6px" class="btn btn-danger" name="hapus" type="submit" value="hapus">
									  			<i class="fa fa-trash" aria-hidden="true"></i>
											</button>
										</form>
									</td>
                    			</tr>
								<tr>
                      				<td>no</td>
                      				<td>url</td>
                      				<td>judul</td>
                      				<td>isi</td>
                      				<td>kategori</td>
                      				<td>tanggal</td>
                      				<td style="text-align:center">
									  	<button style="margin:6px" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-id="id">
									  		<i class="fa fa-eye" aria-hidden="true"></i>
										</button>
										<form action="php/aksi.php" method="post" onsubmit="return confirm('Hapus data berita id');">
											<input type="text" name="id" hidden value="id">
											<button style="margin:6px" class="btn btn-danger" name="hapus" type="submit" value="hapus">
									  			<i class="fa fa-trash" aria-hidden="true"></i>
											</button>
										</form>
									</td>
                    			</tr>
                  			</tbody>
                		</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->
									
		<div class="col-sm-12">
			<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
		</div>
	</div>	<!--/.main-->

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog" id="fetched-data">
      		
		</div>
	</div>

	<script src="<?=base_url();?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?=base_url();?>assets/js/chart.min.js"></script>
	<script src="<?=base_url();?>assets/js/chart-data.js"></script>
	<script src="<?=base_url();?>assets/js/easypiechart.js"></script>
	<script src="<?=base_url();?>assets/js/easypiechart-data.js"></script>
	<script src="<?=base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?=base_url();?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/datatables/datatables.js"></script>
	<script>
    $(document).ready(function() {
	   $('#dataTable').DataTable({
        "scrollX": true
       });
	   $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'get',
                url : 'pg/beritaView.php',
                data :  'id='+ rowid,
                success : function(data){
                    $('#fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
        });
	} );
</script>
		
</body>
</html>
