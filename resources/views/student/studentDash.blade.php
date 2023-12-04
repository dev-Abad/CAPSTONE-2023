<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="{{asset('cssfile/student/studDash.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
     <!--Navbar -->
     <header>
        <a href="#" class="logo"><img src="image/logo1.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>

        <div class="logout-icon">
        <a href="{{ route('logoutstud') }}">
            <i class="fas fa-sign-out-alt"></i>
        </a>
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

            <!--Side Navbar Icons-->
                    <ul>
                        <li><a href="#home">
                            <div class="icon">
                                <i class="fa-solid fa-house fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="name" data-text="Home">Home</div>
                            </a>
                        </li>
                        <br>
                        <li><a href="{{ route('certiPage') }}">
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

            <script src="stud_dashh.js"></script>
       
   
<!--Welcome Card Header -->
    <div class="card" style="width:73rem;">
        <div class="card-header">
            <h1>Welcome!</h1>
            <p>"Students"<br>
                @if(session('name')){{ session('name') }}@endif
            </p>
        </div>
    </div>
    
       
    <!--Certi Label -->
     <div class="card2" style="width:73rem; height: 25rem;">
        <div class="card-header2">
            <h1>Certificates</h1>
        </div>
        


          <!--Button -->
          <div class="main">
          
                 @if(Auth::check())

                @foreach ($certi as $k => $item )
                <button type="submit" class="button">
                    <div  class="image_container " >
                        <img src="{{ url('storage/certifiles/'.$item['file_name']) }}" alt="Uploaded Image">
                 
                    </div>
                    </button>
                @endforeach
                @endif
            </div>
        </div> 


 <!--Student Affiliations -->
       
        <section class="see-list" style="width: 86rem;">
            <div class="List">
                <h3>Students Affiliations</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A20-29722</td>
                            <td>BSIT</td>
                            <td>Rosalla Athina Liwag</td>
                            <td><button><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <!-- <tr>
                            <td>A20-29803</td>
                            <td>BSIT</td>
                            <td>Argielene Anne Abad</td>
                            <td><button><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>A20-29704</td>
                            <td>BSIT</td>
                            <td>Mico Jhosua Oriola</td>
                            <td><button><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>A20-29603</td>
                            <td>BSIT</td>
                            <td>Adrian Alec Alcantara</td>
                            <td><button><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button><i class="fa-solid fa-trash"></i></button></td>
                        </tr>
                        <tr>
                            <td>A20-29623</td>
                            <td>BSMT</td>
                            <td>Alex</td>
                            <td><button><i class="fa-solid fa-pen-to-square"></i></button></td>
                            <td><button><i class="fa-solid fa-trash"></i></button></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </section>

 <!--Add Button -->
    <button id="myBtn"><ion-icon name="add-outline"></ion-icon><a href=""></a></button>

    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>