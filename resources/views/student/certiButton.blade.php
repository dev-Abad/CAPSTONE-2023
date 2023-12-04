<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Certi_Button</title>
    <link rel="stylesheet" href="{{asset('cssfile/student/certiBtn.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
     <!--Navbar -->
     <header>
        <a href="#" class="logo"><img src="{{asset('image/logo1.png')}}" alt=""></a>
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
                <img src="{{asset('image/noprofil.jpg')}}"  id="photo">
                     <input type="file" id="file">
                    <label for="file" id="uploadbtn"><i class="fa fa-camera"></i></label>
                    <p> @if(session('name')){{ session('name') }}@endif</p>

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

            <script src="certi_profile.js"></script>

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
                <form class="form" action="{{ route('uploadImagesPost')}}" method="post" id="form" accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="images[]" id="image" multiple="" class="d-none" onchange="image_select()">
                    <button class="btn btn-sm btn-primary" type="button" onclick="document.getElementById('image').click()">Choose Images</button>
                    <a id="save" class="btn btn-sm btn-secondary" >Save</a>
                </form> 
            </div>
            <div class="card-body d-flex flex-wrap justify-content-start" id="container">
             
            @if(Auth::check())
                @foreach ($data as $k => $item )
                    <div  class="image_container d-flex justify-content-center position-relative" >
                        <img src="{{ url('storage/certifiles/'.$item['file_name']) }}" alt="{{$item['file_name']}}">
                        <span class="del-certi position-absolute" >&times;</span>
                    </div>
                @endforeach
                 @else
                    <p>No certificates found.</p>
                @endif
            </div><br><br>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
        var images = [];
        var imageObj = '';
          
        function saveImagesToDatabase() {
    }
    // Attach the function to the Save button click event
    // document.getElementById('save').addEventListener('click', saveImagesToDatabase);

        function image_select(){
           var image = document.getElementById('image').files;

           for(i = 0; i < image.length; i++){
            if (check_duplicate(image[i].name)){
                images.push({
                    "name" : image[i].name,
                    "url" : URL.createObjectURL(image[i]),
                    "file" : image[i],
                });
                $("#form").append($("#image").eq(i).clone());
                
                imageObj = image_show();
                $("#container").append(imageObj);
           } else
           {
            alert(image[i].name + "is already added to he list")
           }
        }
         
            
             $("#image").eq(0).val('');
        
        }

        function image_show(){
            var image = "";
            images.forEach((i) => {
                image = `<div class="image_container d-flex justify-content-center position-relative">
                    <img src="`+i.url+`" alt="Image">
                    <span class="position-absolute del-certi " >&times;</span>
                </div>`;
             })
             return image;
        }

        function check_duplicate(name){
            var image = true;
            if (images.length > 0){
                for(e = 0; e < images.length; e++){
                    if (images[e].name == name){
                        image = false;;
                        break;
                    }
                }
            }
            return image;
        }
        $(document).ready(function(){
            $("#save").click(function(){
                // $("#form").append(imageObj);
                 $("#form").submit();
            });
            
            $(document).on("click", ".del-certi",function(event){
                event.preventDefault();
                $(this).parent().remove();
            });
        });
    </script>
</body>
</html>