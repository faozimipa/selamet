<?php include('/../config/conf.php'); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?> </title>
    <link rel="stylesheet" href="<?= $alamat_web; ?>theme/dist/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="col-sm-4 col-sm-offset-4">
            <div class="well">
                <h3>Login</h3>
                <form action="ceklogin.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn btn-primary" value="LOGIN">
                </form>
            </div>
    </div>
</div>

</body>
</html>