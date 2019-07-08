

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Bootstrap Admin Template </title>
    <link rel="shortcut icon" href="/static/img/favicon.ico">
    <script src="/static/js/jquery.min.js"></script>
    {{--<script src="/static/js/popper/popper.min.js"></script>--}}
    {{--<script src="/static/js/tether.min.js"></script>--}}
    {{--<script src="/static/js/bootstrap.min.js"></script>--}}
    {{--<script src="/static/js/jquery.cookie.js"></script>--}}
    {{--<script src="/static/js/jquery.validate.min.js"></script>--}}
    <script src="/static/js/chart.min.js"></script>
    {{--<script src="/static/js/front.js"></script>--}}
    <script src="/static/js/vue.js"></script>

    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/font-icon-style.css">
    <link rel="stylesheet" href="/static/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="/static/css/form.css">

    <link href="/node_modules/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/hdjs/css/font-awesome.min.css"
          rel="stylesheet">
    <script>
        //HDJS组件需要的配置
        hdjs = {
            'base': '/node_modules/hdjs',
            'uploader': '/component/uploader',
            'filesLists': '/component/filesLists?',
            'removeImage': '?s=component/upload/removeImage&m=member&siteid=18',
            'ossSign': '?s=component/oss/sign&m=member&siteid=18',
        };
    </script>
    <script src="/node_modules/hdjs/app/util.js"></script>
    <script src="/node_modules/hdjs/require.js"></script>
    <script src="/node_modules/hdjs/config.js"></script>
    <link href="/css/hdcms.css" rel="stylesheet">
    <script>
        require(['jquery'], function ($) {
            //为异步请求设置CSRF令牌
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        })
    </script>
</head>

<body>

<!--====================================================
                         MAIN NAVBAR
======================================================-->
<header class="header">
    <nav class="navbar navbar-expand-lg " style="z-index: 999">
        <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="Search Now" class="form-control">
            </form>
        </div>
        <div class="container-fluid ">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <div class="brand-text brand-big hidden-lg-down"><img src="/static/img/logo-white.png" alt="Logo" class="img-fluid"></div>
                        <div class="brand-text brand-small"><img src="/static/img/logo-icon.png" alt="Logo" class="img-fluid"></div>
                    </a>
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Expand-->
                <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="/static/img/expand.png" onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" class="nav-link" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
                <li class="nav-item dropdown">
                    <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o"></i><span class="noti-numb-bg"></span><span class="badge">12</span></a>
                    <ul aria-labelledby="notifications" class="dropdown-menu">
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-envelope bg-red"></i>You have 6 new messages </div>
                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-twitter bg-skyblue"></i>You have 2 followers</div>
                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-upload bg-blue"></i>Server Rebooted</div>
                                    <div class="notification-time"><small>4 minutes ago</small></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-twitter bg-skyblue"></i>You have 2 followers</div>
                                    <div class="notification-time"><small>10 minutes ago</small></div>
                                </div>
                            </a>
                        </li>
                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                    </ul>
                </li>
                <!-- Messages                        -->
                <li class="nav-item dropdown"> <a id="messages" class="nav-link logout" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="noti-numb-bg"></span><span class="badge">10</span></a>
                    <ul aria-labelledby="messages" class="dropdown-menu">
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <div class="msg-profile"> <img src="/static/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="msg-body">
                                    <h3 class="h5 msg-nav-h3">Jason Doe</h3><span>Sent You Message</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <div class="msg-profile"> <img src="/static/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="msg-body">
                                    <h3 class="h5 msg-nav-h3">Frank Williams</h3><span>Sent You Message</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <div class="msg-profile"> <img src="/static/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="msg-body">
                                    <h3 class="h5 msg-nav-h3">Ashley Wood</h3><span>Sent You Message</span>
                                </div>
                            </a>
                        </li>
                        <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/static/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                    <ul aria-labelledby="profile" class="dropdown-menu profile">
                        <li>
                            <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <div class="msg-profile"> <img src="/static/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="msg-body">
                                    <h3 class="h5">{{Auth::guard('admin')->user()->username}}</h3><span>steenaben@Businessbox.com</span>
                                </div>
                            </a>
                            <hr>
                        </li>
                        <li>
                            <a rel="nofollow" href="/admin/changePassword" class="dropdown-item">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-user "></i>修改密码</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="profile.html" class="dropdown-item">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-envelope-o"></i>Inbox</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a rel="nofollow" href="profile.html" class="dropdown-item">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-cog"></i>Setting</div>
                                </div>
                            </a>
                            <hr>
                        </li>
                        <li>
                            <a rel="nofollow" href="/admin/logout" class="dropdown-item">
                                <div class="notification">
                                    <div class="notification-content"><i class="fa fa-power-off"></i>退出登录</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item d-flex align-items-center"><a id="menu-toggle-right" class="nav-link" href="#"><i class="fa fa-bars"></i></a></li>
                <nav id="sidebar-wrapper">
                    <div class="sidebar-nav">
                        <div class="tab" role="tabpanel">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" href="#live" role="tab" data-toggle="tab"><i class="fa fa-globe"></i> Live</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#trend" role="tab" data-toggle="tab"><i class="fa fa-rocket"></i> Trending</a>
                                </li>
                            </ul>
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade show active" id="live">
                                    <h3>Connect Live</h3>
                                    <div class="content newsf-list">
                                        <ul class="list-unstyled">
                                            <li class="border border-primary">
                                                <a rel="nofollow " href="#" class=" d-flex">
                                                    <div class="news-f-img"> <img src="/static/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                    <div class="msg-body">
                                                        <h6 class="h5 msg-nav-h6">New Innovation world</h6>
                                                        <small>Tech soft is great innovation for...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="border border-success">
                                                <a rel="nofollow" href="#" class=" d-flex">
                                                    <div class="news-f-img"> <img src="/static/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                    <div class="msg-body">
                                                        <h6 class="h5 msg-nav-h6">Modified hand-cart</h6>
                                                        <small>The idea is to incorporate easy...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="border border-info">
                                                <a rel="nofollow" href="#" class=" d-flex">
                                                    <div class="news-f-img"> <img src="/static/img/avatar-4.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                    <div class="msg-body">
                                                        <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                        <small>A dot matrix printer modified at...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="border border-primary">
                                                <a rel="nofollow" href="#" class=" d-flex">
                                                    <div class="news-f-img"> <img src="/static/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                    <div class="msg-body">
                                                        <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                        <small>A dot matrix printer modified at...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="border border-success">
                                                <a rel="nofollow" href="#" class=" d-flex">
                                                    <div class="news-f-img"> <img src="/static/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                    <div class="msg-body">
                                                        <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                        <small>A dot matrix printer modified at...</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="border border-info">
                                                <a rel="nofollow" href="#" class=" d-flex">
                                                    <div class="news-f-img"> <img src="/static/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                                    <div class="msg-body">
                                                        <h6 class="h5 msg-nav-h6">Low cost Modern printer</h6>
                                                        <small>A dot matrix printer modified at...</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="trend">
                                    <div class="card card-c2" style="box-shadow: 0 0 0;">
                                        <div class="header">
                                            <h3 class="title">Trending Items</h3>
                                            <p class="category">Last Campaign Performance</p>
                                        </div>
                                        <div class="content">
                                            <canvas class="ct-chart" id="myChart4" height="250"></canvas>
                                            <div class="footer">
                                                <div class="legend">
                                                    <i class="fa fa-circle text-info"></i> Open
                                                    <i class="fa fa-circle text-danger"></i> Bounce
                                                    <i class="fa fa-circle text-warning"></i> Unsubscribe
                                                </div>
                                                <hr>
                                                <div class="stats">
                                                    <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </ul>
        </div>
    </nav>
</header>

<!--====================================================
                        PAGE CONTENT
======================================================-->
<div class="page-content d-flex align-items-stretch">

    <!--***** SIDE NAVBAR *****-->
    <nav class="side-navbar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="/static/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h4">{{Auth::guard('admin')->user()->username}}</h1>
            </div>
        </div>
        <hr>
        <!-- Sidebar Navidation Menus-->
        <ul class="list-unstyled">
            <li> <a href="/admin/changePassword"><i class="icon-home"></i>我的资料</a></li>
            <li><a href="#apps" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>资源管理</a>
                <ul id="apps" class="collapse list-unstyled">
                    <li><a href="/admin/tag">标签管理</a></li>
                    <li><a href="/admin/lesson">视频管理</a></li>
                    <li><a href="media.html">Media</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                </ul>
            </li>
            <li> <a href="chart.html"> <i class="fa fa-bar-chart"></i>Chart </a></li>
            <li><a href="#forms" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-building-o"></i>Forms </a>
                <ul id="forms" class="collapse list-unstyled">
                    <li><a href="basic-form.html">Basic Form</a></li>
                    <li><a href="form-layouts.html">Form Layouts</a></li>
                </ul>
            </li>
            <li> <a href="maps.html"> <i class="fa fa-map-o"></i>Maps </a></li>
            <li class="active"><a href="#pages" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-file-o"></i>Pages </a>
                <ul id="pages" class="collapse list-unstyled">
                    <li><a href="faq.html">FAQ</a></li>
                    <li class="active"><a href="empty.html">Empty</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="login.html">Log In</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="search-result.html">Search Result</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li>
            <li> <a href="tables.html"> <i class="icon-grid"></i>Tables </a></li>
            <li><a href="#elements" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-globe"></i>UI Elements </a>
                <ul id="elements" class="collapse list-unstyled">
                    <li><a href="ui-buttons.html">Buttons</a></li>
                    <li><a href="ui-cards.html">Cards</a></li>
                    <li><a href="ui-progressbars.html">Progress Bar</a></li>
                    <li><a href="ui-timeline.html">Timeline</a></li>
                </ul>
            </li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
        </ul>
    </nav>

    <div class="content-inner chart-cont">

        <!--***** CONTENT *****-->
        @yield('content')

    </div>
    @include('admin.layout.errors')
</div>
<!--Global Javascript -->
@include('flash::message')
<script>
    require(['bootstrap'], function ($) {
        $('#flash-overlay-modal').modal();
    });
</script>
<!--Core Javascript -->
@yield('footScript')
<script>
    new Chart(document.getElementById("myChart4").getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
                backgroundColor: [
                    "#2ecc71",
                    "#3498db",
                    "#95a5a6",
                    "#9b59b6",
                    "#f1c40f",
                    "#e74c3c",
                    "#34495e"
                ],
                data: [12, 19, 3, 17, 28, 24, 7]
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: ''
            }
        }
    });
</script>
</body>

</html>