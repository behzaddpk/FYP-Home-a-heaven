<?php
session_start();

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home a Heaven</title>
        <link rel="stylesheet" href="stylesheet.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    </head>
    <body >
        <form action="" method="POST" class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                
                <input type="text" placeholder="Email" name="email">
            </div>

            <div class="textbox">
                <input type="password" placeholder="password" name="password">
            </div>         

            <input type="submit" class="btn"  name="submit" value="Login">
            <p class="account">Haven't Account?<a href="signup.php">   Click Here</a> </p>
        </form>
    </body>

</html>
<div >
<?php
include ('connection.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_research = "select * from home where email='$email' and password='$password' ";
    $query = mysqli_query($conn, $email_research);

    $email_count = mysqli_num_rows($query);
        if($email_count == 1){
            header('location:UserHome.php');
        }
        else {
            echo "login failed";
              
        }    
}


?> </div>