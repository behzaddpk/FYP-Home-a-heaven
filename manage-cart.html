<?php
session_start();
include("connection.php");
$result = mysqli_query($conn, "SELECT * FROM  insertcategory  ");
$row = mysqli_fetch_array($result);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    IF(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'id');
            if(in_array($_POST['id'],$myitems))
            {
                echo '<script>
                        alert("Item Already Added");
                        window.location.href="display.php?cid='.$row['name'].'";
                        </script>';
            }
            
            else
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=$_SESSION['cart'][0]=array('id'=>$_POST['id'],'name'=>$_POST['item_name'],'price'=>$_POST['price'],'Qutantity'=>1);
            echo  '<script>
                    alert("Item Added");
                    window.location.href="display.php?cid='.$row['name'].'";
                    </script>';
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('id'=>$_POST['id'],'name'=>$_POST['item_name'],'price'=>$_POST['price'],'Qutantity'=>1);
            echo '<script>
                    alert("Item Added");
                    window.location.href="display.php?cid='.$row['name'].'";
                    </script>';
        }
    }
   if(isset($_POST['remove_item']))
   {
       foreach($_SESSION['cart'] as $key => $value)
       {
           if($value['id']==$_POST['id'])
           unset($_SESSION['cart'][$key]);
           $_SESSION['cart']=array_values($_SESSION['cart']);
           echo "<script>
           alert('Item Removed');
           window.location.href='mycart.php';
           </script>";
       }

   }
}
?>