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

        html,
        body {
            min-height: 100vh;
        }

        body {
            background-color: var(--background-body);
            display: flex;
            flex-direction: column;
            position: relative;
            overflow-x: hidden;
        }

        /* Header spacing */
        header {
            width: 100%;
        }

        /* Main content area */
        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 200px 0;
            /* Updated to 200px padding top and bottom */
            margin: 2rem 0;
            min-height: 600px;
        }

        .dormlynk-login-container {
            display: flex;
            width: 100%;
            max-width: 900px;
            position: relative;
        }

        .avatar-section {
            position: absolute;
            left: 0;
            height: 100%;
            display: flex;
            align-items: center;
            z-index: 1;
        }

        .character-avatar {
            max-height: 500px;
            object-fit: contain;
        }

        .login-form-section {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            z-index: 2;
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

        .logo-icon {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            background-color: var(--primary-color);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 6px;
            transform: rotate(90deg);
            position: relative;
        }

        .logo-letter {
            font-weight: bold;
            font-size: 1rem;
            position: absolute;
        }

        .logo-letter:first-child {
            left: 8px;
            top: 6px;
        }

        .logo-letter:last-child {
            right: 8px;
            bottom: 6px;
        }

        .welcome-message {
            text-align: center;
            margin-bottom: 2rem;
        }

        .welcome-message h2 {
            font-size: 1.1rem;
            color: var(--primary-color);
            margin-bottom: 0.25rem;
            font-weight: 500;
        }

        .welcome-message h1 {
            font-size: 1.5rem;
            font-weight: 600;
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
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 1.5rem;
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
        }

        /* Footer styling */
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
                align-items: center;
            }

            .avatar-section {
                position: relative;
                width: 100%;
                max-height: 300px;
                justify-content: center;
                margin-bottom: 2rem;

            }

            .character-avatar {
                max-height: 300px;
            }

            .login-form-section {
                position: relative;
                transform: none;
                width: 100%;
                padding: 0 1rem;
                right: auto;
                top: auto;

            }

            .login-card {
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }

            .main-content {
                padding: 100px 0;
                /* Reduced padding on mobile */
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
                        <div class="logo-icon">
                            <span class="logo-letter">D</span>
                            <span class="logo-letter">L</span>
                        </div>
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
                            Not register yet? <a href="register.php" class="create-account-link">Create an Account
                                here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "partials/footer.php"; ?>
</body>

</html>