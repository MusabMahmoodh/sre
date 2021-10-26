
<!doctype html>
<html lang="en">
<head>
<title>CMC-TREED</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="CMC-TREED is a highly customizable MIS.">
<meta name="author" content="Canopus Pvt Ltd, powered by: canopus.lk">

<link rel="icon" href="Favicon-pli.ico" type="image/x-icon"><!-- VENDOR CSS -->
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/c3/c3.min.css"/>
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/chartist/css/chartist.css">
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/assets/vendor/toastr/toastr.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="https://cmc.canopuz.com/survey/theme/html/assets/css/site.min.css">

<style>
#map {
    height: 800px;
    width: 100%;
}
</style>
</head>
<body class="theme-cyan font-montserrat light_version">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<!-- Theme Setting -->
<div class="themesetting">
    <a href="javascript:void(0);" class="theme_btn"><i class="icon-magic-wand"></i></a>
    <div class="card theme_color">
        <div class="header">
            <h2>Theme Color</h2>
        </div>
        <ul class="choose-skin list-unstyled mb-0">
            <li data-theme="green"><div class="green"></div></li>
            <li data-theme="orange"><div class="orange"></div></li>
            <li data-theme="blush"><div class="blush"></div></li>
            <li data-theme="cyan" class="active"><div class="cyan"></div></li>
            <li data-theme="indigo"><div class="indigo"></div></li>
            <li data-theme="red"><div class="red"></div></li>
        </ul>
    </div>
    <div class="card font_setting">
        <div class="header">
            <h2>Font Settings</h2>
        </div>
        <div>
            <div class="fancy-radio mb-2">
                <label><input name="font" value="font-krub" type="radio"><span><i></i>Krub Google font</span></label>
            </div>
            <div class="fancy-radio mb-2">
                <label><input name="font" value="font-montserrat" type="radio" checked><span><i></i>Montserrat Google font</span></label>
            </div>
            <div class="fancy-radio">
                <label><input name="font" value="font-roboto" type="radio"><span><i></i>Robot Google font</span></label>
            </div>
        </div>
    </div>
    <div class="card setting_switch">
        <div class="header">
            <h2>Settings</h2>
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                Light Version
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="lv-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                RTL Version
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="rtl-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                Horizontal Henu
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="hmenu-btn" >
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
            <li class="list-group-item">
                Mini Sidebar
                <div class="float-right">
                    <label class="switch">
                        <input type="checkbox" class="mini-sidebar-btn">
                        <span class="slider round"></span>
                    </label>
                </div>
            </li>
        </ul>
    </div>   
    <div class="card">
        <div class="form-group">
            <label class="d-block">Traffic this Month <span class="float-right">77%</span></label>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="d-block">Server Load <span class="float-right">50%</span></label>
            <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <nav class="navbar top-navbar">
        <div class="container-fluid">

            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.html"><img src="https://cmc.canopuz.com/survey/" alt="Oculux Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
                </div>
            </div>
            
            <div class="navbar-right">
                <div id="navbar-menu">

                    <ul class="nav navbar-nav">
                        <li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>                        
                        <li><a href="javascript:void(0);" class="right_toggle icon-menu" title="Right Menu"><i class="icon-bubbles"></i><span class="notification-dot bg-pink">2</span></a></li>
                        <li><a href="https://cmc.canopuz.com/survey/index.php/profile/logout/" class="icon-menu"><i class="icon-power"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
    </nav>    
        <div class="search_div">
        <div class="card">
            <div class="body">
                <form id="navbar-search" class="navbar-form search-form">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            <a href="javascript:void(0);" class="search_toggle btn btn-danger"><i class="icon-close"></i></a>
                        </div>
                    </div>
                </form>
            </div>            
        </div>
        <span>Search Result <small class="float-right text-muted">About 90 results (0.47 seconds)</small></span>
        <div class="table-responsive">
            <table class="table table-hover table-custom spacing5">
                <tbody>
                    <tr>
                        <td class="w40">
                            <span>01</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SS</span></div>
                                <div class="ml-3">
                                    <a href="page-invoices-detail.html" title="">South Shyanne</a>
                                    <p class="mb-0">south.shyanne@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>02</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Zoe Baker</a>
                                    <p class="mb-0">zoe.baker@example.com</p>
                                </div>
                            </div>                                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>03</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                    <div class="avtar-pic w35 bg-indigo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>CB</span></div>
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Colin Brown</a>
                                    <p class="mb-0">colinbrown@example.com</p>
                                </div>
                            </div>                                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>04</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avtar-pic w35 bg-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>KG</span></div>
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Kevin Gill</a>
                                    <p class="mb-0">kevin.gill@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>05</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Brandon Smith</a>
                                    <p class="mb-0">Maria.gill@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>06</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Kevin Baker</a>
                                    <p class="mb-0">kevin.baker@example.com</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span>07</span>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                                <div class="ml-3">
                                    <a href="javascript:void(0);" title="">Zoe Baker</a>
                                    <p class="mb-0">zoe.baker@example.com</p>
                                </div>
                            </div>                                        
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div id="megamenu" class="megamenu particles_js">
        <a href="javascript:void(0);" class="megamenu_toggle btn btn-danger"><i class="icon-close"></i></a>
        <div class="container">
            <div class="row clearfix">
                <div class="col-12">
                    <ul class="q_links">
                        <li><a href="app-inbox.html"><i class="icon-envelope"></i><span>Inbox</span></a></li>
                        <li><a href="app-chat.html"><i class="icon-bubbles"></i><span>Messenger</span></a></li>
                        <li><a href="app-calendar.html"><i class="icon-calendar"></i><span>Event</span></a></li>
                        <li><a href="page-profile.html"><i class="icon-user"></i><span>Profile</span></a></li>
                        <li><a href="page-invoices.html"><i class="icon-printer"></i><span>Invoice</span></a></li>
                        <li><a href="page-timeline.html"><i class="icon-list"></i><span>Timeline</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="row clearfix w_social3">
                <div class="col-lg-3 col-md-6">
                    <div class="card facebook-widget">
                        <div id="slider2" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="icon"><i class="fa fa-facebook"></i></div>
                                    <div class="content">
                                        <div class="text">Like</div>
                                        <div class="number">10K</div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="icon"><i class="fa fa-facebook"></i></div>
                                    <div class="content">
                                        <div class="text">Comment</div>
                                        <div class="number">217</div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="icon"><i class="fa fa-facebook"></i></div>
                                    <div class="content">
                                        <div class="text">Share</div>
                                        <div class="number">78</div>
                                    </div>
                                </div>
                            </div>
                        </div>                                            
                    </div>
                </div>                                                    
                <div class="col-lg-3 col-md-6">
                    <div class="card google-widget">
                        <div id="slider2" class="carousel slide vert" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="icon"><i class="fa fa-google"></i></div>
                                    <div class="content">
                                        <div class="text">Like</div>
                                        <div class="number">10K</div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="icon"><i class="fa fa-google"></i></div>
                                    <div class="content">
                                        <div class="text">Comment</div>
                                        <div class="number">217</div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="icon"><i class="fa fa-google"></i></div>
                                    <div class="content">
                                        <div class="text">Share</div>
                                        <div class="number">78</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card twitter-widget">
                        <div id="slider2" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="icon"><i class="fa fa-twitter"></i></div>
                                    <div class="content">
                                        <div class="text">Followers</div>
                                        <div class="number">10K</div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="icon"><i class="fa fa-twitter"></i></div>
                                    <div class="content">
                                        <div class="text">Twitt</div>
                                        <div class="number">657</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card instagram-widget">
                        <div class="icon"><i class="fa fa-instagram"></i></div>
                        <div class="content">
                            <div class="text">Followers</div>
                            <div class="number">231</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-4 col-sm-12">
                    <div class="card w_card3">
                        <div class="body">
                            <div class="text-center"><i class="icon-picture text-info"></i>
                                <h4 class="m-t-25 mb-0">104 Picture</h4>
                                <p>Your gallery download complete</p>
                                <a href="javascript:void(0);" class="btn btn-info btn-round">Download now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card w_card3">
                        <div class="body">
                            <div class="text-center"><i class="icon-diamond text-success"></i>
                                <h4 class="m-t-25 mb-0">813 Point</h4>
                                <p>You are doing great job!</p>
                                <a href="javascript:void(0);" class="btn btn-success btn-round">Read now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card w_card3">
                        <div class="body">
                            <div class="text-center"><i class="icon-social-twitter text-primary"></i>
                                <h4 class="m-t-25 mb-0">3,756</h4>
                                <p>New Followers on Twitter</p>
                                <a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
        <div id="rightbar" class="rightbar">
        <div class="body">
            <ul class="nav nav-tabs2">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Chat-one">Chat</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-list">List</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat-groups">Groups</a></li>
            </ul>
            <hr>
            <div class="tab-content">
                <div class="tab-pane vivify fadeIn delay-100 active" id="Chat-one">
                    <div class="slim_scroll">
                        <div class="chat_detail">
                            <ul class="chat-widget clearfix">
                                <li class="left float-left">
                                    <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                                    <div class="chat-info">       
                                        <span class="message">Hello, John<br>What is the update on Project X?</span>
                                    </div>
                                </li>
                                <li class="right">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                    <div class="chat-info">
                                        <span class="message">Hi, Alizee<br> It is almost completed. I will send you an email later today.</span>
                                    </div>
                                </li>
                                <li class="left float-left">
                                    <div class="avtar-pic w35 bg-pink"><span>KG</span></div>
                                    <div class="chat-info">
                                        <span class="message">That's great. Will catch you in evening.</span>
                                    </div>
                                </li>
                                <li class="right">
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt="">
                                    <div class="chat-info">
                                        <span class="message">Sure we'will have a blast today.</span>
                                    </div>
                                </li>
                            </ul>
                            <div class="input-group p-t-15">
                                <textarea rows="3" class="form-control" placeholder="Enter text here..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane vvivify fadeIn delay-100" id="Chat-list">
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Folisise Chosielie</span>
                                        <span class="message">offline</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Marshall Nichols</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-red"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Louis Henry</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-orange"><span>DS</span></div>
                                    <div class="media-body">
                                        <span class="name">Debra Stewart</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-green"><span>SW</span></div>
                                    <div class="media-body">
                                        <span class="name">Lisa Garett</span>
                                        <span class="message">offline since May 12</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Debra Stewart</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Lisa Garett</span>
                                        <span class="message">offline since Jan 18</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-indigo"><span>FC</span></div>
                                    <div class="media-body">
                                        <span class="name">Louis Henry</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-pink"><span>DS</span></div>
                                    <div class="media-body">
                                        <span class="name">Debra Stewart</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-info"><span>SW</span></div>
                                    <div class="media-body">
                                        <span class="name">Lisa Garett</span>
                                        <span class="message">offline since May 12</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                    </ul>
                </div>
                <div class="tab-pane vivify fadeIn delay-100" id="Chat-groups">
                    <ul class="right_chat list-unstyled mb-0">
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-cyan"><span>DT</span></div>
                                    <div class="media-body">
                                        <span class="name">Designer Team</span>
                                        <span class="message">offline</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-azura"><span>SG</span></div>
                                    <div class="media-body">
                                        <span class="name">Sale Groups</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-orange"><span>NF</span></div>
                                    <div class="media-body">
                                        <span class="name">New Fresher</span>
                                        <span class="message">online</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <div class="avtar-pic w35 bg-indigo"><span>PL</span></div>
                                    <div class="media-body">
                                        <span class="name">Project Lead</span>
                                        <span class="message">offline since May 12</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    
        <div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="https://cmc.canopuz.com/survey/"><img src="https://cmc.canopuz.com/survey/" alt="Wisshlink Logo" class="img-fluid" width="120"></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="https://cmc.canopuz.com/survey/resources/profile/profile.jpg" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Sugunan</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="https://cmc.canopuz.com/survey/index.php/profile/edit/"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="https://cmc.canopuz.com/survey/index.php/profile/logout/"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>                
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                                        <li class="header">Access Control</li>                    
                    <li>
                        <a href="#myPage" class="has-arrow"><i class="icon-user"></i><span>Manage User</span></a>
                        <ul>
                                                    <li><a href="https://cmc.canopuz.com/survey/index.php/profile/add/">Add User</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/user/list_all/">List User</a></li>
                                                </ul>
                    </li>
                                                            <li>
                        <a href="#myPage" class="has-arrow"><i class="icon-settings"></i><span>Manage Privilege</span></a>
                        <ul>
                                                    <li><a href="https://cmc.canopuz.com/survey/index.php/profile/add_privilege/">Add Privilege</a></li>
                                                                                <li><a href="https://cmc.canopuz.com/survey/index.php/profile/list_privilege/">List Privilege</a></li>
                                                </ul>                        
                    </li>
                                                            <li class="header">Survey</li>                    
                    <li>
                        <a href="#myPage" class="has-arrow"><i class="icon-check"></i><span>Manage Survey</span></a>
                        <ul>
                                                    <li><a href="https://cmc.canopuz.com/survey/index.php/survey/add/">Add Survey</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/survey/list_all/">List Survey</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/survey/add_question/">Add Question</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/survey/list_question/">List Question</a></li>
                                                </ul>
                    </li>
                                                          
                    <li>
                        <a href="#myPage" class="has-arrow"><i class="icon-bar-chart"></i><span>Data Collection Progress</span></a>
                        <ul>
                                                    <li><a href="https://cmc.canopuz.com/survey/index.php/reports/overview/">Overview</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/reports/map_view/">Map View</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/reports/daily_progress/">Detail Progress</a></li>
                                                </ul>
                    </li>
                                                                                <li class="header">Utility</li>                    
                    <li>
                        <a href="#myPage" class="has-arrow"><i class="icon-map"></i><span>Manage Map</span></a>
                        <ul>
                                                    <li><a href="https://cmc.canopuz.com/survey/index.php/map/draw/">Add Map</a></li>
                                                                            <li><a href="https://cmc.canopuz.com/survey/index.php/map/list_all/">List Map</a></li>
                                                </ul>
                    </li>
                                    </ul>
            </nav>     
        </div>
    </div>
    <div id="main-content">
        <div class="container-fluid">
                    <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2></h2>
                                            </div>            
                    <div class="col-md-6 col-sm-12 text-right hidden-xs">
                    </div>
                </div>
            </div>
            
            
        <div class="row clearfix">
                

                <div class="col-xl-12 col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Information</h2>
                            <ul class="header-dropdown dropdown">                                
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 mb15">
                                <div id="map"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

                    
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="https://cmc.canopuz.com/survey/theme/html/assets/bundles/libscripts.bundle.js"></script>    
<script src="https://cmc.canopuz.com/survey/theme/html/assets/bundles/vendorscripts.bundle.js"></script>

<script src="https://cmc.canopuz.com/survey/theme/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="https://cmc.canopuz.com/survey/theme/html/assets/bundles/mainscripts.bundle.js"></script>

<script>
    var iconBase = 'https://www.canopuz.com/cms/public/theme/oct/img/favicon/';
    var map;
    var InforObj = [];
    var centerCords = {
        lat: 8.082801,
        lng: 80.594319
    };

    
    var markersOnMap = [{
            placeName: "Australia (Uluru)",
            LatLng: [{
                lat: 7.731304,
                lng: 80.295802
            }]
        },
        {
            placeName: "Australia (Melbourne)",
            LatLng: [{
                lat: 7.331304,
                lng: 80.195802
            }]
        },
        {
            placeName: "Australia (Canberra)",
            LatLng: [{
                lat: 7.165548,
                lng: 80.165289
            }]
        },
        {
            placeName: "Australia (Gold Coast)",
            LatLng: [{
                lat: 7.265548,
                lng: 80.165289
            }]
        },
        {
            placeName: "Australia (Perth)",
            LatLng: [{
                lat: 6.965548,
                lng: 79.965289
            }]
        }
    ];

    window.onload = function () {
        initMap();
    };

    function addMarkerInfo() {
        for (var i = 0; i < markersOnMap.length; i++) {
            var contentString = '<div id="content"><h5>' + markersOnMap[i].placeName + '</h5><p><a href="https://cmc.canopuz.com/survey/' + markersOnMap[i].url + '" target="_blank">Detail</a></p></div>';

            const marker = new google.maps.Marker({
                position: markersOnMap[i].LatLng[0],
                map: map,
                icon: iconBase + 'favicon-32x32.png'
            });

            const infowindow = new google.maps.InfoWindow({
                content: contentString,
                maxWidth: 200
            });

            marker.addListener('click', function () {
                closeOtherInfo();
                infowindow.open(marker.get('map'), marker);
                InforObj[0] = infowindow;
            });
            // marker.addListener('mouseover', function () {
            //     closeOtherInfo();
            //     infowindow.open(marker.get('map'), marker);
            //     InforObj[0] = infowindow;
            // });
            // marker.addListener('mouseout', function () {
            //     closeOtherInfo();
            //     infowindow.close();
            //     InforObj[0] = infowindow;
            // });
        }
    }

    function closeOtherInfo() {
        if (InforObj.length > 0) {
            /* detach the info-window from the marker ... undocumented in the API docs */
            InforObj[0].set("marker", null);
            /* and close it */
            InforObj[0].close();
            /* blank the array */
            InforObj.length = 0;
        }
    }

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            center: centerCords
        });
        addMarkerInfo();
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdWPOSTSlQwuaJt6DZ_FkiCvYLEugmc7o"></script>
<script>
    setInterval(function(){ $.get( "https://cmc.canopuz.com/survey/index.php/profile/online/" ); }, 30000);
</script></body>
</html>
