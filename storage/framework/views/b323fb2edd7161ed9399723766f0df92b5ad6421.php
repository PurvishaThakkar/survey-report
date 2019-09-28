<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" >
        
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Survey Reporting</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
     <!-- include the BotDetect layout stylesheet --> 
   <link href="<?php echo e(captcha_layout_stylesheet_url()); ?>" type="text/css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 

</head>
<body style="background-image: url(<?php echo e(asset('images/background_image.png')); ?>)">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Survey Reporting
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="font-weight: bold;">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('c_register')); ?>">Register</a></li>
                        <?php else: ?>
                        <li> <a href="<?php echo e(route('home')); ?>">About Us</a></li>
                        <li> <a href="<?php echo e(route('contact_detail')); ?>">Contact</a></li>
                        <!-- <li> <a href="<?php echo e(route('user_detail')); ?>">Admin</a></li> -->
                        <li> <a href="<?php echo e(route('company_detail')); ?>">Companies</a></li>
                        <li> <a href="<?php echo e(route('employee_detail')); ?>">Employees</a></li>
                        <li> <a href="<?php echo e(route('department_detail')); ?>">Departments</a></li>
                        <li> <a href="<?php echo e(route('survey_detail')); ?>">Surveys</a></li>
                        <li> <a href="<?php echo e(route('ques_type')); ?>">Questions</a></li>
                        <li> <a href="#">Answers</a></li>

                         
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                            
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>
</html>
