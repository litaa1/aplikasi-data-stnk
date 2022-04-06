<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit konsumen</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit konsumen</h4>
                        <br>
                        <?php 
                               foreach($edit_konsumen as $km): 
                                $id_konsumen= $km->id_konsumen;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('Login/simpan_editkonsumen') ?>" method="post">
                        <input type="hidden" name="id_konsumen" value="<?= $id_konsumen ?>">

						<div class="form-group col-lg-12">
							<label>Nama : </label>
							<input type="text" name="nama_stnk" class="form-control js-single" id="nama_stnk" value="<?=$km->nama_stnk ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat" value="<?=$km->alamat ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>No Hp : </label>
							<input type="number" name="no_hp" class="form-control js-single" id="no_hp" value="<?=$km->no_hp ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>pajak progresif : </label>
							<input type="text" name="pajak_progresif" class="form-control js-single" id="pajak_progresif" value="<?=$km->pajak_progresif ?>">
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