<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Yayasan Seulanga Insan Mulia</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-green: #7ed957;
            --green-dark: #5fb83b;
            --dark: #0a0a0a;
            --dark-secondary: #1a1a1a;
            --text-light: #e0e0e0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--dark);
            color: var(--text-light);
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Animated background */
        body::before {
            content: '';
            position: fixed;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(126, 217, 87, 0.15), transparent);
            border-radius: 50%;
            top: -200px;
            right: -200px;
            animation: float 8s ease-in-out infinite;
            z-index: 0;
        }

        body::after {
            content: '';
            position: fixed;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(126, 217, 87, 0.1), transparent);
            border-radius: 50%;
            bottom: -100px;
            left: -100px;
            animation: float 6s ease-in-out infinite reverse;
            z-index: 0;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-30px) rotate(5deg);
            }
        }

        /* Login Container */
        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 480px;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 32px;
            padding: 50px 40px;
            box-shadow: 0 20px 80px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.8s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Logo Section */
        .login-logo {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 20px;
            box-shadow: 0 10px 40px rgba(126, 217, 87, 0.3);
        }

        .login-title {
            font-size: 32px;
            font-weight: 800;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #fff 0%, var(--primary-green) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-subtitle {
            color: rgba(255, 255, 255, 0.6);
            font-size: 16px;
        }

        /* Form */
        .login-form {
            margin-top: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 14px;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-family: 'Plus Jakarta Sans', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--primary-green);
            box-shadow: 0 0 0 3px rgba(126, 217, 87, 0.1);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /* Password Input Container */
        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            font-size: 20px;
            padding: 5px;
            transition: color 0.3s;
        }

        .toggle-password:hover {
            color: var(--primary-green);
        }

        /* Remember Me & Forgot Password */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .remember-me input[type="checkbox"] {
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: var(--primary-green);
        }

        .remember-me label {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            cursor: pointer;
        }

        .forgot-password {
            color: var(--primary-green);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: opacity 0.3s;
        }

        .forgot-password:hover {
            opacity: 0.8;
        }

        /* Login Button */
        .login-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, var(--primary-green), var(--green-dark));
            color: var(--dark);
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 700;
            font-family: 'Plus Jakarta Sans', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(126, 217, 87, 0.3);
            position: relative;
            overflow: hidden;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(126, 217, 87, 0.4);
        }

        .login-button:active {
            transform: translateY(0);
        }

        .login-button.loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .login-button .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid var(--dark);
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin: 0 auto;
        }

        .login-button.loading .spinner {
            display: block;
        }

        .login-button.loading .button-text {
            display: none;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: rgba(255, 255, 255, 0.4);
            font-size: 14px;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        .divider span {
            padding: 0 15px;
        }

        /* Register Link */
        .register-link {
            text-align: center;
            margin-top: 30px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        .register-link a {
            color: var(--primary-green);
            text-decoration: none;
            font-weight: 600;
            transition: opacity 0.3s;
        }

        .register-link a:hover {
            opacity: 0.8;
        }

        /* Back to Home */
        .back-home {
            position: fixed;
            top: 30px;
            left: 30px;
            z-index: 100;
        }

        .back-home a {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
        }

        .back-home a:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-5px);
        }

        /* Alert Messages */
        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            font-size: 14px;
            display: none;
            animation: slideDown 0.3s ease;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert.show {
            display: block;
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }

        .alert-success {
            background: rgba(126, 217, 87, 0.1);
            border: 1px solid rgba(126, 217, 87, 0.3);
            color: var(--primary-green);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .login-card {
                padding: 40px 30px;
            }

            .login-title {
                font-size: 28px;
            }

            .back-home {
                top: 20px;
                left: 20px;
            }
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 15px;
            }

            .login-card {
                padding: 35px 25px;
                border-radius: 24px;
            }

            .logo-icon {
                width: 70px;
                height: 70px;
                font-size: 35px;
            }

            .form-options {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
        }
    </style>
</head>

<body>
    <!-- Back to Home -->
    <div class="back-home">
        <a href="index.html">
            <span>←</span>
            Kembali ke Beranda
        </a>
    </div>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <!-- Logo -->
            <div class="login-logo">
                <div class="logo-icon">S</div>
                <h1 class="login-title">Selamat Datang</h1>
                <p class="login-subtitle">Masuk ke dashboard Yayasan Seulanga</p>
            </div>

            <!-- Alert Message -->
            <div id="alert" class="alert"></div>

            <!-- Login Form -->
            <form class="login-form" id="loginForm">
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-input" placeholder="nama@email.com" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="password-container">
                        <input type="password" id="password" class="form-input" placeholder="Masukkan password"
                            required>
                        <button type="button" class="toggle-password" id="togglePassword">
                            👁️
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>

                <button type="submit" class="login-button" id="loginButton">
                    <span class="button-text">Masuk</span>
                    <div class="spinner"></div>
                </button>
            </form>

            <div class="divider">
                <span>atau</span>
            </div>

            <div class="register-link">
                Belum punya akun? <a href="#">Daftar sekarang</a>
            </div>
        </div>
    </div>

    <script>
        // Toggle Password Visibility
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            togglePassword.textContent = type === 'password' ? '👁️' : '👁️‍🗨️';
        });

        // Form Submission
        const loginForm = document.getElementById('loginForm');
        const loginButton = document.getElementById('loginButton');
        const alertBox = document.getElementById('alert');

        function showAlert(message, type) {
            alertBox.textContent = message;
            alertBox.className = `alert alert-${type} show`;

            setTimeout(() => {
                alertBox.classList.remove('show');
            }, 4000);
        }

        loginForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const remember = document.getElementById('remember').checked;

            // Show loading state
            loginButton.classList.add('loading');

            // Simulate API call
            setTimeout(() => {
                loginButton.classList.remove('loading');

                // Demo credentials (in real app, this would be API call)
                if (email === 'admin@seulanga.org' && password === 'admin123') {
                    showAlert('Login berhasil! Mengalihkan ke dashboard...', 'success');

                    // Store login state if remember me is checked
                    if (remember) {
                        localStorage.setItem('rememberedEmail', email);
                    }

                    // Redirect to dashboard after 1.5 seconds
                    setTimeout(() => {
                        // window.location.href = 'dashboard.html';
                        alert('Redirect ke dashboard (belum dibuat)');
                    }, 1500);
                } else {
                    showAlert('Email atau password salah. Coba lagi.', 'error');
                }
            }, 1500);
        });

        // Check if email was remembered
        window.addEventListener('load', () => {
            const rememberedEmail = localStorage.getItem('rememberedEmail');
            if (rememberedEmail) {
                document.getElementById('email').value = rememberedEmail;
                document.getElementById('remember').checked = true;
            }
        });

        // Forgot password handler
        document.querySelector('.forgot-password').addEventListener('click', (e) => {
            e.preventDefault();
            showAlert('Link reset password telah dikirim ke email Anda.', 'success');
        });

        // Register link handler
        document.querySelector('.register-link a').addEventListener('click', (e) => {
            e.preventDefault();
            alert('Halaman registrasi (belum dibuat)');
        });
    </script>
</body>

</html>