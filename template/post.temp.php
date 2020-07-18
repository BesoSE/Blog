<?php 
   include 'header.temp.php';
   ?>


    <div class="prikaz">
    <h3><?php echo $post->title ?></h3>
    <p><?php echo $post->content ?></p>
    <img style="width:200px; " src="<?php echo $post->imageUrl ?>" alt="">

    <p>Post by <?php echo $post->username ?> on <?php echo $post->date ?> </p>
    </div>

   <?php 
    include 'footer.temp.php';
   ?>