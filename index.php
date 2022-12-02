<?php

define('spbpStrong', TRUE);

//Strpos URL
if (!(strpos($_SERVER['REQUEST_URI'], '?'))) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
} else {
    $actual_link = '';
}

if ((strpos($_SERVER['REQUEST_URI'], '?'))) {
    $full_url = $actual_link . "?" . $_SERVER['QUERY_STRING'];
}else{
    $full_url = $actual_link;
}


// Variables Meta Index Page
include ('config_assets.php');

?>

<?php include 'templates/head.php' ?>

<?php include 'templates/btn-modal.php' ?>

<?php include 'templates/navbar.php' ?>

<?php include 'templates/header_area.php' ?>

<?php include 'templates/section1.php' ?>

<?php include 'templates/section2.php' ?>

<?php include 'form/form-popup.php' ?>

<?php include 'templates/footer.php' ?>

<?php include 'form/form-modal.php' ?>

<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script type="module" src="assets/js/starter.js"></script>
<script type="module" src="assets/js/modernizr-custom.js"></script>

<script>
    // Prevent Double Click. Da usare con: onsubmit=return checkForm nel form
    function checkForm(form) {
        form.btn_standard.disabled = true;
        return true;
    }

    function checkFormModal(form) {
        form.btn_modal.disabled = true;
        return true;
    }

    function checkFormPopUp(form) {
        form.btn_modal.disabled = true;
        return true;
    }
</script>

</body>

</html>
