<!-- NOBLE 10-11-2025 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>BalayHub - Create an account</title>
    <meta name="description" content="Sign up for BalayHub to find your perfect home. Create an account with your email or continue with Google or Apple.">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="signup-card">
           
            <div class="brand-logo">
                <span class="brand-text">Balay</span>
                <svg class="location-pin" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 10C21 17 12 23 12 23C12 23 3 17 3 10C3 7.61305 3.94821 5.32387 5.63604 3.63604C7.32387 1.94821 9.61305 1 12 1C14.3869 1 16.6761 1.94821 18.364 3.63604C20.0518 5.32387 21 7.61305 21 10Z" fill="#FFCC00" stroke="#FFCC00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <circle cx="12" cy="10" r="3" fill="black"/>
                </svg>
                <span class="brand-text">Hub</span>
            </div>

           
            <div class="heading-section">
                <h1 class="heading">Create an account</h1>
                <p class="subtext">Enter your email to sign up for this app</p>
            </div>

            
            <form id="signupForm" class="signup-form">
                <div class="form-group">
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="email-input" 
                        placeholder="email@domain.com"
                        data-testid="input-email"
                        required
                    >
                </div>

                <button 
                    type="submit" 
                    class="btn btn-primary" 
                    data-testid="button-continue"
                >
                    Continue
                </button>
            </form>

            
            <div class="divider">
                <span class="divider-line"></span>
                <span class="divider-text">or</span>
                <span class="divider-line"></span>
            </div>

            
            <div class="social-buttons">
                <button 
                    type="button" 
                    class="btn btn-outline" 
                    id="googleBtn"
                    data-testid="button-google"
                >
                    <svg class="social-icon" width="20" height="20" viewBox="0 0 20 20">
                        <path d="M19.6 10.23c0-.82-.1-1.42-.25-2.05H10v3.72h5.5c-.15.96-.74 2.31-2.04 3.22v2.45h3.16c1.89-1.73 2.98-4.3 2.98-7.34z" fill="#4285F4"/>
                        <path d="M13.46 15.13c-.83.59-1.96 1-3.46 1-2.64 0-4.88-1.74-5.68-4.15H1.07v2.52C2.72 17.75 6.09 20 10 20c2.7 0 4.96-.89 6.62-2.42l-3.16-2.45z" fill="#34A853"/>
                        <path d="M3.99 10c0-.69.12-1.35.32-1.97V5.51H1.07A9.973 9.973 0 000 10c0 1.61.39 3.14 1.07 4.49l3.24-2.52c-.2-.62-.32-1.28-.32-1.97z" fill="#FBBC05"/>
                        <path d="M10 3.88c1.88 0 3.13.81 3.85 1.48l2.84-2.76C14.96.99 12.7 0 10 0 6.09 0 2.72 2.25 1.07 5.51l3.24 2.52C5.12 5.62 7.36 3.88 10 3.88z" fill="#EA4335"/>
                    </svg>
                    <span>Continue with Google</span>
                </button>

                <button 
                    type="button" 
                    class="btn btn-outline" 
                    id="appleBtn"
                    data-testid="button-apple"
                >
                    <svg class="social-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M17.05 14.15c-.24.54-.36.78-.68 1.26-.44.67-1.07 1.51-1.85 1.52-.7.01-1.89-.47-1.89-.47s-1.18-.45-1.88-.46c-.78-.01-1.45.48-1.91.48-.77.01-1.35-.79-1.79-1.46-1.24-1.88-1.38-4.09-.61-5.27.55-.84 1.41-1.33 2.18-1.33.81 0 1.32.48 1.99.48.64 0 1.03-.48 1.95-.48.7 0 1.46.38 1.99 1.03-1.75 1.03-1.47 3.71.5 4.7zM13.11 3.06c.36-.48.64-1.15.54-1.84-.59.03-1.3.42-1.71.92-.37.45-.68 1.13-.56 1.78.66.02 1.33-.38 1.73-.86z"/>
                    </svg>
                    <span>Continue with Apple</span>
                </button>
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
    </div>

    <script>
        
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            console.log('Continue with email:', email);
            alert('Continue with email: ' + email);
        });

        
        document.getElementById('googleBtn').addEventListener('click', function() {
            console.log('Continue with Google');
            alert('Continue with Google');
        });

        
        document.getElementById('appleBtn').addEventListener('click', function() {
            console.log('Continue with Apple');
            alert('Continue with Apple');
        });
    </script>
</body>
</html>

<!-- NOBLE 10-11-2025 -->