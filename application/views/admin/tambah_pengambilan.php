<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah pengambilan</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah pengambilan </h1>
	

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('Login/simpan_pengambilan')?>" autocomplete="off">
						<div class="form-group col-lg-12">
							<label>Nama : </label>
							<input type="text" name="nama_stnk" class="form-control js-single" id="nama_stnk">
						</div>
						<div class="form-group col-lg-12">
							<label>No Mesin : </label>
							<input type="text" name="no_mesin" class="form-control js-single" id="no_mesin">
						</div>
						<div class="form-group col-lg-12">
							<label>No Polisi : </label>
							<input type="text" name="no_polisi" class="form-control js-single" id="no_polisi">
						</div>
						<div class="form-group col-lg-12">
							<label>Pajak Progresif : </label>
							<input type="text" name="pajak_progresif" class="form-control js-single" id="pajak_progresif">
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Pengambil: </label>
							<input type="text" name="nama_pengambil" class="form-control js-single" id="nama_pengambil">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Pengambilan: </label>
							<input type="date" name="tanggal_pengambilan" class="form-control js-single" id="tanggal_pengambilan">
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