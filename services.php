<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Services &raquo; HTML5 History API</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <?php
        $page = 'services';

        include('inc/header.php');
      ?>

      <div class="placeholder">
        <div class="jumbotron">
          <h1>Services</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>

        <hr>

        <div class="row-fluid">
          <div class="featurette">
            <img class="featurette-image pull-right" src="assets/img/browser-icon-chrome.png">
            <h2 class="featurette-heading">First featurette headling. <span class="muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
        </div>
      </div>

      <hr>

      <?php include('inc/footer.php'); ?>

  </body>
</html>
