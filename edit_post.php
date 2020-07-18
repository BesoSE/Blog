<?php 
    include 'includes/auto-load.inc.php';

?>
<?php if(isset($_SESSION['username'])==false){
        header('Location: ../imelBlog/admin.php');
        exit();
    } ?>
<?php

    $template=new Template('template/edit_post.temp.php');
    $blog=new Blog();

 
    $PostID=isset($_GET['id']) ? $_GET['id'] :null;

    if(isset($_POST['sub_post'])){
        $data['title']=$_POST['title'];
        $data['content']=$_POST['content'];
        $data['date']=$_POST['date'];
       $id=  $_POST['id'];
       
    //    $slika=NULL;
    //    $img =NULL;
    //    if(isset($_POST['slika'])){
    //     $slika=$_POST['slika'];
    //     $data['img']=$slika;
    //    }
    
    //    if(isset($_POST['img'])){
    //     $img=$_POST['img'];
    //     $data['img']=$img;
    // }
   
    //     if(empty($img)){
    //         if(empty($slika)){
    //             $data['img']=NULL;
    //         }else{
    //             $data['img']=$slika;
    //         }
    //     }else{
    
          
    
        $file=$_FILES['img'];
        $fileName=$_FILES['img']['name'];
        $fileTmpName=$_FILES['img']['tmp_name'];
        $fileError=$_FILES['img']['error'];
        $fileSize=$_FILES['img']['size'];
    
        $fileExt=explode('.',$fileName);
    
        $fileActualExt = strtolower(end($fileExt));
    
        $allowed=['jpg','jpeg','png','svg'];
    
        if(in_array($fileActualExt,$allowed)){
    
            if($fileError === 0){
    
                if($fileSize<1000000){
    
                    $fileNameNew=uniqid('',true).".".$fileActualExt;
                    $fileDestination='uploads/'.$fileNameNew;
    
                    move_uploaded_file($fileTmpName,$fileDestination);
    
    
                    $data['img']='uploads/'.$fileNameNew;
    
    
                }else{
                    echo 'Prevelika slika';
                }
    
            }else{
                echo 'Error ';
            }
    
    
        }else{
            echo 'jpg,jpeg,png,svg';
        }
    
        }
        $err=false;
    
        if(empty( $data['title']) || empty($data['content']) ||empty($data['date'])){
            $err=true;
            
        }else{
            
            if( $blog->editPost($data,$id)){
                redirect('index.php','Post ureden','success');
            }else{
                redirect('index.php','Nije moguce urediti post','error');
            }
        }
    
    
    
    
    
    
    


    if($PostID){
        $template->post=$blog->getPostById($PostID);

      


    }
   


    echo $template;

?>