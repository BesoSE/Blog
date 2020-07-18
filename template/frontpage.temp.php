<?php 
   include 'header.temp.php';
   ?>
<div class="poruka" style="background-color:blue; color:white; text-align:center;">
 <?php echo displayMessage(); ?>

</div>
<div class="front">

<div class="container">
 

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Post</h4>
        </div>
        <div class="modal-body">
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

      <h3>Blog posts list</h3>
<table  class="tableposts">

   <thead>
      <th style="padding:1%;" class="t">TITLE</th>
      <th class="d">DATE</th>
      <th class="a">ACTIONS</th>
     
   </thead>
<?php foreach($posts as $post): ?>

   <tbody>
      <td class="t" style="padding:1%;" ><a href="post.php?id=<?php echo $post->id; ?>"> <?php echo substr($post->title,0,90); if(strlen($post->title)>=90){echo '...';} ?></a></td>
      <td class="d"> <?php echo $post->date; ?></td>
      <td class="a"  ><a href="" class="ajax_post"  data-toggle="modal" data-target="#myModal" data-id="<?php echo $post->id; ?>"> <img class="action" src="https://cdn4.iconfinder.com/data/icons/global-protection-1/512/xxx028-512.png" alt=""> 
    <a href="edit_post.php?id=<?php echo $post->id; ?>"> <img class="action" src="https://cdn1.iconfinder.com/data/icons/social-messaging-ui-color/254000/51-512.png" alt=""> </a> 
    <a href="#" data-id="<?php echo $post->id; ?>"  class="obrisiPost"> <img class="action" src="https://cdn4.iconfinder.com/data/icons/office-add-on-flat/48/Office_-_Add_On-07-512.png" alt=""> </a> 
   </td>
   
   </tbody>
   <?php endforeach; ?>
</table>
  



</div>

<script src="js/main.js"></script>

<?php if(isset($_SESSION['username'])):?>
    

<script>
$(function () {
$(".obrisiPost").click(function (event){
    event.preventDefault();
    const id=$(this).attr("data-id");
  
    if(confirm('Obrisi Post?')){
     
     
    
     fetch(`/imelBlog/obrisiPost.php?id=${id}`,{
         method:"DELETE"
     }).then(res=>window.location.reload());

     $(".poruka").html('Post Obrisan');
    }
 });

});
</script>

<?php endif; ?>
   <?php 
    include 'footer.temp.php';
   ?>