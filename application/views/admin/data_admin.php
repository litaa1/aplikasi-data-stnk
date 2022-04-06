<div class="container-fluid">

  	<!-- Page Heading -->
  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
  		<div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-info">Data Admin
                    <a href="<?= base_url('Login/tambah_admin');?>">
                          <button class="btn sm-btn btn-info"><i class="fa fa-plus"></i></button>
                    </a>
                  </h6>
  		</div>
  		<div class="card-body">
  			<div class="table-responsive">
  				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  					<thead>
  						<th>Id</th>
  						<th>Nama</th> 
  						<th>alamat</th> 
  						<th>no_hp</th> 
  						<th>email</th> 
  						<th>password</th> 
  						<th>Aksi</th>
  					</thead>             
  					<tbody>
						<?php foreach ($admin as $am) :
						?>
						<tr>
						<td><?= $am->id_admin; ?></td>						  
  						<td><?= $am->nama; ?></td>						  
  						<td><?= $am->alamat; ?></td>						  
  						<td><?= $am->no_hp; ?></td>						  
  						<td><?= $am->email; ?></td>						  
  						<td><?= $am->password; ?></td>						  
                        <td>
                            <a href="<?= base_url('Login/edit_admin/'.$am->id_admin);?>" class="btn btn-warning btn-circle"> <i class="fa fa-edit"></i></a>
							<a class="btn btn-danger btn-circle" href="<?= base_url('Login/hapusadmin/'.$am->id_admin);?>"><i class="fa fa-trash"></i></a> 
                        </td>
						</tr>
						<?php endforeach;
                        ?>
  					</tbody>
  				</table>
  			</div>
  		</div>
  	</div>

  </div>
  </div>

 