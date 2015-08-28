<?php
include ('/../config/conf.php');
include ('/../config/func_rahasia.php');
include ('/../config/func_identitas.php');
include ('/../config/func_combo.php');
include ('/../config/func_form.php');
include ('/../config/func_kriteria.php');
include('/../theme/header.php');
include('theme/menu.php');
?>
<div class="container theme-showcase" role="main">
    <?php
    if (!empty($_SESSION['login'])){
         include('content.php');
    }else{
        header('location:masuk.html');
    }
    ?>

</div>

<?php
include('/../theme/footer.php');
?>