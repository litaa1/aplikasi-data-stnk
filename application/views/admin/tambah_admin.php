<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Admin</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Admin</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Login/simpan_admin')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nama : </label>
							<input type="text" name="nama" class="form-control js-single" id="nama">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat">
						</div>
						<div class="form-group col-lg-12">
							<label>No hp : </label>
							<input type="number" name="no_hp" class="form-control js-single" id="no_hp">
						</div>
						<div class="form-group col-lg-12">
							<label>Email : </label>
							<input type="text" name="email" class="form-control js-single" id="email">
						</div>
						<div class="form-group col-lg-12">
							<label>Pasword: </label>
							<input type="text" name="password" class="form-control js-single" id="password">
						</div>
						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
				</div>
			</div>
		</div>

	</div>

</div>
	</div>