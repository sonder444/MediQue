<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthpoint Login</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">
                <!-- Stethoscope SVG -->
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 3v7a5 5 0 0 0 10 0V3M12 21v-4m0 0a5 5 0 0 1-5-5m5 5a5 5 0 0 0 5-5m-5 5v2m-7-7h2m10 0h2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </div>
            <div class="login-title">Healthpoint</div>
            <div class="login-desc" id="form-desc">Medical Staff Portal</div>
        </div>
        
        @if (session('status'))
            <div class="success-message">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="tabs">
            <button class="tab active" id="tab-login" type="button">Sign In</button>
            <button class="tab" id="tab-signup" type="button">Sign Up</button>
        </div>
        <div class="role-group" id="role-group">
            <div class="role-option selected" data-role="doctor">
                <span style="color:#2563eb;">&#9877;</span> Doctor
            </div>
            <div class="role-option" data-role="receptionist">
                <span style="color:#22c55e;">&#128100;</span> Receptionist
            </div>
            <div class="role-option" data-role="admin">
                <span style="color:#f59e42;">&#128274;</span> Admin
            </div>
        </div>
        <!-- Login Form -->
        <form id="login-form" method="POST" action="{{ route('login') }}" autocomplete="on">
            @csrf
            <div class="form-group">
                <label class="form-label" for="login-email">Email Address</label>
                <input class="form-input" id="login-email" name="email" type="email" placeholder="doctor@healthpoint.com" required autocomplete="username">
            </div>
            <div class="form-group" style="position:relative;">
                <label class="form-label" for="login-password">Password</label>
                <input class="form-input" id="login-password" name="password" type="password" placeholder="••••••••" required autocomplete="current-password">
                <button class="show-password-btn" type="button" tabindex="-1" onclick="togglePassword('login-password', this)">&#128065;</button>
            </div>
            <div class="remember-row">
                <label style="display:flex;align-items:center;">
                    <input type="checkbox" name="remember" id="remember-me" style="margin-right:0.5rem;"> Remember me
                </label>
            </div>
            <button class="submit-btn" type="submit">Sign In</button>
        </form>
        <!-- Register Form -->
        <form id="signup-form" method="POST" action="{{ route('register') }}" style="display:none;" autocomplete="on">
            @csrf
            <div class="form-row">
                <div class="form-group" style="flex:1;">
                    <label class="form-label" for="signup-firstname">First Name</label>
                    <input class="form-input" id="signup-firstname" name="first_name" type="text" placeholder="John" required>
                </div>
                <div class="form-group" style="flex:1;">
                    <label class="form-label" for="signup-lastname">Last Name</label>
                    <input class="form-input" id="signup-lastname" name="last_name" type="text" placeholder="Doe" required>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="signup-email">Email Address</label>
                <input class="form-input" id="signup-email" name="email" type="email" placeholder="doctor@healthpoint.com" required autocomplete="username">
            </div>
            <div class="form-group" id="license-group" style="display:none;">
                <label class="form-label" for="signup-license">Medical License Number</label>
                <input class="form-input" id="signup-license" name="license_number" type="text" placeholder="MD123456">
            </div>
            <div class="form-group" style="position:relative;">
                <label class="form-label" for="signup-password">Password</label>
                <input class="form-input" id="signup-password" name="password" type="password" placeholder="••••••••" required autocomplete="new-password">
                <button class="show-password-btn" type="button" tabindex="-1" onclick="togglePassword('signup-password', this)">&#128065;</button>
            </div>
            <div class="form-group">
                <label class="form-label" for="signup-password-confirm">Confirm Password</label>
                <input class="form-input" id="signup-password-confirm" name="password_confirmation" type="password" placeholder="••••••••" required autocomplete="new-password">
            </div>
            <div class="terms-row">
                <input type="checkbox" id="terms" required style="margin-right:0.5rem;">
                <label for="terms">I agree to the <a href="#" style="color:#2563eb;">Terms of Service</a> and <a href="#" style="color:#2563eb;">Privacy Policy</a></label>
            </div>
            <button class="submit-btn" type="submit">Create Account</button>
        </form>
        <div class="portal-info" id="portal-info">Doctor Portal Access</div>
        <div class="back-home">
            <a href="/" class="back-btn">&#8592; Return to Homepage</a>
        </div>
        <div class="footer">
            © 2025 Healthpoint Medical and Diagnostic Clinic. All rights reserved.
        </div>
    </div>
</div>
<script src="/js/login.js"></script>
</body>
</html>

