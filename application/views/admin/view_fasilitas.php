<!DOCTYPE html>

<?php $this->load->view('admin/view_header');?>

	<div class="row">
		<?php $this->load->view('admin/view_menu');?>

		<div class="col-md-10 isi">
			<table class="display table table-sm table-hover" id="contoh">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Tanggal</th>
			      <th scope="col">Fasilitas</th>
			      <th scope="col">Keluhan</th>
			      <th scope="col">Lokasi</th>
			      <th scope="col">Kontak</th>
			      <th scope="col">ID User</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php 
			  	$no = 1;
			  	foreach($data->result() as $row) { ?>
			  	<tr>
			      <td><?php echo $no++ ?></td>
			      <td><?php echo $row->tanggal ?></td>
			      <td><?php echo $row->nama ?></td>
			      <td><?php echo $row->keluhan ?></td>
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

	<?php $this->load->view('admin/view_footer');?>

</body>
</html>