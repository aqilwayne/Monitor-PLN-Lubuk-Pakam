<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TI FV USU - Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>s
<body>
    <div class="container">
        <div class="left-section">
            <div class="login-box">
                <div class="logo-text">TI FV USU</div>
                <h1>Login</h1>
                
                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                        <div class="forgot-password">Lupa password? Silahkan hubungi admin.</div>
                    </div>
                    
                    <button type="submit" class="login-btn">Login</button>
                </form>
                
                <div class="divider">Atau</div>
                
                <button class="create-account-btn" disabled>Buat Akun</button>
            </div>
        </div>
        
        <div class="right-section">
            <div class="pln-logo">
                    <div class="logo-icon"><img src="{{ asset('assets/icon/pln_typo.png') }}" alt="Logo PLN"></div>
            </div>
            
            <h2>Sistem Monitoring<br>Tiang Listrik</h2>
            
            <p class="description">
                Pantau sebaran tiang listrik yang terkait dengan 
                <strong><span class="highlight">PT PLN (Persero) UP3 Lubuk Pakam</span></strong> 
                secara mendetail dan akurat.
            </p>
        </div>
    </div>
</body>
</html>