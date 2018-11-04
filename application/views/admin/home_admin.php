<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/gaya.css">
</head>
<body>

<div class="container-fluid">
	<div class="row">	
		<div class="header"></div>
	</div>
	<div class="row">
		<?php $this->load->view('admin/view_menu');?>
	</div>
</div>

</body>
</html>