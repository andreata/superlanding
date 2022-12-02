<?php
    if(!defined('spbpStrong')) {
        die('Direct access not permitted');
    }
    // Footer

?>

<section id="code">
    <div class="container py-2">
    <div class="row ">
        <div class="col-md-12">
          <p class="text-center" style="font-size: 12px; margin-bottom: 0;">
          <?php if ($footer_credit) : echo $footer_credit; endif; ?> | <a href="<?php if ($privacy_policy) : echo $privacy_policy; endif; ?>"
              title="Privacy Policy" target="_blank">Privacy Policy</a> | <a href="<?php if ($cookie_policy) : echo $cookie_policy; endif; ?>"
              title="Cookie Policy" target="_blank">Cookie Policy</a>
          </p>
        </div>
    </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>

  $("#submit-btn1").click(function (e) {
      _iub.cons_instructions.push(["submit", {
      writeOnLocalStorage: false, // default: false
      form: {
        selector: document.getElementById('form-main'),
         map: {
              subject: {
                first_name: "phone",
              }
          }
      },
      consent: {
        legal_notices: [
          {
            identifier: 'privacy_policy',
          },
        ],
      }
      },])
  });

  $("#submit-btn2").click(function (e) {
      _iub.cons_instructions.push(["submit", {
      writeOnLocalStorage: false, // default: false
      form: {
        selector: document.getElementById('form-modal-popup'),
         map: {
              subject: {
                first_name: "phone",
              }
          }
      },
      consent: {
        legal_notices: [
          {
            identifier: 'privacy_policy',
          },
        ],
      }
      },])
  });


</script>
