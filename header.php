<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Facepalm Reviews</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery.onImagesLoad.min.js"></script>

       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <script>
		$(function(){
  $('#nav').click(function() {
    $(this).toggleClass('open');
  });
});

$(document).ready(function() {
   var pathname = window.location.pathname;
   var pathname = pathname.split('/');
   var tester = pathname[pathname.length-1];

   $('.nav a').each(function(){
       var test = $(this).attr('href');
       if (test == tester){
           $(this).addClass('active');
       }
   });
});
</script>

    </head>
    <body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<header id="header">
  <div class="container-fluid">
             <div class="col-lg-10 col-xs-offset-1"
              <h1><a href="index.php">		<img src="http://i0.kym-cdn.com/photos/images/newsfeed/000/698/489/2f7.png" alt="FacePalm Reviews" height="80" width="80" align="left"></a></h1>
    <nav id="nav">

      <ul class="nav">
        <li><a href="index.php">Search</a></li>
        <li><a href="preview-data.php">Dataset</a></li>
        <li><a href="top10.php">Top Games</a></li>
        <li><a href="developerpick.php">Developer's Picks</a></li>
        <li><a href="companies.php">Companies</a></li>
        <li><a href="reviews.php">Reviews</a></li>
        <li><a href="erd.php">ERD Diagram</a></li>
        <li><a href="intro.php">Intro</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cursor.php">Cursor</a></li>
        <li><a href="insertdata.php">Insert</a></li>
        <li><a href="deletedata.php">Delete</a></li>

      </ul>
    </nav>
  </div>
</header>
