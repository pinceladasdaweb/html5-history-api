<div class="masthead">
  <h3 class="muted">HTML5 History API</h3>
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <ul class="nav">
          <?php if ($page == 'home') {?>
          <li class="active"><a href="index">Home</a></li>
          <?php } else { ?>
          <li><a href="index">Home</a></li>
          <?php } ?>
          <?php if ($page == 'projects') {?>
          <li class="active"><a href="projects">Projects</a></li>
          <?php } else { ?>
          <li><a href="projects">Projects</a></li>
          <?php } ?>
          <?php if ($page == 'services') {?>
          <li class="active"><a href="services">Services</a></li>
          <?php } else { ?>
          <li><a href="services">Services</a></li>
          <?php } ?>
          <?php if ($page == 'downloads') {?>
          <li class="active"><a href="downloads">Downloads</a></li>
          <?php } else { ?>
          <li><a href="downloads">Downloads</a></li>
          <?php } ?>
          <?php if ($page == 'about') {?>
          <li class="active"><a href="about">About</a></li>
          <?php } else { ?>
          <li><a href="about">About</a></li>
          <?php } ?>
          <?php if ($page == 'contact') {?>
          <li class="active"><a href="contact">Contact</a></li>
          <?php } else { ?>
          <li><a href="contact">Contact</a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>