<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssfile/userpage.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>FirstPage</title>
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
    </header>

    <!--Students Card Header -->
    <div class="card" style="width:55rem;">
        <div class="card-header">
            <h1>PortFol-EU</h1>
        </div>
    </div>
    <!--Home -->
    <section class="home" id="home">

        <div class="home-img">
            <img src="image/newpicland.png">
        </div>
    </section>

      <!-- Button -->
      <div class="main">
        <button type="submit" class="button">
            <a href="{{ route('student') }}"><i class="fa-solid fa-user-vneck"></i>Student</a></button>
            </div>

            <div class="main1">
                <button type="submit" class="button1">
                    <a href="{{ route('faculty') }}"><i class="fa-solid fa-user-vneck"></i>Professor</a></button>
            </div>

            <div class="main2">
                <button type="submit" class="button2">
                    <a href="{{ route('admin') }}"><i class="fa-solid fa-user-vneck"></i>Admin</a></button>
            </div>

    
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