<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Projects &raquo; HTML5 History API</title>
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
        $page = 'projects';

        include('inc/header.php');
      ?>

      <div class="placeholder">
        <div class="jumbotron">
          <h1>Projects</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>

        <hr>

        <div class="row-fluid">
          <ul class="thumbnails">
            <li class="span4">
              <div class="thumbnail">
                <img src="http://placehold.it/300x200/cccccc/000000.png" alt="">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a></p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://placehold.it/300x200/cccccc/000000.png" alt="">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a></p>
                </div>
              </div>
            </li>
            <li class="span4">
              <div class="thumbnail">
                <img src="http://placehold.it/300x200/cccccc/000000.png" alt="">
                <div class="caption">
                  <h3>Thumbnail label</h3>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                  <p><a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a></p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <hr>

      <?php include('inc/footer.php'); ?>

  </body>
</html>
