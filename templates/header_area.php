<?php
    if(!defined('spbpStrong')) {
        die('Direct access not permitted');
    }
    // Header Area

?>

<div class="container-fluid bg-home">
    <div class="container py-md-3 pdb-0 mt-2">
        <div class="row align-items-center">
            <div class="col-md-6 p-md-2">
              <div class="cont-fib">
                <h1 class="text-wind text-white"><?php echo $text_primary; ?></h1>
              </div>
              <div class="cont">
                <div class="card--btm--left">
                  <div class="card--btm--left-price"><?php echo $price; ?></div>
                  <div class="card--btm--left--second">
                    <div class="sprice"><?php echo $cent_price; ?></div>
                    <div class="mese">al mese </div>
                  </div>
                </div>
              </div>
							<h5 class="text-white">Internet Ultraveloce, <span class="or-color">senza vincoli.</span> </h5>   
								<ul class="price-v">
									<li><span class="text-white font-weight-bold">Internet Ultraveloce Fino ad 1 Gbit/s</span> 
										<picture>
											<source srcset="images/bollini/misto_radio.webp" type="image/webp">
											<source srcset="images/bollini/misto-radio.png" type="image/jpeg">
											<img style="width: 20px;" alt="bollino fibra" class="img-fluid fibra" src="images/bollini/misto-radio.png">
										</picture>
									</li>
									<li><span class="text-white font-weight-bold f-w-900">Internet Box NeXXt Incluso nel Prezzo</span></li>
									<li><span class="text-white font-weight-bold">Attivazione inclusa</span></li>
									<li><span class="text-white font-weight-bold">Senza Vincoli. Disdici quando vuoi</span></li>
							</ul>
            </div>
            <div class="col-md-6 px-0">
                <?php
								if ($countdown == 'true') {
									include 'templates/partial/countdown.php';
								} ?> 
                <div class="box-orange">
                  <p class="mb-0"><?php echo $cta_form; ?></p>
                </div>               
                <?php include 'form/form.php' ?>
            </div>
        </div>
    </div>
</div>
