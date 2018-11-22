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
				<table class="table table-bordered table-striped" id="contoh">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Tanggal</th>
				      <th scope="col">Subject</th>
				      <th scope="col">Isi</th>
				      <th scope="col">Pengirim</th>
				    </tr>
				  </thead>
				  <tbody>
				  <?php 
				  	$no = 1;
				  	foreach($data->result() as $row) { ?>
				  	<tr>
				      <td><?php echo $row->tanggal ?></td>
				      <td><?php echo $row->subject ?></td>
				      <td><?php echo $row->isi ?></td>
				      <td><?php echo $row->send_by ?></td>
				      <td>
				      	<a href="<?php echo base_url();?>C_pesan/detail/<?php echo $row->id_pesan;?>">
				      		Lihat
				      	</a>
				  	  </td>
				    </tr>
				<?php } ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>

	
</div>
	
	<?php $this->load->view('admin/view_footer');?>
	
</body>
</html>