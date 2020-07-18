<?php

class Blog{

    private $db;

    public function __construct(){
        $this->db=new Db();
    }

    //GET ALL POSTS

    public function getAllPosts(){

        $sql="SELECT * FROM posts";
        $this->db->query($sql);

        return $this->db->resultSet();

    }


    //GET USER BY USERNAME

    public function getUserByUsername($username){
        $sql="SELECT * FROM users WHERE username=:username";

        $this->db->query($sql);

        $this->db->bind(':username',$username);

        return $this->db->single();


    }

    //GET POST BY ID
    public function getPostById($PostID){
        $sql='SELECT p.id,p.title,p.content,p.date,p.imageUrl,p.userid,u.username,u.password FROM posts as p
        inner join users as u
        on p.userid=u.id
         Where p.id=:id';

        $this->db->query($sql);
        $this->db->bind(':id',$PostID);

        return $this->db->single();



    }


    //INSERT POSTS 

    public function addPost($data){
        $sql="INSERT INTO posts (title,content,date,imageUrl,userid)
        value(:title,:content,:date,:img,:uid)";
         $this->db->query($sql);
         $this->db->bind(':title',$data['title']);
         $this->db->bind(':content',$data['content']);
         $this->db->bind(':date',$data['date']);
         $this->db->bind(':img',$data['img']);
         $this->db->bind(':uid',$data['uid']);


         if($this->db->execute()){
             return true;
             
             
         }else{
             return false;
         }

    }

    //EDIT POST

    public  function editPost($data,$id){
        $sql="UPDATE posts SET title=:title,content=:content,date=:date,imageUrl=:img Where id=:id";
        $this->db->query($sql);
        $this->db->bind(':title',$data['title']);
        $this->db->bind(':content',$data['content']);
        $this->db->bind(':date',$data['date']);
        $this->db->bind(':img',$data['img']);

        $this->db->bind(':id',$id);


        if($this->db->execute()){
            return true;
            
            
        }else{
            return false;
        }


    }


    //DELETE POST
    public function deletePost($id,$uid){
        $sql="DELETE FROM posts WHERE id=:id and userid=:uid";
        $this->db->query($sql);

        $this->db->bind(':id',$id);
        $this->db->bind(':uid',$uid);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }



}