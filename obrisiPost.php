<?php 
    include 'includes/auto-load.inc.php';

?>
<?php if(isset($_SESSION['username'])==false){
        header('Location: ../imelBlog/admin.php');
        exit();
    } ?>

<?php

    $template=new Template('template/frontpage.temp.php');
    $blog=new Blog();

    $PostID=isset($_GET['id']) ? $_GET['id'] :null;

    if($PostID){
        if(isset($_SESSION['id'])){
            $uid=$_SESSION['id'];

           
            if( $blog->deletePost($PostID,$uid)){
                redirect('index.php','Post obrisan','success');
            }else{
                redirect('index.php','Nije moguce obrisati post','error');
            }

        }
        
    }
   


    echo $template;

?>