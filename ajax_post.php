<?php 
    include 'includes/auto-load.inc.php';

?>

<?php

    $template=new Template('template/ajax_post.temp.php');
    $blog=new Blog();

    $PostID=isset($_GET['id']) ? $_GET['id'] :null;

    if($PostID){
        $template->post=$blog->getPostById($PostID);
      
        
    }
    echo $template;
    

    

?>