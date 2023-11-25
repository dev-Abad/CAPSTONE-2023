<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="{{asset('cssfile/student/certiPage.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
     <!--Navbar -->
     <header>
        <a href="#" class="logo"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <div class="logout-icon">
            <i class="fas fa-sign-out-alt"></i>
        </div>
    </header>

     <!--Side Navbar -->
     <div class="wrapper">
        <div class="sidebar">
            <!-- Replace the logo with the upload div -->
            <div class="user-img">
                <img src="image/noprofil.jpg"  id="photo">
                     <input type="file" id="file">
                    <label for="file" id="uploadbtn"><i class="fa fa-camera"></i></label>
                    <p>@ @if(session('name')){{ session('name') }}@endif</p>

            <!--Side Navbar Icons-->
                    <ul>
                        <li><a href="{{ route('studentdashboardPage') }}">
                            <div class="icon">
                                <i class="fa-solid fa-house fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="name" data-text="Home">Home</div>
                            </a>
                        </li>
                        <br>
                        <li><a href="#certi">
                            <div class="icon">
                                <i class="fa-solid fa-certificate fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="name" data-text="Certi">Certificates</div>
                            </a>
                        </li>
                        <br>
                        <li><a href="{{ route('projPage') }}">
                            <div class="icon">
                                <i class="fa-regular fa-folder-open fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="name" data-text="Proj">Projects</div>
                            </a>
                        </li>
                    </ul>
            </div>
        </div>
     </div>

            <script src="certi_profile.js"></script>

          <!--Certi Label -->
     <div class="card2" style="width:73rem; height: 25rem;">
        <div class="card-header2">
            <h1>Certificates</h1>
        </div>
           <!--Button -->
          <div class="main">
            <button type="submit" class="button">
                <a href="{{ route('certiBtn') }}" id="login">Certficate 1</a></button>
                <button><a href="#">Certificate 2</a></button>
                <button><a href="#">Certificate 3</a></button>
                <button><a href="#">Certificate 4</a></button>
                </div>
    </div> 
</body>
</html>