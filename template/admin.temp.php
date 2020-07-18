<?php 
   include 'header.temp.php';
   ?>

<?php if(isset($_SESSION['username'])){
        header('Location: ../imelBlog/index.php');
        exit();
    } ?>
    <form action="includes/admin.inc.php" method="POST" class="login">
        <label for="">Username</label>
        <input type="text" name="username" placeholder="Username">
        <label for="">Password</label>
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="log_sub" class="log_sub" value="Proceed to login">
    </form>

</div>
   <?php 
    include 'footer.temp.php';
   ?>