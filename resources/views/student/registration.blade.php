<!--Register Form-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
     <!--Navbar -->
     <header>
        <a href="#" class="logo2"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="#overview">Overview</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#socials">Socials</a></li>
        </ul>

        <div class="main">
            <button><a href="{{ route('login') }}">Login</a></button>
            <button><a href="{{ route('registration') }}">Sign Up</a></button>
            </div>
    </header>

    <!--Registration Form -->
    <div class="form-card1">
        <h1>Sign Up</h1>
        <form action="{{ route('registration.post') }}" method="POST">
            @csrf
            <div class = "input_box1">
            <label>User ID</label>
                <input type="text" placeholder= "Enter your name" name="name"/>
            </div>
            <br>
            <div class="input_box1">
                <input type="email" name = "email" placeholder="Enter your email" required />
                    <label>Email</label>
                <i class="uil uil-envelope-alt"></i>
            </div>
            <br>
            
            <div class="input_box2">
                <input type="password" name="password" placeholder="Enter your password" required/>
                    <label>Password</label>
                    <i class="uil uil-lock password"></i>
                    <i class="uil uil-eye-slash pw-hide"></i>
            </div>
            <button type="submit" class="button1">as student</button>
            <button type="submit" class="button2">as faculty</button>
            @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
        </form>
        
    </div>

      <!--Home -->
      <section class="home1" id="home1">
        <div class="home-text1">
            <li>Port</li>
            <li>Fol-</li>
            <li>E</li>
            <li>u</li>
            <li>:</li>
        </div>
        <div class="front-img1">
            <img src="image/frontpagepic1.png">
        </div>
      </section>

    
</body>
</html>  