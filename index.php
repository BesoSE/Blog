<?php 
    include 'includes/auto-load.inc.php';

?>

<?php

    $template=new Template('template/frontpage.temp.php');
    $blog=new Blog();

    $template->posts=$blog->getAllPosts();


    echo $template;

?>