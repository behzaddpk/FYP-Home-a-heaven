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
                    <li><a href="insertcatogery.php">Add catoegory</a></li>
                    <strong><li><a href="products.php">Manage Products</a></li></strong>
                    <li><a href="manage-user.php">Manage user</a></li>
                    <li><a href="manage-order">Manage order</a></li>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </ul>
            </nav>
        </header><br><br><br><br><br><br><br><br><br>
        <div>
        <form   method="POST" class="login-box" style="align-item: center;" enctype="multipart/form-data">
                <h1>Add Products</h1>
                
            <div class="btn">
                <input type="file"  name="uploadfile" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Product name" name="name" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Orignal price" name="price" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Sales price" name="sales" required>
            </div>
            <div class="textbox" >
                <select  class="btn"  name="category">
                <option value="" font-color="black">
                Choose category
                        <?php


                        include ("connection.php");

                        error_reporting(0);
                            
                            $result = mysqli_query($conn, "SELECT * FROM  insertcategory  ");
                                while($row = mysqli_fetch_array($result))
                                    {
                                    
                        echo "<option>$row[name]</option>";
                            
                                    
                                    }
                        ?>
                </option>
                </select>
            </div>

            <input type="submit" class="btn"  name="submit" >
            </form>
        </div>



        <h1>User Record</h1><br><br>
        <hr>
         
        <div class="container mt-5">
            <div class="row">
            <table border="2" class="table table-bordered text-center">
                <td>
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Sales</th>
                        <th>Category</th>
                        <th colspan="2">Products Operations</th>
                        
                        </tr>
                    </thead>
                </td>
                        <?php
                        include("connection.php");
                        $result = mysqli_query($conn, "SELECT * FROM  products");
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
                                        <td><?php echo $row['Image'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['price'] ?></td>
                                        <td><?php echo $row['sales'] ?></td>
                                        <td><?php echo $row['category'] ?></td>
                                        <td><a href="update.php"> Update</a></td>
                                        <td><a href="delete.php">Delete</a></td>

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

    <?php
    include("connection.php");
    if(isset($_FILES['uploadfile'])){
           
            $file= $_FILES['uploadfile']['name'];
            $tmpfile= $_FILES['uploadfile']['tmp_name'];
            $folder = "pic/".$file;
            move_uploaded_file($tmpfile,$folder);
            $name= $_POST['name'];
            $price= $_POST['price'];
            $sales= $_POST['sales'];
            $category= $_POST['category'];
            
            

            $data = "INSERT  INTO products (Image, name , price, sales, category) VALUES ('$file','$name','$price','$sales','$category')";

            $query = mysqli_query($conn, $data);

        
        if($query){
            echo "your data is inserted";
        }
        else{
            echo "find the solution";
        }
               
}
      ?>
    </body>

</html>