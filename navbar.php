<?php
session_start();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Home a Heaven</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
        <header class="navigation py-5">
          <div class="container">
            <div class="row">
                <div class="col-md-2 pb-2">
                   <a href="index.php"><img src="photo/finallogo.png", class="logo"></a>  
                </div>
                
                <div class="col-md-7 ">
                  <form action="search.php" method="GET">
                  <div class="input-group search">
                      <input type="text" class="form-control" name="search-product" placeholder="Search for...">
                      <span class="input-group-btn">
                          <button class="btn btn-default"  type="submit" name="search" >search</button>
                      </span>
                  </div>
                  </form>
              </div>
                
              <div class="col-md-3 ">
                    
                    <a href="Login.php"><i class="fas fa-user "></i></a>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                    ?>
                    <a href="mycart.php" class= "btn btn-outline-success ml-2">My cart <?php echo $count ?></a>
                </div>
            </div>
          </div>
        </header>

       
                <div class="menu">
                    
                                    <ul>
                                        <?php
                                        include ("connection.php");
                                        if(isset($_GET['cid']))
                                        {
                                            $cat_id = $_GET['cid'];
                                        }
                                        $result = mysqli_query($conn, "SELECT * FROM  insertcategory  ");
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                
                                        echo '<li><a href="display.php?cid='.$row['name'].'">'.$row['name'].'</a></li>';                                          
                                            }
                                        ?>
                                    </ul>
                    
                </div>         

    </body>
</html>