<?php
$void = "javascript:void(0)";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | AdmissionBoox</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Style CSS -->
    <!--<link rel="stylesheet" href="css/stylesheet.css">-->
    <link rel="stylesheet" href="css/mmenu.css">
    <link rel="stylesheet" href="css/stylesheet_1.css" id="colors">
    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet"
        type="text/css">
</head>

<body class="header-one"> 
  <div id="main_wrapper">
    <!-- Header -->
    <header id="header_part" class="fullwidth">
            <div id="header">
                <div class="container">
                    <div class="utf_left_side">
                        <div id="logo"> <a href="{{url('/')}}"><img src="images/logo.png" alt=""></a> </div>
                        <div class="mmenu-trigger">
                            <button class="hamburger utfbutton_collapse" type="button">
                                <span class="utf_inner_button_box">
                                    <span class="utf_inner_section"></span>
                                </span>
                            </button>
                        </div>
                        <nav id="navigation" class="style_one">
                            <ul id="responsive">
                                <li>
                                  <a class="current" href="{{url('/')}}">Home</a>  
                                </li>
                                <li>
                                   <a href="{{url('schools')}}">Schools</a>
                                </li>
                                <li><a href="#">About</a>
                                    <ul>
                                       <li><a href="{{url('about')}}">About Us</a></li>
                                       <li><a href="{{url('vision-mission')}}">Vision/Mission</a></li>
                                    </ul>
                                </li>
                                <li>
                                   <a href="{{url('scholarships')}}">Scholarships</a>
                                </li>
                                <li><a href="{{url('help')}}">Help</a> </li>
                                <li><a href="{{url('contact')}}">Contact Us</a> </li>
                               
                            </ul>
                        </nav>
                        <div class="clearfix"></div>
                    </div>
                     <div class="utf_right_side">
                       <div class="header_widget"> 
                        @if(isset($user))
                         
                         @include('components.button',
                         [
                            'href' => "#",
                            'classes' => "with-icon",
                            'icon' => "<i class='sl sl-icon-user'></i>",
                            'title' => "Dashboard"
                         ])
                         @else
                         @include('components.button',
                         [
                            'href' => "#dialog_signin_part",
                            'classes' => "sign-in popup-with-zoom-anim",
                            'icon' => "<i class='fa fa-sign-in'></i>",
                            'title' => "Sign In"
                         ])
                         
                         @endif
                       </div>
                     </div>

                    <div id="dialog_signin_part" class="zoom-anim-dialog mfp-hide">
                        <div class="small_dialog_header">
                            <h3>Sign In</h3>
                        </div>
                        <div class="utf_signin_form style_one">
                            <ul class="utf_tabs_nav">
                                <li class=""><a href="#tab1">Log In</a></li>
                                <li><a href="#tab2">Register</a></li>
                            </ul>
                            <div class="tab_container alt">
                                <div class="tab_content" id="tab1" style="display:none;">
                                    <form method="post" class="login">
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="username">
                                                <input type="text" class="input-text" name="username" id="username"
                                                    value="" placeholder="Username" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="password">
                                                <input class="input-text" type="password" name="password" id="password"
                                                    placeholder="Password" />
                                            </label>
                                        </p>
                                        <div class="utf_row_form utf_form_wide_block form_forgot_part"> <span
                                                class="lost_password fl_left"> <a href="javascript:void(0);">Forgot
                                                    Password?</a> </span>
                                            <div class="checkboxes fl_right">
                                                <input id="remember-me" type="checkbox" name="check">
                                                <label for="remember-me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="utf_row_form">
                                            <input type="submit" class="button border margin-top-5" name="login"
                                                value="Login" />
                                        </div>
                                        <div class="utf-login_with my-3">
                                            <span class="txt">Or Login in With</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-6">
                                                <a href="javascript:void(0);" class="social_bt facebook_btn mb-0"><i
                                                        class="fa fa-facebook"></i> Facebook</a>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <a href="javascript:void(0);" class="social_bt google_btn mb-0"><i
                                                        class="fa fa-google"></i> Google</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab_content" id="tab2" style="display:none;">
                                    <form method="post" class="register">
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="username2">
                                                <input type="text" class="input-text" name="username" id="username2"
                                                    value="" placeholder="Username" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="email2">
                                                <input type="text" class="input-text" name="email" id="email2" value=""
                                                    placeholder="Email" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="password1">
                                                <input class="input-text" type="password" name="password1"
                                                    id="password1" placeholder="Password" />
                                            </label>
                                        </p>
                                        <p class="utf_row_form utf_form_wide_block">
                                            <label for="password2">
                                                <input class="input-text" type="password" name="password2"
                                                    id="password2" placeholder="Confirm Password" />
                                            </label>
                                        </p>
                                        <input type="submit" class="button border fw margin-top-10" name="register"
                                            value="Register" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clearfix"></div>

        @yield('content')

     <!-- Footer -->
      <div id="footer" class="footer_sticky_part">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h4>About Us</h4>
                        <p>AdmissionBOOX serves as a comprehensive, all-in-one solution for optimizing the admissions process and providing a superior user experience for all stakeholders involved.</p>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Useful Links</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Listing</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>My Account</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">My Listing</a></li>
                            <li><a href="#">Favorites</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Pages</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">How It Work</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <h4>Help</h4>
                        <ul class="social_footer_link">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Add Listing</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_copyright_part">Copyright &copy; {{date('Y')}} All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom_backto_top"><a href="#"></a></div>
  </div>

    <!-- Scripts -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/rangeslider.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/tooltips.min.js"></script>
    <script src="js/jquery_custom.js"></script>
    
    @yield('scripts')

    <!--------- Session notifications-------------->
 <?php
               $pop = ""; $val = "";
               
               if(isset($signals))
               {
                  foreach($signals['okays'] as $key => $value)
                  {
                    if(session()->has($key))
                    {
                  	$pop = $key; $val = session()->get($key);
                    }
                 }
              }
              
             ?> 

                 @if($pop != "" && $val != "")
                   @include('session-status',['pop' => $pop, 'val' => $val])
                 @endif

@if($user == null)
<!--------- Plugins: DO NOT EDIT ------>
<?php
foreach($plugins as $p)
{
?>
<!--{!! $p['value'] !!} -->
<?php
}
?>
<!------------------------------------->
@endif

</body>
</html>