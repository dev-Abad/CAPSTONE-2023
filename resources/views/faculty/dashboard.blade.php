<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('cssfile/faculty/profdashboard.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Faculty Dashboard</title>
</head>
<body>
<form action="{{ route('updateDashboardPage') }}" method="POST">
    @csrf 
    <!--Navbar -->
    <header>
        <a href="#" class="logo"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        

        <!--Search in Navbar -->
            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search">
                <select class="filter-select">
                    <option value="all">All</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                </select>
            </div>
            <div class="logout-icon">
                <i class="fas fa-sign-out-alt"></i>
            </div>
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
                    <p>@if(session('name')){{ session('name') }}@endif</p>
                    
                    
            </div>
            <script src="jsfile/profDash.js"></script>
            <ul>
                <li><a href="#home">
                    <div class="icon">
                        <i class="fa-solid fa-house fa-lg" aria-hidden="true"></i>
                    </div>
                    <div class="name" data-text="Home">Home</div>
                    </a>
                </li>
                <br>
                <li><a href="#profile">
                    <div class="icon">
                        <i class="fa-regular fa-user fa-lg" aria-hidden="true"></i> 
                    </div>
                    <div class="name" data-text="Profile">Profile</div>
                    </a>
                </li>
                <br>
                <li><a href="{{ route('logout') }}">
                    <div class="icon">
                        <i class="fa-regular fa-user fa-lg" aria-hidden="true"></i> 
                    </div>
                    <div class="name" data-text="Logout">Logout</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    

     <!--Welcome Card Header -->
        <div class="card" style="width:73rem;">
            <div class="card-header">
                <h1>Welcome!</h1>
                <p>"Professor"<br>
                @if(session('name')){{ session('name') }}@endif
                </p>
            </div>
        </div>

    <!--Handled Sub Card Header -->
        <div class="card1" style="width:73rem; height: 25rem;">
            <div class="card-header1">
                <h1>Handled Subject</h1>
            </div>
              <!-- Button -->
              <div class="main">
                <button type="submit" class="button">
                    <a href="{{ route('handSubjPage') }}">Subject 1</a></button>
                    <button><a href="#">Subject 2</a></button>
                    <button><a href="#">Subject 3</a></button>
                    <button><a href="#">Subject 4</a></button>
                    </div>
        </div>
</form>
</body>
</html>
