<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Button</title>
    <link rel="stylesheet" href="{{asset('cssfile/faculty/handSubj.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
     <!--Navbar -->
     <header>
        <a href="#" class="logo"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        

        <!--Search in Navbar -->
        <form action="{{ route('handSubjPage') }}" method="GET">
            @csrf
            <div class="search-container">
            <input type="text" name="search" class="search-input" placeholder="Search">
            <div class="search-wrapper">
                    <button type="submit" class="search-button">Search</button>
                </div>
            </form>
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
            </ul>
        </div>
    </div>

      <!--Students Card Header -->
      <div class="card" style="width:73rem;">
        <div class="card-header">
            <h1>Students</h1>
        </div>
    </div>


    <section class="prof-list">
        <div class="List">
            <h3>Student Lists</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Course</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($student as $students)
                        <tr>
                            <td>{{ $students->userid }}</td>
                            <td>{{ $students->dep }}</td>
                            <td>{{ $students->lname }}</td>
                            <td>{{ $students->fname }}</td>
                            <td><button>View</button></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </section>
    
</body>
</html>