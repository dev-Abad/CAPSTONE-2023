<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Landing Page</title>
    <link rel="stylesheet" href="{{asset('cssfile/style1.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!--Navbar -->
    <header>
        <a href="#" class="logo"><img src="image/logo1.png" alt=""></a>
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

        <!--Home -->
        <section class="home" id="home">
          
            <div class="home-text2">
                <img src="image/logo1.png">
            </div>
            <div class="home-img">
                <img src="image/land2.png">
            </div>
            <div class="home-text">
                <img src="image/text.png">
            </div>
        </section>

        <!--First Card -->
     
            <section>
                <div class="card" style="width: 40rem; height: 19rem;">
                    <div class="card-bodyy">
                      <li>E-Porfolio</li>
                      <li>for students</li>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="card-body">
                        <li><p>A new platform to showcase and store students credentials and achievements.</p></li>
                    </div>
                  </div>
        
                  <div class="card-img">
                    <img src="image/pic2.png">
                  </div>
            </section>

        <!--Second Card -->
        <section>
            <div class="card1" style="width: 35rem; height: 20rem;">
                <div class="card-body1">
                  <img src="image/text2.png">
                  <br>          
                </div>
                <div class="main1">
                    <button><a href="#">Get Started</a></button>
                </div>
              </div>
        
              <div class="card-img1">
                <img src="image/pic55.png">
              </div>
        
            </section>

        <!--Footer -->
        <footer class="footer-distributed">

            <div class="footer-right">
    
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
    
            </div>
    
            <div class="footer-left">
    
                <p class="footer-links">
                    <a class="link-1" href="#">Home</a>
    
                    <a href="#">Overview</a>
    
                    <a href="#">Features</a>
    
                    <a href="#">About</a>
    
                    <a href="#">Socials</a>
    
                </p>
    
                <p>Company Name &copy; 2015</p>
            </div>
    
       
</body>
</html>

