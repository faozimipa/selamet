<?php

include ('/../config/conf.php');
include ('/../config/func.php');
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