<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah konsumen</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah konsumen</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Login/simpan_konsumen')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nama : </label>
							<input type="text" name="nama_stnk" class="form-control js-single" id="nama_stnk">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat">
						</div>
						<div class="form-group col-lg-12">
							<label>No Hp : </label>
							<input type="number" name="no_hp" class="form-control js-single" id="no_hp">
						</div>
						<div class="form-group col-lg-12">
							<label>pajak progresif : </label>
							<input type="text" name="pajak_progresif" class="form-control js-single" id="pajak_progresif">
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