<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Registration - VK E-Commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }
        .register-container {
            background: #fff;
            max-width: 450px;
            margin: 50px auto;
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            padding: 40px 35px 30px 35px;
        }
        .register-container h2 {
            text-align: center;
            color: #2575fc;
            margin-bottom: 25px;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 18px;
        }
        .form-group label {
            display: block;
            color: #333;
            margin-bottom: 6px;
            font-weight: 500;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #d1d1d1;
            border-radius: 6px;
            font-size: 15px;
            background: #f9f9f9;
            transition: border-color 0.2s;
        }
        .form-group input:focus, .form-group select:focus {
            border-color: #2575fc;
            outline: none;
        }
        .register-btn {
            width: 100%;
            background: linear-gradient(90deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .register-btn:hover {
            background: linear-gradient(90deg, #2575fc 0%, #6a11cb 100%);
        }
        .login-link {
            text-align: center;
            margin-top: 18px;
            color: #666;
        }
        .login-link a {
            color: #2575fc;
            text-decoration: none;
            font-weight: 500;
        }
        @media (max-width: 500px) {
            .register-container {
                padding: 25px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Create Your Account</h2>
        <form action="/VK-Ecommerce/process.php" method="POST" autocomplete="off" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required maxlength="100" placeholder="Enter your full name">
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required maxlength="100" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required minlength="6" maxlength="50" placeholder="Create a password">
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required maxlength="15" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select id="country" name="country" required>
                    <option value="">Select</option>
                </select>
            </div>
            <div class="form-group">
                <label for="state">State</label>
                <select name="state" id="state" disabled>
                    <option value="">Select State</option>
                </select>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" disabled>
                    <option>Select</option>
                </select>   
            </div>
            <div class="form-group">
                <label for="address_line">Address Line</label>
                <input type="text" id="address_line" name="address" required maxlength="150" placeholder="Street address, P.O. box, etc.">
            </div>
            <div class="form-group">
                <label for="zip_code">ZIP/Postal Code</label>
                <input type="text" id="zip_code" name="pin" required maxlength="20" placeholder="Enter your ZIP code">
            </div>
            <div class="form-group">
                <label for="photo">User Photo</label>
                <input type="file" id="userPhoto" name="photo">
            </div>
            
            <input type="text" name="created_at" value="" id="created_at" hidden readonly>
            <button type="submit" class="register-btn" name="registerUser">Register</button>
        </form>
        <div class="login-link">
            Already have an account? <a href="userlogin.php">Login here</a>
        </div>
    </div>
    <script src="../js/index.js"></script>
</body>
</html>