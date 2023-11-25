<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Certificate</title>
    <link rel="stylesheet" href="{{asset('cssfile/student/certiBtn.css')}}">
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

     <script src="jsfile/certi_profile.js"></script>

          <!--Certi Label -->
     <div class="card2" style="width:73rem; height: 25rem;">
        <div class="card-header2">
            <h1>Certificates</h1>
        </div>

        <!--Certi Upload -->
    <div class="container w-100">
        <div class="card shadow-sm w-100">
            <div class="card-header d-flex justify-content-between">
                <h4>Image Uploading</h4>
                <form class="form" action="{{ route('uploadImagesPost') }}" method="post" id="form" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="Image" id="image" multiple="" class="d-none" onchange="image_select()">
                    <button class="btn btn-sm btn-primary" type="button" onclick="document.getElementById('image').click()">Choose Images</button>
                    <button class="btn btn-sm btn-primary" type="button" onclick="saveImages()">Save</button>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
            <div class="card-body d-flex flex-wrap justify-content-start" id="container">
                @if(Auth::check() && Auth::user()->certificates()->exists())
                    @foreach(Auth::user()->certificates as $certificate)
                        <!-- Fetch user's certificates using user_name instead of user_id -->
                        @if($certificate->user->name === session('name'))
                            <div class="image_container">
                                <img src="{{ asset('storage/' . $certificate->image_path) }}" alt="Uploaded Image">
                            </div>
                        @endif
                    @endforeach
                @else
                    <p>No certificates found.</p>
                @endif
            </div>
        </div><br><br>
        <div class="uploaded-images">
            <h2>Uploaded Images</h2>
            @if(Auth::check() && Auth::user()->certificates()->exists())
                @foreach($certificates as $certificate)
                    <div class="image_container">
                        <img src="{{ asset('storage/' . $certificate->image_path) }}" alt="Uploaded Image">
                    </div>
                @endforeach
            @else
                <p>No certificates found.</p>
            @endif
        </div>
    </div>

    <script type="text/javascript">
        var images = [];
            function image_select() {
                var image = document.getElementById('image').files;
                for (i = 0; i < image.length; i++) {
                    if (check_duplicate(image[i].name)) {
                        images.push({
                            "name": image[i].name,
                            "url": URL.createObjectURL(image[i]),
                            "file": image[i],
                        })
                    } else {
                        alert(image[i].name + " is already added to the list")
                    }
                }
                document.getElementById('container').innerHTML = image_show();
            }

            function saveImages() {
                // Form submission only happens when Save is clicked
                if (images.length > 0) {
                    document.getElementById('form').submit();
                } else {
                    alert('Please select images before saving.');
                }
            }

            function image_show() {
                var image = "";
                images.forEach((i) => {
                    image += `<div class="image_container d-flex justify-content-center position-relative">
                        <img src="` + i.url + `" alt="Image">
                        <span class="position-absolute" onclick="delete_image(` + images.indexOf(i) + `)">&times;</span>
                    </div>`;
                })
                return image;
            }

            function delete_image(e) {
                images.splice(e, 1);
                document.getElementById('container').innerHTML = image_show();
            }

            function check_duplicate(name) {
                var image = true;
                if (images.length > 0) {
                    for (e = 0; e < images.length; e++) {
                        if (images[e].name == name) {
                            image = false;
                            break;
                        }
                    }
                }
                return image;
            }

    </script>
</body>
</html>
