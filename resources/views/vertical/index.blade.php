<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>VEXPERT Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="images/vexpert.png">

    <!-- App css -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/metismenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">

    <script src="{{URL::asset('js/modernizr.min.js')}}"></script>

</head>


<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{url('/')}}" class="logo">
                            <span>
                                <img src="images/vexpert.png" alt="" height="50">
                            </span>

                </a>
            </div>
<br>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">

                    <!--<li class="menu-title">Navigation</li>-->

                    <li>
                        <a href="{{url('/')}}">
                            <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Dashboard </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Apps </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{url('/calendrier')}}">Calendrier</a></li>
                            <li><a href="apps-taskboard.html">Barre de tâches</a></li>
                            <li><a href="apps-contacts.html">Contacts</a></li>
                            <li><a href="apps-projects.html">Projets</a></li>
                            <li><a href="apps-companies.html">Companies</a></li>
                            <li><a href="apps-file-manager.html">Gestionnaire de fichiers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Comptes </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{url('/comptes')}}">Tous les comptes</a></li>
                            <li><a href="{{url('/ajouter_compte')}}">Ajouter un compte</a></li>
                            <li><a href="email-compose.html">Modifier un compte</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Livraison </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{url('/livraisons')}}">Toutes les livraisons</a></li>
                            <li><a href="{{url('/ajouter_livraison')}}">Ajouter une livraison</a></li>
                            <li><a href="email-compose.html">Modifier un livraison</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Commandes </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{url('/commandes')}}">Toutes les commandes</a></li>
                            <li><a href="email-read.html">Commandes en attente</a></li>
                            <li><a href="email-compose.html">Commandes livrees</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"><i class="fi-mail"></i><span> Emails </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Lire les emails</a></li>
                            <li><a href="email-compose.html">Composer un email</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-layout"></i><span> Fonctionnaliteés </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="layouts-menucollapsed.html">Menu Collapsed</a></li>
                            <li><a href="layouts-small-menu.html">Small Menu</a></li>
                            <li><a href="layouts-dark-lefbar.html">Dark Leftbar</a></li>
                            <li><a href="layouts-center-logo.html">Center Logo</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Interface client </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-spinners.html">Spinners</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popover</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-notifications.html">Notification</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                            <li><a href="ui-range-slider.html">Range Slider</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="widgets.html">
                            <i class="fi-command"></i> <span> Widgets </span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> API Charts </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-google.html">Google Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Chart</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-disc"></i><span class="badge badge-info pull-right">10</span> <span> Formulaires </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Masks</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                            <li><a href="form-x-editable.html">X Editable</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-box"></i><span> Icônes </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-dripicons.html">Dripicons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-feather.html">Feather Icons</a></li>
                            <li><a href="icons-simpleline.html">Simple Line Icons</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-paper"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="{{url('/commandes')}}">Data Tables</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                            <li><a href="tables-foo.html">Foo Tables</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-location-2"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-paper-stack"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-logout.html">Logout</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);"><i class="fi-marquee-plus"></i><span class="badge badge-success pull-right">Hot</span> <span> Extra Pages </span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-faq.html">FAQ</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                            <li><a href="extras-email-template.html">Email Templates</a></li>
                            <li><a href="extras-ratings.html">Ratings</a></li>
                            <li><a href="extras-search-results.html">Search Results</a></li>
                            <li><a href="extras-gallery.html">Gallery</a></li>
                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript: void(0);"><i class="fi-share"></i> <span> Multi Level </span> <span class="menu-arrow"></span></a>
                        <ul class="nav-second-level nav" aria-expanded="false">
                            <li><a href="javascript: void(0);">Level 1.1</a></li>
                            <li><a href="javascript: void(0);" aria-expanded="false">Level 1.2 <span class="menu-arrow"></span></a>
                                <ul class="nav-third-level nav" aria-expanded="false">
                                    <li><a href="javascript: void(0);">Level 2.1</a></li>
                                    <li><a href="javascript: void(0);">Level 2.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        <!-- Top Bar Start -->
        <div class="topbar">

            <nav class="navbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">

                    <li class="hide-phone app-search">
                        <form>
                            <input type="text" placeholder="Recherche..." class="form-control">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="fi-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="fi-speech-bubble noti-icon"></i>
                            <span class="badge badge-custom badge-pill noti-icon-badge">6</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h5>
                            </div>

                            <div class="slimscroll" style="max-height: 230px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sam Garret</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sherry Marshall</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Shawn Millard</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="images/iyadh.jpg" alt="user" class="rounded-circle"> <span class="ml-1">Iyadh Khalfallah<i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Bienvenue !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-head"></i> <span>Mon compte</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-cog"></i> <span>Paramètres</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-help"></i> <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-lock"></i> <span>Mode en veille</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-power"></i> <span>Deconnexion</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li>
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard </h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Bienvenue dans la dashboard de Agil</li>
                            </ol>
                        </div>
                    </li>

                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->



        <!-- Start Page content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="overview-item overview-item--c1">
                            <div class="overview__inner">
                                <div class="overview-box clearfix">
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                    <div class="text">
                                        <h2>Nombre de dossiers non validés</h2>
                                        <span>68</span>
                                    </div>
                                </div>
                                <div class="overview-chart">
                                    <canvas id="widgetChart1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Vue générale du compte</h4>

                            <div class="row">
                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#0acf97" value="37" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Ventes quotidiennes</p>
                                            <h3 class="">35,715 DT</h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f9bc0b" value="92" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Analyse des ventes</p>
                                            <h3 class="">97,511 DT</h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#f1556c" value="14" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Statistiques</p>
                                            <h3 class="">954 DT</h3>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-sm-6 col-lg-6 col-xl-3">
                                    <div class="card-box mb-0 widget-chart-two">
                                        <div class="float-right">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                   data-fgColor="#2d7bf4" value="60" data-skin="tron" data-angleOffset="180"
                                                   data-readOnly=true data-thickness=".1"/>
                                        </div>
                                        <div class="widget-chart-two-content">
                                            <p class="text-muted mb-0 mt-2">Total des revenus</p>
                                            <h3 class="">32,540 DT</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end row -->



                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Commandes</h4>

                            <div id="website-stats" style="height: 350px;" class="flot-chart mt-5"></div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="header-title">Ventes</h4>

                            <div id="combine-chart">
                                <div id="combine-chart-container" class="flot-chart mt-5" style="height: 350px;">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->






            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">

        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- jQuery  -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/metisMenu.min.js"></script>
<script src="js/waves.js"></script>
<script src="js/jquery.slimscroll.js"></script>

<!-- Flot chart -->
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.min.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/curvedLines.js')}}"></script>
<script src="{{URL::asset('plugins/flot-chart/jquery.flot.axislabels.js')}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="plugins/jquery-knob/excanvas.js"></script>
<![endif]-->
<script src="plugins/jquery-knob/jquery.knob.js"></script>

<!-- Dashboard Init -->
<script src="pages/jquery.dashboard.init.js"></script>

<!-- App js -->
<script src="js/jquery.core.js"></script>
<script src="js/jquery.app.js"></script>

</body>
</html>