<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Manajemen Rekam Medis</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f7f9fc;
        }
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 30px;
        }
        .btn-primary {
            background-color: #32a852;
            border: none;
        }
        .btn-primary:hover {
            background-color: #289a46;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-header h3 {
            color: #32a852;
            font-weight: bold;
        }
        .login-header p {
            color: #6c757d;
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<!-- Login Container -->
<div class="container">
    <div class="login-container">
        <!-- Header -->
        <div class="login-header">
            <h3>Login ke Sistem</h3>
            <p>Manajemen Rekam Medis Pasien</p>
        </div>
        <!-- Login Form -->
        <form method="POST" action="/login">
            <!-- Token CSRF -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>

            <!-- Password Field -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>

            <!-- Login Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

            <!-- Additional Links -->
            <div class="mt-3 text-center">
                <a href="#" class="text-muted">Lupa password?</a>
            </div>
        </form>
    </div>
</div>

<!-- Footer -->
<footer class="text-center mt-5">
    <p class="text-muted mb-0">© 2024 RS KIKO. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
