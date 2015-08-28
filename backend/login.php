<?php include('/../config/conf.php'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?> </title>
    <link rel="stylesheet" href="<?= $alamat_web; ?>theme/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?= $alamat_web; ?>theme/css/theme.css">

</head>
<body style="background: #555;">	
	<div class="modal show" role="dialog">
		<div class="col-sm-4 col-sm-offset-4">
            <div class="well signin">
				<div class="modal-header">
					<h4>Log in</h4>
					<p>Silahkan masuk menggunakan akun Anda</p>
				</div>
                <div class="modal-body">
					<form action="ceklogin.php" method="POST">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
						<input type="submit" class="btn btn-success btn-block" value="LOGIN">
					</form>
				</div>	
				<div class="modal-footer">
					&copy; <?php echo date('Y'); ?> 
				</div>
            
		</div>
		
		</div>
	</div>
</body>
</html>