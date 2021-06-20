<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik UIN Sumatera Utara Medan</title>
    <link rel="stylesheet" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="<?php echo ASSET; ?>image/c.png" alt="IMG" >
        
    </header>
    <nav>
        <ul>
            <li>
                <a href="index.php"class="active">dashboard</a> 
            </li>
            <li>
                <a href="index_album.php">Album</a> 
            </li><li>
                <a href="index_category.php">Category</a> 
            </li><li>
                <a href="index_photos.php">Photos</a> 
            </li><li>
                <a href="index_post.php">Post</a> 
            </li>
            <li>
                <a href="login_logout.php ">logout</a> 
            </li>
          
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main_dashboard.php ";
        }
        ?>
    </section>
    
    <footer>
        Copyright &copy; 2021 M Sowban A 
    </footer>
      
   
    </main>
</body>
</html>