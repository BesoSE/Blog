<?php 
    include 'auto-load.inc.php';

?>

<?php 
    $blog=new Blog();
if(isset($_POST['sub_post'])){
    $data['title']=$_POST['title'];
    $data['content']=$_POST['content'];
    $data['date']=$_POST['date'];
   
    $data['uid']=$_SESSION['id'];

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
                $fileDestination='../uploads/'.$fileNameNew;

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


    $err=false;

    if(empty( $data['title']) || empty($data['content']) ||empty($data['date'])){
        $err=true;
        echo 'Popunite polja';
    }else{
        
        if( $blog->addPost($data)){
            redirect('../index.php','Post dodan','success');
        }else{
            redirect('../index.php','Nije moguce dodati post','error');
        }
    }






}


?>