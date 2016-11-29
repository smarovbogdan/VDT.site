

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
        @media (max-width: 1199px) { .buy_button a.gem-button{  font-size: 16px; line-height: 40px; padding: 0 40px; height: 40px; } }
        @media (max-width: 768px) { .buy_button a.gem-button{  font-size: 16px; line-height: 57px; padding: 0 60px; height: 60px; } }
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
            background: rgba(255, 255, 255, 0.15);
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
            background: rgba(0, 0, 0, 0.45);
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
            background: rgba(255, 255, 255, 0.45);
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
    </style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1462962695175{margin-bottom: 0px !important;background-image: url(images/back2.png) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1463393658648{margin-bottom: 0px !important;background-image: url(images/bespr.png) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1464677073125{margin-bottom: 0px !important;background-image: url(http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/product_landing_damask_background_mini.jpg?id=110) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462531250016{margin-bottom: 0px !important;}.vc_custom_1463055710372{margin-bottom: 0px !important;background-image: url(http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/glass_overview_background_mini.jpg?id=92) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1463384041080{margin-bottom: 0px !important;background-color: #eeeeee !important;}.vc_custom_1463393672921{margin-bottom: 0px !important;}.vc_custom_1463055758035{margin-bottom: 0px !important;}.vc_custom_1462531250016{margin-bottom: 0px !important;}.vc_custom_1462531250016{margin-bottom: 0px !important;}.vc_custom_1463055768361{margin-bottom: 0px !important;}.vc_custom_1463055786142{margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 10px !important;}.vc_custom_1463150287434{margin-bottom: 0px !important;padding-top: 40px !important;padding-bottom: 35px !important;background-image: url(images/footer.jpg); background-repeat: no-repeat; background: cover;}.vc_custom_1463652396282{margin-top: -81px !important;}.vc_custom_1463488189392{padding-right: 10px !important;}.vc_custom_1462956690363{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1463394055958{padding-right: 42px !important;}.vc_custom_1462969980214{padding-top: 0px !important;}.vc_custom_1463055733536{background-image: url(http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/dark_scale_background.png?id=93) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462970530591{padding-top: 0px !important;padding-right: 21px !important;padding-left: 42px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463408164152{padding-top: 135px !important;padding-bottom: 175px !important;) !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463665819396{margin-bottom: 0px !important;background-image: url(images/5.png) !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463050514910{margin-bottom: 0px !important;}.vc_custom_1463051585796{padding-right: 0px !important;}.vc_custom_1463052031762{padding-top: 5px !important;padding-right: 30px !important;}.vc_custom_1463052040549{padding-right: 30px !important;}.vc_custom_1463407963848{margin-left: -20px !important;padding-left: 0px !important;}.vc_custom_1463050723808{margin-left: -21px !important;padding-left: 0px !important;}.vc_custom_1463394291666{padding-top: 5px !important;padding-right: 30px !important;}.vc_custom_1464618384043{margin-top: -25px !important;}.vc_custom_1463394299525{padding-right: 30px !important;}.vc_custom_1463408736037{margin-top: -25px !important;}.vc_custom_1463045238364{margin-left: -80px !important;}.vc_custom_1463056807447{margin-bottom: -10px !important;}.vc_custom_1463045275758{margin-left: -80px !important;}.vc_custom_1464260053599{margin-top: -43px !important;}.vc_custom_1464260227413{margin-top: -17px !important;}.vc_custom_1464260118389{margin-top: -20px !important;}.vc_custom_1464260278673{margin-top: 12px !important;}.vc_custom_1463052154057{padding-left: 0px !important;}.vc_custom_1463045310319{padding-top: 12px !important;}.vc_custom_1463384079669{padding-top: 0px !important;}.vc_custom_1463393811295{padding-top: 0px !important;}.vc_custom_1463394551655{padding-top: 10px !important;padding-bottom: 10px !important;}.vc_custom_1463394566946{padding-top: 10px !important;padding-bottom: 10px !important;}.vc_custom_1463394580859{padding-top: 10px !important;padding-bottom: 10px !important;}.vc_custom_1462533170928{background-image: url(images/nov.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462533180829{background-image: url(images/nov2.jpg) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1462534175454{margin-bottom: 0px !important;}.vc_custom_1462534320571{margin-bottom: -6px !important;padding-right: 42px !important;padding-left: 42px !important;}.vc_custom_1462534205174{margin-bottom: -10px !important;}.vc_custom_1462534175454{margin-bottom: 0px !important;}.vc_custom_1462534320571{margin-bottom: -6px !important;padding-right: 42px !important;padding-left: 42px !important;}.vc_custom_1462534205174{margin-bottom: -10px !important;}.vc_custom_1463394861786{padding-bottom: 10px !important;}.vc_custom_1462531472345{margin-top: -7px !important;}.vc_custom_1462531177933{padding-top: 30px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>


<body class="home page page-id-6 page-template-default one-pager wpb-js-composer js-comp-ver-4.12.1 vc_responsive">



<div id="page" class="layout-fullwidth">

    <a href="#page" class="scroll-top-button"></a>


    <div id="site-header-wrapper" class="site-header-wrapper-transparent">


        <header id="site-header" class="site-header animated-header" role="banner">

            <div class="transparent-header-background" style="background-color: rgba(255, 255, 255, 0);">			<div class="container container-fullwidth">
                    <div class="header-main logo-position-right header-colors-light header-layout-fullwidth header-style-3">
                        <nav id="primary-navigation" class="site-navigation primary-navigation responsive" role="navigation">
                            <button class="menu-toggle dl-trigger">Primary Menu<span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></button>
                            <ul id="primary-menu" class="nav-menu dl-menu styled "><li id="menu-item-293" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-293 megamenu-first-element"><a href="#lensinnovation">О товаре</a></li>
                                <li id="menu-item-294" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-294 megamenu-first-element"><a href="#showcase">Обзор</a></li>
                                <li id="menu-item-295" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-295 megamenu-enable megamenu-style-default megamenu-first-element"><a href="#overview">Преимущества</a></li>
                                <li id="menu-item-290" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-290 megamenu-first-element"><a href="#testimonials">Отзывы</a></li>
                                <li id="menu-item-296" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-296 megamenu-first-element"><a href="#pricing">Товары</a></li>
                                <div class="site-title">

                                </div>
                    </div>
                </div>
            </div>		</header><!-- #site-header -->
    </div><!-- #site-header-wrapper -->

    <div id="main" class="site-main">

        <div id="main-content" class="main-content">


            <div class="block-content no-bottom-margin no-top-margin">
                <div class="container">
                    <div class="panel row">

                        <div class="panel-center col-xs-12">
                            <article id="post-6" class="post-6 page type-page status-publish hentry">

                                <div class="entry-content post-content">


                                    <div class="vc_row-full-width-before"></div>
                                    <div id="vc_row-5819c9af13b21" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1462962695175 vc_row-has-fill">
                                        <script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("vc_row-5819c9af13b21")); }</script>
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="clearboth"></div>
                                                                    <div class="gem-divider" style="margin-top: 110px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 30px;"></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-5 vc_col-md-5 vc_col-xs-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h2"><span style="color: #ffffff; text-transform: none;">Встречайте беспроводное зарядное устройство нового поколения!</span></div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="clearboth"></div><div class="gem-divider" style="margin-top: 20px;"></div>
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top">
                                                                        <div class="wpb_wrapper">
                                                                            <p><span style="color: #ffffff;">Телефон разряжается именно в тот момент, когда он больше всего необходим?<br> С новым поколением беспроводных зарядных устройств Вы сможете забыть об этом навсегда! </span></p>

                                                                        </div>
                                                                    </div>
                                                                    <div class="clearboth"></div><div class="gem-divider" style="margin-top: 65px;"></div><div class="gem-button-container gem-button-position-left lm_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-flat gem-button-text-weight-normal lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 25px;background-color: #00bcd4;color: #ffffff;" onmouseleave="this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#2b2d3a';this.style.color='#00bcd4';" href="#pricing" target="_self">Подробнее</a></div> </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 265px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg vc_hidden-md"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 80px;"></div></div></div></div></div><div id="lensinnovation" class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-10 vc_col-lg-offset-2 vc_col-lg-8 vc_col-md-offset-2 vc_col-md-8 vc_col-sm-offset-1"><div class="vc_column-inner "><div class="wpb_wrapper">

                                                                    <div class="gem-divider" style="margin-top: 55px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="vc_tta-container" data-vc-action="collapse" data-vc-tta-autoplay="{&quot;delay&quot;:5000}">
                                                        <div class="vc_general vc_tta vc_tta-tabs vc_tta-color-thegem vc_tta-style-classic vc_tta-shape-round vc_tta-spacing-35 vc_tta-gap-10 vc_tta-tabs-position-top vc_tta-controls-align-center">
                                                            <div class="vc_tta-tabs-container">
                                                                <ul class="vc_tta-tabs-list">

                                                                    <li class="vc_tta-tab" data-vc-tab>
                                                                        <a href="#prod1" data-vc-tabs data-vc-container=".vc_tta">
                                                                            <span class="vc_tta-title-text">prod1</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="vc_tta-tab" data-vc-tab>
                                                                        <a href="#prod2" data-vc-tabs data-vc-container=".vc_tta">
                                                                            <span class="vc_tta-title-text">prod2</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="vc_tta-tab" data-vc-tab>
                                                                        <a href="#prod3" data-vc-tabs data-vc-container=".vc_tta">
                                                                            <span class="vc_tta-title-text">prod3</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="vc_tta-tab" data-vc-tab>
                                                                        <a href="#prod4" data-vc-tabs data-vc-container=".vc_tta">
                                                                            <span class="vc_tta-title-text">prod4</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="vc_tta-tab" data-vc-tab>
                                                                        <a href="#prod5" data-vc-tabs data-vc-container=".vc_tta">
                                                                            <span class="vc_tta-title-text">prod5</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="vc_tta-tab" data-vc-tab>
                                                                        <a href="#prod6" data-vc-tabs data-vc-container=".vc_tta">
                                                                            <span class="vc_tta-title-text">prod6</span>
                                                                        </a>
                                                                    </li>



                                                                </ul>
                                                            </div>
                                                            <div class="vc_tta-panels-container">
                                                                <div class="vc_tta-panels">
                                                                    <div class="vc_tta-panel" id="prod4" data-vc-content=".vc_tta-panel-body">
                                                                        <div class="vc_tta-panel-heading">
                                                                            <h4 class="vc_tta-panel-title">
                                                                                <a href="#prod4" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                                    <span class="vc_tta-title-text">prod4</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="vc_tta-panel-body">
                                                                            <div class="centered-box gem-image-centered-box">
                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style="">
                                                                                    <div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up">
                                                                                        <img class="gem-wrapbox-element img-responsive" style="height: 400px; width: auto;" src="images/2.png" alt=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vc_tta-panel" id="prod1" data-vc-content=".vc_tta-panel-body">
                                                                        <div class="vc_tta-panel-heading">
                                                                            <h4 class="vc_tta-panel-title">
                                                                                <a href="#prod1" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                                    <span class="vc_tta-title-text">prod1</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="vc_tta-panel-body">
                                                                            <div class="centered-box gem-image-centered-box">
                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style="">
                                                                                    <div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up">
                                                                                        <img class="gem-wrapbox-element img-responsive" style="height: 400px; width: auto;" src="images/3.png" alt=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vc_tta-panel" id="prod2" data-vc-content=".vc_tta-panel-body">
                                                                        <div class="vc_tta-panel-heading">
                                                                            <h4 class="vc_tta-panel-title">
                                                                                <a href="#prod2" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                                    <span class="vc_tta-title-text">prod2</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="vc_tta-panel-body">
                                                                            <div class="centered-box gem-image-centered-box">
                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style="">
                                                                                    <div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up">
                                                                                        <img class="gem-wrapbox-element img-responsive" style="height: 400px; width: auto;" src="images/6.png" alt=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vc_tta-panel" id="prod3" data-vc-content=".vc_tta-panel-body">
                                                                        <div class="vc_tta-panel-heading">
                                                                            <h4 class="vc_tta-panel-title">
                                                                                <a href="#prod3" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                                    <span class="vc_tta-title-text">prod3</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="vc_tta-panel-body">
                                                                            <div class="centered-box gem-image-centered-box">
                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style="">
                                                                                    <div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up">
                                                                                        <img class="gem-wrapbox-element img-responsive" style="height: 400px; width: auto;" src="images/1.png" alt=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vc_tta-panel vc_active" id="prod5" data-vc-content=".vc_tta-panel-body">
                                                                        <div class="vc_tta-panel-heading">
                                                                            <h4 class="vc_tta-panel-title">
                                                                                <a href="#prod5" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                                    <span class="vc_tta-title-text">prod5</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="vc_tta-panel-body">
                                                                            <div class="centered-box gem-image-centered-box">
                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style="">
                                                                                    <div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up">
                                                                                        <img class="gem-wrapbox-element img-responsive" style="height: 400px; width: auto;" src="images/4.png" alt=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vc_tta-panel" id="prod6" data-vc-content=".vc_tta-panel-body">
                                                                        <div class="vc_tta-panel-heading">
                                                                            <h4 class="vc_tta-panel-title">
                                                                                <a href="#prod6" data-vc-accordion data-vc-container=".vc_tta-container">
                                                                                    <span class="vc_tta-title-text">prod6</span>
                                                                                </a>
                                                                            </h4>
                                                                        </div>
                                                                        <div class="vc_tta-panel-body">
                                                                            <div class="centered-box gem-image-centered-box">
                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style="">
                                                                                    <div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up">
                                                                                        <img class="gem-wrapbox-element img-responsive" style="height: 400px; width: auto;" src="images/5.png" alt=""/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div></div></div></div><div class="vc_row-full-width"></div><div class="vc_row-full-width-before"></div>
                                    <div class="vc_row-full-width"></div>
                                    <div id="vc_row-5819c9af30efb" class="vc_row wpb_row vc_row-fluid vc_custom_1462531250016" style=" margin-top: 100px; margin-bottom: 100px !important;">

                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <h2>Практичность </h2>
                                            <p>Забудьте о проводах, которые рвутся и входных гнездах для зарядных устройств, которые регулярно ломаются! Наши устройства обеспечивают заряд батареи в любом удобном для Вас месте без риска задеть провод и повредить смартфон.
                                            </p>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6" >
                                            <video controls="controls" style="width: 100%;padding-left: 70px;" poster="images/nov.jpg">
                                                <source src="video/video.mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width-before"></div>

                                    <div id="showcase" class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1463393811295">
                                            <div class="wpb_wrapper">
                                                <div id="fullwidth-block-5819c9af2889c" class="fullwidth-block fullwidth-block-parallax-vertical clearfix" style="padding-top: 110px;">
                                                    <script type="text/javascript">
                                                        if (typeof(gem_fix_fullwidth_position) == "function") {
                                                            gem_fix_fullwidth_position(document.getElementById("fullwidth-block-5819c9af2889c"));
                                                        }
                                                    </script>
                                                    <div class="fullwidth-block-background" style="background-image: url(images/back.jpg);background-repeat: no-repeat; background-size: cover;background-position: center top;"></div>
                                                    <div class="fullwidth-block-inner">
                                                        <div class="preloader"><div class="preloader-spin"></div>
                                                        </div>
                                                        <div class="size-medium style1 gem-testimonials fullwidth-block">
                                                            <div id="post-77" class="gem-testimonial-item post-77 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                <div class="gem-testimonial-wrapper">
                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="goggle wpb_column vc_column_container vc_col-sm-11">
                                                                                    <div class="vc_column-inner vc_custom_1463488189392">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="centered-box gem-image-centered-box">
                                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered" style="">
                                                                                                    <div class="gem-wrapbox-inner ">
                                                                                                        <img class="gem-wrapbox-element img-responsive" style="margin-top: 20px; height: 300px; width: auto;" src="images/3.png" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1"><div class="vc_column-inner vc_custom_1462956690363"><div class="wpb_wrapper"></div></div></div></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="title-h1" style="margin-top: 25px;"><span style="color: #ffffff;">PROD 5</span></div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div>
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1463394055958 wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <p><span style="color: #ffffff;">Устройство изготовлено из качественного материала и имеет улучшенные технические характеристики. Во время работы излучает мягкий свет.
Подходит для  QI-устройств.
</span></p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="post-77" class="gem-testimonial-item post-77 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                <div class="gem-testimonial-wrapper">
                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="goggle wpb_column vc_column_container vc_col-sm-11">
                                                                                    <div class="vc_column-inner vc_custom_1463488189392">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="centered-box gem-image-centered-box">
                                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered" style="">
                                                                                                    <div class="gem-wrapbox-inner ">
                                                                                                        <img class="gem-wrapbox-element img-responsive" style="margin-top: 20px; height: 300px; width: auto;" src="images/6.png" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1"><div class="vc_column-inner vc_custom_1462956690363"><div class="wpb_wrapper"></div></div></div></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="title-h1" style="margin-top: 25px"><span style="color: #ffffff;">PROD 4</span></div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div>
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1463394055958 wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <p><span style="color: #ffffff;">Главным достоинством этой модели является сверхкомпактный дизайн, который позволяет использовать индукционное устройство в любом удобном для Вас месте и даже носить в кармане.
Подходит для всех QI-устройств.
</span></p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="post-77" class="gem-testimonial-item post-77 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                <div class="gem-testimonial-wrapper">
                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="goggle wpb_column vc_column_container vc_col-sm-11">
                                                                                    <div class="vc_column-inner vc_custom_1463488189392">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="centered-box gem-image-centered-box">
                                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered" style="">
                                                                                                    <div class="gem-wrapbox-inner ">
                                                                                                        <img class="gem-wrapbox-element img-responsive" style="margin-top: 20px; height: 300px; width: auto;" src="images/1.png" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1"><div class="vc_column-inner vc_custom_1462956690363"><div class="wpb_wrapper"></div></div></div></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="title-h1" style="margin-top: 25px"><span style="color: #ffffff;">PROD 3</span></div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div>
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1463394055958 wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <p><span style="color: #ffffff;">Система PowerBank позволяет накопить большее количество энергии, поэтому данное устройство заряжает в 2 (!) раза быстрее, чем другое беспроводное устройство. форма, зеркальная поверхность и округлые углы обеспечивают аккуратный дизайн.
Подходит для LG G3, Samsung Galaxy S4/S5/Note 4, Nokia Lumia 920, HTC Droid DNA, Google Nexus 5/7 и других QI-устройств.
</span></p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="post-77" class="gem-testimonial-item post-77 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                <div class="gem-testimonial-wrapper">
                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="goggle wpb_column vc_column_container vc_col-sm-11">
                                                                                    <div class="vc_column-inner vc_custom_1463488189392">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="centered-box gem-image-centered-box">
                                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered" style="">
                                                                                                    <div class="gem-wrapbox-inner ">
                                                                                                        <img class="gem-wrapbox-element img-responsive" style="margin-top: 20px; height: 300px; width: auto;" src="images/2.png" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1"><div class="vc_column-inner vc_custom_1462956690363"><div class="wpb_wrapper"></div></div></div></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="title-h1" style="margin-top: 25px"><span style="color: #ffffff;">PROD 2</span></div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div>
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1463394055958 wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <p><span style="color: #ffffff;">Имеет ту же скорость зарядки, что и проводное зарядное устройство. Треугольная форма и тонкий профиль делают устройство необычно компактным. Во время зарядки светится цветными вспышками. </span></p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="post-77" class="gem-testimonial-item post-77 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                <div class="gem-testimonial-wrapper">
                                                                    <div class="row">
                                                                        <div class="col-md-6">

                                                                            <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                <div class="goggle wpb_column vc_column_container vc_col-sm-11">
                                                                                    <div class="vc_column-inner vc_custom_1463488189392">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="centered-box gem-image-centered-box">
                                                                                                <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered" style="">
                                                                                                    <div class="gem-wrapbox-inner ">
                                                                                                        <img class="gem-wrapbox-element img-responsive" style="margin-top: 20px; height: 300px; width: auto;" src="images/4.png" alt="">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1"><div class="vc_column-inner vc_custom_1462956690363"><div class="wpb_wrapper"></div></div></div></div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="title-h1" style="margin-top: 25px"><span style="color: #ffffff;">PROD 1</span></div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div>
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1463394055958 wpb_start_animation">
                                                                                <div class="wpb_wrapper">
                                                                                    <p><span style="color: #ffffff;">Беспроводное зарядное устройство имеет широкую зарядную область с 3-мя катушками, что позволяет заряжать девайсы еще быстрее. Легко используется на ходу. Хорошо подходит в качестве подарка.
Подходит для S6, iPhone, LG, Nokia, Google, Samsung.
</span></p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="post-78" class="gem-testimonial-item post-78 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry"> <div class="gem-testimonial-wrapper">
                                                                    <div class="gem-testimonial-wrapper">
                                                                        <div class="row">
                                                                            <div class="col-md-6">

                                                                                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                                                                    <div class="goggle wpb_column vc_column_container vc_col-sm-11">
                                                                                        <div class="vc_column-inner vc_custom_1463488189392">
                                                                                            <div class="wpb_wrapper">
                                                                                                <div class="centered-box gem-image-centered-box">
                                                                                                    <div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered" style="">
                                                                                                        <div class="gem-wrapbox-inner ">
                                                                                                            <img class="gem-wrapbox-element img-responsive" style="margin-top: 20px;  margin-left: -35px; height: 300px; width: auto;" src="images/5.png" alt="">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-1"><div class="vc_column-inner vc_custom_1462956690363"><div class="wpb_wrapper"></div></div></div></div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left wpb_start_animation">
                                                                                    <div class="wpb_wrapper">
                                                                                        <div class="title-h1" style="margin-top: 25px"><span style="color: #ffffff;">PROD 6</span></div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div>
                                                                                <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1463394055958 wpb_start_animation">
                                                                                    <div class="wpb_wrapper">
                                                                                        <p><span style="color: #ffffff;">Ускоренный режим увеличивает скорость зарядки на 50%.  Угол наклона подставки можно регулировать от 0 до 90 градусов. Встроен цветовой индикатор, который позволяет видеть состояние зарядки.
Подходит для iPhone, Nokia, Sony, HTC.
</span></p>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width"></div><div id="vc_row-5819c9af1d7cd" class="vc_row vc_row-fluid vc_custom_1462531250016"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1462969980214"><div class="wpb_wrapper"><div id="fullwidth-block-5819c9af1dd92" class="fullwidth-block clearfix" style=""><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("fullwidth-block-5819c9af1dd92")); }</script><div class="gem-video-background" data-aspect-ratio="1280:540"><div class="gem-video-background-inner"><video autoplay="autoplay" loop="loop" src="video/intro1.mp4" muted="muted"></video></div><div class="gem-video-background-overlay" style=""></div></div><div class="fullwidth-block-inner"><div id="justtry" class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463055733536 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-2 vc_col-lg-3 vc_col-md-offset-0 vc_col-sm-offset-0"><div class="vc_column-inner vc_custom_1462970530591"><div class="wpb_wrapper"><div class="vc_empty_space"  style="height: 160px" ><span class="vc_empty_space_inner"></span></div>

                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
                                                                                <div class="wpb_wrapper">
                                                                                    <div class="title-h2"><span style="color: #ffffff;">Инновационный принцип работы </span><br />
<!--                                                                                        <span style="color: #ffffff;">Lorem ipsum dolor</span></div>-->

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 40px;"></div>
                                                                            <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
                                                                                <div class="wpb_wrapper">
                                                                                    <p><span style="color: #ffffff;">Беспроводные зарядные устройства работают благодаря индукционной передачи энергии, так называемому QI – стандарту. Он позволяет передавать энергию, не используя при этом провода. </span></p>

                                                                                </div>
                                                                            </div>
                                                                            <div class="clearboth"></div><div class="gem-divider" style="margin-top: 50px;"></div><div class="gem-button-container gem-button-position-left lm_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-flat gem-button-text-weight-normal lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 25px;background-color: #00bcd4;color: #ffffff;" onmouseleave="this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" onmouseenter="this.style.backgroundColor='#2b2d3a';this.style.color='#00bcd4';" href="#pricing2" target="_self">Просмотреть все модели</a></div> <div class="clearboth"></div><div class="gem-divider" style="margin-top: 150px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"></div></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width-before"></div><div id="overview" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1463055710372 vc_row-has-fill"><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("overview")); }</script><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 60px;"></div><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-3 vc_col-lg-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h2" style="text-align: center;"><span style="color: #000000;">Преимущества</span></div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="clearboth"></div><div class="gem-divider" style="margin-top: 0;"></div>
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top">
                                                                        <div class="wpb_wrapper">
<!--                                                                            <p style="text-align: center;"><span style="color: #7c7c7c;"></span></p>-->

                                                                        </div>
                                                                    </div>
                                                                </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                                            <img src="images/3.png" style="position: absolute; margin-left: 54%; position: absolute; width: auto; height: 580px;">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="clearboth"></div>
                                                                    <div class="gem-divider" style="">

                                                                    </div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 50px;"></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910"><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg"><div class="vc_column-inner vc_custom_1463051585796"><div class="wpb_wrapper"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-right" style=""><div class="gem-wrapbox-inner " ><img class="gem-wrapbox-element img-responsive" src="images/3.png" alt=""/></div></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-4 vc_hidden-lg vc_col-md-offset-2 vc_col-md-5 vc_col-sm-offset-0"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1463052031762">
                                                                        <div class="wpb_wrapper">
<!--                                                                            <div class="title-h5" style="text-align: left;"><span class="light" style="color: #000000; text-transform: none;">Передает энергию на расстояние до 5 сантиметров. </span></div>-->

                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class=" vc_column_container vc_col-sm-6 vc_col-lg-4 vc_hidden-lg vc_col-md-5">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1463052040549">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h5" style="text-align: left;"><span class="light" style="color: #000000; text-transform: none;">Инновационный принцип работы </h2><br> Беспроводные зарядные устройства работают благодаря индукционной передачи энергии, так называемому QI – стандарту. Он позволяет передавать энергию, не используя при этом провода.</span></div>

                                                                        </div>
                                                                    </div>
                                                                </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid right_goggle vc_custom_1463408164152 vc_row-has-fill" style="padding-top: 10px !important"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-3 vc_col-md-4 vc_hidden-md vc_col-sm-offset-0 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right vc_custom_1463394291666">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h5"><span class="light" style="color: #000000; text-transform: none;">Передает энергию на расстояние до 5 сантиметров. </span></div>


                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-md vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner vc_custom_1463407963848"><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1464618384043">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="line-box" style="float: left; background: url('http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/line-1.jpg') 50% 50% no-repeat; width: 470px;">
                                                                                <div class="pulse-wrapper">
                                                                                    <div class="pulse-1"></div>
                                                                                </div>
                                                                                <div class="pulse-wrapper">
                                                                                    <div class="pulse-2"></div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style=""></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-2 vc_col-lg-4 vc_col-md-4 vc_hidden-md vc_col-sm-offset-0 vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right vc_custom_1463394299525">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h5"><span class="light" style="color: #000000; text-transform: none;">Легкий и компактный! Вы можете носить его даже в кармане</span></div>
                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_hidden-md vc_hidden-sm vc_hidden-xs"><div class="vc_column-inner vc_custom_1463050723808"><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1463408736037">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="line-box" style="float: left; background: url('http://codex-themes.com/thegem/product-landing/wp-content/uploads/2016/05/line-2.jpg') 50% 50% no-repeat; width: 470px;">
                                                                                <div class="pulse-wrapper">
                                                                                    <div class="pulse-1">1</div>
                                                                                </div>
                                                                                <div class="pulse-wrapper">
                                                                                    <div class="pulse-2-1"></div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-md vc_hidden-sm vc_hidden-xs">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="clearboth"></div><div class="gem-divider" style="margin-top: 25px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 10px;"></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid left_goggle vc_custom_1463665819396 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-offset-3 vc_col-md-offset-0 vc_col-sm-offset-0"><div class="vc_column-inner vc_custom_1463045238364"><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1464260053599">
                                                                        <div class="wpb_wrapper">


                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-5 vc_col-md-offset-0 vc_col-sm-offset-0" style="background-image: "><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1464260227413">
                                                                        <div class="wpb_wrapper">

                                                                            <div style="clear: both;"></div>
                                                                            <div class="title-h5"><span class="light" style="color: #000000; text-transform: none;"><h2>Инновационный принцип работы </h2><br> Беспроводные зарядные устройства работают благодаря индукционной передачи энергии, так называемому QI – стандарту. Он позволяет передавать энергию, не используя при этом провода. </span></div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="clearboth"></div><div class="gem-divider" style="margin-top: 35px;"></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1463056807447"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-offset-3"><div class="vc_column-inner vc_custom_1463045275758"><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1464260118389">
                                                                        <div class="wpb_wrapper">


                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-0 vc_col-lg-5 vc_col-md-offset-0 vc_col-sm-offset-0"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left vc_custom_1464260278673">
                                                                        <div class="wpb_wrapper">

                                                                            <div style="clear: both;"></div>
                                                                            <div class="title-h5"><span class="light" style="color: #000000; text-transform: none;"></span></div>

                                                                        </div>
                                                                    </div>
                                                                </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910"><div class="wpb_column vc_column_container vc_col-sm-12 vc_hidden-lg"><div class="vc_column-inner vc_custom_1463052154057"><div class="wpb_wrapper"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-left" style=""><div class="gem-wrapbox-inner " ><img class="gem-wrapbox-element img-responsive" src="images/3.png" alt=""/></div></div></div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910"><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-4 vc_hidden-lg vc_col-md-offset-0 vc_col-md-5 vc_col-sm-offset-0"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element  vc_custom_1463045310319">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h5"><span class="light" style="color: #000000; text-transform: none;">Передает энергию на расстояние до 5 сантиметров.</span></div>

                                                                        </div>
                                                                    </div>
                                                                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_hidden-lg vc_col-md-5"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                        <div class="wpb_wrapper">
                                                                            <div class="title-h5"><span class="light" style="color: #000000; text-transform: none;">Легкий и компактный! Вы можете носить его даже в кармане.</span></div>

                                                                        </div>
                                                                    </div>
                                                                </div></div></div></div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1463050514910">
                                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div class="clearboth"></div><div class="gem-divider" style="margin-top: 10px;"></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width"></div><div class="vc_row-full-width-before"></div><div id="vc_row-5819c9af27d6c" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1463384041080 vc_row-has-fill vc_row-no-padding"><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("vc_row-5819c9af27d6c")); }</script><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1463384079669"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row-full-width"></div>
                                    <div id="testimonials" class="vc_row wpb_row vc_row-fluid vc_custom_1463393672921">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner vc_custom_1463393811295">
                                                <div class="wpb_wrapper">
                                                    <div id="fullwidth-block-5819c9af2889c" class="fullwidth-block fullwidth-block-parallax-vertical clearfix" style="padding-top: 150px;padding-bottom: 130px;">
                                                        <script type="text/javascript">
                                                            if (typeof(gem_fix_fullwidth_position) == "function") {
                                                                gem_fix_fullwidth_position(document.getElementById("fullwidth-block-5819c9af2889c"));
                                                            }
                                                        </script>
                                                        <div class="fullwidth-block-background" style="background-image: url(images/20.jpg);background-repeat: no-repeat; background-size: cover;background-position: center top;"></div>
                                                        <div class="fullwidth-block-inner">
                                                            <div class="preloader"><div class="preloader-spin"></div>
                                                            </div>
                                                            <div class="size-medium style1 gem-testimonials fullwidth-block">
                                                                <div id="post-77" class="gem-testimonial-item post-77 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                    <a href="#" target="_blank">
                                                                        <div class="gem-testimonial-wrapper">
                                                                            <div class="gem-testimonial-image">
                                                                                <img width="200" height="200" src="images/face1.jpg" class="img-responsive img-circle wp-post-image" alt="face-1" /> </div>
                                                                            <div class="gem-testimonial-content"> <div class="gem-testimonial-name">Марина Лавренчук</div>

                                                                                <div class="gem-testimonial-text"> <p>Индукционным зарядным устройством пользуюсь не так давно, но, тем не менее, очень довольна! Зарядка производится быстро. А из-за отсутствия проводов рабочее место стало выглядеть более опрятным! </p> </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div id="post-78" class="gem-testimonial-item post-78 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry"> <div class="gem-testimonial-wrapper">
                                                                        <div class="gem-testimonial-image">
                                                                            <img width="400" height="400" src="images/face2.jpg" class="img-responsive img-circle wp-post-image" alt="face-2" /> </div>
                                                                        <div class="gem-testimonial-content">
                                                                            <div class="gem-testimonial-name">Андрей Юдин</div>

                                                                            <div class="gem-testimonial-text"> <p>Не знаю как обходился без такой вещи раньше! Всем рекомендую. Гораздо удобнее, чем с проводными зарядками</p> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="post-82" class="gem-testimonial-item post-82 thegem_testimonial type-thegem_testimonial status-publish has-post-thumbnail hentry">
                                                                    <a href="#" target="_blank">
                                                                        <div class="gem-testimonial-wrapper">
                                                                            <div class="gem-testimonial-image">
                                                                                <img width="400" height="400" src="images/face3.jpg" class="img-responsive img-circle wp-post-image" alt="face-3" /> </div> <div class="gem-testimonial-content">
                                                                                <div class="gem-testimonial-name">Денис Мазуров</div>

                                                                                <div class="gem-testimonial-text"> <p>Работает нормально, проблем с подключением нет... Покупал у этих ребят неделю назад. Доволен очень, провода пошли в топку</p> </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="testimonials_svg">
                                                                    <svg width="100" height="50"><path d="M 0,-1 Q 45,5 50,50 Q 55,5 100,-1" /></svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="pricing" class="vc_row wpb_row vc_row-fluid vc_custom_1463055758035">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">
                                                    <div class="clearboth"></div>
                                                    <div class="gem-divider" style="margin-top: 100px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="vc_row-5819c9af30efb" class="vc_row wpb_row vc_row-fluid vc_custom_1462531250016"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="centered-box gem-image-centered-box"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style=""><div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up"><img class="gem-wrapbox-element img-responsive" style="height: 300px; width: auto;" src="images/1.png" alt=""/></div></div></div>
                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1463394551655">
                                                        <div class="wpb_wrapper">
                                                            <div class="title-h4" style="text-align: center;"><span style="color: #000000;">Prod1</span></div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                        <div class="wpb_wrapper test">
                                                            <p style="text-align: center;"><span style="color: #7c7c7c;">Подходит для S6, iPhone, LG, Nokia, Google, Samsung.</span></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space"  style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                                    <div class="gem-button-container gem-button-position-center buy_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-thin gem-button-border-1 lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 30px;border-color: #000000;color: #000000;" onmouseleave="this.style.borderColor='#000000';this.style.backgroundColor='transparent';this.style.color='#000000';" onmouseenter="this.style.borderColor='#00bcd4';this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" href="prod1.php" target="_self">Узнать подробнее</a></div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="centered-box gem-image-centered-box"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style=""><div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up"><img class="gem-wrapbox-element img-responsive" style="height: 300px; width: auto;" src="images/2.png" alt=""/></div></div></div>
                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1463394566946">
                                                        <div class="wpb_wrapper">
                                                            <div class="title-h4" style="text-align: center;"><span style="color: #000000;">Prod2</span></div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                        <div class="wpb_wrapper test">
                                                            <p style="text-align: center;"><span style="color: #7c7c7c;">Подходит для iPhone 6 plus 5 5S Nexus 4 5 Galaxy S5 S4 HTC и других моделей.</span></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space"  style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                                    <div class="gem-button-container gem-button-position-center buy_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-thin gem-button-border-1 lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 30px;border-color: #000000;color: #000000;" onmouseleave="this.style.borderColor='#000000';this.style.backgroundColor='transparent';this.style.color='#000000';" onmouseenter="this.style.borderColor='#00bcd4';this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" href="prod2.php" target="_self">Узнать подробнее</a></div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="centered-box gem-image-centered-box"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style=""><div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up"><img class="gem-wrapbox-element img-responsive" style="height: 300px; width: auto;" src="images/3.png" alt=""/></div></div></div>
                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1463394580859">
                                                        <div class="wpb_wrapper">
                                                            <div class="title-h4" style="text-align: center;"><span style="color: #000000;">Prod3</span></div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                        <div class="wpb_wrapper test">
                                                            <p style="text-align: center;"><span style="color: #7c7c7c;">Подходит для LG G3, Samsung Galaxy S4/S5/Note 4, Nokia Lumia 920, HTC Droid DNA, Google Nexus 5/7 и других QI-устройств.</span></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space"  style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                                    <div class="gem-button-container gem-button-position-center buy_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-thin gem-button-border-1 lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 30px;border-color: #000000;color: #000000;" onmouseleave="this.style.borderColor='#000000';this.style.backgroundColor='transparent';this.style.color='#000000';" onmouseenter="this.style.borderColor='#00bcd4';this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" href="prod3.php" target="_self">Узнать подробнее</a></div> </div></div></div></div>
                                    <div id="pricing" class="vc_row wpb_row vc_row-fluid vc_custom_1463055758035"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 140px;"></div></div></div></div></div>
                                    <div id="vc_row-5819c9af30efb" class="vc_row wpb_row vc_row-fluid vc_custom_1462531250016"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="centered-box gem-image-centered-box"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style=""><div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up"><img class="gem-wrapbox-element img-responsive" style="height: 300px; width: auto;" src="images/4.png" alt=""/></div></div></div>
                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1463394551655">
                                                        <div class="wpb_wrapper">
                                                            <div class="title-h4" style="text-align: center;"><span style="color: #000000;">Prod4</span></div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                        <div class="wpb_wrapper test">
                                                            <p style="text-align: center;"><span style="color: #7c7c7c;">Подходит для всех QI-устройств.</span></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space"  style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                                    <div class="gem-button-container gem-button-position-center buy_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-thin gem-button-border-1 lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 30px;border-color: #000000;color: #000000;" onmouseleave="this.style.borderColor='#000000';this.style.backgroundColor='transparent';this.style.color='#000000';" onmouseenter="this.style.borderColor='#00bcd4';this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" href="prod4.php" target="_self">Узнать подробнее</a></div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="centered-box gem-image-centered-box"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style=""><div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up"><img class="gem-wrapbox-element img-responsive" style="height: 300px; width: auto;" src="images/5.png" alt=""/></div></div></div>
                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1463394566946">
                                                        <div class="wpb_wrapper">
                                                            <div class="title-h4" style="text-align: center;"><span style="color: #000000;">Prod5</span></div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                        <div class="wpb_wrapper test">
                                                            <p style="text-align: center;"><span style="color: #7c7c7c;">Подходит для  QI-устройств.</span></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space"  style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                                    <div class="gem-button-container gem-button-position-center buy_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-thin gem-button-border-1 lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 30px;border-color: #000000;color: #000000;" onmouseleave="this.style.borderColor='#000000';this.style.backgroundColor='transparent';this.style.color='#000000';" onmouseenter="this.style.borderColor='#00bcd4';this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" href="prod5.php" target="_self">Узнать подробнее</a></div> </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="centered-box gem-image-centered-box"><div class="gem-image gem-wrapbox gem-wrapbox-style-default gem-wrapbox-position-centered lazy-loading" style=""><div class="gem-wrapbox-inner  lazy-loading-item"  data-ll-effect="move-up"><img class="gem-wrapbox-element img-responsive" style="height: 300px; width: auto;" src="images/6.png" alt=""/></div></div></div>
                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear vc_custom_1463394580859">
                                                        <div class="wpb_wrapper">
                                                            <div class="title-h4" style="text-align: center;"><span style="color: #000000;">Prod6</span></div>

                                                        </div>
                                                    </div>

                                                    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
                                                        <div class="wpb_wrapper test">
                                                            <p style="text-align: center;"><span style="color: #7c7c7c;">Подходит для iPhone, Nokia, Sony, HTC.</span></p>

                                                        </div>
                                                    </div>
                                                    <div class="vc_empty_space"  style="height: 15px" ><span class="vc_empty_space_inner"></span></div>
                                                    <div class="gem-button-container gem-button-position-center buy_button lazy-loading"><a class="gem-button gem-button-size-medium gem-button-style-outline gem-button-text-weight-thin gem-button-border-1 lazy-loading-item"data-ll-effect="drop-right-without-wrap" style="border-radius: 30px;border-color: #000000;color: #000000;" onmouseleave="this.style.borderColor='#000000';this.style.backgroundColor='transparent';this.style.color='#000000';" onmouseenter="this.style.borderColor='#00bcd4';this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" href="prod6.php" target="_self">Узнать подробнее</a></div> </div></div></div></div>
                                    <div id="vc_row-5819c9af33638" class="vc_row wpb_row vc_row-fluid vc_custom_1462531250016"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="clearboth"></div><div class="gem-divider" style="margin-top: 100px;"></div></div></div></div></div><div class="vc_row-full-width-before"></div>
                                    <d<div class="vc_row-full-width"></div>

                                    <div class="vc_row-full-width-before"></div>
                                    <div id="contact" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1463150287434 vc_row-has-fill"><script type="text/javascript">if (typeof(gem_fix_fullwidth_position) == "function") { gem_fix_fullwidth_position(document.getElementById("contact")); }</script>

                                        <div id="aboutus" class="vc_row wpb_row vc_row-fluid vc_custom_1463055786142">
                                            <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-3">
                                                </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-offset-1 vc_col-lg-2 vc_col-md-offset-1 vc_col-md-3 vc_col-sm-offset-3"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom">
                                                            <div class="wpb_wrapper">
                                                                <div class="title-h5"><span style="color: #fff;">Устройства</span></div>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 3px !important;">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="prod1.php"><span style="color: #fff;">prod1</span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 3px !important;">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="prod2.php"><span style="color: #fff;">prod2</span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 3px !important;">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="prod3.php"><span style="color: #fff;">prod3</span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 3px !important;">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="prod4.php"><span style="color: #fff;">prod4</span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 3px !important;">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="prod5.php"><span style="color: #fff;">prod5</span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 3px !important;">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="prod6.php"><span style="color: #fff;">prod6</span></a></p>

                                                            </div>
                                                        </div>
                                                    </div></div></div>
                                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-offset-1 vc_col-lg-2 vc_col-md-offset-1 vc_col-md-3 vc_col-sm-offset-0"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 1.8em">
                                                            <div class="wpb_wrapper">
                                                                <div class="title-h5"><span style="color: #fff;">Контакты</span></div>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 1.8em">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="#"><span style="color: #fff;"><i class="fa fa-phone" aria-hidden="true">&nbsp;</i>+38(099)-121-12-12</span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom" style="margin-bottom: 1.8em">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="#"><span style="color: #fff;"><i class="fa fa-envelope-o" aria-hidden="true">&nbsp;</i>info@bzy.com  </span></a></p>

                                                            </div>
                                                        </div>

                                                        <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom">
                                                            <div class="wpb_wrapper">
                                                                <p><a href="#"><span style="color: #fff;"><i class="fa fa-map-marker" aria-hidden="true">&nbsp;</i>Ул. Дмитриевская 18/24, Киев, Украина </span></a></p>

                                                            </div>
                                                        </div>
                                                    </div></div></div></div>


                                        <div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="socials socials-list socials-colored-hover socials-default socials-alignment-right"><a class="socials-item" target="_blank" href="#" style="color: #ffffff;"><i class="socials-item-icon instagram" style="font-size: 21px"></i></a><a class="socials-item" target="_blank" href="#" style="color: #ffffff;"><i class="socials-item-icon facebook" style="font-size: 21px"></i></a><a class="socials-item" target="_blank" href="#" style="color: #ffffff;"><i class="socials-item-icon twitter" style="font-size: 21px"></i></a></div>

                                                </div></div></div></div>
                                    <div class="vc_row-full-width"></div>
                                    
                                </div><!-- .entry-content -->






                            </article><!-- #post-## -->

                        </div>


                    </div>

                </div>
            </div><!-- .block-content -->
        </div><!-- #main-content -->



    </div><!-- #main -->





</div><!-- #page -->
<!-- DELETE -->
<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<!-- DELETE -->

<link rel='stylesheet' id='vc_tta_style-css'  href='css/js_composer_tta.min.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.dlmenu.js'></script>
<script type='text/javascript' src='js/menu_init.js'></script>
<script type='text/javascript' src='js/svg4everybody.js'></script>
<script type='text/javascript' src='js/respond.min.js?ver=1'></script>
<script type='text/javascript' src='js/combobox.js'></script>
<script type='text/javascript' src='js/checkbox.js'></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>
<script type='text/javascript' src='js/header.js'></script>
<script type='text/javascript' src='js/SmoothScroll.js'></script>
<script type='text/javascript' src='js/jquery.lazyLoading.js'></script>
<script type='text/javascript' src='js/jquery.transform.js'></script>
<script type='text/javascript' src='js/effect.min.js'></script>
<script type='text/javascript' src='js/effect-drop.min.js'></script>
<script type='text/javascript' src='js/easyResponsiveTabs.js'></script>
<script type='text/javascript' src='js/odometer.js'></script>
<script type='text/javascript' src='js/jquery.sticky.js'></script>
<script type='text/javascript' src='js/functions.js'></script>
<script type='text/javascript' src='js/jquery.mousewheel.pack.js'></script>
<script type='text/javascript' src='js/jquery.fancybox.pack.js'></script>
<script type='text/javascript' src='js/jquery.fancybox-init.js'></script>
<script type='text/javascript' src='js/vc_elements_init.js'></script>
<script type='text/javascript' src='js/jquery.form.min.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/codex-themes.com\/thegem\/product-landing\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ...","cached":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='js/scripts.js'></script>
<script type='text/javascript' src='js/wp-embed.min.js'></script>
<script type='text/javascript' src='js/js_composer_front.min.js'></script>
<script type='text/javascript' src='js/waypoints.min.js'></script>
<script type='text/javascript' src='js/vc-accordion.js'></script>
<script type='text/javascript' src='js/vc-tta-autoplay.min.js'></script>
<script type='text/javascript' src='js/vc-tabs.min.js'></script>
<script type='text/javascript' src='js/jquery.parallaxVertical.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='js/jquery.carouFredSel.js'></script>
<script type='text/javascript' src='js/testimonials-carousel.js'></script>
</body>
</html>
