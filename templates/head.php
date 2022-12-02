<?php
    if(!defined('spbpStrong')) {
        die('Direct access not permitted');
    }
    // Head
?>

<!doctype html>
<html lang="it">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php if($codice_tag_manager) : echo $codice_tag_manager; endif; ?>');</script>
    <!-- End Google Tag Manager -->

    <title><?php if($title_page) : echo $title_page; endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if($meta_description) : echo $meta_description; endif; ?>" />
    <meta name="keywords" content="<?php if($keywords) : echo $keywords; endif; ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php if($favi) : echo $favi; endif; ?>">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
	<meta name="facebook-domain-verification" content="jsu8f19qsamh8wgvt9219s0xl92hfw" />

    <style>
        *, *::before, *::after {box-sizing: border-box }html {font-family: sans-serif;line-height: 1.15;-webkit-text-size-adjust: 100%;-webkit-tap-highlight-color: rgba(0, 0, 0, 0) }nav, section {display: block }body {margin: 0;font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-size: 1rem;font-weight: 400;line-height: 1.5;color: #000;text-align: left;}[tabindex="-1"]:focus:not(:focus-visible) {outline: 0 !important }h1, h2, h4, h5 {margin-top: 0;margin-bottom: .5rem }p {margin-top: 0;margin-bottom: 1rem }ul {margin-top: 0;margin-bottom: 1rem }strong {font-weight: bolder }a {text-decoration: none;background-color: transparent }a:hover {color: #bd3402;text-decoration: underline }img {vertical-align: middle;border-style: none }label {display: inline-block;margin-bottom: .5rem }button {border-radius: 0 }button:focus {outline: 1px dotted;outline: 5px auto -webkit-focus-ring-color }input, button {margin: 0;font-family: inherit;font-size: inherit;line-height: inherit }button, input {overflow: visible }button {text-transform: none }[role="button"] {cursor: pointer }button, [type="button"], [type="submit"] {-webkit-appearance: button }button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {cursor: pointer }button::-moz-focus-inner, [type="button"]::-moz-focus-inner, [type="submit"]::-moz-focus-inner {padding: 0;border-style: none }input[type="checkbox"] {box-sizing: border-box;padding: 0 }::-webkit-file-upload-button {font: inherit;-webkit-appearance: button }h1, h2, h4, h5 {margin-bottom: .5rem;font-weight: 500;line-height: 1.2 }h1 {font-size: 2.5rem }h2 {font-size: 2rem }h4 {font-size: 1.5rem }h5 {font-size: 1.25rem }.container, .container-fluid {width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto }@media (min-width: 576px) {.container {max-width: 540px }}@media (min-width: 768px) {.container {max-width: 720px }}@media (min-width: 992px) {.container {max-width: 960px }}@media (min-width: 1200px) {.container {max-width: 1140px }}.row {display: -ms-flexbox;display: flex;-ms-flex-wrap: wrap;flex-wrap: wrap;margin-right: -15px;margin-left: -15px }.col-md-3, .col-md-6, .col-md-12 {position: relative;width: 100%;padding-right: 15px;padding-left: 15px }@media (min-width: 768px) {.col-md-3 {-ms-flex: 0 0 25%;flex: 0 0 25%;max-width: 25% }.col-md-6 {-ms-flex: 0 0 50%;flex: 0 0 50%;max-width: 50% }.col-md-12 {-ms-flex: 0 0 100%;flex: 0 0 100%;max-width: 100% }}.form-control {display: block;width: 100%;height: calc(1.5em + .75rem + 2px);padding: .375rem .75rem;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #495057;background-color: #fff;background-clip: padding-box;border: 1px solid #ced4da;border-radius: .4rem;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out }@media (prefers-reduced-motion: reduce) {.form-control {transition: none }}.form-control::-ms-expand {background-color: transparent;border: 0 }.form-control:-moz-focusring {color: transparent;text-shadow: 0 0 0 #495057 }.form-control:focus {color: #495057;background-color: #fff;border-color: #feac8e;outline: 0;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 0 .2rem rgba(252, 79, 16, 0.25) }.form-control::-webkit-input-placeholder {color: #6c757d;opacity: 1 }.form-control::-moz-placeholder {color: #6c757d;opacity: 1 }.form-control:-ms-input-placeholder {color: #6c757d;opacity: 1 }.form-control::-ms-input-placeholder {color: #6c757d;opacity: 1 }.form-control:disabled {background-color: #e9ecef;opacity: 1 }.form-group {margin-bottom: 1rem }.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before {border-color: #28a745 }.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before {border-color: #dc3545 }.btn {display: inline-block;font-weight: 400;color: #000;text-align: center;vertical-align: middle;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;background-color: transparent;border: 1px solid transparent;padding: .375rem .75rem;font-size: 1rem;line-height: 1.5;border-radius: .4rem;transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out }@media (prefers-reduced-motion: reduce) {.btn {transition: none }}.btn:hover {color: #000;text-decoration: none }.btn:focus {outline: 0;box-shadow: 0 0 0 .2rem rgba(252, 79, 16, 0.25) }.btn:disabled {opacity: .65;box-shadow: none }.btn:not(:disabled):not(.disabled) {cursor: pointer }.btn-success {color: #fff;box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);}.fade {transition: opacity 0.15s linear }@media (prefers-reduced-motion: reduce) {.fade {transition: none }}.fade:not(.show) {opacity: 0 }.close {float: right;font-size: 1.5rem;font-weight: 700;line-height: 1;color: #000;text-shadow: 0 1px 0 #fff;opacity: .5 }.close:hover {color: #000;text-decoration: none }.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {opacity: .75 }button.close {padding: 0;background-color: transparent;border: 0 }.modal {position: fixed;top: 0;left: 0;z-index: 1050;display: none;width: 100%;height: 100%;overflow: hidden;outline: 0 }.modal-dialog {position: relative;width: auto;margin: .5rem;pointer-events: none }.modal.fade .modal-dialog {transition: -webkit-transform 0.3s ease-out;transition: transform 0.3s ease-out;transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;-webkit-transform: translate(0, -50px);transform: translate(0, -50px) }@media (prefers-reduced-motion: reduce) {.modal.fade .modal-dialog {transition: none }}.modal-content {position: relative;display: -ms-flexbox;display: flex;-ms-flex-direction: column;flex-direction: column;width: 100%;pointer-events: auto;background-color: #fff;background-clip: padding-box;border: 1px solid rgba(0, 0, 0, 0.2);border-radius: .3rem;box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);outline: 0 }.modal-header {display: -ms-flexbox;display: flex;-ms-flex-align: start;align-items: flex-start;-ms-flex-pack: justify;justify-content: space-between;padding: 1rem 1rem;border-bottom: 1px solid #dee2e6;border-top-left-radius: calc(.3rem - 1px);border-top-right-radius: calc(.3rem - 1px) }.modal-header .close {padding: 1rem 1rem;margin: -1rem -1rem -1rem auto }.modal-body {position: relative;-ms-flex: 1 1 auto;flex: 1 1 auto;padding: 1rem }@media (min-width: 576px) {.modal-dialog {max-width: 500px;margin: 1.75rem auto }.modal-content {box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5) }}.align-top {vertical-align: top !important }.d-inline-block {display: inline-block !important }.d-flex {display: -ms-flexbox !important;display: flex !important }.justify-content-between {-ms-flex-pack: justify !important;justify-content: space-between !important }.align-items-center {-ms-flex-align: center !important;align-items: center !important }.position-relative {position: relative !important }@supports ((position: -webkit-sticky) or (position: sticky)) {}.w-100 {width: 100% !important }.mw-100 {max-width: 100% !important }.mb-0 {margin-bottom: 0 !important }.mt-2 {margin-top: .5rem !important }.ml-3 {margin-left: 1rem !important }.px-0 {padding-right: 0 !important }.px-0 {padding-left: 0 !important }.py-1 {padding-top: .25rem !important }.py-1 {padding-bottom: .25rem !important }.py-2 {padding-top: .5rem !important }.py-2 {padding-bottom: .5rem !important }.py-4 {padding-top: 1.5rem !important }.py-4 {padding-bottom: 1.5rem !important }.p-5 {padding: 3rem !important }@media (min-width: 768px) {.p-md-2 {padding: .5rem !important }.py-md-2 {padding-top: .5rem !important }.py-md-2 {padding-bottom: .5rem !important }.p-md-3 {padding: 1rem !important }.py-md-3 {padding-top: 1rem !important }.py-md-3 {padding-bottom: 1rem !important }}.text-center {text-align: center !important }.font-weight-bold {font-weight: 700 !important }.text-danger {color: #dc3545 !important }body {font-family: 'Montserrat', sans-serif }.bg-orange {color: white;box-shadow: 0px 0px 12px 0px #6d6d6d }.header-img {max-width: 280px }.shake {max-width: -webkit-fit-content;max-width: -moz-fit-content;max-width: fit-content;padding: 5px 15px;border-radius: 18px }@-webkit-keyframes shake {10%, 90% {-webkit-transform: translate3d(-1px, 0, 0);transform: translate3d(-1px, 0, 0) }20%, 80% {-webkit-transform: translate3d(2px, 0, 0);transform: translate3d(2px, 0, 0) }30%, 50%, 70% {-webkit-transform: translate3d(-4px, 0, 0);transform: translate3d(-4px, 0, 0) }40%, 60% {-webkit-transform: translate3d(4px, 0, 0);transform: translate3d(4px, 0, 0) }}@keyframes shake {10%, 90% {-webkit-transform: translate3d(-1px, 0, 0);transform: translate3d(-1px, 0, 0) }20%, 80% {-webkit-transform: translate3d(2px, 0, 0);transform: translate3d(2px, 0, 0) }30%, 50%, 70% {-webkit-transform: translate3d(-4px, 0, 0);transform: translate3d(-4px, 0, 0) }40%, 60% {-webkit-transform: translate3d(4px, 0, 0);transform: translate3d(4px, 0, 0) }}.fe-shake {-webkit-animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);-webkit-backface-visibility: hidden;backface-visibility: hidden;-webkit-perspective: 1000px;perspective: 1000px;-webkit-animation-duration: 3s;animation-duration: 3s;-webkit-animation-iteration-count: infinite;animation-iteration-count: infinite }.lightbox {display: none;position: relative;position: fixed;z-index: 1;width: 100%;height: 100%;top: 0;left: 0;background-color: rgba(0, 0, 0, 0.7) }.lightbox h4, .lightbox p, .lightbox label {color: white }.lightbox a {color: green }.box {position: absolute;padding: 10px;top: 50%;left: 50%;-webkit-transform: translate(-50%, -50%);transform: translate(-50%, -50%);background: #fdc400;color: #fff }.box p {margin: 0 20px }.close {position: absolute;left: 100%;top: 0;margin: -10px 0 0 -10px;width: 20px;height: 20px;color: #fff;font-size: 13px;font-weight: bold;text-align: center;border-radius: 50%;background-color: #5c5c5c;cursor: pointer;text-decoration: none }ul li {list-style: none;margin: 10px 0;position: relative }ul li:before {position: absolute !important;margin-top: 2px;font-weight: bold;display: inline-block;width: 1em;margin-left: -2em;margin-right: 10px }.p-policy {margin-bottom: 0px;font-size: 10px }.p-policy .cursor-a {font-size: 11px }input[type="tel"] {margin-bottom: 10px }.box-orange {padding: 5px }.box-orange p {text-align: center;font-size: 1.1em }#countdown {padding: 10px;font-size: 1.4em;margin: 10px 0 20px;line-height: 1.5em;text-align: center;font-weight: 600;color: #FFF;padding: 15px 20px;font-size: 16px;margin: 0 0 20px;background: rgba(0, 0, 0, 0.3);line-height: 1.5em;text-align: center }#countdown span {color: #ffffff;font-size: 30px }.cont-fib {display: -ms-flexbox;display: flex }.btn-cta-footer {text-align: center }.btn-cta-footer .btn-red {background: #fdc400;background: linear-gradient(90deg, #fdc400 0%, #fdc400 100%);color: #ffffff;margin: 10px 0 }.btn-cta-footer .btn-green {background-color: #28a745;color: #ffffff;margin: 10px 0 }.btn-modal-mobile {width: 100%;display: block;padding: 3px 0 }button {border: 0;}.section1 .icon {padding: 0 1rem !important;display: -ms-flexbox;display: flex;-ms-flex-pack: center;justify-content: center;-ms-flex-wrap: wrap;flex-wrap: wrap }.section1 .icon picture img {max-width: 50px }.section1 .icon h5 {font-size: 16px }.section1 .right-dots {border-right: 3px dotted white }.card--btm--left {display: -ms-flexbox;display: flex;-ms-flex-align: center;align-items: center;padding-top: 10px }.card--btm--left-price {font-size: 60px;line-height: 50px;font-weight: bold;}.cont {display: -ms-flexbox;display: flex;-ms-flex-align: center;align-items: center }.card--btm--left--second {line-height: normal }.card--btm--left--second .sprice {font-size: 1.3rem;font-weight: bold;}.mese {font-size: 1rem;}.text-wind {font-size: 38px;font-weight: bold;line-height: 30px }.navbar {padding: 4px;box-shadow: 2px -5px 12px 2px #6d6d6d }.logo {margin-top: 5px }.migliore {font-size: 1rem }@media screen and (min-width: 435px) {.btn-modal-mobile {display: none }.pdb-0 {padding-bottom: 0 !important }}@media screen and (max-width: 768px) {.section1 .right-dots {border-right: none }ul.price-v li {margin: 5px 0 }.header-img {max-width: 70px }.card--btm--left {padding-top: 0px }.card--btm--left-price {font-size: 53px }.card--btm--left--second .sprice {font-size: 1rem }.mese {font-size: 14px }.migliore {font-size: 1rem }.box-orange p {text-align: center;font-size: 15px }#countdown span {color: #ffffff;font-size: 25px }#countdown {padding: 6px 20px }.unica-bg {margin-top: 10px }.text-wind {font-size: 33px }.section1 .icon picture {padding: 12px }.section1 .icon h5 {font-size: 14px;margin-bottom: 0 }.section1 .icon img {max-width: 38px !important }#code {font-size: 10px }}.alexa {display: flex;align-items: center;}.card--btm--left {padding-top: 0;padding-bottom: 5px;}@media screen and (max-width: 768px) {.card--btm--left {margin-top: -5px;}.alexa {margin-top: 15px;}.card--btm--left-price {font-size: 65px;}.card--btm--left--second .sprice {font-size: 1.8rem;}.mese {font-size: 17px;}}.header-img {width: 160px;}.header-img-2 {width: 160px;}.alexa p {margin-bottom: 0;}.alexa .alexa-pulse {display: inline-block;border-radius: 50%;position: relative;transform: translateZ(0);min-width: 48px;max-width: 48px;height: 48px;margin-right: 24px;}.alexa .alexa-pulse:before {content: '';position: absolute !important;top: 0;left: 0;right: 0;bottom: 0;z-index: -2;animation: playpulse 4s infinite;background: #5b52cf;width: 8px;height: 8px;margin: auto;animation-delay: 3s;}.alexa .alexa-pulse:after {content: '';position: absolute !important;top: 0;left: 0;right: 0;bottom: 0;box-shadow: 0 0 20px 5px rgb(121 0 181 / 40%);z-index: -1;background: #5b52cf;width: 8px;height: 8px;margin: auto;}.alexa .alexa-pulse, .alexa .alexa-pulse:before, .alexa .alexa-pulse:after {display: inline-block;border-radius: 50%;position: relative;transform: translateZ(0);}@keyframes playpulse {0% {transform: scale(1);opacity: .75 }20% {transform: scale(6);opacity: 0 }30% {transform: scale(.95);opacity: 0 }}@media screen and (max-width: 390px) {.position-abs {right: -9px !important;margin-right: -10px;}}@media screen and (max-width: 768px) and (min-width: 729px) {.position-abs {position: relative !important;}}@media screen and (max-width: 768px) {.unica-bg {margin-top: 0;}.logo.header-img {max-width: 195px;}.text-wind {font-size: 22px;}.dis-header p {display: none !important;}ul li {font-size: 13px !important;}}@media screen and (min-width: 768px) {.section1 .icon h5 {font-size: 17px;}.price-v {margin-top: 20px;}.card--btm--left-price {font-size: 80px;line-height: 75px;}.card--btm--left--second .sprice {font-size: 2.3rem;}.mese {font-size: 1rem;}}.text-black {color: black;}.pulse.fe-pulse {background-color: #011425 !important;}.close {position: relative !important;padding: unset !important;margin: unset !important;left: 90% !important;width: 20px;height: 20px;color: black !important;font-size: 30px !important;font-weight: bold;text-align: center;border-radius: 50%;background-color: #5c5c5c;cursor: pointer;text-decoration: none;}.modal {overflow: scroll !important;}.modal-content {z-index: 9999;}.modal.fade .modal-dialog {transform: unset;}#countdown {margin-bottom: 0 !important;}@media screen and (max-width: 342px) {#submit-btn1 {font-size: 19px !important;}}@media screen and (max-width: 310px) {.fe-shake.shake.btn-success {font-size: 13px;}}label[for="telBasic"] {font-weight: 800;}.login-form {padding: 0 20px;}#submit-btn1 {font-size: 25px;}.btn-cta-footer .btn-green {background: #06bc14;font-weight: 900;}.btn-cta-footer .btn-green:hover {background: #1e7e34;}.btn-cta-footer .btn-red {background: #FF8506;font-weight: 900;}.btn-cta-footer .btn-red:hover {background: #fc4f10;}.container, .container-fluid {padding-right: 10px;padding-left: 10px;}.offerta-font {font-size: 1.7rem;}@media screen and (max-width: 728px) {#countdown {margin-bottom: 0;}.row.section1 {display: grid;grid-template-columns: 1fr 1fr;}.row.section1 .col-md-3 {display: flex !important;}.offerta-font {font-size: 1.2rem;}#countdown {margin-bottom: 10px;}ul li {font-size: 15px;}.price-v {margin-bottom: 0;}.btn-modal-mobile {display: block;position: fixed;top: 0;left: 0;z-index: 999;margin-bottom: 0;}.navbar {margin-top: 40px !important;}.dis-header p {font-size: 10px;}}@media screen and (min-width: 768px) {.text-wind {font-size: 33px;}}.dis-header {display: flex;align-items: center;justify-content: center;}.dis-header p {padding-right: 15px;}.btn-success {font-weight: 800;}@media screen and (max-width: 768px) {.icon img {margin: auto !important;display: block !important;}.blk {display: block !important;}.position-abs {width: 28px;position: absolute;right: 13px;top: 59%;}}
        body {
             background-color: <?php echo $bg_color; ?>;
        }
        .bg-orange {
            background: <?php echo $bg_color_center; ?>;
        }
        .unica-bg,
        #code {
            background-color: <?php echo $bg_color_bottom; ?>;
        }
        .card--btm--left-price {
            color: <?php echo $bg_color_gradient_2; ?>;
            background: linear-gradient(90deg, <?php echo $bg_color_gradient_1; ?> 0%, <?php echo $bg_color_gradient_2; ?> 100%); 
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .card--btm--left--second .sprice {
            color: <?php echo $bg_color_gradient_2; ?>;
        }

        .mese {
            color: <?php echo $txt_evidence; ?>;
        }
        .or-color {
            color: <?php echo $txt_evidence; ?>;
        }
        .box-orange {
            color: <?php echo $txt_evidence; ?>;
        }
        ul li:before {
            content: url("<?php echo $url_icon_li ?>");
        }
        a {
            color: <?php echo $txt_evidence; ?>;
        }
        .text-white {
            color: <?php echo $txt_color_first_box; ?>;
        }
        #form-main .checkbox label,
        #form-main .p-policy,
        #form-main label[for="telBasic"] {
            color: <?php echo $txt_color_first_box; ?>;
        }

        #code a {
            color: <?php echo $txt_color_first_box; ?>;
        }
        .btn-modal-mobile {
            background-color: <?php echo $btn_background_mobile; ?>;
        }
        .btn-success {
            background-color:  <?php echo $btn_background_mobile_inside; ?>;
        }
	</style>
	  
	  <!-- Cookie Solution -->
	  <script type="text/javascript">
		var _iub = _iub || [];
		_iub.csConfiguration = {"ccpaAcknowledgeOnDisplay":true,"ccpaApplies":true,"consentOnContinuedBrowsing":false,"enableCcpa":true,"floatingPreferencesButtonDisplay":"bottom-left","invalidateConsentWithoutLog":true,"perPurposeConsent":true,"siteId":<?php if($iubenda_site_id) : echo $iubenda_site_id; endif; ?>,"whitelabel":false,"cookiePolicyId":<?php if($iubenda_cookie_id) : echo $iubenda_cookie_id; endif; ?>,"lang":"it","cookiePolicyUrl":"https://www.iubenda.com/privacy-policy/<?php if($iubenda_cookie_id) : echo $iubenda_cookie_id; endif; ?>/cookie-policy","privacyPolicyUrl":"https://privacy.cloud-care.it/Informativa_Privacy_CS.pdf", "banner":{ "acceptButtonColor":"#0073CE","acceptButtonDisplay":true,"closeButtonDisplay":false,"closeButtonRejects":true,"customizeButtonColor":"#0073CE","customizeButtonDisplay":true,"explicitWithdrawal":true,"fontSizeCloseButton":"14px","listPurposes":true,"position":"float-center","content":"<div id=\"iubenda-cs-title\">Informativa</div><br/>\n<div id=\"iubenda-cs-paragraph\"><p class=\"iub-p\">\nNoi e terze parti selezionate utilizziamo cookie o tecnologie simili per finalità tecniche e, con il tuo consenso, anche per altre finalità come specificato nella <a href=\"https://www.iubenda.com/privacy-policy/<?php if($iubenda_cookie_id) : echo $iubenda_cookie_id; endif; ?>/cookie-policy\" class=\"iubenda-cs-cookie-policy-lnk\" target=\"_blank\" rel=\"noopener\">cookie policy</a>.</p></div>","closeButtonCaption":"" },"callback": {
            onPreferenceExpressedOrNotNeeded: function(preference) {
                dataLayer.push({
                    iubenda_ccpa_opted_out: _iub.cs.api.isCcpaOptedOut()
                });
                if (!preference) {
                    dataLayer.push({
                        event: "iubenda_preference_not_needed"
                    });
                } else {
                    if (preference.consent === true) {
                        dataLayer.push({
                            event: "iubenda_consent_given"
                        });
                    } else if (preference.consent === false) {
                        dataLayer.push({
                            event: "iubenda_consent_rejected"
                        });
                    } else if (preference.purposes) {
                        for (var purposeId in preference.purposes) {
                            if (preference.purposes[purposeId]) {
                                dataLayer.push({
                                    event: "iubenda_consent_given_purpose_" + purposeId
                                });
                            }
                        }
                    }
                }
            }}};
	  </script>
	  <script type="text/javascript" src="//cdn.iubenda.com/cs/ccpa/stub.js"></script>
	  <script type="text/javascript" src="//cdn.iubenda.com/cs/iubenda_cs.js" charset="UTF-8" async></script>
	  
        <!-- Consent Solution -->
        <?php if($iubenda_consent_api) : ?>
            <script type="text/javascript">var _iub = _iub || {}; _iub.cons_instructions = _iub.cons_instructions || []; _iub.cons_instructions.push(["init", {api_key: "<?php echo $iubenda_consent_api; ?>"}]);</script><script type="text/javascript" src="https://cdn.iubenda.com/cons/iubenda_cons.js" async></script>
        <?php endif; ?>
	  
  </head>

  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php if($codice_tag_manager) : echo $codice_tag_manager; endif; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
