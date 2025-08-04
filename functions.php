<?php
    function AdminRegister($username,$password,$email,$role,$created_at,$con){
        $sql = "INSERT INTO admins(username,password,email,role,created_at) VALUES('$username','$password','$email','$role','$created_at')";

        $result = mysqli_query($con,$sql);
        if(!$result){
            return false;
        }
        return true;
    }
    function checkEmailExists($con,$email){
        $sql = "SELECT email from admins WHERE email = '$email'";
        $res = mysqli_query($con,$sql);
        if(!$res){
            return true;
        }else{
            return false;
        }
    }

    function AdminLogin($uname,$password,$con){
        $sql = "SELECT * FROM admins WHERE username = '$uname'";

        $res = mysqli_query($con,$sql);
        if(!$res){
            header("Location: ./admin/dashboard/adminLogin.php?username=notexists");
        }else{
            while($data = mysqli_fetch_assoc($res)){
                if($data["username"] == $uname && password_verify($password,$data["password"])){
                    session_start();
                    $_SESSION["loggedIn"] = true;
                    $_SESSION["username"] = $data["username"];
                    header("Location: ./admin/dashboard/dashboard.php?login=true");
                }
            }
        }
    }
    function fetchCategory($con){
        $sql = "SELECT * FROM categories";
        $res = mysqli_query($con,$sql);
        return $res;
    }

    function addCategory($con,$catName,$catDesc){
        $sql= "INSERT INTO categories(name,description) VALUES('$catName','$catDesc')";
        $res = mysqli_query($con,$sql);
        if(!$res){
            return false;
        }
        else{
            return true;
        }
    }

    function addProduct($con,$name,$description,$price,$stock,$cat_id,$created_at,$p_image){
        $sql = "INSERT INTO products(name,description,price,stock_quantity,category_id,created_at) VALUES('$name','$description',$price,$stock,$cat_id,'$created_at')";
        $res = mysqli_query($con,$sql);
        $pId = mysqli_insert_id($con);
        // print_r(mysqli_fetch_assoc($res));
        if(!$res){
            echo "Wrong";
        }else{
            // storeProductImage($p_image,$con,$cat_id,$pId);
            if(storeProductImage($p_image,$con,$cat_id,$pId,$description)){
                return true;
            }else{
                return false;
            }
        }
    }

    function storeProductImage($image,$con,$cat_id,$pId,$description){
        $sql = "SELECT name FROM categories WHERE category_id = $cat_id";
        $res = mysqli_query($con,$sql);
        $catName = "";
        while($data = mysqli_fetch_assoc($res)){
            $catName = $data["name"];
            echo $catName;
        }
        $destination = "./assets/images/product_Images/$catName";
        if(is_dir($destination)){
            $fileName = $destination."/$pId.png";
            if(move_uploaded_file($image,$fileName)){
                // echo "File Upload Problem";
                $sql = "INSERT INTO product_images(product_id,image_url,alt_text) VALUES($pId,'$fileName','$description')";
                $res = mysqli_query($con,$sql);
                if(!$res){
                    return false;
                }else{
                    return true;
                }
            }
        }else{
            mkdir("./assets/images/product_Images/$catName");
            $fileName = $destination."/$pId.png";
            if(move_uploaded_file($image,$fileName)){
                // echo "File Upload Problem";
                $sql = "INSERT INTO product_images(product_id,image_url,alt_text) VALUES($pId,'$fileName','$description')";
                $res = mysqli_query($con,$sql);
                if(!$res){
                    return false;
                }else{
                    return true;
                }
                
            }
        }
        // echo "Problem";
        return false;
    }


    function fetchProducts($con){
        $sql = "SELECT * FROM products";
        $res = mysqli_query($con,$sql);
        return $res;
    }
    function fetchProductImages($con,$product_id){
        $sql = "SELECT * FROM product_images WHERE product_id = $product_id"; 
        $res = mysqli_query($con,$sql);
        while($photo = mysqli_fetch_assoc($res)){
            return $photo["image_url"];
        }
    }

    function registerUser($con,$name,$email,$password,$phone,$country,$state,$city,$address,$pin,$photo,$created_at){

        $destination = "./assets/images/userImages/";
        $fileName = $destination."$name.png";
        if(move_uploaded_file($photo,$fileName)){
            $sql = "INSERT INTO users(name,email,password,Phone,created_at,image_url) VALUES('$name','$email','$password',$phone,'$created_at','$fileName')";

            $res = mysqli_query($con,$sql);
            $userId = mysqli_insert_id($con);
            $sql2 = "INSERT INTO addresses(user_id,address_line,city,state,zip_code,country) VALUES($userId,'$address','$city','$state','$pin','$country')";
            $res2 = mysqli_query($con,$sql2);
            if(!$res && !$res2){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }


        
    }
?>