window.ga = window.ga || function () {
    (ga.q = ga.q || []).push(arguments)
};
ga.l = +new Date;
ga('create', 'UA-55101230-2', 'auto');
// Plugins

ga('send', 'pageview');

//next script

var ajaxurl = 'http://www.umss.edu.bo/wp-admin/admin-ajax.php';

//next

window._wpemojiSettings = {
    "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
    "ext": ".png",
    "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
    "svgExt": ".svg",
    "source": {"concatemoji": "http:\/\/www.umss.edu.bo\/wp-includes\/js\/wp-emoji-release.min.js?ver=9854f13f1b1a5c3e5b66e1c68e5f1e9c"}
};
!function (a, b, c) {
    function d(a, b) {
        var c = String.fromCharCode;
        l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, a), 0, 0);
        var d = k.toDataURL();
        l.clearRect(0, 0, k.width, k.height), l.fillText(c.apply(this, b), 0, 0);
        var e = k.toDataURL();
        return d === e
    }

    function e(a) {
        var b;
        if (!l || !l.fillText) return !1;
        switch (l.textBaseline = "top", l.font = "600 32px Arial", a) {
            case"flag":
                return !(b = d([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819])) && (b = d([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]), !b);
            case"emoji":
                return b = d([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039]), !b
        }
        return !1
    }

    function f(a) {
        var c = b.createElement("script");
        c.src = a, c.defer = c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
    }

    var g, h, i, j, k = b.createElement("canvas"), l = k.getContext && k.getContext("2d");
    for (j = Array("flag", "emoji"), c.supports = {
        everything: !0,
        everythingExceptFlag: !0
    }, i = 0; i < j.length; i++) c.supports[j[i]] = e(j[i]), c.supports.everything = c.supports.everything && c.supports[j[i]], "flag" !== j[i] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[j[i]]);
    c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
        c.DOMReady = !0
    }, c.supports.everything || (h = function () {
        c.readyCallback()
    }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", h, !1), a.addEventListener("load", h, !1)) : (a.attachEvent("onload", h), b.attachEvent("onreadystatechange", function () {
        "complete" === b.readyState && c.readyCallback()
    })), g = c.source || {}, g.concatemoji ? f(g.concatemoji) : g.wpemoji && g.twemoji && (f(g.twemoji), f(g.wpemoji)))
}(window, document, window._wpemojiSettings);

//next

/* <![CDATA[ */
var tribe_dynamic_help_text = {
    "date_with_year": "Y-m-d",
    "date_no_year": "Y-m-d",
    "datepicker_format": "Y-m-d",
    "datepicker_format_index": "",
    "days": ["domingo", "lunes", "martes", "mi\u00e9rcoles", "jueves", "viernes", "s\u00e1bado"],
    "daysShort": ["dom", "lun", "mar", "mi\u00e9", "jue", "vie", "s\u00e1b"],
    "months": ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"],
    "monthsShort": ["Jan", "Feb", "Mar", "Apr", "mayo", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    "msgs": "[\"This event is from %%starttime%% to %%endtime%% on %%startdatewithyear%%.\",\"This event is at %%starttime%% on %%startdatewithyear%%.\",\"This event is all day on %%startdatewithyear%%.\",\"This event starts at %%starttime%% on %%startdatenoyear%% and ends at %%endtime%% on %%enddatewithyear%%\",\"This event starts at %%starttime%% on %%startdatenoyear%% and ends on %%enddatewithyear%%\",\"This event is all day starting on %%startdatenoyear%% and ending on %%enddatewithyear%%.\"]"
};
/* ]]> */

//next

/* <![CDATA[ */
var tribe_js_config = {
    "permalink_settings": "\/index.php\/%postname%\/",
    "events_post_type": "tribe_events",
    "events_base": "http:\/\/www.umss.edu.bo\/index.php\/eventos\/"
};
/* ]]> */

//next

var wpdm_site_url = 'http://www.umss.edu.bo/';
var wpdm_home_url = 'http://www.umss.edu.bo/';
var ajax_url = 'http://www.umss.edu.bo/wp-admin/admin-ajax.php';
var wpdm_ajax_url = 'http://www.umss.edu.bo/wp-admin/admin-ajax.php';
var wpdm_ajax_popup = '0';

//next

window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());

gtag('config', 'UA-55101230-2');

//next slides script

function openModal() {
    document.getElementById('myModal').style.display = "block";
}

function closeModal() {
    document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);


function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";

}

//next

