<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <style>
        body{
            background-color: whitesmoke;
        }
        .overlay {

            background: url('storage/images/worldtourlogo.png') top left no-repeat;
            position: absolute;
            top: 0;
            left: 20%;
            width: 100%;
            height: 100%;
            z-index: 10;
            pointer-events: none;
            opacity: 0.6;
        }
        @media (min-width: 768px) and (max-width: 979px) {
            .overlay{
                width:50%;
                height:50%;
            }
        }

        @media (max-width: 767px) {
            .overlay{

                width:50%;
                height:50%;
            }

        }
        @media (max-width: 480px) {
            .overlay{
                width:50%;
                height:50%;

            }
        }
    </style>




</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-family: 'Montserrat';background-color: #93AEB2 !important" >
    <a class="navbar-brand" href="/">Cat &amp Leon Navigate The Planet</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbar-dark bg-dark" id="navbarSupportedContent" style="background-color: #93AEB2 !important">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutus">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/blogs" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blogs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($places as $place)
                        <a class="dropdown-item" href="/blogs/{{ $place->place  }}">{{ $place->place  }}</a>
                    @endforeach
                </div>
            </li>
            @auth
                <li class="nav-item">
                    <a class="nav-link" href="/newplace">New Place</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/newblog">New Blog</a>
                </li>
            @endauth
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Login</a>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<!-- end of menu -->
@yield('content')
<footer style="text-align: center; background-color: #B29883; color: #ffffff; padding: 10px;margin-top: 20px;">
    Cat & Leon Navigate The Planet <?php echo date("Y"); ?>

    <a class="nav-link" href="#" style="color: #ffffff">Created by Leon Kimpton</a>

</footer>
</body>
</html>