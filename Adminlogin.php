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
        <form  method="POST" class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Email" name="email">
            </div>

            <div class="textbox">
                <input type="password" placeholder="password" name="password">
            </div>

             

            

            <input type="submit" class="btn"  name="submit" value="Login55">
        </form>
    </body>

</html>

<?php
include ('connection.php');
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_research = "select * from admin where email='$email' and password='$password' ";
    $query = mysqli_query($conn, $email_research);

    $email_count = mysqli_num_rows($query);
        if($email_count == 1){
            echo "login successful";
            $_SESSION['email'] =$email;
            header('location:admin.php');
        }
        else {
            echo "login failed";
           //header ('location:login.php');      
        }    
}


?>