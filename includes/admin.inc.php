<?php 
    include 'auto-load.inc.php';

?>

<?php
    $blog=new Blog();
if(isset($_POST['log_sub'])){
    $username=$_POST['username'];
    $pwd=$_POST['password'];

    $err=false;

    if(empty($username) || empty($pwd)){
        $err=true;
        echo 'Popunite sva polja';

    }else{

        $result=$blog->getUserByUsername($username);
        if($result==NULL){
            echo 'Ne postoji user';
        }else{
            $pwdCheck=password_verify(md5($pwd),$result->password);

            if(md5($pwd) != $result->password){

                echo 'Netacna sifra'.$pwd.$result->password;
            }else if(md5($pwd) == $result->password){
                $_SESSION['id']=$result->id;
                $_SESSION['username']=$username;
                header('Location: ../index.php');
                exit();

            }
            else {
                echo 'Greska';
            }
        }

    }



}