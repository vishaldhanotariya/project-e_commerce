<?php
    require("./db.php");
    require("functions.php");
    if(isset($_POST["createAdmin"])){
        $uname = $_POST["username"];
        $password = password_hash($_POST["password"],PASSWORD_BCRYPT);
        $email = $_POST["email"];
        $role = $_POST["role"];
        $createdAt = $_POST["created_at"];
        if(checkEmailExists($con,$email)){
            if(AdminRegister($uname,$password,$email,$role,$createdAt,$con)){
            echo "Registered";
            }else{
                echo "Not Registered";
            }
        }else{
            header("Location: ./admin/dashboard/adminRegister.php?email=exists");
        }
    }

    if(isset($_POST["adminLogin"])){
        $uname = $_POST["username"];
        $password = $_POST["password"];
        AdminLogin($uname,$password,$con);
    }

    if(isset($_POST["add_cat"])){
        if(addCategory($con,$_POST["cat_name"],$_POST["cat_desc"])){
            echo "Addes";
        }else{
            echo "Not Added";
        }
    }


    if(isset($_POST["addItem"])){
        $name = $_POST["name"];
        $des = $_POST["description"];
        $price = $_POST["price"];
        $stock_qty = $_POST["stock_qty"];
        $category = $_POST["category"];
        $created_at = $_POST["created_at"];
        $image = $_FILES["product_image"];
        $sql = "SELECT category_id FROM categories WHERE name = '$category'";
        $res = mysqli_query($con,$sql);
        $cat_id = 0;
        while($cat = mysqli_fetch_assoc($res)){
            $cat_id = $cat["category_id"];
        }
        // addProduct($con,$name,$des,$price,$stock_qty,$cat_id,$created_at,$image["tmp_name"]);
        if(addProduct($con,$name,$des,$price,$stock_qty,$cat_id,$created_at,$image["tmp_name"])){
            echo "Product Added";
        }else{
            echo "Not Added";
        }
    }

    if(isset($_POST["registerUser"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"],PASSWORD_BCRYPT);
        $phone = $_POST["phone"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $address = $_POST["address"];
        $pinCode = $_POST["pin"];
        $created_at = $_POST["created_at"];
        $photo = $_FILES["photo"]["tmp_name"];
        if(registerUser($con,$name,$email,$password,$phone,$country,$state,$city,$address,$pinCode,$photo,$created_at)){
            echo "<center><h1>User Regostered</h1></center>";
        }else{
            echo "<h1>Something went Wrong</h1>";
        }
    }



?>