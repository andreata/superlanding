<?php
if(!defined('spbpStrong')) {
   die('Direct access not permitted');

}

    // Get parm Url for analytics
    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $str = preg_replace('/_/', ' ', $query);
    $gclid = $str['gclid'];
    $msclkid = $str['msclkid'];
    $fbclid = $str['fbclid'];
    $medium = $str['utm_medium'];
    $kwd = $str['adg'];
    $cn = $str['cn'];
    $gbraid = $str['gbraid'];
    $wbraid = $str['wbraid'];
    $utm_source = $str['utm_source'];
?>

<form method="post" action="contact/contact.php" class="login-form" id="form-main" onsubmit="return checkForm(this);">
    <div class="tim-inline">
        <label for="telBasic">Inserisci il tuo numero di telefono <span class="text-danger">*</span></label>
        <input style="border-color: black;" id="telBasic" type="tel" class="form-control py-4" placeholder="Qui il tuo numero" name="phone" required>
        <button type="submit" id="submit-btn1" name="btn_standard" class="btn btn-success w-100 btn-call"><?php echo $button_text; ?></button>
    </div>
    <div class="form-group">	
        <p class="p-policy">Inserendo il numero di telefono e cliccando sul tasto Chiamatemi, dichiaro di aver preso visione <a class="cursor-a" href="<?php if ($privacy_policy) : echo $privacy_policy; endif; ?>" target="_blank">dell'informativa privacy</a>, di essere maggiorenne ed intestatario del numero fornito. </p>
        <div class="checkbox" style="margin-top: 10px;">
            <label style="font-size: 10px; margin-bottom: 0 !important;">
                <input style="    transform: scale(1.3);
        margin-right: 5px;" type="checkbox" name="privacy" value="accettata" > Acconsento al trattamento dei miei dati personali per la comunicazione di offerte commerciali
            </label>
        </div>
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
</form>
