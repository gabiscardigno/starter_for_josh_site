<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    
    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
              ?>

    </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body>
    <header class="container-fluid herobg">
        <!-- div for the main image that stretches to the edge of the page-->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">PROJECTS</a></li>
                        <li><a href="#">PUBLICATIONS</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <!--div that holds the content in the middle of the page-->
            <h1> Games Design For the Future</h1>
            <!--the main tag line-->
        </div> <!-- container -->

    </header>


    <footer class="container-fluid">
        <!-- div for the main image to stretch s to the edge of the page-->

        <div class="container">
            <!-- div to hold the content in the middle of the page-->
            <div class="row">
                <!-- a row that gives us access to the BS columns-->
                <div class="col-md-6 text-center footer-content ">
                    <p>JOSH WHITKIN</p>
                    <img src="images/facebook.jpg" alt="facebook">
                    <img src="images/linkedin.jpg" alt="linkedin">
                </div>
                <div class="col-md-6 text-center footer-content">
                    <p>Terms and Conditions</p>
                    <img src="images/twitter.jpg" alt="twitter">
                    <img src="images/othersocial.jpg" alt="facebook">
                </div><!-- row-->
            </div><!-- container -->
        </div><!-- container-fluid-->

    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>