<style type="text/css">
 table{
 border-collapse: collapse;
 }
 tr>th{
 background-color: gray;
 }
 tr>th,tr>td{
 padding: 5px;
 }
</style>
<center>
<h2>DATA PEGAMBILAN STNK</h2>
<table border="1">
        <tr>
        <th>Id</th>
  		<th>Nama Stnk</th> 
  		<th>No Mesin</th> 
  		<th>No Polisi</th> 
  		<th>Pajak Progresif</th> 
  		<th>Nama Pengambil</th> 
  		<th>Tanggal Pengambilan</th> 
  		<th>Aksi</th>
        </tr>
         <?php foreach($pengambilan as $am): 
        ?>
        <tr>
        <td><?= $am->id_pengambil; ?></td>						  
  		<td><?= $am->nama_stnk; ?></td>						  
  		<td><?= $am->no_mesin; ?></td>						  
  		<td><?= $am->no_polisi; ?></td>						  
  		<td><?= $am->pajak_progresif; ?></td>						  
  		<td><?= $am->nama_pengambil; ?></td>						  
  		<td><?= $am->tanggal_pengambilan; ?></td>
        </tr>
        <?php endforeach; 
        ?>
</table>
</center>

            <script>
                window.print()
            </script>