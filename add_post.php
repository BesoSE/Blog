<?php 
    include 'includes/auto-load.inc.php';

?>
<?php if(isset($_SESSION['username'])==false){
        header('Location: ../imelBlog/admin.php');
        exit();
    } ?>
<?php

    $template=new Template('template/add_post.temp.php');
    $blog=new Blog();

   


    echo $template;

?>