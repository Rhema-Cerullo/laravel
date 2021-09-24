<!doctype html>
<html lang="en">

<head>
    <title>COMFIVAL LOGIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link rel="stylesheet" href="{{('/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{('css/bootstrap.min.css')}}">
</head>

<body>
    <div class="">
        <!-- <div class="text-center m-0"> -->
        <div class="row">
            <div class="col-12 col-md-6 float-left">
                <!--<div class="card h-100"> -->
                <div class="w-100 h-100">
                    <h1>Welcome to COMFIVAL</h1>
                    <img src="{{ asset('../img/undraw_Work_time_re_hdyv.png') }}" class="card-img-top"
                        style="width:100%">
                    <div class="card-body">
                        <h4>"IF YOU WANT TO GO FAST, WALK ALONE<br>IF YOU WANT TO GO FAR, WALK TOGETHER..."</h4>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 float-right" id="logincard">
                <div class="logincard text-center">
                    <img src="{{ asset('/img/MIT2-logo-fond_noir--bleu@2x.png') }}" alt="mit2" width="353"
                        height="187.5">
                    <form id="loginForm" method="POST" action="{{ route('login') }}" class="my-5">
                        @csrf
                        <div class="form-group col-12 col-md-10" id="loginForm">
                            <label for="username" class="align-left">Username:</label>
                            <input type="text" name="username" id="loginForm" class="form-control col-12 col-md-8 float-right"
                                placeholder="Enter username" aria-describedby="helpId">
                        </div>
                        <div class="form-group col-12 col-md-10" id="loginForm">
                            <label for="password" class=" align-left">Password:</label>
                            <input type="password" name="password" id="loginForm" class="form-control col-12 col-md-8 float-right"
                                placeholder="Enter password" aria-describedby="helpId">
                        </div>
                        <input type="submit" value="login" class="btn btn-warning">
                        {{-- <a href="/dashboards" class="btn btn-warning">login</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery-3.3.1.slim.min.js')}}">
    </script>
    <script src="{{ asset('/js/all.js')}}">
    </script>
    <script src="{{ asset('/js/popper.min.js')}}">
    </script>
    <script src="{{ asset('/js/bootstrap.min.js')}}">
    </script>
</body>

</html>
