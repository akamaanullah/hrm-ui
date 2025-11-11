<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HRM System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-bg: #0F2A24;
        --secondary-bg: #143A32;
        --accent-mint: #7FFFD4;
        --accent-yellow: #FFD633;
        --text-primary: #FFFFFF;
        --text-secondary: #A6C7C1;
        --mint-light: #b2ffe4;
        --deep-forest-green: #0f2a24;
        --dark-teal-green: #001E18;
        --rich-emerald-green: #1E4C42;
        --bg-gradient: linear-gradient(180deg, #b2ffe4 0%, #0f2a24 30%, #001E18 60%, #1E4C42 100%);
    }

    body {
        font-family: 'Poppins', sans-serif;
        background:
            radial-gradient(circle at top left, #255e46 0%, transparent 40%),
            linear-gradient(180deg, #0f2a24 0%, #001E18 40%, #1E4C42 80%, #0f2a24 100%);
        background-attachment: fixed;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
    }

    .login-container {
        border-radius: 24px;
        width: 100%;
        max-width: 1000px;
        background: rgba(20, 58, 50, 0.95);
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        display: flex;
        min-height: 600px;
    }

    /* Left Welcome Section */
    .login-welcome {
        flex: 1;
        background: url('assets/image/loginimage.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .login-welcome::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
    }


    .welcome-content {
        position: relative;
        z-index: 1;
        color: var(--text-primary);
    }

    .welcome-content h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--text-primary);
    }

    .welcome-content p {
        font-size: 1.1rem;
        line-height: 1.6;
    }

    /* Right Form Section */
    .login-form-section {
        flex: 1;
        background: #FFFFFF;
        padding: 3rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-header {
        margin-bottom: 2rem;
    }

    .form-header h2 {
        font-size: 2rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 0.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
        position: relative;
    }

    .form-group i {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
        font-size: 1rem;
    }

    .form-group input {
        width: 100%;
        padding: 0.875rem 1rem 0.875rem 3rem;
        border: 1px solid #e0e0e0;
        border-radius: 7px;
        font-size: 1rem;
        font-family: 'Poppins', sans-serif;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .form-group input:focus {
        outline: none;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(127, 255, 212, 0.1);
    }

    .form-options {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .remember-me {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }

    .remember-me input[type="checkbox"] {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: var(--accent-mint);
    }

    .remember-me label {
        font-size: 0.9rem;
        color: #6c757d;
        cursor: pointer;
    }

    .btn-login {
        width: 100%;
        padding: 1rem;
        background: linear-gradient(135deg, #143A32 0%, #0F2A24 100%);
        color: var(--text-primary);
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(15, 42, 36, 0.3);
    }

    .btn-login:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(15, 42, 36, 0.4);
        background: linear-gradient(135deg, #0F2A24 0%, #143A32 100%);
    }

    .btn-login:active {
        transform: translateY(0);
    }

    .create-account {
        text-align: center;
        margin-top: 2rem;
        font-size: 0.9rem;
        color: #6c757d;
    }

    .create-account a {
        color: var(--rich-emerald-green);
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .create-account a:hover {
        color: var(--primary-bg);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .login-container {
            flex-direction: column;
            max-width: 100%;
            min-height: auto;
        }

        .login-welcome {
            padding: 2rem;
            min-height: 300px;
        }

        .welcome-content h1 {
            font-size: 2rem;
        }

        .login-form-section {
            padding: 2rem;
        }

        .form-header h2 {
            font-size: 1.75rem;
        }
    }

    @media (max-width: 480px) {
        body {
            padding: 1rem;
        }

        .login-welcome {
            padding: 1.5rem;
        }

        .login-form-section {
            padding: 1.5rem;
        }

        .welcome-content h1 {
            font-size: 1.75rem;
        }

        .form-header h2 {
            font-size: 1.5rem;
        }
    }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left Welcome Section -->
        <div class="login-welcome">
            <div class="welcome-content">
                <h1>Welcome back!</h1>
                <p>You can sign in to access with your existing account.</p>
            </div>
        </div>

        <!-- Right Form Section -->
        <div class="login-form-section">
            <div class="form-header">
                <h2>Sign In</h2>
            </div>

            <form id="loginForm" action="admin/index.php" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="username" placeholder="Username or email" required>
                </div>

                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                </div>

                <button type="submit" class="btn-login">Sign In</button>
            </form>

            <div class="create-account">
                New here? <a href="#">Fill the form here</a>
            </div>
        </div>
    </div>

    <script>
    // Form validation
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const username = this.querySelector('input[name="username"]').value;
        const password = this.querySelector('input[name="password"]').value;

        if (username && password) {
            // Here you can add your login logic
            // For now, redirecting to admin page
            window.location.href = 'admin/index.php';
        }
    });
    </script>
</body>

</html>