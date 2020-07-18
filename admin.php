<?php 
    include 'includes/auto-load.inc.php';

?>

<?php

    $template=new Template('template/admin.temp.php');
    $blog=new Blog();



    echo $template;

?>