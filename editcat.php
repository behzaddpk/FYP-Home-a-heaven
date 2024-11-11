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
                    <li><a href="manage-order.php">Manage order</a></li>
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </ul>
            </nav>
        </header><br><br><br><br><br><br><br><br><br>
        <div>
        <form   method="POST" class="login-box" style="align-item: center;">
                <h1>Add Category</h1>
            <div class="textbox">
                <input type="text" placeholder="Write Category ID" name="id" value="" required>
            </div>
            <div class="textbox">
                <input type="text" placeholder="Write Category Name" name="categoryname" required>
            </div>

            <input type="submit" class="btn"  name="submit" Place="Add Category">
            </form>
        </div>           


    <?php
    include("connection.php");
    if(isset($_POST['submit'])){
           
            $id= $_POST['id'];

            $data = "UPDATE `insertcategory` SET name= '$_POST[categoryname]' WHERE id='$_POST[id]'";

            $query = mysqli_query($conn, $data);             
}
      ?>

    </body>

</html>