<?php include "partials/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DormLynk | Login</title>
    <style>
        :root {
            --primary-color: #FF5C28;
            --primary-dark: #E94E1B;
            --text-dark: #333333;
            --text-light: #666666;
            --border-color: #E0E0E0;
            --background-light: #FFFFFF;
            --background-body: #F7F9FC;
            --blue-accent: #147BF5;
            --blue-hover: #0A6AD1;
            --error-red: #dc3545;
            --success-green: #28a745;
            --warning-yellow: #ffc107;
            --shadow-sm: 0 2px 5px rgba(0, 0, 0, 0.05);
            --shadow-md: 0 5px 15px rgba(0, 0, 0, 0.08);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        html, body {
            min-height: 100vh;
        }

        body {
            background-color: var(--background-body);
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
        }

        header {
            width: 100%;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
            margin: 2rem 0;
            min-height: 600px;
        }

        .dormlynk-login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 1000px;
        }

        .avatar-section {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .character-avatar {
            max-height: 450px;
            width: auto;
            object-fit: contain;
        }

        .login-form-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top:50px;
            margin-bottom:80px;
        }

        .login-card {
            background-color: var(--background-light);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            width: 400px;
            padding: 2rem;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 1rem;
        }

        .logo-container img {
            height: 50px;
            margin-bottom: 10px;
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 2rem;
        }

        .welcome-message h2 {
            font-size: 1.1rem;
            color: var(--primary-color);
            margin-bottom: 0.25rem;
            font-weight: 600;
        }

        .welcome-message h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-group label {
            display: block;
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border-color);
            border-radius: var(--border-radius);
            font-size: 0.95rem;
        }

        .forgot-password {
            text-align: right;
            font-size: 0.8rem;
            margin-bottom: 1.5rem;
        }

        .forgot-password a {
            color: var(--blue-accent);
            text-decoration: none;
        }

        .sign-in-btn {
            width: 100%;
            padding: 0.85rem;
            background-color: var(--blue-accent);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 1.5rem;
            transition: var(--transition);
        }

        .sign-in-btn:hover {
            background-color: var(--blue-hover);
        }

        .register-option {
            text-align: center;
            font-size: 0.85rem;
            color: var(--text-light);
        }

        .create-account-link {
            color: var(--blue-accent);
            text-decoration: none;
            font-weight: 500;
            font-size:16px;
        

        footer {
            width: 100%;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.8rem;
            color: var(--text-light);
            margin-top: auto;
        }

        @media (max-width: 900px) {
            .dormlynk-login-container {
                flex-direction: column;
                gap: 2rem;
            }

            .character-avatar {
                max-height: 300px;
            }

            .main-content {
                padding: 50px 0;
            }
        }
    </style>
</head>

<body>

<div class="main-content">
    <div class="dormlynk-login-container">
        <div class="avatar-section">
            <img src="./assets/images/login.png" alt="DormLynk Avatar" class="character-avatar">
        </div>

        <div class="login-form-section">
            <div class="login-card">
                <div class="logo-container">
                    <img src="./assets/images/logo.png" alt="DormLynk Logo">
                </div>
                <div class="welcome-message">
                    <h2>Hello Dormies!</h2>
                    <h1>Welcome to DormLynk</h1>
                </div>

                <form method="post" class="dormlynk-form">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="forgot-password">
                        <a href="#">Forgot Password?</a>
                    </div>

                    <button type="submit" class="sign-in-btn">Sign In</button>

                    <div class="register-option">
                        Not register yet? <a href="<?php ROOT ?>registeruser" class="create-account-link">Create User Account here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>

</body>

</html>
