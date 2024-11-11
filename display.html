<?php
session_start();
error_reporting(0);

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
        <?php
            include("navbar.php");

        ?>

        <hr>
        <section class="collectionitems ">
        <?php
            $result = mysqli_query($conn, "SELECT * FROM  products WHERE category = '$cat_id' ");
            $row1 = mysqli_fetch_array($result);
        ?>
        <h1 ><?php echo $row1['name'] ?></h1>
        
            
        <div class="container mt-5">
            <div class="row">
                        <?php
                        include("connection.php");

                        if(isset($_GET['cid']))
                            {
                                $cat_id = $_GET['cid'];
                                
                            }

                        $result = mysqli_query($conn, "SELECT * FROM  products WHERE category = '$cat_id' ");
                        $data = mysqli_num_rows($result) > 0;
                        if($data)
                        {
                            while($row = mysqli_fetch_array($result))
                            { 
                            ?> 
                            <div class="col-lg-3 float:left;">
                            <form action="manage-cart.php" method="POST">
                                <div class="card " >
                                    <div class="card-body">
                                        <img src="pic/<?php echo $row['Image'] ?>" class="card-img-top">
                                        
                                        <h4 class="card-title" name="item_name"><?php echo $row['name'] ?></h4>
                                        <del><h6 class="card-title" name="price">Rs:<?php echo $row['price'] ?></h6></del>
                                        <h6 class="card-title" name="sales">Rs:<?php echo $row['sales'] ?></h6>
                                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to cart</button>
                                        <input type="hidden" name="id" value=<?php echo $row['id']?> >
                                        <input type="hidden" name="item_name" value=<?php echo $row['name']  ?>>
                                        <input type="hidden" name="price" value=<?php echo $row['price']  ?>>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <?php
                            }
                        }
                        
                        else
                        {
                            echo "NO Record Found";
                        }
                            ?>
                
            </div>
        </div>

                                  
</body>  
</html>         