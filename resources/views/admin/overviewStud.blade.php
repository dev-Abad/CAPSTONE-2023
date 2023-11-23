<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See All button</title>
    <link rel="stylesheet" href="{{asset('cssfile/admin/overStud.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
       
 
        <!--Search in Navbar -->
        <form action="{{ route('overviewStudPage') }}" method="GET">
            @csrf
            <div class="search-container">
                <input type="text" name="search" class="search-input" placeholder="Search">
                <div class="search-wrapper">
                   <button type="submit"><span  class="fa-solid fa-magnifying-glass"></span></button>
                </div>
            </form>
            </div>
            <div class="logout-icon">
                <i class="fas fa-sign-out-alt"></i>
            </div>
        </div>  
    </header>
    <section class="see-list">
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
                @foreach($students as $student)
                        <tr>
                            <td>{{ $student->userid }}</td>
                            <td>{{ $student->dep }}</td>
                            <td>{{ $student->lname }}</td>
                            <td>{{ $student->fname }}</td>
                            <td><button>View</button></td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>