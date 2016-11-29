<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="UTF-8">


    <script>window.start_page = new Date().getTime();</script>


    <title>Беспроводные зарядные устройства</title>



    <script type="text/javascript">
        (function() {
            function isTouchDevice() {
                return (('ontouchstart' in window) ||
                (navigator.MaxTouchPoints > 0) ||
                (navigator.msMaxTouchPoints > 0));
            }

            function userAgentDetection() {
                var ua = navigator.userAgent.toLowerCase(),
                    platform = navigator.platform.toLowerCase(),
                    UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0],
                    mode = UA[1] == 'ie' && document.documentMode;

                window.gemBrowser = {
                    name: (UA[1] == 'version') ? UA[3] : UA[1],
                    version: UA[2],
                    platform: {
                        name: ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0]
                    }
                };
            }

            window.updateGemClientSize = function() {
                window.gemOptions.clientWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
                window.gemOptions.clientHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            };

            window.updateGemInnerSize = function(width) {
                window.gemOptions.innerWidth = width != undefined ? width : document.body.clientWidth;
            };

            window.gemOptions = {
                first: false,
                clientWidth: 0,
                clientHeight: 0,
                innerWidth: -1
            };

            userAgentDetection();
            window.updateGemClientSize(true);

            window.gemSettings = {
                isTouch: isTouchDevice(),
                forcedLasyDisabled: false,
                tabletPortrait: true,
                tabletLandscape: false,
                topAreaMobileDisable: true,
                parallaxDisabled: false,
                fillTopArea: false
            };

            window.gemSettings.lasyDisabled = window.gemSettings.isTouch || window.gemOptions.clientWidth <= 800 || window.gemSettings.forcedLasyDisabled;
        })();
    </script>
    <script type="text/javascript">
        (function() {
            if ((window.gemSettings.isTouch || window.gemSettings.lasyDisabled) && !window.gemSettings.forcedLasyDisabled) {
                var head  = document.getElementsByTagName('head')[0],
                    link  = document.createElement('link');
                link.rel  = 'stylesheet';
                link.type = 'text/css';
                link.href = 'http://codex-themes.com/thegem/product-landing/wp-content/themes/TheGem/css/touch.css';
                head.appendChild(link);
            }

            if (window.gemSettings.parallaxDisabled) {
                var head  = document.getElementsByTagName('head')[0],
                    link  = document.createElement('style');
                link.rel  = 'stylesheet';
                link.type = 'text/css';
                link.innerHTML = ".fullwidth-block.fullwidth-block-parallax-vertical .fullwidth-block-background, .fullwidth-block.fullwidth-block-parallax-fixed .fullwidth-block-background { background-attachment: scroll !important; }";
                head.appendChild(link);
            }
        })();
    </script>
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/codex-themes.com\/thegem\/product-landing\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.1"}};
        !function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='thegem-preloader-css'  href='css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-preloader-css'  href='css/preloader.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-reset-css'  href='css/reset.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-grid-css'  href='css/grid.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-style-css'  href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-header-css'  href='css/header.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-widgets-css'  href='css/widgets.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-new-css-css'  href='css/new-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='perevazka-css-css-css'  href='css/perevazka-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-custom-css'  href='css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='css/js_composer.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-additional-blog-1-css'  href='css/additional-blog-1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-hovers-css'  href='css/hovers.css' type='text/css' media='all' />
    <link rel='stylesheet' id='fancybox-style-css'  href='css/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem-vc_elements-css'  href='css/vc_elements.css' type='text/css' media='all' />
    <link rel='stylesheet' id='layerslider-css'  href='css/layerslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='ls-google-fonts-css'  href='http://fonts.googleapis.com/css?family=Lato:100,300,regular,700,900%7COpen+Sans:300%7CIndie+Flower:regular%7COswald:300,regular,700&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='css/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href='css/settings.css' type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>
    <link rel='stylesheet' id='load-google-fonts-css'  href='//fonts.googleapis.com/css?family=sans-serif%3A700%2Cregular%7CSource+Sans+Pro%3Aregular%2C300&#038;subset=latin%2Cvietnamese%2Clatin-ext&#038;ver=4.5.1' type='text/css' media='all' />
    <link rel='stylesheet' id='thegem_js_composer_front-css'  href='http://codex-themes.com/thegem/product-landing/wp-content/themes/TheGem/css/js_composer_columns.css?ver=4.5.1' type='text/css' media='all' />
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/greensock.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var LS_Meta = {"v":"5.6.6"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='js/layerslider.kreaturamedia.jquery.js'></script>
    <script type='text/javascript' src='js/layerslider.transitions.js'></script>
    <script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>

    <script type='text/javascript' src='js/zilla-likes.js'></script>

    <style>
        .fullwidth-block {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    </style>

    <script type="text/javascript">
        (function() {
            var fullwithData = {
                page: null,
                pageWidth: 0,
                pageOffset: {},
                fixVcRow: true,
                pagePaddingLeft: 0
            };

            function updateFullwidthData() {
                fullwithData.pageOffset = fullwithData.page.getBoundingClientRect();
                fullwithData.pageWidth = parseFloat(fullwithData.pageOffset.width);
                fullwithData.pagePaddingLeft = 0;

                if (fullwithData.page.className.indexOf('vertical-header') != -1) {
                    fullwithData.pagePaddingLeft = 45;
                    if (fullwithData.pageWidth >= 1600) {
                        fullwithData.pagePaddingLeft = 360;
                    }
                    if (fullwithData.pageWidth < 980) {
                        fullwithData.pagePaddingLeft = 0;
                    }
                }
            }

            function gem_fix_fullwidth_position(element) {
                if (element == null) {
                    return false;
                }

                if (fullwithData.page == null) {
                    fullwithData.page = document.getElementById('page');
                    updateFullwidthData();
                }

                if (fullwithData.pageWidth < 1170) {
                    return false;
                }

                if (!fullwithData.fixVcRow) {
                    return false;
                }

                if (element.previousElementSibling != null && element.previousElementSibling != undefined && element.previousElementSibling.className.indexOf('fullwidth-block') == -1) {
                    var elementParentViewportOffset = element.previousElementSibling.getBoundingClientRect();
                } else {
                    var elementParentViewportOffset = element.parentNode.getBoundingClientRect();
                }

                if (elementParentViewportOffset.top > window.gemOptions.clientHeight) {
                    fullwithData.fixVcRow = false;
                    return false;
                }

                if (element.className.indexOf('vc_row') != -1) {
                    var elementMarginLeft = -21;
                    var elementMarginRight = -21;
                } else {
                    var elementMarginLeft = 0;
                    var elementMarginRight = 0;
                }

                var offset = parseInt(fullwithData.pageOffset.left + 0.5) - parseInt((elementParentViewportOffset.left < 0 ? 0 : elementParentViewportOffset.left) + 0.5) - elementMarginLeft + fullwithData.pagePaddingLeft;

                element.style.position = 'relative';
                element.style.left = offset + 'px';
                element.style.width = fullwithData.pageWidth - fullwithData.pagePaddingLeft + 'px';

                if (element.className.indexOf('vc_row') == -1) {
                    element.setAttribute('data-fullwidth-updated', 1);
                }

                if (element.className.indexOf('vc_row') != -1 && !element.hasAttribute('data-vc-stretch-content')) {
                    var el_full = element.parentNode.querySelector('.vc_row-full-width-before');
                    var padding = -1 * offset;
                    0 > padding && (padding = 0);
                    var paddingRight = fullwithData.pageWidth - padding - el_full.offsetWidth + elementMarginLeft + elementMarginRight;
                    0 > paddingRight && (paddingRight = 0);
                    element.style.paddingLeft = padding + 'px';
                    element.style.paddingRight = paddingRight + 'px';
                }
            }

            window.gem_fix_fullwidth_position = gem_fix_fullwidth_position;
        })();
    </script>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>

    <style type="text/css" data-type="vc_custom-css">.lm_button a{ font-size: 14px; line-height: 50px; padding: 0 45px; }
        .buy_button a.gem-button{  font-size: 19px; line-height: 57px; padding: 0 60px; height: 60px; }
        .gem-testimonial-name, .gem-testimonial-position, .gem-testimonial-text p{ color: #fff; }
        .gem-testimonials.style1 .gem-testimonial-wrapper:after{ display: none; }
        .gem-testimonials.fullwidth-block .gem-prev:after, .gem-testimonials.fullwidth-block .gem-next:after{ color: #fff; }
        .vc_row:hover .gem-testimonials.fullwidth-block .gem-prev:after,
        .vc_row:hover .gem-testimonials.fullwidth-block .gem-next:after{
            background-color: #fff;
            color: #000;
        }
        .vc_tta.vc_tta-color-thegem.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels, .vc_tta.vc_tta-color-thegem.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels::before, .vc_tta.vc_tta-color-thegem.vc_tta-style-classic.vc_tta-tabs .vc_tta-panels::after{
            border-color: transparent;
            background: transparent;
        }
        .goggles{ z-index: 9999; }
        @media(max-width: 769px){ .gem-icon-with-text-icon{  padding-right: 0 !important; } }
        .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-tab > a{
            border-radius: 26px;
            border-color: #1a1a1a;
            background: #fff;

            font-size: 16px;
            text-transform: none;
            color: #1a1a1a;
        }
        .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-tab.vc_active > a{
            color: #00acc1;
            border-color: #00acc1;
            font-weight: normal;
        }
        .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-tab:not(.vc_active) > a:hover{
            background: #00acc1;
            border-color: #00acc1;
            color: #fff;
        }
        @media(max-width: 760px){
            .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-heading{
                background: #fff;
                border-radius: 26px;
                border-color: #b9b9b9;
            }
            .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading{
                background: #fff;
                border-radius: 26px;
                border-color: #00acc1;
            }
            .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-heading a{
                color: #b9b9b9;

                font-weight: normal;
            }
            .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-heading a{
                color: #00acc1;
                font-weight: normal;
            }
            .vc_tta.vc_tta-color-thegem.vc_tta-style-classic .vc_tta-panel.vc_active .vc_tta-panel-body{
                border: none;
                background: transparent;
            }
        }
        .right_goggle{ background-position: right; background-repeat: no-repeat; }
        .left_goggle{ background-position: left; background-repeat: no-repeat; }
        @media(max-width: 1200px){ .right_goggle, .left_goggle{ display: none; } }
        #primary-navigation .hamburger-toggle > span { background-color: #000; }

        .line-box{
            height: 86px;
            position: relative;
        }
        .pulse-wrapper{
            position: absolute;
            right: 0;
        }
        .pulse-wrapper-2{
            position: absolute;
            left: -43px;
        }
        .pulse-1, .pulse-2{
            width: 86px;
            height: 86px;
            position: relative;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            float: right;
            text-indent: 9999px;
        }
        .pulse-1, .pulse-2-2{
            width: 86px;
            height: 86px;
            position: relative;
            background: rgba(0, 0, 0, 0.15);
            border-radius: 50%;
            float: right;
            text-indent: 9999px;
        }
        .pulse-1{
            -webkit-animation: runpulse 3s infinite linear;
            -moz-animation: runpulse 3s infinite linear;
            -ms-animation: runpulse 3s infinite linear;
            -o-animation: runpulse 3s infinite linear;
            animation: runpulse 3s infinite linear;
        }
        .pulse-2{
            -webkit-animation: runpulse 3s infinite linear;
            -moz-animation: runpulse 3s infinite linear;
            -ms-animation: runpulse 3s infinite linear;
            -o-animation: runpulse 3s infinite linear;
            animation: runpulse 3s infinite linear;
            animation-delay: 1.5s;
        }
        .pulse-1:before, .pulse-2:before{
            content: '';
            width: 60px;
            height: 60px;
            position: absolute;
            background: rgba(255, 255, 255, 0.45);
            border-radius: 50%;
            left: 50%;
            top: 50%;
            margin-left: -30px;
            margin-top: -30px;
        }
        .pulse-1:before, .pulse-2-2:before{
            content: '';
            width: 60px;
            height: 60px;
            position: absolute;
            background: rgba(0, 0, 0, 0.45);
            border-radius: 50%;
            left: 50%;
            top: 50%;
            margin-left: -30px;
            margin-top: -30px;
        }
        .pulse-1:after, .pulse-2:after{
            content: '';
            width: 30px;
            height: 30px;
            position: absolute;
            background: rgba(255, 255, 255, 1);
            border-radius: 50%;
            left: 50%;
            top: 50%;
            margin-left: -15px;
            margin-top: -15px;
        }
        .pulse-1:after, .pulse-2-2:after{
            content: '';
            width: 30px;
            height: 30px;
            position: absolute;
            background: rgba(0, 0, 0, 1);
            border-radius: 50%;
            left: 50%;
            top: 50%;
            margin-left: -15px;
            margin-top: -15px;
        }
        @keyframes runpulse {
            0% {
                opacity: 1;
                -moz-transform: scale(0);
                -webkit-transform: scale(0);
                -o-transform: scale(0);
                -ms-transform: scale(0);
                transform: scale(0);
            }
            50% {
                opacity: 1;
                -moz-transform: scale(1);
                -webkit-transform: scale(1);
                -o-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
            }
            100% {
                opacity: 0;
            }
        }


        .goggle .gem-image{
            -webkit-animation: jump 3s infinite linear;
            -moz-animation: jump 3s infinite linear;
            animation: jump 3s infinite linear;
        }
        @keyframes jump {
            0% {
                -moz-transform: translateY(0);
                -webkit-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(-0);
            }
            50% {
                -moz-transform: translateY(0);
                -webkit-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(-30px);
            }
            100% {
                -moz-transform: translateY(0);
                -webkit-transform: translateY(0);
                -o-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
            }
        }
        .goggle{ position:relative; }
        .goggle:before{
            content: '';
            position:absolute;
            width: 80%;
            height: 5px;
            border-radius: 50%/5px;
            left: 10%;
            bottom: 20px;
            /*box-shadow: 0px 50px 50px 0px #000;*/
            box-shadow: 0px 35px 30px 0 #000;
            -webkit-animation: shdw 3s infinite linear;
            -moz-animation: shdw 3s infinite linear;
            animation: shdw 3s infinite linear;
        }
        @keyframes shdw {
            0% {
                box-shadow: 0px 35px 35px 0 #000;
                width: 80%;
                left: 10%;
            }
            50% {
                box-shadow: 0px 35px 35px -2px #000;
                width: 60%;
                left: 20%;
            }
            100% {
                box-shadow: 0px 35px 35px 0 #000;
                width: 80%;
                left: 10%;
            }
        }
        @media screen and (min-color-index:0)
        and(-webkit-min-device-pixel-ratio:0) { @media
        {
            .goggle:before { display: none; }
        }}
        .line-box.afr{ display: none; }
        .custom_text{
            display: block;
            width: 560px;
        }
        .left_goggle{
            padding-top: 60px;
            padding-bottom: 240px;
        }
        @media(max-width: 1540px){
            .line-box.bfr{ display: none; }
            .line-box.afr{ display: block; margin-left: -150px; }
            .custom_text{ width: 100%; }
        }
        @media(max-width: 1400px){
            .custom_text{ padding-left: 120px; }
            .line-box.afr{ margin-left: -50px; }
        }
        @media(max-width: 1540px) and (min-width: 1201px){
            .left_goggle{
                padding-top: 60px;
                padding-bottom: 160px;
            }
        }
        @media(min-width:2000px){ .pulse-1, .pulse-2{ display: none; } }
    </style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1462962695175{margin-bottom: 0px !important;background-image: url(images/back2.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1463393658648{margin-bottom: 0px !important;background-image: url(images/bespr.png) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1464677073125{margin-bottom: 0px !important;background-image: url(http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/product_landing_damask_background_mini.jpg?id=110) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462531250016{margin-bottom: 0px !important;}.vc_custom_1463055710372{margin-bottom: 0px !important;background-image: url(http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/glass_overview_background_mini.jpg?id=92) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1463384041080{margin-bottom: 0px !important;background-color: #eeeeee !important;}.vc_custom_1463393672921{margin-bottom: 0px !important;}.vc_custom_1463055758035{margin-bottom: 0px !important;}.vc_custom_1462531250016{margin-bottom: 0px !important;}.vc_custom_1462531250016{margin-bottom: 0px !important;}.vc_custom_1463055768361{margin-bottom: 0px !important;}.vc_custom_1463055786142{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 10px !important;}.vc_custom_1463150287434{margin-bottom: 0px !important;padding-top: 40px !important;padding-bottom: 35px !important;background-image: url(images/footer.jpg); background-repeat: no-repeat; background: cover;}.vc_custom_1463652396282{margin-top: -81px !important;}.vc_custom_1463488189392{padding-right: 10px !important;}.vc_custom_1462956690363{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1463394055958{padding-right: 42px !important;}.vc_custom_1462969980214{padding-top: 0px !important;}.vc_custom_1463055733536{background-image: url(http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/dark_scale_background.png?id=93) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462970530591{padding-top: 0px !important;padding-right: 21px !important;padding-left: 42px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463408164152{padding-top: 135px !important;padding-bottom: 175px !important;background-image: url(images/2.png) !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463665819396{margin-bottom: 0px !important;background-image: url(images/5.png) !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463051585796{padding-right: 0px !important;}.vc_custom_1463052031762{padding-top: 5px !important;padding-right: 30px !important;}.vc_custom_1463052040549{padding-right: 30px !important;}.vc_custom_1463407963848{margin-left: -20px !important;padding-left: 0px !important;}.vc_custom_1463050723808{margin-left: -21px !important;padding-left: 0px !important;}.vc_custom_1463394291666{padding-top: 5px !important;padding-right: 30px !important;}.vc_custom_1464618384043{margin-top: -25px !important;}.vc_custom_1463394299525{padding-right: 30px !important;}.vc_custom_1463408736037{margin-top: -25px !important;}.vc_custom_1463045238364{margin-left: -80px !important;}.vc_custom_1463056807447{margin-bottom: -10px !important;}.vc_custom_1463045275758{margin-left: -80px !important;}.vc_custom_1464260053599{margin-top: -43px !important;}.vc_custom_1464260227413{margin-top: -17px !important;}.vc_custom_1464260118389{margin-top: -20px !important;}.vc_custom_1464260278673{margin-top: 12px !important;}.vc_custom_1463052154057{padding-left: 0px !important;}.vc_custom_1463045310319{padding-top: 12px !important;}.vc_custom_1463384079669{padding-top: 0px !important;}.vc_custom_1463393811295{padding-top: 0px !important;}.vc_custom_1463394551655{padding-top: 10px !important;padding-bottom: 10px !important;}.vc_custom_1463394566946{padding-top: 10px !important;padding-bottom: 10px !important;}.vc_custom_1463394580859{padding-top: 10px !important;padding-bottom: 10px !important;}.vc_custom_1462533170928{background-image: url(images/nov.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462533180829{background-image: url(images/nov2.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462534175454{margin-bottom: 0px !important;}.vc_custom_1462534320571{margin-bottom: -6px !important;padding-right: 42px !important;padding-left: 42px !important;}.vc_custom_1462534205174{margin-bottom: -10px !important;}.vc_custom_1462534175454{margin-bottom: 0px !important;}.vc_custom_1462534320571{margin-bottom: -6px !important;padding-right: 42px !important;padding-left: 42px !important;}.vc_custom_1462534205174{margin-bottom: -10px !important;}.vc_custom_1463394861786{padding-bottom: 10px !important;}.vc_custom_1462531472345{margin-top: -7px !important;}.vc_custom_1462531177933{padding-top: 30px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>