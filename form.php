<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <title>Home a Heaven</title>
        <title>Home a Heaven</title>
</head>
<body>
<?php
include("navbar.php");
?>
<div class="container">
    <div class="row ">
        <div class="col-lg-6 mt-50">
            <form class="row g-3" method="POST">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4 " required>
            </div><br><br>
            <div class="col-md-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
                <label class="form-check-label" for="defaultCheck1">
                Keep me up to date on news and exclusive offers
                </label>
                </div>
            </div>

            <div class="col-12 mt-4">
            <h3>shopping Address</h3>
            </div>

            <div class="col-6">
                <label for="inputAddress" class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control" id="inputAddress" placeholder="First Name" required>
            </div>

            <div class="col-6">
                <label for="inputAddress" class="form-label">Second Name</label>
                <input type="text" name="lastname" class="form-control" id="inputAddress" placeholder="Second Name" required>
            </div>

            
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address </label>
                <input type="text" name="address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
            </div>
            <div class="col-md-12">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" name="city" class="form-control" id="inputCity" required>
            </div>

            <div class="col-md-4 mt-3">
                <label for="inputState" class="form-label">Country</label>
                <select id="inputState" name="country" class="form-select">
                <option selected>Choose...</option>
                <option>Pakistan</option>
                <option>India</option>
                <option>USA</option>
                <option>England</option>
                <option>U.K</option>
                <option>UAE</option>
                </select>
            </div><br>
            <div class="col-md-12">
                <label for="inputZip" class="form-label">Contact No:</label>
                <input type="text" name="contact" class="form-control" id="inputZip" required>
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
                </div>
            </div>
            <div class="col-12 mt-2">
                <button type="submit" class="btn btn-primary" name="submit">Continue shopping</button>
            </div>
            </form>
        
        </div>


        <div class="col-6 bg=off-white">
            
        </div>
    </div>
</div>


<?php
include("connection.php");
if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $contact = $_POST['contact'];

        $data = "INSERT INTO `order`(`email`, `firstname`, `lastname`, `address`, `city`, `country`, `contact`)   VALUES ('$email', '$fname', '$lname', '$address', '$city', '$country', '$contact')";
        $query = mysqli_query($conn, $data);

        if($query)
        {
            echo '<script>
                    alert("Order Compelted");
                    window.location.href="index.php.";
                    </script>';
        }
        else
        {
            
        }
    }

?>

</body>
</html>


