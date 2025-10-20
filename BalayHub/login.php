<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>BalayHub - Login</title>
    <meta name="description" content="Log in to BalayHub to find your perfect home. Access your account to browse dormitories and rentals.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 24px; background-color: #ffffff;">
    <div style="max-width: 500px; width: 100%; padding: 48px 0; display: flex; flex-direction: column; align-items: center;">
        
        <div class="brand-logo">
            <span class="brand-text">Balay</span>
            <svg class="location-pin" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" fill="#FFCC00" stroke="#FFCC00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="12" cy="10" r="3" fill="black"/>
            </svg>
            <span class="brand-text">Hub</span>
        </div>

        <div class="heading-section">
            <h1 class="heading">Welcome</h1>
            <p class="subtext">Log in to your account</p>
        </div>

        <form id="loginForm" class="login-form">
            <div class="form-group">
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    class="text-input" 
                    placeholder="Username or email"
                    autocomplete="username"
                    data-testid="input-username"
                    required
                >
            </div>

            <div class="form-group">
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="text-input" 
                    placeholder="Password"
                    autocomplete="current-password"
                    data-testid="input-password"
                    required
                >
            </div>

            <button 
                type="submit" 
                class="btn btn-primary" 
                data-testid="button-login"
            >
                Login
            </button>
        </form>

        <div class="signup-option">
            <p>
                Don't have an account? 
                <a href="#" class="signup-link" id="signupLink" data-testid="link-signup">Sign up</a>
            </p>
        </div>

        <div class="disclaimer">
            <p>
                By clicking continue, you agree to our 
                <a href="#" class="disclaimer-link" data-testid="link-terms">Terms of Service</a> 
                and 
                <a href="#" class="disclaimer-link" data-testid="link-privacy">Privacy Policy</a>.
            </p>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            console.log('Login attempt - Username:', username);
            alert('Login attempt with username: ' + username);
        });

        document.getElementById('signupLink').addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Navigate to signup');
            alert('Redirect to signup page');
        });
    </script>
</body>
</html>
