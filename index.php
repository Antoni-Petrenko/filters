<?php

$last_modified_time = getlastmod();
header("Cache-Control: public");
header("Expires: " . date("r", time() + 10800));

if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= $last_modified_time) {
    header('HTTP/1.1 304 Not Modified');
    die; /* убили всё, что ниже */
}
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $last_modified_time) . ' GMT');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

header("Cache-control: public");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 60 * 60 * 24) . " GMT");


?>
<!--PHP GEOLOCATION STAR  Wed, 26 Feb 2017 08:21:57 GMT -->
<?php include("../controller/geo/index.php");
include("../lib/creatversion.php")
?>
<!--PHP GEOLOCATION END-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru" style="overflow: auto;">
<head>
    <meta name="google-site-verification" content="4bniZmE1R7B9_W91TF6xPv8moQCwnmqIanjXkPCjBdo"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Expires" content="<?php echo gmdate("D, d M Y H:i:s", time() + 60 * 60 * 24); ?> GMT"/>
    <meta http-equiv="Cache-Control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Закажи окна online у производителя. Окна Steko купить онлайн.">
    <meta name="author" content="Завод Steko">
    <title>Steko | Закажи окна у производителя </title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <link  rel="stylesheet" href="../css/allinone_v1.css">
    <link rel="stylesheet" href="./asset/css/main.min.css" />


    <!-- Page hiding snippet (recommended)  -->
    <style>.async-hide {
            opacity: 0 !important
        } </style>

    <script async>
        (function (a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function () {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function () {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000,
            {'GTM-N9NGKTT': true});</script>

    <!-- Google Tag Manager -->
    <script async>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N9NGKTT');</script>
    <!-- End Google Tag Manager -->

    <style>
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://fonts.gstatic.com/s/materialicons/v21/2fcrYFNaTjcS6g4U3t-Y5ZjZjT5FdEJ140U2DJYC3mY.woff2) format('woff2');
        }
        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
        }

        .ugolki .cd-pricing-footer {
            background: #f6fcfd;
            border-radius: 0 0 13px 13px !important;
        }

        .ugolki img {
            border-radius: 13px 13px 0 0 !important;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // console.log('The DOM is Ready!');


            var loading_el = document.querySelector('#loading');

            setTimeout(function () {
                loading_el.style.display = "none";
            }, 1000);
        });
    </script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!— Facebook Pixel Code —>
    <script async>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '345200342575475'); // Insert your pixel ID here.
    </script>

    <noscript>
        <img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=345200342575475&ev=PageView&noscript=1"
        />
    </noscript>
    <!— DO NOT MODIFY —>
    <!— End Facebook Pixel Code —>
    <!--Openstat-->
    <span id="openstat1"></span>
    <script async type="text/javascript">
        var openstat = {counter: 4086421, next: openstat};
        (function (d, t, p) {
            var j = d.createElement(t);
            j.async = true;
            j.type = "text/javascript";
            j.src = ("https:" == p ? "https:" : "http:") + "//openstat.net/cnt.js";
            var s = d.getElementsByTagName(t)[0];
            s.parentNode.insertBefore(j, s);
        })(document, "script", document.location.protocol);
    </script>
    <!--/Openstat-->
    <script async>
        (function (i, s, o, g, r, a, m) {
                i["esSdk"] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            }
        )(window, document, "script", "https://esputnik.com/scripts/v1/public/scripts?apiKey=eyJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI0NTI0ZWZhYTJkYzI2MGRmYTM4YTE1NDBlMWIwYWI0NGQxYmYzNzExMzA1YmRiYjMwOWE3NDE3NmRlY2Q0ZjAyMmJlM2JmN2E0OGJlYmIyOTMwMGU3MWZlZjgyYzk2NWU1MWJmYjUwNDRmMjIzM2ZiZTY3MjM5YzU3MjU3Yjg0NGEzY2JiMzI2NzIyYzNiMDViNzZiYjEyM2I1ODU0YjE0MDY4OWUxOTI5ZTEzNjgxMyJ9.aTRLStXcJ7ntdQ62HMHGzjzDmfI24wSXLwi4dlcPUEvZe4l5bJ4L_0oclB4W_pjOEEzNDYPiiszZCZqiLSG27g&domain=02FECD0D-A961-408A-9A87-DBC4B894536F", "es");
        es("pushOn");
    </script>

    <script defer >
        if ('serviceWorker' in navigator) {
            // Регистрация service worker-а, расположенного в корне сайта
            // с указанием более строгого scope
            navigator.serviceWorker.register('/sw.js', {scope: './'}).then(function (registration) {
                console.log('Service worker зарегистрирован:', registration);
            }).catch(function (error) {
                console.log('Ошибка при регистрации service worker-а:', error);
            });
        } else {
            console.log('Текущий браузер не поддерживает service worker-ы.');
        }
    </script>
</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9NGKTT"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<!--PRELOADER START-->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div style="" class="object" id="object_one">
                <img src="http://online.steko.com.ua/images/logo_SS.jpg"
                     style="width: 26px;display: inline-block;position: absolute;margin-left: -13px;margin-right: -13px;right: 50%;top: 3px;"
                />
            </div>
        </div>
    </div>
</div>
<!--PRELOADER END-->

<!--ФОРМА ЗАМЕРА START -->
<div class="hidden-sm" id="fixedContainer">

    <div data-toggle="tooltip" data-placement="left" title="Вызов замерщика" class="fixed_item" id="fixed_zamer">
        <div class="modal-sprite-zamer">
        </div>
    </div>

    <div data-toggle="tooltip" data-placement="left" title="Заказ звонка" class="fixed_item" id="fixed_call">
        <a data-toggle="modal" href="#popup_main">
            <div class="modal-sprite">
            </div>
        </a>
    </div>

    <div data-toggle="tooltip" data-placement="left" title="Iнша мова" class="fixed_item" id="fixed_lang">
        <a style="display: block; color:white;" href="http://online.steko.com.ua/ua/">UA</a>
    </div>

</div>
<!--ФОРМА ЗАМЕРА END -->

<div id="fixedForm" style="display: none;">
    <div class="close_form"><i class="fa fa-times" aria-hidden="true"></i></div>

    <form onSubmit="ga('send', 'event', 'form_submit', 'action', 'zamer');" id="zamer_slideform">
        <p>Отправте заявку на замер</p>

        <!--service fields -->
        <input type='hidden' class='form-control' name='type_code' value="tc_1"/>
        <input type='hidden' class='form-control' name='label' value="Заявка на замер"/>
        <input type='hidden' class='form-control' name='label_id' value="2"/>
        <!--service fields -->

        <span class="wrap_input_user">
                <input id="zamer_name" name="field_1" class="" required placeholder="Имя">
            </span>
        <span class="wrap_input_email">
            <input id="zamer_email" name="field_3" class="" placeholder=" Email" type="email">
        </span>
        <span class="wrap_input_phone_popup">
                <i class="material-icons">&#xE0B0;</i>
                <input id="zamer_tel" name="field_2" required class="" pattern="\+38\(\d{3}\)\d{3}-\d{2}-\d{2}"
                       placeholder="+38(___)___-__-__">
            </span>
        <p style="color:red; font-size: 12px; display: none;" id="error_choos_phone">Заполните телефон!</p>
        <div class="form-group">
            <label for="choose-region">Город</label>
            <select name="region_id" class="form-control" id="choose-region">
            </select>
            <p style="color:red; font-size: 12px; display: none;" id="error_choos_region">Выберите город!</p>
        </div>


        <button class="btn btn-block md-trigger zamer_slideform"
                onclick="$.getScript('http://px.adhigh.net/p/conversion.js?site_id=2976&pixel_id=call')" id="put_zamer"
                value="putData" name="putData" type="submit">Отправить
        </button>
    </form>
</div>
<!--ФОРМА ЗАМЕРА END -->

<!--MODALS START-->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"
                                                                                               aria-hidden="true"></i>
                </button>
                <p class="text-center">Просчитай свою экономию за месяц</p>
            </div>
            <div class="modal-body">

                <form id="ekonom_form" role="form">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 col-lg-6">
                            <label for="S" class="control-label s_label">Площадь помещения, м<sup>2</sup>: </label>
                            <input type="text" value="45" class="calc_input form-control" id="S">
                        </div>

                        <div class="col-xs-6 col-md-6 col-lg-6">
                            <label for="G" class="control-label gaz_label">Стоимость газа, грн/м<sup>3</sup>: </label>
                            <input type="text" class="calc_input form-control" id="G" value="6.9">
                            <span class="gaz_description">*Средняя стоимость газа за м<sup>3</sup></span>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <span>С обычными окнами<br> Вы заплатите: </span>
                            <div class="input-group">
                                <span id="shit_windows" type="text"></span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-6">
                            <span>С энергосберегающими окнами Steko Вы заплатите: </span>
                            <div class="input-group">
                                <span id="steko_windows" type="text"></span>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <div class="row text-center">
                    <div class="col-xs-12 col-md-12 col-lg-12">
                        <div class="bordered_ekonom">
                            <span class="ekonom_final">С окнами STEKO Вы сэкономите: </span>
                            <span class="raznica_wrap">
                                    <span id="raznica_val"> </span>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="popup_main" class="modal fade in" style="display:none; padding-right:0 !important;">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
            <img title="Отправь заявку и получи окна Steko" alt="Отправь заявку и получи окна Steko"
                 src="../images/logo.png"/>
            <form onSubmit="ga('send', 'event', 'form_submit', 'action', 'popup_order');" id="popup_main_form"
                  role="form">
                <div class="form_wrap">
                    <!--service fields -->
                    <input type='hidden' class='form-control' name='type_code' value="tc_1"/>
                    <input type='hidden' class='form-control' name='label' value="Заказ обратного звонка"/>
                    <input type='hidden' class='form-control' name='label_id' value="1"/>
                    <input type='hidden' class='form-control' name='zamer_city' value="<?php echo $geo_city; ?>"/>
                    <!--service fields -->
                    <span class="text-center order_text">Отправь заявку и получи  бесплатную консультацию</span>
                    <i class="material-icons">&#xE7FD;</i>
                    <input class="form-control num_zakaz_popup" autocomplete="off" required id="num_zakaz_popup"
                           name="field_1" placeholder="Имя" type="text">
                    <i class="material-icons"> mail </i>
                    <input class="form-control num_zakaz_email_popup" id="num_zakaz_email_popup" name="field_3"
                           placeholder=" Email" type="email">
                    <i class="material-icons">&#xE0B0;</i>
                    <input class="form-control num_zakaz" id="phone_popup" required
                           pattern="\+38\(\d{3}\)\d{3}-\d{2}-\d{2}" type="tel" name="field_2"
                           placeholder="+38(___)___-__-__" type="phone">
                    <p style="color:red; font-size: 12px; display: none;" id="error_choos_phone">Заполните телефон!</p>
                    <div class="form-group">
                        <label for="choose-region">Город</label>
                        <select name="region_id" class="form-control" id="choose-region">
                        </select>
                        <p style="color:red; font-size: 12px; display: none;" id="error_choos_region">Выберите
                            город!</p>
                    </div>
                    <button class="btn-block md-trigger popup_main_form"
                            onclick="$.getScript('http://px.adhigh.net/p/conversion.js?site_id=2976&pixel_id=call')"
                            id="put_zakaz_popup" name="putData" value="putData" type="submit">ОТПРАВИТЬ
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
<div id="popup_main_promo" class="modal fade in" style="display:none; padding-right:0 !important;">
    <div class="modal-dialog promo_dialog_modal">
        <div class="modal-content" id="block_ap_promocod">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
            <div class="promo_bot"><img src="../images/logo.png" alt=""/></div>
            <div id="cont_animation"></div>
            <form onSubmit="ga('send', 'event', 'form_submit', 'action', 'popup_order');" id="popup_main_form_promo"
                  role="form">
                <div class="form_wrap promo" style="padding: 10px 0 0">
                    <!--service fields -->
                    <input type='hidden' class='form-control' name='type_code' value="tc_1"/>
                    <input type='hidden' class='form-control' name='label' value="На просчет popup"/>
                    <input type='hidden' class='form-control' name='label_id' value="3"/>
                    <!-- <input type='hidden' class='form-control' name='zamer_city' value="<?php echo $geo_city; ?>" /> -->
                    <!--service fields -->
                    <input class="form-control num_zakaz_popup" autocomplete="off" required id="num_zakaz_popup"
                           name="field_1_promo" placeholder="Имя" style="padding: 0 10px" type="text">
                    <i class="material-icons">&#xE0B0;</i>
                    <input class="form-control num_zakaz" id="phone_popup" style="padding: 0 10px"
                           pattern="\+38\(\d{3}\)\d{3}-\d{2}-\d{2}" required type="tel"
                           placeholder="Телефон" type="phone">
                    <p style="color:red; font-size: 12px; display: none;" id="error_choos_phone">Заполните телефон!</p>
                    <input style="margin-top: 30px" class="form-control num_zakaz" id="email_form" required type="email"
                           name="field_7_promo"
                           placeholder="e-mail" type="email" style="padding: 0 10px">
                    <div class="form-group" style="padding: 0 10px">
                        <label for="choose-region">Город</label>
                        <select name="region_id" class="form-control" id="choose-region">
                        </select>
                        <p style="color:red; font-size: 12px; display: none;" id="error_choos_region">Выберите
                            город!</p>
                    </div>
                    <div class="form-btn">
                        <button class="btn-block md-trigger popup_main_form"
                                onclick="$.getScript('http://px.adhigh.net/p/conversion.js?site_id=2976&pixel_id=call')"
                                id="put_zakaz_popup" name="putData" value="putData" type="submit"
                                style="background: #e52b2b;">Испытай удачу
                        </button>
                    </div>
                </div>
                <div class="promoanimate"></div>
            </form>

            <span class="text-center order_text promo_text" id="promo_text">акция действует с 08.04 до 26.04</span>
        </div>


    </div>
</div>


<div class="modal fade in" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                <img src="" class="imagepreview" style="">
            </div>
        </div>
    </div>
</div>

<!--MODALS END-->


<div id="landing">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div style="    background: white;" id="comm"></div>
        <div class="wrapper-conteiner1">
            <div class="container mob_header">
                <div class="navbar-header page-scroll ">

                    <a id="logo" title="Steko Online" class="navbar-brand page-scroll" target="_blank"
                       href="#">
                        <img src="../images/logo.png" alt="Steko" title="Steko Online"/>
                        <img id="mob_logo" src="../images/pokupay.png" alt="Steko" title="Steko Online"/>
                    </a>

                </div>
                <div class="mobile_class_performans">
                    <div class="wrapper-for-contact" id="wrapper-for-contact">
                        <div class="custom_new_botton fix_margin">
                            <div class="wrapper_phone_header">
                                <div class="ico_tephone_header">
                                    <a href="tel:+380500505500">
                                        <img alt="" class="ico_desktop_phone"
                                             src="../images/ico_new_header_phone_0.1.png"/></a>
                                </div>
                                <div class="telephone_header">
                                    <a class="new_coll_btn" href="tel:+380500505500"> (050) 050-55-00 </a>
                                    <a class="new_coll_btn" href="tel:+380673015500"> (067) 301-55-00 </a>
                                </div>
                            </div>

                        </div>
                        <div class="batn-call-back" id="batn-call-back">
                            <a data-toggle="modal" href="#popup_main" class="phone_menu" href="#">ЗАКАЗАТЬ
                                ЗВОНОК</a>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <!-- /.navbar-collapse -->
                </div>
            </div>
            <div class=" container shitch-buttons">
                <a class="switch-button " href="http://online.steko.com.ua/">Окна</a>
                <a class="switch-button active" href="#">Фильтры для воды</a>
            </div>
            <div class="wrapper-for-btn-menu" id="wrapper-for-btn-menu">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <div class="hamburger hamburger--collapse">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </button>
            </div>

            <div class="wrapper-conteiner2">
                <div class="container">
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <div id="hide_mobile_menu">
                            <ul class="nav navbar-nav desktop_nav">
                                <li class="hidden">
                                    <a class="page-scroll" href="#landing"></a>
                                </li>
                                <li class="active">
                                    <a class="page-scroll active" data-index="1" href="#intro">Акции</a>
                                </li>
                                <li>
                                    <a class="page-scroll" data-index="3" data-attr-scroll="economics"
                                       href="#economics_i">Экономия</a>
                                </li>
                                <li>
                                    <a class="page-scroll" data-index="4" href="#rigger">Монтаж</a>
                                </li>
                                <li>
                                    <a class="page-scroll" data-index="8" href="#profile_steko">Профиль Steko</a>
                                </li>
                                <li class="hide_mobile_btn">
                                    <a class="page-scroll" data-index="10" href="#furniture">Фурнитура</a>
                                </li>
                                <li class="hide_mobile_btn">
                                    <a class="page-scroll" data-index="12" href="#testimonials_steko">Отзывы</a>
                                </li>
                                <li>
                                    <a class="page-scroll" data-index="14" href="#footer_steko">Контакты</a>
                                </li>

                                <li class="go_to_ua_mobile">
                                    <a onclick="location.href = 'http://online.steko.com.ua/ua/'">UA</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
    </nav>

    <div class="container">

  <header class="first-section">
    
   
    <img class="first-section__bg"src="./asset/images/header-bg.png" alt="">
   
  
 
    
      <h1 class="first-section__heading">ОЧИСНИЙ ФІЛЬТР ДЛЯ ВОДИ</h1>
 
 

      <h3 class="first-section__descrip">
        жива чиста вода, яка завжди під рукою
      </h3>
 
 
      <div class="first-section__button-box">
      
          <div class="card card--left-border">
            <p>
              Неможливо уявити дім без ВОДИ як і життя людини.
            </p>
          </div>
       
        <a href="#" class="btn-c btn-c--transp">ДЕТАЛЬНІШЕ</a>
      
    </div>
</header>
<section class="row cup-section">
  <img id="cup" src="./asset/images/cup.png" />
  <img id="water" src="./asset/images/water.png" />
  <ul class="cup-section__ul--left ">
    <li data-num="1">
      <p>без антибіотиків</p>
     
    </li>
    <li data-num="3">
      <p>максимально очищена на 99,9%</p>
    </li>
    <li data-num="5">
      <p>без механічних домішок та хлору</p>
    </li>
    <li data-num="7">
      <p>має природній смак та запах</p>
    </li>
  </ul>
  <ul class="cup-section__ul--right ">
    <li data-num="2">
      <p>
        комплектується окремим краном з ємністю 10 л для зручного користування
      </p>
    </li>
    <li data-num="4">
      <p>може мати помпу для підвищення тиску в системі</p>
    </li>
    <li data-num="6">
      <p>може бути мінералізована</p>
    </li>
  </ul>
</section>
<section class="sec-section">
  <h2>Система очищення води “Бриз Гарант Оптима”</h2>
  <div class="sec-section__calc-box">
    <div class="sec-section__img">
      <img src="./asset/images/filter.png" alt="Система очищення води “Бриз Гарант Оптима”" />
    </div>
    <form action="">
      <div class="sec-section__calc-box--top">
        <div class="custom-control custom-checkbox" data-anim="1">
          <input type="checkbox" class="custom-control-input" checked />
          <label class="custom-control-label">в наявності</label>
        </div>
        <output class="cost" id="result"></output>
        <p>Доставка - безкоштовна!</p>
      </div>

      <div class="sec-section__calc-box--bottom">
        <div class="pump">
          <div class="custom-control custom-checkbox" data-anim="2">
            <input type="checkbox" class="custom-control-input" id="pump" />
            <label class="custom-control-label" for="pump">
              <span>Помпа</span>
              <span>2000 ₴</span>
            </label>
          </div>
        </div>
        <div class="install">
          <div class="custom-control custom-checkbox" data-anim="3">
            <input type="checkbox" class="custom-control-input" id="install" />
            <label class="custom-control-label" for="install">
              <span>Монтаж</span>
              <span>450 ₴</span>
            </label>
            <p>1 година</p>
          </div>
        </div>
        <button type="submit" class="btn-c btn-c--fill">ЗАМОВИТИ</button>
      </div>
    </form>
  </div>
  <div class="sec-section__calc-box">
    <div class="sec-section__img" >
      <img src="./asset/images/briz.png" alt="Система очищення води “Бриз Гарант Оптима”" />
    </div>
    <form action="">
      <div class="sec-section__calc-box--top">
       
        <p>Змінні картриджи
          до фільтру</p>
        <p class="description">Потребують заміни кожні 
            6 місяців в залежності від 
            якості води в системі  та 
            споживаного об'єму</p>
      </div>
      <h4 class="cost">365 ₴</h4>
      <div class="sec-section__calc-box--bottom">
        <button type="submit" class="btn-c btn-c--fill">ЗАМОВИТИ</button>
      </div>
    </form>
  </div>
</section>
<section class="third-section">
  <h2 class="third-section__heading">Техничні характеристики:</h2>
  <ul class="third-section__props--keys">
    <li>
      <p>Висота картиджа</p>
    </li>
    <li>
      <p>Діаметр картирджа</p>
    </li>
    <li>
      <p>Температура води</p>
    </li>
    <li>
      <p>Тиск води у водопроводі</p>
    </li>
    <li>
      <p>Накопичувальна ємність</p>
    </li>
    <li>
      <p>Габаритний розмір фільтру</p>
    </li>
    <li>
      <p>Розмір коробки</p>
    </li>
    <li>
      <p>Вага</p>
    </li>
    <li>
      <p>Термін служби</p>
    </li>
  </ul>
  <ul class="third-section__props--values">
    <li>
      <p>254 мм</p>
    </li>
    <li>
      <p>70 мм</p>
    </li>
    <li>
      <p>+4 ... +38С</p>
    </li>
    <li>
      <p>1.5 ... 6.0 атм.</p>
    </li>
    <li>
      <p>260х380/280х420 мм</p>
    </li>
    <li>
      <p>400х135х420 мм</p>
    </li>
    <li>
      <p>400х290х725 мм</p>
    </li>
    <li>
      <p>12,5 кг</p>
    </li>
    <li>
      <p>не більше 5 років</p>
    </li>
    <li>
      *за умови тиску менше 3,5 атм - помпа
      <br /> встановлюється обов'язково
    </li>
  </ul>

  <div class="third-section__icons">
    <figure>
      <img src="./asset/images/icons/H2O.svg" data-animation-name="img-1" />
      <figcaption>
        ДО 99%
        <br /> ЧИСТА ВОДА
      </figcaption>
    </figure>
    <figure>
      <img src="./asset/images/icons/Ag+.svg" data-animation-name="img-2" />
      <figcaption>З ІОНАМИ СРІБЛА</figcaption>
    </figure>
    <figure>
      <img src="./asset/images/icons/factory.svg" data-animation-name="img-3" />
      <figcaption>ДЛЯ ВАЖНИХ ЕКОЛОГІЧНИХ УМОВ</figcaption>
    </figure>
  </div>
</section>
<section class="fourth-section">
  <h2 class="fourth-section__heading">Система зворотного осмосу</h2>
  <div class="fourth-section card card--left-border">
    <p>
      Мембрана, яку має система фільтрації води від Steko - пропускає лише воду та кисень. А вугільний фільтр розташований одразу
      перед краном.
    </p>
  </div>
  <div class="fourth-section__img">
    <img src="./asset/images/cut-filter.png" alt="Система очищення води “Бриз Гарант Оптима”" />
  </div>
</section>
<section class="fifth-section">
  <h2 class="fifth-section__heading">
    Вода з багатосутепеневим очищенням підходить Вам:
  </h2>
  <figure class="card card--left-border">
    <img src="./asset/images/icons/1.svg" />
    <figcaption>для пиття</figcaption>
  </figure>
  <figure class="card card--left-border">
    <img src="./asset/images/icons/2.svg" />
    <figcaption>для щоденного готування їжі</figcaption>
  </figure>
  <figure class="card card--left-border">
    <img src="./asset/images/icons/3.svg" />
    <figcaption>для свіжої кави та чаю</figcaption>
  </figure>
  <figure class="card card--left-border">
    <img src="./asset/images/icons/4.svg" />
    <figcaption>для прасок без накипу</figcaption>
  </figure>
  <figure class="card card--left-border">
    <img src="./asset/images/icons/5.svg" />
    <figcaption>для домашніх улюбленців та рослин</figcaption>
  </figure>
  <figure class="card card--left-border">
    <img src="./asset/images/icons/6.svg" />
    <figcaption>для приготування дитячого харчування</figcaption>
  </figure>
</section>
<footer>

  <h2>жива чиста вода, яка завжди під рукою</h2>
  <a href="#" class="btn-c btn-c--fill">ЗАМОВИТИ</a>

  <div class="logo">
    <img src="./asset/images/logo.png" alt="Вікна Steko" />
  </div>

</footer>

       
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="../js/jquery.mask.js "></script>
    <script src="../js/lightslider.min.js"></script>
    <script>
        $(document).ready(function () {

            $.ajax({
                url: 'https://b2c.steko.com.ua/api/getregions',
                type: 'GET',
                crossDomain: true,
                dataType: "json",
                success: function (data) {
                    var cur_ques_details = data;
                    var array = $.map(cur_ques_details, function (value, index) {
                        return "<option value=" + value['id'] + ">" + value['name'] + "</option>";
                    });
                    // console.log(array);
                    $('form').find('#choose-region').html("<option value='not_set' id='not_set'>Не выбрано</option>" + array);
                }
            });
        });

    </script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    <script src="../js/jquery.flipster.min.js"></script>
    <script type="text/javascript" src="../js/jquery.bxslider.js"></script>
    <script>
        jQuery('.slider8').bxSlider({
            mode: 'vertical',
            slideWidth: 370,
            minSlides: 5,
            slideMargin: 10,
            slideMargin: 10,
            infiniteLoop: false,
            hideControlOnEnd: true,
            touchEnabled: false
        })
    </script>




    <!---ANALYTICS script includes START-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    </script>


    <!---ANALYTICS script includes END-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="./asset/js/main.js"></script>
    <script src="../js/index.js"></script>

</body>
</html>