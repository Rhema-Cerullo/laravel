<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    @yield('style')

    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-orange container-fluid">
        <a class="navbar-brand text-white col-6 col-md-2" href="#">COMFIVAL</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse col-md-5  ml-auto " id="collapsibleNavId">
            <ul class="navbar-nav float-md-right">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <i class="fas fa-bell nav-icon text-white  "></i>
                        <span class="d-lg-none text-white">Notifications</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <form class="form-inline my-2 my-lg-0">
                        <div class="form-group">
                            <input class="form-control mr-sm-0" type="text" placeholder="Search">
                            <button class="btn btn-light my-2 my-sm-0 border-0" type="submit"> <i
                                    class="fas fa-search    "></i>
                            </button>
                        </div>

                    </form>
                </li>



                <li class="nav-item ">
                    <div class="dropdown">
                        <a type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle nav-icon text-white  "></i>
                            <span class="d-lg-none text-white">Profile</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route("logout") }}"><i style="color: orange" class="fas fa-sign-out-alt"></i> logout</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#"><i class="fas fa-cog nav-icon  text-white "></i>
                        <span class="d-lg-none text-white">Settings</span></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="row">
        <!--SIDE BAR-->
        <div class="col-12 mx-auto">
            <div class="d-none d-lg-block col-lg-3" id="sidebar">
                <span class="col-1 d-lg-none float-right" onclick="hideSidebar()"> <i
                        class="fas fa-times text-white "></i> </span>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <h3 class="font-weight-bold"> <i class="fas fa-columns"></i> DASHBOARD </h3>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fas fa-users" style="color: white"></i>
                            Users</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fas fa-users-cog" style="color: white"></i>
                            Roles</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="{{ route("schedule") }}"><i class="fas fa-calendar" style="color: white"></i>
                            Schedule Task</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fas fa-meetup" style="color: white"></i>
                            Meetings</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fas fa-file-word" style="color: white"></i>
                            Manage
                            Templates</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fas fa-file" style="color: white"></i>
                            Manage Files</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="#"><i class="fas fa-file-archive" style="color: white"></i>
                            Log
                            File</a>
                    </li>
            </div>

            <div class="col-12 float-lg-right" id="main">
                <div id="main-container" class=" border-1 m-0 p-0">
                    {{-- <div class="main_overlay"></div> --}}
                    <div class="row px-4" id="main-content">

                        @yield('content')

                        <div class="d-block d-lg-none" onclick="showSidebar()" id="drawer">
                            <i class="fas fa-bars text-white ico"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--<div class="col-md-8 float-right" style="background-image: url('../img/logo.png');height:fit-content; </div>-->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery-3.3.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('/js/all.js') }}">
    </script>
    <script src="{{ asset('/js/popper.min.js') }}">
    </script>
    <script src="{{ asset('/js/bootstrap.min.js') }}">
    </script>

    <script>
        const showSidebar = () => {
            const sb = document.querySelector('#sidebar');
            if (sb.classList.contains('d-none')) {
                sb.classList.remove('d-none');
            }
        }

        const hideSidebar = () => {
            const sb = document.querySelector('#sidebar');
            if (!sb.classList.contains('d-none')) {
                sb.classList.add('d-none');
            }
        }
    </script>

    @yield('script')

</body>

</html>
