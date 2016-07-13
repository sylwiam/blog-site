<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sylwia Decowski</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Website with resume and portfolio for Sylwia Decowski">
    <meta name="author" content="Sylwia Decowski">
    <link rel='shortcut icon' type='image/x-icon' href="{!! asset('images/favicon.ico') !!}"/>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" type="text/css">

    <link rel="stylesheet" href="{!! asset('css/blog.css') !!}" type="text/css">
    <script type="text/javascript"  src="{{ URL::asset('/vendor/vue/vue.min.js') }}"></script>

    <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
    <link
      rel="stylesheet"
      href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"
    />
</head>

<body>
    <header class="header">
        <div class="container">
            <img class="profile-image img-responsive pull-left" src="{!! asset('images/sylwia-decowski.jpg') !!}" alt="Sylwia Decowski" />       
            <div class="profile-content pull-left">
                <h1 class="name">Sylwia Decowski</h1>
                <h2 class="desc">Software Engineer</h2>
                <ul class="social list-inline">
                  <li><a href="https://www.linkedin.com/in/sylwiam"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="https://github.com/sylwiam"><i class="fa fa-github"></i></a></li>
                </ul>
            </div><!--//profile-->
        </div><!--//container-->
    </header><!--//header-->

    <!-- Prepare a container for your calendar. -->


    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    @include('about-me')
                </section><!--//section-->
                <section class="latest section">
                    @include('projects')
                </section><!--//section-->
                <section class="section">
                    <div class="section-inner">
                        <h2 class="heading">GitHub contributions calendar</h2>
                        <div class="content github-container">
                            <div class="calendar" style="">
                                Loading GitHub contributions data...
                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
                <section class="experience section">
                    @include('work')
                </section><!--//section-->
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                @include('side-boxes')
            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <footer class="footer">
        <div class="container text-center">
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- jQuery --> 
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- custom js -->
    <script type="text/javascript" src="{{ URL::asset('/js/main.js') }}"></script>


    <script  type="text/javascript" src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>

    <script type="text/javascript" >
        new GitHubCalendar(".calendar", "sylwiam");
    </script>
</body>
</html>
