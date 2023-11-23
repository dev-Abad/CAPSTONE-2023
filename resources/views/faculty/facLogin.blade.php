<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Login</title>
    <link rel="stylesheet" href="{{asset('cssfile/faculty/facultyLog.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
     <!--Navbar -->
     <header>
        <a href="#" class="logo1"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#overview">Overview</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#socials">Socials</a></li>
        </ul>

        <div class="main">
            <button><a href="{{ route('faclogin') }}">Login</a></button>
            <button><a href="{{ route('facregistration') }}">Sign Up</a></button>
            </div>
    </header>

    <!--Login Form -->
    <div class="form-card">
        <h1>Login</h1>
        <form action="{{ route('faclogin.post') }}" method="POST">
            @csrf
            <div class="input_box">
                <input type="text" placeholder="Enter your User ID" name="name" />
                    <label for="name">User ID</label>
            </div>
            <br>
            
            <div class="input_box">
                <input type="password" name="password" placeholder="Enter your password" required />
                <label for="password">Password</label>
                <i class="uil uil-lock password"></i>
                <i class="uil uil-eye-slash pw-hide"></i>
            </div>
            
            <div class="option_field">
                <span class="checkbox">
                    <input type="checkbox" id="check">
                    <label for="check">Remember me</label>
                </span>
                <a href="#" class="forgot_password">Forgot password?</a>
                
            </div>

            <button type="submit" class="button">Login</button>
                    <div class="login_signup">Already have an account?
                    <a href="{{ route('registration') }}" id = "signup">Sign-up</a>
                    </div>
                    
        </form>
    </div>

      <!--Home -->
      <section class="home1" id="home1">
        <div class="home-text1">
            <li>Port</li>
            <li>Fol-</li>
            <li>E</li>
            <li>U</li>
            <li>:</li>
        </div>
        <div class="front-img">
            <img src="image/frontpagepic1.png">
        </div>
      </section>

    
</body>
</html>