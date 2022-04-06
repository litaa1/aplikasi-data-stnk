<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit pengambilan</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit pengambilan</h4>
                        <br>
                        <?php 
                               foreach($edit_pengambilan as $am): 
                                $id_pengambil = $am->id_pengambil;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('Login/simpan_editpengambilan') ?>" method="post">
                        <input type="hidden" name="id_pengambil" value="<?= $id_pengambil ?>">
                       
						<div class="form-group col-lg-12">
							<label>Nama : </label>
							<input type="text" name="nama_stnk" class="form-control js-single" id="nama_stnk" value="<?=$am->nama_stnk ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>No Mesin : </label>
							<input type="text" name="no_mesin" class="form-control js-single" id="no_mesin" value="<?=$am->no_mesin ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>No Polisi : </label>
							<input type="text" name="no_polisi" class="form-control js-single" id="no_polisi" value="<?=$am->no_polisi ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Pajak Progresif : </label>
							<input type="text" name="pajak_progresif" class="form-control js-single" id="pajak_progresif" value="<?=$am->pajak_progresif ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Nama Pengambil: </label>
							<input type="text" name="nama_pengambil" class="form-control js-single" id="nama_pengambil" value="<?=$am->nama_pengambil ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Tanggal Pengambilan: </label>
							<input type="date" name="tanggal_pengambilan" class="form-control js-single" id="tanggal_pengambilan" value="<?=$am->tanggal_pengambilan ?>">
						</div>
                           
                            <button type="submit" class="btn  btn-sm btn-info"> Simpan</button>
                           
                            </form>
                    </div>    
                </div>      
            </div>    
        </div>              
    </div>                   
</div> 
</body>

</html>