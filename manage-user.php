<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home a Heaven</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
        <header class="navigation" >
           
            <nav class="menu">
                <ul> 
                    <strong><li><a href="insertcatogery.php">Add Category</a></li></strong>
                    <strong><li><a href="products.php">Manage Products</a></li></strong>
                    <strong><li><a href="manage-user.php">Manage user</a></li></strong>
                    <strong><li><a href="manage-order.php">Manage order</a></li></strong>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </ul>
            </nav><br><br><br><br>
        </header>

        
        <h1>User Record</h1><br><br>
        <hr>
         
        <div class="container mt-5">
            <div class="row">
            <table border="2" class="table table-bordered text-center">
                <td>
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Contact NO</th>
                        <th>Addres</th>
                        <th>Remove user</th>
                        </tr>
                    </thead>
                </td>
                        <?php
                        include("connection.php");
                        $result = mysqli_query($conn, "SELECT * FROM  home");
                        $data = mysqli_num_rows($result) > 0;
                        if($data)
                        {
                            while($row = mysqli_fetch_array($result))
                            { 
                            ?> 
                            <div class="col-lg-3 float:center;">
                                <td>
                                    <tbody py-2>
                                        <tr>
                                        <th><?php echo $row['id'] ?></th>
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php echo $row['password'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['contactno'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><a href="delet.php">Remove</a></td>
                                        </tr>
                                    
                                    </tbody>
                                </td>
                                
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
</table>