<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <link href="//fonts.googleapis.com/css?family=Poiret+One:400" rel="stylesheet" type="text/css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <link href="http://webdevelop.nyc/application/themes/webdevelop/main.css" rel="stylesheet">
    <link rel="stylesheet" href="http://webdevelop.nyc/application/themes/webdevelop/styles/slider.css" />



    <!-- Custom styles for this template -->
    <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Beginning container for title & slogan (designs) -->
<div class="container"> <!-- Determines the page has 12-columns in container. Meant for cleaner layout. -->
    <div class="row">
        <div class="col-md-12">
            <h1><a class="title" href="http://webdevelop.nyc/"><h1 class="title"><strong>Jordan</strong> Simpson</h1></a></h1><!-- Title "Simply Jordan" with "Simply" inside a <strong> tag for more emphasis -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-10"> <!-- Places the slogan ("designs") inside a container of 11 grids and right aligns it inside the stylesheet -->
            <h3 class="title_slogan"></h3> <!-- <h3> tag for the "designs" slogan -->
        </div>
    </div> <!-- End of "grid_11" class for the "designs" slogan -->
</div> <!-- End container for title & slogan (designs) -->




<nav class="navbar hidden-xs navbar-default navbar-fixed" role="navigation">
    <div class="container">




        <div class="collapse navbar-collapse hidden-xs">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Resume</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<nav class="navbar2 navbar-inverse visible-xs" role="navigation">
    <div class="container">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</nav>

<!-- Carousel
================================================== -->



<!-- Beginning of 12 grid container for posts & categories -->
<div class="container">
    <!-- Beginning of categories container -->
    <div class="pull-right">
        <div class="col-md-2"> <!-- Give the categories container 5 grids -->
            <div class="categories hidden-xs hidden-sm"> <!-- Beginning of categories text container -->
                <h3 class="cat_title">Categories</h3> <!-- <h3> tag for the "Categories" title -->
                <ul class="cat_links"> <!-- Beginning of category links -->
                    <!-- <li> class of active or opened link
                    <li class="active"><a href="#">News</a></li> -->
                    <li><a href="#">News</a></li>
                    <li><a href="#">Designs</a></li>
                    <li><a href="#">Coding</a></li>
                    <li><a href="#">Tutorials</a></li>
                    <li><a href="#">Uncategorized</a></li>
                </ul> <!-- End of category links -->
            </div> <!-- End of categories text container -->
        </div>
    </div> <!-- End of categories container -->

    <!-- Beginning of second post -->
    <div class="col-md-7"> <!-- Give the post container 7 grids -->
        <h2><a class="post_title" href="./post-2.html">Lorem Ipsum Dotet</a></h2> <!-- Title of post -->
        <div class="post_date">August 4th, 2014</div> <!-- Date of post -->
    </div> <!-- End of post container -->
    <div class="col-md-7 hidden-xs"> <!-- Give the post container 7 grids -->
        <a href="./post-2.html" title="Second post image thumbnail..."><img class="post_image" src="http://webdevelop.nyc/application/themes/webdevelop/images/post-2.jpg" /></a> <!-- Post image thumbnail -->
    </div>
    <div class="col-md-10"> <!-- Give the post description and "read more" link 10 grids -->
        <!-- Beginning of post description -->
        <p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis dignissim mi, nec pharetra nunc. Sed sit amet tempor eros, sit amet varius velit. Phasellus non est euismod, commodo erat a, posuere turpis. Suspendisse porttitor sem et fermentum aliquam. Integer eget turpis nisi. Praesent ullamcorper scelerisque massa et vestibulum. Phasellus in dolor molestie, molestie eros at, viverra orci. Vestibulum iaculis turpis quis purus faucibus volutpat...</p> <!-- End of first post description -->
    </div> <!-- End of post description and "read more" link -->
    <div class="col-md-10"> <!-- Give the post container 7 grids -->
        <div class="read_more"> <!-- Container for the "Read More" text -->
            <a href="./post-2.html">Read More...</a> <!-- <a> tag link for "Read More..." -->
        </div> <!-- End of container for the "Read More" text -->
    </div> <!-- End of 7 grid container for the "Read More" text -->
    <!-- End of second post -->
</div> <!-- End of 12 grid container for posts & categories -->

<footer class="bottom">

    <!--
      <div class="container visible-xs">

      <p class="navbar-text pull-left">PetShop.Net.tr</p>
      <a href="http://www.alpc.com.tr" class="navbar-btn btn-danger btn pull-right">ALPC AŞ.</a>

      </div>
    -->

    <div class="footer">
        <div class="container hidden-sm hidden-xs">

            <div class="social_feeds">
                <div class="col-md-3">
                    <h2>Social Feeds</h2>
                    <p><img class="social-icons" src="http://webdevelop.nyc/application/themes/webdevelop/images/google-icon.png"><strong>Jordan Simpson</strong> has posted a new entry <strong>Testing the social media notification menu again..</strong></p>

                    <p><img class="social-icons" src="http://webdevelop.nyc/application/themes/webdevelop/images/twitter-icon.png"><strong>@KimbleRendall</strong> Hopefully one day soon I'll get the chance to work with you on one of your films.</p>

                    <p><img class="social-icons" src="http://webdevelop.nyc/application/themes/webdevelop/images/tumblr-icon.png">posted a link <strong>How To Setup a Virtual Credit Card for FREE</strong></p>
                </div>
            </div>

            <div class="recent_projects">
                <div class="col-md-4 col-md-offset-2">

                    <h2>Recent Projects</h2>

                    <div class="clearfix"></div>
                    <ul>
                        <li><a href="./project-1.html">Heritage Template</a></li>
                        <li><a href="./project-1.html">Heritage Template</a></li>
                        <li><a href="./project-1.html">Heritage Template</a></li>
                        <li><a href="./project-1.html">Heritage Template</a></li>
                    </ul>
                </div>
            </div>

            <div class="contact_me">
                <div class="col-md-3">
                    <h2>Get in Touch</h2>
                    <p><a href="mailto:jordan@webdevleop.nyc" title="Send me a E-Mail..."><strong>jordan</strong>@simplyjordan.net</a></p>

                    <p><strong>Skype:</strong> <a href="skype:JordanSimps?chat">JordanSimps</a></p>

                    <p><strong>AOL:</strong> <a title="simplyjordanblog@aim.com" href="aim:goIM?screenname=SimplyJordanBlog">SimplyJordanBlog</a></p>

                    <p><strong>Yahoo:</strong> simplyjordanblog@yahoo.com</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container visible-md">

    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="jcoursel.js"></script>
</body>
</html>
