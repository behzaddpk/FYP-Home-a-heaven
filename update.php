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
            <div class="textbox">
                <input type="text" placeholder="Write Product ID" name="id" value="" required>
            </div>
                
            <div class="btn">
                <input type="file"  name="uploadfile" >
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Product name" name="name" value="" >
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Orignal price" name="price" value="" >
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Sales price" name="sales" value="" >
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

            <input type="submit" class="btn"  name="Update" >
            </form>
        </div>



        

    <?php
    include("connection.php");
    if(isset($_FILES['uploadfile'])){

            $id = $_POST['id'];
            $file= $_FILES['uploadfile']['name'];
            $tmpfile= $_FILES['uploadfile']['tmp_name'];
            $folder = "pic/".$file;
            move_uploaded_file($tmpfile,$folder);
            $name= $_POST['name'];
            $price= $_POST['price'];
            $sales= $_POST['sales'];
            $category= $_POST['category'];
            
            

            $data = "UPDATE products SET Image='$_POST[uploadfile]',name='$_POST[name]',price='$_POST[price]',sales='$_POST[sales]',category='$_POST[category]' WHERE id='$_POST[id]'";

            $query = mysqli_query($conn, $data);

        
        if($query){
            echo "your data is updated";
        }
        else{
            echo "find the solution";
        }
               
}
      ?>
    </body>

</html>