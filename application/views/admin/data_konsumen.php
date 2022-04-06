<div class="container-fluid">

  	<!-- Page Heading -->
  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
  		<div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-info">Data Konsumen
                          <a href="<?= base_url('Login/tambah_konsumen');?>">
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
  						<th>Alamat</th>
  						<th>No hp</th>
  						<th>Pajak Progresif</th>
  						<th>Aksi</th>
  					</thead>             
  					<tbody>
						<?php foreach ($konsumen as $km) :
						?>
						<tr>
						<td><?= $km->id_konsumen; ?></td>						  
  						<td><?= $km->nama_stnk; ?></td>						  
  						<td><?= $km->alamat; ?></td>						  
  						<td><?= $km->no_hp; ?></td>						  
  						<td><?= $km->pajak_progresif; ?></td>						  
                        <td>
                            <a href="<?= base_url('Login/edit_konsumen/'.$km->id_konsumen);?>"class="btn btn-warning btn-circle"> <i class="fa fa-edit"></i></a>
							<a class="btn btn-danger btn-circle" href="<?= base_url('Login/hapuskonsumen/'.$km->id_konsumen);?>"><i class="fa fa-trash"></i></a> 
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

 