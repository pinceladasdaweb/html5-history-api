<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Contact &raquo; HTML5 History API</title>
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
        $page = 'contact';

        include('inc/header.php');
      ?>

      <div class="placeholder">
        <div class="jumbotron">
          <h1>Contact</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        </div>

        <hr>

        <div class="row-fluid">
          <form class="form-horizontal">
              <div class="control-group">
                  <label class="control-label">Name</label>
                  <div class="controls">
                      <input class="input-xxlarge itemName" value="" type="text">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Email</label>
                  <div class="controls">
                      <input class="input-xxlarge caption" value="" type="text">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Link</label>
                  <div class="controls">
                      <input class="input-xxlarge link" value="" type="text">
                  </div>
              </div>
              <div class="control-group">
                  <label class="control-label">Message</label>
                  <div class="controls">
                      <textarea class="input-block-level description" rows="4"></textarea>
                  </div>
              </div>
              <div class="control-group">
                  <div class="controls">
                      <button class="btn btn-primary btn-large post">Send</button>
                  </div>
              </div>
          </form>
        </div>
      </div>

      <hr>

      <?php include('inc/footer.php'); ?>

  </body>
</html>
