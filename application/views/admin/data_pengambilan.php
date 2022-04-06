<div class="container-fluid">

  	<!-- Page Heading -->
  	<!-- DataTales Example -->
  	<div class="card shadow mb-4">
  		<div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-info">Data Pengambilan
                    <a href="<?= base_url('Login/tambah_pengambilan');?>">
                          <button class="btn sm-btn btn-info"><i class="fa fa-plus"></i></button>
                    </a>
                  </h6>
  		</div>
  		<div class="card-body">
  			<div class="table-responsive">
  				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  					<thead>
  						<th>Id</th>
  						<th>Nama Stnk</th> 
  						<th>No Mesin</th> 
  						<th>No Polisi</th> 
  						<th>Pajak Progresif</th> 
  						<th>Nama Pengambil</th> 
  						<th>Tanggal Pengambilan</th> 
  						<th>Aksi</th>
  					</thead>             
  					<tbody>
						<?php foreach ($pengambilan as $am) :
						?>
						<tr>
						<td><?= $am->id_pengambil; ?></td>						  
  						<td><?= $am->nama_stnk; ?></td>						  
  						<td><?= $am->no_mesin; ?></td>						  
  						<td><?= $am->no_polisi; ?></td>						  
  						<td><?= $am->pajak_progresif; ?></td>						  
  						<td><?= $am->nama_pengambil; ?></td>						  
  						<td><?= $am->tanggal_pengambilan; ?></td>						  
						<td>
                            <a href="<?= base_url('Login/edit_pengambilan/'.$am->id_pengambil);?>" class="btn btn-warning btn-circle"> <i class="fa fa-edit"></i></a>
							<a class="btn btn-danger btn-circle" href="<?= base_url('Login/hapuspengambilan/'.$am->id_pengambil);?>"><i class="fa fa-trash"></i></a> 
							<a class="btn btn-info " href="<?= base_url('Login/print/'.$am->id_pengambil);?>"><i class="fa fa-print"></i>Print</a> 
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

 