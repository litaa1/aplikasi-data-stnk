<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit admin</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <h4>Edit admin</h4>
                        <br>
                        <?php 
                               foreach($edit_admin as $am): 
                                $id_admin = $am->id_admin;
                                endforeach ;
                        ?>
                        <form action="<?=base_url('Login/simpan_editadmin') ?>" method="post">
                        <input type="hidden" name="id_admin" value="<?= $id_admin ?>">
                        <div class="form-group col-lg-12">
							<label>Nama : </label>
							<input type="text" name="nama" class="form-control js-single" id="nama" value="<?=$am->nama ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat" value="<?=$am->alamat ?>"> 
						</div>
						<div class="form-group col-lg-12">
							<label>No hp : </label>
							<input type="number" name="no_hp" class="form-control js-single" id="no_hp" value="<?=$am->no_hp ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Email : </label>
							<input type="text" name="email" class="form-control js-single" id="email" value="<?=$am->email ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Pasword: </label>
							<input type="text" name="password" class="form-control js-single" id="password" value="<?=$am->password ?>">
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