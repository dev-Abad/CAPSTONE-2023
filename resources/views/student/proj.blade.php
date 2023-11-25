<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Page</title>
    <link rel="stylesheet" href="{{asset('cssfile/student/proj.css')}}">
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

            <script src="jsfile/projj_page.js"></script>

     <!--Upload Files-->       
    <div class="container">
        <div class="header-section">
            <h1>Upload Files</h1>
            <p>Upload files you want to share with your team members.</p>
            <p>PDF, Images & Videos are allowed.</p>
        </div>
        <div class="drop-section">
            <div class="col">
                <div class="cloud-icon">
                    <img src="images/cloud.png" alt="cloud">
                </div>
                <span>Drag & Drop your files here</span>
                <span>OR</span>
                <button class="file-selector">Browse Files</button>
                <input type="file" class="file-selector-input" multiple>
            </div>
            <div class="col">
                <div class="drop-here">Drop Here</div>
            </div>
        </div>
        <div class="list-section">
            <div class="list-title">Uploaded Files</div>
            <div class="list"></div>
        </div>
    </div>
    <script src="jsfile/scripts.js"></script>
</body>
</html>