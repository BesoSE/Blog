  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

  <!-- Script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>
    <link rel="stylesheet" href="css/style.css">
    <script
  src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
  crossorigin="anonymous"></script>
    <title>Document</title>

</head>
<body>
 <!-- CONTAINER -->

    <div class="containerr">
    
        <nav class="nav">
       
            <ul>
           
            
                <li > <h1><a href="index.php">Blog Management</a></h1></li>
            
            </ul>
            <ul>
            <?php if(isset($_SESSION['username'])): ?>
                <li> <a href="add_post.php"><div class="newpost"> <img style="width:15px; " src="https://www.materialui.co/materialIcons/image/edit_white_192x192.png" alt="">   New Blog Post</div></a></li>
                <li> <a href="includes/logout.inc.php"><div class="log">Logout</div></a></li>
            <?php else: ?>
                
                <?php if( $_SERVER['REQUEST_URI']=='/imelBlog/admin.php'): ?>
                <li> <a href="index.php"><div class="log">Return to page</div></a></li>
                <?php else: ?>
                    <li> <a href="admin.php"><div class="log">Login</div></a></li>
            <?php endif; ?>
            <?php endif; ?>
            
            </ul>
            
        </nav>
