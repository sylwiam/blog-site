<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sylwia Decowski</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Author name here">
    <link rel='shortcut icon' type='image/x-icon' href="{!! asset('images/favicon.ico') !!}"/>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" type="text/css">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}" type="text/css">
    <!-- Theme CSS -->
    <!-- <link id="theme-style" rel="stylesheet" href="assets/css/style.css"> -->
    <link id="theme-style" rel="stylesheet" href="http://green.benchmarkeducation.ny/~smichon/laravel/site/assets/css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="{!! asset('css/blog.css') !!}" type="text/css">
    <script type="text/javascript"  src="{{ URL::asset('/vendor/vue/vue.min.js') }}"></script>

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
                  <!-- <li><a href="#"><i class="fa fa-tumblr"></i></a></li> -->
                  <!-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
                </ul>
            </div><!--//profile-->
        </div><!--//container-->
    </header><!--//header-->

    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>@ToDo - add text</p>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

               <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">

                            <div class="item featured text-center">
                                <h3 class="title"><a href="#" target="_blank">Featured Project name</a></h3>
                                <p class="summary">Short summary</p>
                                <div class="featured-image">
                                    <a href="#" target="_blank">
                                    <img class="img-responsive project-image" src="" alt="feature project wide image here" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text"></div>
                                    </div>
                                </div>
                                <div class="desc text-left">
                                    <p>Project description.</p>
                                    <p>More description.</p>
                                    <p></p>
                                </div><!--//desc-->
                                <a class="btn btn-cta-secondary" href="https://github.com/sylwiam" target="_blank"><i class="fa fa-github-alt"></i>Repository</a>
                            </div><!--//item-->
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://github.com/sylwiam" target="_blank">
                                <img class="img-responsive project-image" src="" alt="square project image here" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://github.com/sylwiam" target="_blank">Project Name</a></h3>
                                    <p>Project description.</p>
                                    <p>More description.</p>
                                    <p><a class="more-link" href="https://github.com/sylwiam" target="_blank"><i class="fa fa-github-square"></i>Code</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->

                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://github.com/sylwiam" target="_blank">
                                <img class="img-responsive project-image" src="" alt="square project image here" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://github.com/sylwiam" target="_blank">Project Name</a></h3>
                                    <p>Project description.</p>
                                    <p>More description.</p>
                                    <p><a class="more-link" href="https://github.com/sylwiam" target="_blank"><i class="fa fa-github-square"></i>Code</a></p>
                                </div><!--//desc-->
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->

                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Title - <span class="place"><a href="#">Company Name Here</a></span> <span class="year">(start-year - end-year)</span></h3>
                                <p>Role Description.</p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title">Title - <span class="place"><a href="#">Company Name Here</a></span> <span class="year">(start-year - end-year)</span></h3>
                                <p>Role Description.</p>
                            </div><!--//item-->

                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading">My GitHub GRAPH</h2>


                        <div id="github-graph" class="github-graph">

                        </div>


                    </div>
                </section>
            </div><!--//primary-->
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Ossining, NY</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span>sylwiadecowski@gmail.com</li>
                                <li><i class="fa fa-file-text-o"></i><span class="sr-only">Resume:</span><a href="#">Resume</a></li>
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//aside-->

                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <!-- <p class="intro">
                                Intro about your skills goes here. Keep the list lean and only show your primaere.</p> -->

                            <div class="skillset">

                                <div class="item">
                                    <h3 class="level-title">Python
                                        <span class="level-label">Advanced</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">PHP
                                        <span class="level-label">Advanced</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title"> JavaScript &amp; jQuery
                                      <span class="level-label">Advanced</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">Vue.js
                                      <span class="level-label">Advanced</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">HTML &amp; CSS
                                      <span class="level-label">Advanced</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">MySQL, PostgreSQL
                                      <span class="level-label">Intermediate</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->
                                <div class="item">
                                    <h3 class="level-title">MongoDB
                                      <span class="level-label">Intermediate</span>
                                    </h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>
                                    </div><!--//level-bar-->
                                </div><!--//item-->

                                <!-- <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Coderwall</a></p> -->
                            </div>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading">Education</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i>BS Computer Science</h3>
                                <h4 class="university">Saint John's University <span class="year">(2004-2008)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->

                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading">Languages</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong>English:</strong></span>
                                    <span class="level">Bilingual Proficiency <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li>
                                <li class="item">
                                    <span class="title"><strong>Polish:</strong></span>
                                    <span class="level">Native Speaker <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>

                <!-- <aside class="list music aside section">
                    <div class="section-inner">
                        <h2 class="heading">Favorite Coding Music</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-headphones"></i> <a href="https://www.youtube.com/watch?v=unCVi4hYRlY">Amélie Soundtrack</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="https://soundcloud.com/platform/maceo-plex-boiler-room">Maceo Plex</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="https://soundcloud.com/muramasamusic/sets/someday-somewhere-ep">Mura Masa</a></li>
                                <li><i class="fa fa-headphones"></i> <a href="https://soundcloud.com/thechuckmeista/sets/nujabes">Nujabes</a></li>
                            </ul>
                        </div>
                    </div>
                </aside> -->


            </div><!--//secondary-->
        </div><!--//row-->
    </div><!--//masonry-->

    <footer class="footer">
        <div class="container text-center">
                <!-- <small class="copyright">Designed by <a href="#" target="_blank">YOUR NEMA HERE</a></small> -->
        </div><!--//container-->
    </footer><!--//footer-->

    <!-- jQuery --> 
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <!-- custom js -->
    <script type="text/javascript" src="{{ URL::asset('/js/main.js') }}"></script>
</body>
</html>
