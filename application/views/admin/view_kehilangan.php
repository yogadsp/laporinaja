<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard | <?php echo $title ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
</head>
<body>

<?php $this->load->view('admin/view_header');?>
<?php $this->load->view('admin/view_menu');?>
	<div class="isi">
		<div class="row">
			<div class="col-md-10">
				<div class="kotak">
					<table class="table table-hover" id="contoh">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">ID Barang</th>
					      <th scope="col">Tanggal</th>
					      <!-- <th scope="col">Jenis</th> -->
					      <th scope="col">Nama Barang</th>
					      <th scope="col">Spesifikasi</th>
					      <th scope="col">Lokasi</th>
					      <th scope="col">Kontak</th>
					      <th scope="col">User</th>
					    </tr>
					  </thead>
					  <tbody>
					  <?php foreach($data->result() as $row) { ?>
					  	<tr>
					      <td><?php echo $row->id_kehilangan ?></td>
					      <td><?php echo $row->tanggal ?></td>
					      <!-- <td><?php echo $row->jenis ?></td> -->
					      <td><?php echo $row->nama ?></td>
					      <td><?php echo $row->spesifikasi ?></td>
					      <td><?php echo $row->lokasi ?></td>
					      <td><?php echo $row->kontak ?></td>
					      <td><?php echo $row->id_user ?></td>
					    </tr>
					<?php } ?>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	
</div>

	<?php $this->load->view('admin/view_footer');?>
	
</body>
</html>