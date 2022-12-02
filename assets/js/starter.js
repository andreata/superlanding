// Importing JavaScript
//
// You have two choices for including Bootstrap's JS files—the whole thing,
// or just the bits that you need.


// Option 1
//
// Import Bootstrap's bundle (all of Bootstrap's JS + Popper.js dependency)

// import "../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";


// Option 2
//
// Import just what we need

// If you're importing tooltips or popovers, be sure to include our Popper.js dependency
// import "../../node_modules/popper.js/dist/popper.min.js";

import "../../node_modules/bootstrap/js/dist/util.js";
import "../../node_modules/bootstrap/js/dist/modal.js";


//fix bug css WebP
document.documentElement.classList.remove("no-js");

(function () {
    // Countdown 
    setInterval(function time() {
        var d = new Date();
        var hours = 23 - d.getHours();
        var min = 60 - d.getMinutes();
        if ((min + '').length == 1) {
            min = '0' + min;
        }
        var sec = 60 - d.getSeconds();
        if ((sec + '').length == 1) {
            sec = '0' + sec;
        }
        jQuery('#countdown span').html(hours + 'h ' + min + 'm ' + sec + 's')
    }, 1000); 

    // Exit intent PUPUP
    function addEvent(obj, evt, fn) {
        if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
        } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
        }
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cookieName) {
        var name = cookieName + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    document.addEventListener("mouseleave", function (event) {
        var cookie_intent = getCookie("exit-stop");
        if (cookie_intent == 1) {

        } else {
            if (event.clientY <= 0 || event.clientX <= 0 || (event.clientX >= window.innerWidth || event.clientY >= window.innerHeight)) {
                $('.lightbox').show();
            }
            setCookie('exit-stop', '1', '5');
        }
    });

    $(document).mouseup(function (e) {
        var container = $(".box");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.lightbox').hide();
        }
    });
})(jQuery)
