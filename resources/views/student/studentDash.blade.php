<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_dashboard</title>
    <link rel="stylesheet" href="{{asset('cssfile/student/studDash.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
<form action="{{ route('updatestudDashboardPage') }}" method="POST">
    @csrf 
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
                        <li><a href="#certi">
                            <div class="icon">
                                <i class="fa-solid fa-certificate fa-lg" aria-hidden="true"></i>
                            </div>
                            <div class="name" data-text="Certi">Certificates</div>
                            </a>
                        </li>
                        <br>
                        <li><a href="#proj">
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
        <p>"Student"<br>
        @if(session('name')){{ session('name') }}@endif
        </p>
    </div>
    </div>
 
 <!--Student Affiliations -->
    <div class="card1" style="width:73rem;">
        <div class="card-header1">
            <h1>Students Affiliations</h1>
            <p>Add Something </p>
        </div>
   
 
 <!--Add Button -->
 <!-- Trigger/Open The Modal -->
    <button id="myBtn"><ion-icon name="add-outline"></ion-icon></button>
   
 <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <p><i class="fa-solid fa-pen" style="color: #AF473C;"></i> Students Affiliations & Achievements</p><br>
 
                <form class="affiliation-form">
                    <!-- Label Container -->
                    <div id="affiliationSet1" class="affiliation">
                        <div class="input-container">
                            <label class="label">Affiliation/Achievement Title</label>
                            <input type="text" id="affiliationName1" name="affiliationName[]" autocomplete="off" placeholder="Enter your Affiliation Name" required class="text-input">
                            <label for="affiliationName1" class="label1">Enter your Affiliation Name</label>
                        </div>
 
                        <div class="input-container1">
                            <label for="affiliationYear1">Year From</label>
                            <input name="affiliationYear[]" type="date" id="affiliationYear1" required class="date-from">
                        </div>
 
                        <div class="input-container2">
                            <label for="affiliationYear2">Year To</label>
                            <input name="affiliationYears[]" type="date" id="affiliationYear2" required class="date-to">
                        </div>
                    </div>
 
                    <!-- Button Container -->
                    <div class="button-container">
                        <!-- Add Another Button -->
                        <button type="button" id="addAnotherAffiliation">Add Another</button>
 
                        <!-- Save Button -->
                        <button type="button" id="saveAffiliations">Save</button>
                    </div>
 
                    <!-- Display Affiliations -->
                    <div id="displayAffiliations"></div>
                </form>
            </div>
        </div>
 
 
     <script defer src="add.js"></script>
 
 
   
    <!--Certi Label
     <div class="card2" style="width:73rem; height: 25rem;">
        <div class="card-header2">
            <h1>Certificates</h1>
        </div>
           Button
          <div class="main">
            <button type="submit" class="button">
                <a href="#" id="login">Certficate 1</a></button>
                <button><a href="#">Certificate 2</a></button>
                <button><a href="#">Certificate 3</a></button>
                <button><a href="#">Certificate 4</a></button>
                </div>
    </div> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</form>
</body>
</html>