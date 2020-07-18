<?php 
   include 'header.temp.php';
   ?>
 <?php  if(  $post->userid != $_SESSION['id']){
            header('Location: ../imelBlog/add_post.php');
        exit();
        }
        ?>
  

   
   <div class="add">

<h3>Edit post</h3>
    <form class="formadd" action="edit_post.php?id=<?php echo $post->id; ?>"  method="POST" enctype="multipart/form-data" >
    
        <div class="prvidio">
        <label for="">Title</label>
        <input type="text"  name="title" value="<?php echo $post->title; ?>">
        <label for="">Content</label>
        <textarea type="text" class="content" name="content"><?php echo $post->content; ?></textarea>
        
        <input type="text"  name="id" style="visibility:hidden;" value="<?php echo $post->id; ?>">
        </div>
        <div class="drugidio">
        <label for="">Date</label>
        <input type="date" name="date" value="<?php echo $post->date; ?>">
       
        <label for="" style=" margin-top:12%; ">Featured Image</label>
        <div  class="preview">
        <img style="width:100%; height:200px;" src="<?php echo $post->imageUrl; ?>" id="file-ip-1-preview">
      </div>
      <div class="t" style="display: flex; flex-direction: row; justify-content:space-between;">
      <label for="file-ip-1" style="color:blue;">Select Image</label>
      
      
      
      <div type="reset" style="color:red; margin-top:3%; " onclick="remove()">Remove Image</div>
      </div>
      <input type="file" id="file-ip-1" name="img" style="visibility:hidden;" accept="image/*" onchange="showPreview(event);">
        <div  class="butt" style=" margin-top:20%; " >
        <a href="index.php" style="padding: 0.5em 1.5em; background-color:rgb(105,105,105) ; border-radius: 5px; color:white;" >Cancle</a>
        <input type="submit" style="padding: 0.4em 1.4em; background-color: rgb(30, 226, 30); border-radius: 5px; color:white; border:0; margin-left: 1em;" value='Edit Post' name="sub_post">
        </div>
        </div>
    </form>

    </div>
    
   

 



      <script>
    function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}

    function remove(){
     
        src=0;
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = "";
        file=document.getElementById("file-ip-1"); 
        file.value="";
    }
</script>

   <?php 
    include 'footer.temp.php';
   ?>
