<?php 
   include 'header.temp.php';
   ?>

   

   
   <div class="add">
    <h3>New Blog Post</h3>

    <form class="formadd" action="includes/add_post.inc.php" method="POST" enctype="multipart/form-data" >
        <div class="prvidio">
        <label for="">Title</label>
        <input type="text"  name="title">
        <label for="">Content</label>
        
        <textarea type="text" class="content" name="content"></textarea>
        </div>
        <div class="drugidio">
        <label for="">Date</label>
        <input type="date" name="date">
       
        <label for="" style=" margin-top:12%; ">Featured Image</label>
        <div  class="preview">
        <img style="width:100%; height:200px;" id="file-ip-1-preview">
      </div>
      <div class="t" style="display: flex; flex-direction: row; justify-content:space-between;">
      <label for="file-ip-1" style="color:blue;">Select Image</label>
      
      
      
      <div type="reset" style="color:red; margin-top:3%; " onclick="remove()">Remove Image</div>
      </div>
      <input type="file" id="file-ip-1" name="img" style="visibility:hidden;" accept="image/*" onchange="showPreview(event);">
        <div  class="butt" style=" margin-top:20%; " >
        <a href="index.php" style="padding: 0.5em 1.5em; background-color:rgb(105,105,105) ; border-radius: 5px; color:white;" >Cancle</a>
        <input type="submit" style="padding: 0.4em 1.4em; background-color: rgb(30, 226, 30); border-radius: 5px; color:white; border:0; margin-left: 1em;" value='Publish Post' name="sub_post">
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

