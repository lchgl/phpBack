<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="/static/img/favicon.ico">

    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/font-icon-style.css">
    <link rel="stylesheet" href="/static/css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="/static/css/pages/login.css">
</head>

<body>

<!--====================================================
                        PAGE CONTENT
======================================================-->
<section class="hero-area">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="contact-h-cont">
                    <h3 class="text-center"><img src="/static/img/logo.png" class="img-fluid" alt=""></h3><br>
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input class="form-control" type="password" name="password" value="hunter2" id="example-password-input">
                        </div>
                        @if(session('error'))
                            <div class="form-control" style="color:red">
                               {{session('error')}}
                            </div>
                        @endif
                        <button class="btn btn-general btn-blue" role="button"><i fa fa-right-arrow></i>Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Global Javascript -->
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/tether.min.js"></script>
<script src="/static/js/popper/popper.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
</body>

</html>