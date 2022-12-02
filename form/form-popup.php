<?php
    if(!defined('spbpStrong')) {
        die('Direct access not permitted');
    }
    // Form Popup

    // Get parm Url for analytics
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $str = preg_replace('/_/', ' ', $query);
    $gclid = $str['gclid'];
    $msclkid = $str['msclkid'];
    $fbclid = $str['fbclid'];
    $medium = $str['utm_medium'];
    $cn = $str['cn'];
    $gbraid = $str['gbraid'];
    $wbraid = $str['wbraid'];
    $utm_source = $str['utm_source'];
?>

<div class="lightbox">
  <div class="disney-popup"></div>
    <div class="box p-5">
        <form id="form-modal-popup" method="post" action="contact/contact.php" class="login-form" onsubmit="return checkFormPopUp(this);">
            <div class="row">
                <div class="col-md-12">
                    <div class="focus">
                        <?php include 'templates/partial/countdown.php' ?>
                        <h4 class="text-center">Non farti scappare l'offerta! Ti chiamiamo GRATIS, senza alcun impegno</h4>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group position-relative">
                        <label for="telPop">Il tuo numero di telefono <span class="text-danger">*</span></label>
                        <i class="mdi mdi-account ml-3 icons"></i>
                        <input id="telPop" type="tel" class="form-control" placeholder="Qui il tuo numero" name="phone" required>
                    </div>
                </div>
                <p class="p-policy">Inserendo il numero di telefono e cliccando sul tasto Chiamatemi, dichiaro di aver preso visione <a class="cursor-a" href="<?php if ($privacy_policy) : echo $privacy_policy; endif; ?>" target="_blank">dell'informativa privacy</a>, di essere maggiorenne ed intestatario del numero fornito. </p>
                <div class="checkbox" style="margin-top: 10px;">
                    <label style="font-size: 10px; margin-bottom: 0 !important;">
                        <input style="    transform: scale(1.3);
                margin-right: 5px;" type="checkbox" name="privacy" value="accettata" > Acconsento al trattamento dei miei dati personali per la comunicazione di offerte commerciali
                    </label>
                </div>
                <input type="hidden" name="ip" value="<?=$ip;?>">
                <input type="hidden" name="gclid" value="<?=$gclid;?>">
                <input type="hidden" name="msclkid" value="<?=$msclkid;?>">
                <input type="hidden" name="fbclid" value="<?=$fbclid;?>">
                <input type="hidden" name="medium" value="<?=$medium;?>">
                <input type="hidden" name="cn" value="<?=$cn;?>">
                <input type="hidden" name="gbraid" value="<?=$gbraid;?>">
                <input type="hidden" name="wbraid" value="<?=$wbraid;?>">
                <input type="hidden" name="utm_source" value="<?=$utm_source;?>">
                <div class="col-md-12">
                    <button type="submit" id="submit-btn2" name="btn_modal" class="btn btn-success w-100"><?php echo $button_text; ?></button>
                </div>
            </div>
        </div>
    </form>
  </div>
</div>


