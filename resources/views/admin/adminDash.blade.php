<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('cssfile/admin/adminDash.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<form action="{{ route('updateadminDashboardPage') }}" method="POST">
    @csrf
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="image/logo1.png"></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="fa-solid fa-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-user"></span>
                        <span>Customers</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-clipboard"></span>
                        <span>Projects</span></a>
                </li>
                <li>
                    <a href=""><span class="fa-solid fa-clipboard-list "></span>
                        <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>
</form>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="fa-solid fa-bars"></span>
                </label>
                Dashboard
            </h2>
            <div class="search-wrapper">
                <span class="fa-solid fa-magnifying-glass"></span>
                <input type="search" placeholder="Search Here"/>
            </div>
            <div class="user-wrapper">
                <img src="images/noprofil.jpg" width="30px" height="30px" alt="">
                <div>
                    <h4>@if(session('name')){{ session('name') }}@endif</h4>
                    <small>Admin</small>
                </div>
            </div>
            <div class="logout-icon"><!--<a href="{{ route('logoutadmin') }}">-->
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </header>

         <!--Card Header -->
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>{{ count($student) }}</h1>
                        <span>Students</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-user"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>{{ count($faculty) }}</h1>
                        <span>Professors</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-user"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-clipboard"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Tasks</span>
                    </div>
                    <div>
                        <span class="fa-solid fa-clipboard-list"></span>
                    </div>
                </div>
            </div>

         <!--Recent Proj -->
         <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Student Users</h3>
                            <a href="{{ route('overviewStudPage') }}">See all<span class="fa-solid fa-arrow-right"></span>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Course</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($student as $students)
                                    <tr>
                                        <td>{{ $students->userid }}</td>
                                        <td>{{ $students->lname }}</td>
                                        <td>{{ $students->fname }}</td>
                                        <td>{{ $students->dep }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                <!--Recent Prof -->
             <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Faculty Users</h3>
                            <button>See all <span class="fa-solid fa-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>User Id</td>
                                        <td>Last Name</td>
                                        <td>First Name</td>
                                        <td>Department</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($faculty as $faculties)
                                    <tr>
                                        <td>{{ $faculties-> userid}}</td>
                                        <td>{{ $faculties-> lname}}</td>
                                        <td>{{ $faculties-> fname}}</td>
                                        <td>{{ $faculties-> dep}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  

        </main>
    </div>
</body>
</html>