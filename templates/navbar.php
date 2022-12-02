<?php
    if(!defined('spbpStrong')) {
        die('Direct access not permitted');
    }
    // Navbar
?>
<!-- Navbar -->
  <nav class="navbar navbar-light">
    <div class="container">
        <div class="row ">
          <div class="col-md-12 d-flex justify-content-between">
            <a class="navbar-brand" href="#">
             <img alt="logo fastweb" class="d-inline-block align-top logo header-img" src="<?php echo $logo_principale ?>">
            </a>

            <div class="dis-header">
              <p style="margin: auto;" class="migliore text-center">
                <?php 
                  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                                  
                  if (!(strpos($_SERVER[REQUEST_URI], '?'))) {
                      echo '';
                  } else {
                      $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                      $parts = parse_url($url);
                      parse_str($parts['query'], $query);
                      $str = preg_replace('/_/', ' ', $query);
                      echo $str['adg'];
                  }
                ?>
              </p>
            <img alt="logo top quality network" class="img-fluid header-img-2" src="<?php echo $logo_topq; ?>">
          
            </div>

          </div>
        </div>
      </div>
  </nav>
