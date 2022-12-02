<?php
    define('spbpStrong', TRUE);


    include '../config_thank_page.php';
?>

<!DOCTYPE html>
    <html lang="IT">

    </head>
    <style>
        html, body {
          height: 100%;
        }
        @media screen and (max-width: 768px) {
            h2.blue {
                font-size: 1.5rem;
				
            }
        }
    </style>
        <?php include '../templates/head.php' ?>
        <?php include '../templates/navbar.php' ?>

        <div class="thks">
            <div style="margin-top: 80px;" class="container">

                <div class="row align-items-center mt-md-5">
                    <div class="col-lg-12 col-md-12 text-center">

                        <h1 class="blue"><?php echo $text_primary; ?></h1>
                        <h2 class="blue"><?php echo $text_secondary; ?></h2>
                        <p style="font-size: 40px;">👍</p>
                        
                    </div>
                </div>


            </div>

            <div class="pt-5 footer-c">
                <?php include '../templates/footer.php' ?>
            </div>
        </div>

    </body>

</html>