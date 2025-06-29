<?php include 'db/database.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            height: 100vh;
            display: flex;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100vh;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .left-section {
            flex: 1;
            background:none;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .left-section::before {
            content: '';
            position:absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('images/signup.avif');
            background-size: cover;
            background-position: center;
            opacity: 0.8;
        }

        .right-section {
            flex: 1;
            background: white;
            padding: 70px 90px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            max-width: 450px;
        }

        .form-container {
            width: 100%;
            max-width: 450px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 5px;
        }

        label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #4a5568;
            margin-bottom: 8px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        
        input[type="tel"] {
            width: 100%;
            padding: 16px 0;
            border: none;
            border-bottom: 2px solid #e2e8f0;
            background: transparent;
            font-size: 1rem;
            color: #2d3748;
            transition: border-color 0.3s ease;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus, 
        input[type="tel"]:focus{
            border-bottom-color: #9f7aea;
        }

        input::placeholder {
            color: #a0aec0;
            font-size: 0.95rem;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin: 32px 0;
            gap: 12px;
        }

        .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #9f7aea;
        }

        .checkbox-group label {
            margin: 0;
            font-size: 0.9rem;
            color: #718096;
            cursor: pointer;
        }

        .checkbox-group a {
            color: #9f7aea;
            text-decoration: none;
        }

        .checkbox-group a:hover {
            text-decoration: underline;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 32px;
        }

        .sign-up-btn {
            background: linear-gradient(135deg, #b794f6 0%, #9f7aea 100%);
            color: white;
            border: none;
            padding: 16px 48px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .sign-up-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(159, 122, 234, 0.3);
        }

        .sign-in-link {
            color: #718096;
            text-decoration: none;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sign-in-link:hover {
            color: #9f7aea;
        }

        .sign-in-link::after {
            content: '→';
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section {
                height: 200px;
                flex: none;
            }

            .right-section {
                padding: 40px 30px;
                max-width: none;
            }

            h1 {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .button-group {
                flex-direction: column;
                gap: 20px;
                align-items: stretch;
            }

            .sign-in-link {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section"></div>
        
        <div class="right-section">
            <div class="form-container">
                <h1>Sign Up</h1>
                
                <form>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" placeholder="Name..." required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Email address..." required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" placeholder="Phone..." required>
                    </div>
                    
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Username..." required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="••••••••••••" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="repeat-password">Repeat Password</label>
                        <input type="password" id="repeat-password" name="repeat-password" placeholder="••••••••••••" required>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I agree to the <a href="#" target="_blank">Terms of User</a></label>
                    </div>
                    
                    <div class="button-group">
                        <button type="submit" class="sign-up-btn">Sign Up</button>
                        <a href="#" class="sign-in-link">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="notify" style="z-index: 1;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $errors = [];

                // Sanitize inputs
                $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                $phone = preg_replace('/[^\d+]/', '', $_POST['phone']);

                $psw = $_POST['psw'];
                $pswRepeat = $_POST['psw-repeat'];
                
                $status = "Offline";

                // Validate email
                if (!$email) {
                    $errors[] = "Invalid email format.";
                }

                // Validate password
                if ($psw !== $pswRepeat) {
                    $errors[] = "Passwords do not match.";
                }
                if (strlen($psw) < 8) {
                    $errors[] = "Password must be at least 8 characters long.";
                }

                // Check username and email
                if (empty($errors)) {
                    $stmt = $conn->prepare("SELECT COUNT(*) FROM user WHERE username = ?");
                    $stmt->bind_param("s", $username);
                    $stmt->execute();
                    $stmt->bind_result($userCount);
                    $stmt->fetch();
                    $stmt->close();

                    if ($userCount > 0) {
                        $errors[] = "Username already taken.";
                    }

                    $stmt = $conn->prepare("SELECT COUNT(*) FROM user WHERE email = ?");
                    $stmt->bind_param("s", $email);
                    $stmt->execute();
                    $stmt->bind_result($emailCount);
                    $stmt->fetch();
                    $stmt->close();

                    if ($emailCount > 0) {
                        $errors[] = "Email already in use.";
                    }

                    
                }

                // Insert if no errors
                if (empty($errors)) {



                    if (empty($errors)) {
                        $hash = password_hash($psw, PASSWORD_DEFAULT);
                        $stmt = $conn->prepare("INSERT INTO user (fullname , email, phone, username, password) VALUES (?, ?, ?, ?, ?)");
                        $stmt->bind_param("sssss", $fullname, $email, $phone,  $username, $hash);
                    }
                    if ($stmt->execute()) {

                        echo "<script>
                        alert('registered Successfully!');
                        window.location.href = '/Clothing-Web-Application-Development/index.php';
                        </script>";
                    } else {
                        echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
                    }
                    $stmt->close();
                } else {
                    foreach ($errors as $error) {
                        // echo "<p style='color: red;'>$error</p>";
                        echo "<script>
            alert('$error');
          
            </script>";
                    }
                }
            }
            ?>
        </div>

    </div>
    <?php
    $conn->close();
    ?>
    </div>


</body>