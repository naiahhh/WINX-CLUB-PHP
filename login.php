<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/crime/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>CRMS - Winx Club District</title>
</head>
<body>
    <header>
        <h1>Criminal Record Management System</h1>
    </header>
    
    <div class="login_section">
        <div class="login_container">
            <h1>LOGIN</h1>
            <p>Welcome Back!</p>
            <p>Please login to access your account</p>
          
            <form action="login.php" method="POST">
                <div class="form_group">
                    <i class="fas fa-user icon"></i>
                    <input type="text" id="username" placeholder="Username" name="username" required>
                </div>
                <div class="form_group">
                    <i class="fas fa-lock icon"></i>
                    <input type="password" id="password" placeholder="Password" name="password" required>
                </div>
                <button type="submit">Login</button>
                <!-- <div class="social_login">
                    <button type="button" class="fb"><i class="fab fa-facebook-f"></i></button>
                    <button type="button" class="google"><i class="fab fa-google"></i> </button>
                </div> -->
                
                <p>Forgot Password? <a href="forgot_password.php">Reset Password</a></p>
                <p>Don't have an account? <a href="register.php">Register Now</a></p>
                
            </form>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 WINX CLUB DISTRICT CRMS</p>
    </footer>
</body>
</html>
