<?php
ob_start();
$countryCokkiesName = 'India';

$ipaddress = '';
if ($ipaddress) {
    $countrycode = '';
    $countryCokkiesName = '';
}
include("login-conn.php");
$login_error = 0;
$reg_error = 0;
$specialerror = 0;
$register = "no";
$pg = "";
$Test_Id = "";
$askfortestpin = "none";
$withlogin = "";
$withoutlogin = "";
$logoutmobprofile = "";
$loginmobprofile = "";

$mainurl = 'https://easyshiksha.com/include';
$searchurl = 'https://easyshiksha.com/';
$baseUrl = "https://easyshiksha.com";
$currentUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$routeUrl = "easyshiksha.com";
$languages = [
    ["lang" => "en", "title" => "English", "name" => "English"],
    ["lang" => "ar", "title" => "Arabic", "name" => "Arabic"],
    ["lang" => "bg", "title" => "Bulgarian", "name" => "Bulgarian"],
    ["lang" => "zh-cn", "title" => "Chinese (Simplified)", "name" => "Chinese (Simplified)"],
    ["lang" => "zh-tw", "title" => "Chinese (Traditional)", "name" => "Chinese (Traditional)"],
    ["lang" => "hr", "title" => "Croatian", "name" => "Croatian"],
    ["lang" => "cs", "title" => "Czech", "name" => "Czech"],
    ["lang" => "da", "title" => "Danish", "name" => "Danish"],
    ["lang" => "nl", "title" => "Dutch", "name" => "Dutch"],
    ["lang" => "fi", "title" => "Finnish", "name" => "Finnish"],
    ["lang" => "fr", "title" => "French", "name" => "French"],
    ["lang" => "de", "title" => "German", "name" => "German"],
    ["lang" => "el", "title" => "Greek", "name" => "Greek"],
    ["lang" => "hi", "title" => "Hindi", "name" => "Hindi"],
    ["lang" => "it", "title" => "Italian", "name" => "Italian"],
    ["lang" => "ja", "title" => "Japanese", "name" => "Japanese"],
    ["lang" => "ko", "title" => "Korean", "name" => "Korean"],
    ["lang" => "no", "title" => "Norwegian", "name" => "Norwegian"],
    ["lang" => "pl", "title" => "Polish", "name" => "Polish"],
    ["lang" => "pt", "title" => "Portuguese", "name" => "Portuguese"],
    ["lang" => "ro", "title" => "Romanian", "name" => "Romanian"],
    ["lang" => "ru", "title" => "Russian", "name" => "Russian"],
    ["lang" => "es", "title" => "Spanish", "name" => "Spanish"],
    ["lang" => "sv", "title" => "Swedish", "name" => "Swedish"],
    ["lang" => "ca", "title" => "Catalan", "name" => "Catalan"],
    ["lang" => "tl", "title" => "Filipino", "name" => "Filipino"],
    ["lang" => "iw", "title" => "Hebrew", "name" => "Hebrew"],
    ["lang" => "id", "title" => "Indonesian", "name" => "Indonesian"],
    ["lang" => "lv", "title" => "Latvian", "name" => "Latvian"],
    ["lang" => "lt", "title" => "Lithuanian", "name" => "Lithuanian"],
    ["lang" => "sr", "title" => "Serbian", "name" => "Serbian"],
    ["lang" => "sk", "title" => "Slovak", "name" => "Slovak"],
    ["lang" => "sl", "title" => "Slovenian", "name" => "Slovenian"],
    ["lang" => "uk", "title" => "Ukrainian", "name" => "Ukrainian"],
    ["lang" => "vi", "title" => "Vietnamese", "name" => "Vietnamese"],
    ["lang" => "sq", "title" => "Albanian", "name" => "Albanian"],
    ["lang" => "et", "title" => "Estonian", "name" => "Estonian"],
    ["lang" => "gl", "title" => "Galician", "name" => "Galician"],
    ["lang" => "hu", "title" => "Hungarian", "name" => "Hungarian"],
    ["lang" => "mt", "title" => "Maltese", "name" => "Maltese"],
    ["lang" => "th", "title" => "Thai", "name" => "Thai"],
    ["lang" => "tr", "title" => "Turkish", "name" => "Turkish"],
    ["lang" => "fa", "title" => "Persian", "name" => "Persian"],
    ["lang" => "af", "title" => "Afrikaans", "name" => "Afrikaans"],
    ["lang" => "ms", "title" => "Malay", "name" => "Malay"],
    ["lang" => "sw", "title" => "Swahili", "name" => "Swahili"],
    ["lang" => "ga", "title" => "Irish", "name" => "Irish"],
    ["lang" => "cy", "title" => "Welsh", "name" => "Welsh"],
    ["lang" => "be", "title" => "Belarusian", "name" => "Belarusian"],
    ["lang" => "is", "title" => "Icelandic", "name" => "Icelandic"],
    ["lang" => "mk", "title" => "Macedonian", "name" => "Macedonian"],
    ["lang" => "yi", "title" => "Yiddish", "name" => "Yiddish"],
    ["lang" => "hy", "title" => "Armenian", "name" => "Armenian"],
    ["lang" => "az", "title" => "Azerbaijani", "name" => "Azerbaijani"],
    ["lang" => "eu", "title" => "Basque", "name" => "Basque"],
    ["lang" => "ka", "title" => "Georgian", "name" => "Georgian"],
    ["lang" => "ht", "title" => "Haitian Creole", "name" => "Haitian Creole"],
    ["lang" => "ur", "title" => "Urdu", "name" => "Urdu"],
    ["lang" => "bn", "title" => "Bengali", "name" => "Bengali"],
    ["lang" => "bs", "title" => "Bosnian", "name" => "Bosnian"],
    ["lang" => "ceb", "title" => "Cebuano", "name" => "Cebuano"],
    ["lang" => "eo", "title" => "Esperanto", "name" => "Esperanto"],
    ["lang" => "gu", "title" => "Gujarati", "name" => "Gujarati"],
    ["lang" => "ha", "title" => "Hausa", "name" => "Hausa"],
    ["lang" => "hmn", "title" => "Hmong", "name" => "Hmong"],
    ["lang" => "ig", "title" => "Igbo", "name" => "Igbo"],
    ["lang" => "jw", "title" => "Javanese", "name" => "Javanese"],
    ["lang" => "kn", "title" => "Kannada", "name" => "Kannada"],
    ["lang" => "km", "title" => "Khmer", "name" => "Khmer"],
    ["lang" => "lo", "title" => "Lao", "name" => "Lao"],
    ["lang" => "la", "title" => "Latin", "name" => "Latin"],
    ["lang" => "mi", "title" => "Maori", "name" => "Maori"],
    ["lang" => "mr", "title" => "Marathi", "name" => "Marathi"],
    ["lang" => "mn", "title" => "Mongolian", "name" => "Mongolian"],
    ["lang" => "ne", "title" => "Nepali", "name" => "Nepali"],
    ["lang" => "pa", "title" => "Punjabi", "name" => "Punjabi"],
    ["lang" => "so", "title" => "Somali", "name" => "Somali"],
    ["lang" => "ta", "title" => "Tamil", "name" => "Tamil"],
    ["lang" => "te", "title" => "Telugu", "name" => "Telugu"],
    ["lang" => "yo", "title" => "Yoruba", "name" => "Yoruba"],
    ["lang" => "zu", "title" => "Zulu", "name" => "Zulu"],
    ["lang" => "my", "title" => "Myanmar (Burmese)", "name" => "Myanmar (Burmese)"],
    ["lang" => "ny", "title" => "Chichewa", "name" => "Chichewa"],
    ["lang" => "kk", "title" => "Kazakh", "name" => "Kazakh"],
    ["lang" => "mg", "title" => "Malagasy", "name" => "Malagasy"],
    ["lang" => "ml", "title" => "Malayalam", "name" => "Malayalam"],
    ["lang" => "si", "title" => "Sinhala", "name" => "Sinhala"],
    ["lang" => "st", "title" => "Sesotho", "name" => "Sesotho"],
    ["lang" => "su", "title" => "Sundanese", "name" => "Sundanese"],
    ["lang" => "tg", "title" => "Tajik", "name" => "Tajik"],
    ["lang" => "uz", "title" => "Uzbek", "name" => "Uzbek"],
    ["lang" => "am", "title" => "Amharic", "name" => "Amharic"],
    ["lang" => "co", "title" => "Corsican", "name" => "Corsican"],
    ["lang" => "haw", "title" => "Hawaiian", "name" => "Hawaiian"],
    ["lang" => "ku", "title" => "Kurdish (Kurmanji)", "name" => "Kurdish (Kurmanji)"],
    ["lang" => "ky", "title" => "Kyrgyz", "name" => "Kyrgyz"],
    ["lang" => "lb", "title" => "Luxembourgish", "name" => "Luxembourgish"],
    ["lang" => "ps", "title" => "Pashto", "name" => "Pashto"],
    ["lang" => "sm", "title" => "Samoan", "name" => "Samoan"],
    ["lang" => "gd", "title" => "Scottish Gaelic", "name" => "Scottish Gaelic"],
    ["lang" => "sn", "title" => "Shona", "name" => "Shona"],
    ["lang" => "sd", "title" => "Sindhi", "name" => "Sindhi"],
    ["lang" => "fy", "title" => "Frisian", "name" => "Frisian"],
    ["lang" => "xh", "title" => "Xhosa", "name" => "Xhosa"],
];
foreach ($languages as &$language) {
    $language['href'] = 'https://easyshiksha.com/' . $language['lang'] . $_SERVER['REQUEST_URI'] . "";
}
?>
<!DOCTYPE html>

<head>

    <meta http-equiv="content-language" content="en">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="665424091666-tsr89g5u2vgch3f09v2cafbcu7rgn90q.apps.googleusercontent.com">
    <meta name="facebook-domain-verification" content="pcos0qsqcptw3gwbr7zt6i85qoy52v" />

    <meta charset="utf-8">

    <link rel="preload" href="https://easyshiksha.com/assets/fonts-roboto-raleway/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="https://easyshiksha.com/assets/fonts-roboto-raleway/Roboto-SemiBold.woff2" as="font" type="font/woff2" crossorigin="anonymous">



    <link rel="icon" type="image/x-icon" href="https://easyshiksha.com/favicon.png">

    <link rel="manifest" href="https://easyshiksha.com/manifest.json">

    <link rel="apple-touch-icon" href="/assets/apple-touch-icon.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://easyshiksha.com/js/owl.carousel.js"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <script src="https://apis.google.com/js/platform.js"></script>





    <link rel="preload" href="<?php echo $mainurl; ?>/bootstrap-responsive-style-easyshiksha/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- <noscript>
        <link rel="stylesheet" href="</?php echo $mainurl; ?>/bootstrap-responsive-style-easyshiksha/css/bootstrap.min.css">
    </noscript> -->



    <link rel="preload" href="<?php echo $mainurl; ?>/bootstrap-responsive-style-easyshiksha/css/bootstrap-theme.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <!-- <noscript>
        <link href="</?php echo $mainurl; ?>/bootstrap-responsive-style-easyshiksha/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
    </noscript> -->

    <!--Hreflang Implementation for EasyShiksha -->

    <link rel="alternate" href="https://easyshiksha.com/" hreflang="x-default" />

    <link rel="alternate" href="https://easyshiksha.com/" hreflang="en" />

    <link rel="alternate" href="https://easyshiksha.com/ar/" hreflang="ar" />

    <link rel="alternate" href="https://easyshiksha.com/bg/" hreflang="bg" />

    <link rel="alternate" href="https://easyshiksha.com/zh-cn/" hreflang="zh-Hans" />

    <link rel="alternate" href="https://easyshiksha.com/zh-tw/" hreflang="zh-Hant" />

    <link rel="alternate" href="https://easyshiksha.com/hr/" hreflang="hr" />

    <link rel="alternate" href="https://easyshiksha.com/cs/" hreflang="cs" />

    <link rel="alternate" href="https://easyshiksha.com/da/" hreflang="da" />

    <link rel="alternate" href="https://easyshiksha.com/nl/" hreflang="nl" />

    <link rel="alternate" href="https://easyshiksha.com/fi/" hreflang="fi" />

    <link rel="alternate" href="https://easyshiksha.com/fr/" hreflang="fr" />

    <link rel="alternate" href="https://easyshiksha.com/de/" hreflang="de" />

    <link rel="alternate" href="https://easyshiksha.com/el/" hreflang="el" />

    <link rel="alternate" href="https://easyshiksha.com/hi/" hreflang="hi" />

    <link rel="alternate" href="https://easyshiksha.com/it/" hreflang="it" />

    <link rel="alternate" href="https://easyshiksha.com/ja/" hreflang="ja" />

    <link rel="alternate" href="https://easyshiksha.com/ko/" hreflang="ko" />

    <link rel="alternate" href="https://easyshiksha.com/no/" hreflang="no" />

    <link rel="alternate" href="https://easyshiksha.com/pl/" hreflang="pl" />

    <link rel="alternate" href="https://easyshiksha.com/pt/" hreflang="pt" />

    <link rel="alternate" href="https://easyshiksha.com/ro/" hreflang="ro" />

    <link rel="alternate" href="https://easyshiksha.com/ru/" hreflang="ru" />

    <link rel="alternate" href="https://easyshiksha.com/es/" hreflang="es" />

    <link rel="alternate" href="https://easyshiksha.com/sv/" hreflang="sv" />

    <link rel="alternate" href="https://easyshiksha.com/ca/" hreflang="ca" />

    <link rel="alternate" href="https://easyshiksha.com/tl/" hreflang="tl" />

    <link rel="alternate" href="https://easyshiksha.com/iw/" hreflang="he" />

    <link rel="alternate" href="https://easyshiksha.com/id/" hreflang="id" />

    <link rel="alternate" href="https://easyshiksha.com/lv/" hreflang="lv" />

    <link rel="alternate" href="https://easyshiksha.com/lt/" hreflang="lt" />

    <link rel="alternate" href="https://easyshiksha.com/sr/" hreflang="sr" />

    <link rel="alternate" href="https://easyshiksha.com/sk/" hreflang="sk" />

    <link rel="alternate" href="https://easyshiksha.com/sl/" hreflang="sl" />

    <link rel="alternate" href="https://easyshiksha.com/uk/" hreflang="uk" />

    <link rel="alternate" href="https://easyshiksha.com/vi/" hreflang="vi" />

    <link rel="alternate" href="https://easyshiksha.com/sq/" hreflang="sq" />

    <link rel="alternate" href="https://easyshiksha.com/et/" hreflang="et" />

    <link rel="alternate" href="https://easyshiksha.com/gl/" hreflang="gl" />

    <link rel="alternate" href="https://easyshiksha.com/hu/" hreflang="hu" />

    <link rel="alternate" href="https://easyshiksha.com/mt/" hreflang="mt" />

    <link rel="alternate" href="https://easyshiksha.com/th/" hreflang="th" />

    <link rel="alternate" href="https://easyshiksha.com/tr/" hreflang="tr" />

    <link rel="alternate" href="https://easyshiksha.com/fa/" hreflang="fa" />

    <link rel="alternate" href="https://easyshiksha.com/af/" hreflang="af" />

    <link rel="alternate" href="https://easyshiksha.com/ms/" hreflang="ms" />

    <link rel="alternate" href="https://easyshiksha.com/sw/" hreflang="sw" />

    <link rel="alternate" href="https://easyshiksha.com/ga/" hreflang="ga" />

    <link rel="alternate" href="https://easyshiksha.com/cy/" hreflang="cy" />

    <link rel="alternate" href="https://easyshiksha.com/be/" hreflang="be" />

    <link rel="alternate" href="https://easyshiksha.com/is/" hreflang="is" />

    <link rel="alternate" href="https://easyshiksha.com/mk/" hreflang="mk" />

    <link rel="alternate" href="https://easyshiksha.com/yi/" hreflang="yi" />

    <link rel="alternate" href="https://easyshiksha.com/hy/" hreflang="hy" />

    <link rel="alternate" href="https://easyshiksha.com/az/" hreflang="az" />

    <link rel="alternate" href="https://easyshiksha.com/eu/" hreflang="eu" />

    <link rel="alternate" href="https://easyshiksha.com/ka/" hreflang="ka" />

    <link rel="alternate" href="https://easyshiksha.com/ht/" hreflang="ht" />

    <link rel="alternate" href="https://easyshiksha.com/ur/" hreflang="ur" />

    <link rel="alternate" href="https://easyshiksha.com/bn/" hreflang="bn" />

    <link rel="alternate" href="https://easyshiksha.com/bs/" hreflang="bs" />

    <link rel="alternate" href="https://easyshiksha.com/ceb/" hreflang="ceb" />

    <link rel="alternate" href="https://easyshiksha.com/eo/" hreflang="eo" />

    <link rel="alternate" href="https://easyshiksha.com/gu/" hreflang="gu" />

    <link rel="alternate" href="https://easyshiksha.com/ha/" hreflang="ha" />

    <link rel="alternate" href="https://easyshiksha.com/hmn/" hreflang="hmn" />

    <link rel="alternate" href="https://easyshiksha.com/ig/" hreflang="ig" />

    <link rel="alternate" href="https://easyshiksha.com/jw/" hreflang="jv" />

    <link rel="alternate" href="https://easyshiksha.com/kn/" hreflang="kn" />

    <link rel="alternate" href="https://easyshiksha.com/km/" hreflang="km" />

    <link rel="alternate" href="https://easyshiksha.com/lo/" hreflang="lo" />

    <link rel="alternate" href="https://easyshiksha.com/la/" hreflang="la" />

    <link rel="alternate" href="https://easyshiksha.com/mi/" hreflang="mi" />

    <link rel="alternate" href="https://easyshiksha.com/mr/" hreflang="mr" />

    <link rel="alternate" href="https://easyshiksha.com/mn/" hreflang="mn" />

    <link rel="alternate" href="https://easyshiksha.com/ne/" hreflang="ne" />

    <link rel="alternate" href="https://easyshiksha.com/pa/" hreflang="pa" />

    <link rel="alternate" href="https://easyshiksha.com/so/" hreflang="so" />

    <link rel="alternate" href="https://easyshiksha.com/ta/" hreflang="ta" />

    <link rel="alternate" href="https://easyshiksha.com/te/" hreflang="te" />

    <link rel="alternate" href="https://easyshiksha.com/yo/" hreflang="yo" />

    <link rel="alternate" href="https://easyshiksha.com/zu/" hreflang="zu" />

    <link rel="alternate" href="https://easyshiksha.com/my/" hreflang="my" />

    <link rel="alternate" href="https://easyshiksha.com/ny/" hreflang="ny" />

    <link rel="alternate" href="https://easyshiksha.com/kk/" hreflang="kk" />

    <link rel="alternate" href="https://easyshiksha.com/mg/" hreflang="mg" />

    <link rel="alternate" href="https://easyshiksha.com/ml/" hreflang="ml" />

    <link rel="alternate" href="https://easyshiksha.com/si/" hreflang="si" />

    <link rel="alternate" href="https://easyshiksha.com/st/" hreflang="st" />

    <link rel="alternate" href="https://easyshiksha.com/su/" hreflang="su" />

    <link rel="alternate" href="https://easyshiksha.com/tg/" hreflang="tg" />


    <link rel="stylesheet" href="https://easyshiksha.com/css/owl.carousel.min.css" media="print" onload="this.media='all'">
    <!-- <noscript>
        <link rel="stylesheet" href="https://easyshiksha.com/css/owl.carousel.min.css">
    </noscript> -->

    <link rel="stylesheet" href="https://easyshiksha.com/css/owl.theme.default.min.css" media="print" onload="this.media='all'">
    <!-- <noscript>
        <link rel="stylesheet" href="https://easyshiksha.com/css/owl.theme.default.min.css">
    </noscript> -->


    <link rel="stylesheet" href="https://easyshiksha.com/css/Header_on_page.css?v=1" media="print" onload="this.media='all'">
    <!-- <noscript>
        <link rel="stylesheet" href="https://easyshiksha.com/css/Header_on_page.css">
    </noscript> -->


    <link rel="stylesheet" href="https://easyshiksha.com/assets/css/header-new.css?v=1.1" media="print" onload="this.media='all'">
    <!-- <noscript>
        <link rel="stylesheet" href="https://easyshiksha.com/assets/css/header-new.css?v=1">
    </noscript> -->

    <link rel="preload" as="style" href="https://easyshiksha.com/assets/css/part-two-headerstylesheet.css?v=1.1.5" onload="this.onload=null; this.rel='stylesheet'">
    <!-- <noscript>
        <link rel="stylesheet" href="https://easyshiksha.com/assets/css/part-two-headerstylesheet.css?v=1.1.2">
    </noscript> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="print" onload="this.media='all'">
    <!-- <noscript>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </noscript> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" crossorigin="anonymous" media="print" onload="this.media='all'">
    <!-- <noscript>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    </noscript> -->


    <script type="text/javascript" src="<?php echo $mainurl; ?>/bootstrap-responsive-style-easyshiksha/js/bootstrap.min.js"></script>



    <?php
    if ($login_error == 1) { ?>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#ctl00_Panel2').modal("show");
            });
        </script>

    <?php }
    if ($reg_error == 1) { ?>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#ctl00_Panel1').modal("show");
            });
        </script>

    <?php } ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#m_password").keydown(function(event) {
                if (event.keyCode == 32) {
                    event.preventDefault();
                }
            });
        });
    </script>
    <script>
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.src = img.dataset.src;
            });
        } else {
            // Dynamically import the LazySizes library
            const script = document.createElement('script');
            script.src =
                'https://easyshiksha.com/assets/js/lazysizes.min.js';
            document.body.appendChild(script);
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#m_email').keydown(function(event) {
                if (event.keyCode == 32) {
                    event.preventDefault();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#m_email_signin').keydown(function(event) {
                if (event.keyCode == 32) {
                    event.preventDefault();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#m_password_signin').keydown(function(event) {
                if (event.keyCode == 32) {
                    event.preventDefault();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#m_contact').keydown(function(event) {
                if (event.keyCode == 32) {
                    event.preventDefault();
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#m_name").on("contextmenu", function(e) {
                return false;
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#m_name").keypress(function(event) {
                var k = event.keyCode;
                $return = ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || k == 46 || (
                    k >= 48 && k <= 57));
                if (!$return) {
                    alert("Special characters not allowed !!!!!");
                    return false;
                }

            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $("#header_link_btn .navbar-toggle").click(function(event) {
                event.stopPropagation();
                $(this).toggleClass('active');
                $("#header_link_btn .modal-content").slideToggle();
            });
            $("#header_link_btn .modal-content").click(function(e) {
                e.stopPropagation();
            });
            $(document).click(function() {
                $("#header_link_btn .modal-content").fadeOut();
                $("#header_link_btn .navbar-toggle").removeClass('active');
            });


        });
    </script>

    <script type="text/javascript">
        function valid_fun() {
            var intrest = document.getElementById("m_edu_interest").value;

            var full_name = document.getElementById("m_full_name").value;

            var email = document.getElementById("m_email").value;

            var pass = document.getElementById("password").value;

            var mob = document.getElementById("m_phone").value;

            var gender = document.getElementById("gender").value;

            var countryId = document.getElementById("ddlCountries").value;

            var stateId = document.getElementById("ddlStates").value;

            var cityId = document.getElementById("ddlCities").value;



            if (intrest == " ") {
                alert("Please select your intresting filed");
                return false;
            }
            if (full_name == " ") {
                alert("Please Fill your full name ");
                return false;
            }
            if (email == " ") {
                alert("Please provide your valid email");
                return false;
            }

            if (pass == " ") {
                alert("Please choose your password");
                return false;
            }

            if (mob == " ") {
                alert("Please provide 10 digit mobile no");
                return false;
            }

            if (gender == " ") {
                alert("Please select gender");
                return false;
            }
            if (countryId == " ") {
                alert("Please select your country");
                return false;
            }
            if (stateId == " ") {
                alert("Please select your state");
                return false;
            }
            if (cityId == " ") {
                alert("Please select your city");
                return false;
            } else {
                return true;
            }
        }
    </script>
    <!--  -->
    <script>
        window.addEventListener('load', () => {
            const link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'https://easyshiksha.com/assets/css/deferred-fonts-es.css?v=1.1.2';
            document.head.appendChild(link);
        });
    </script>
    <!--  -->
    <style>
        /*  
        @keyframes slideAlertHeaderPromo {
            0% {
                top: -100px;
            }

            10% {
                top: 20px;
            }

            90% {
                top: 20px;
            }

            100% {
                top: -100px;
            }
        }

       .alertBox-coupon-header {
            animation: slideAlertHeaderPromo 3s ease-in-out forwards;
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            background-color: #de9406;
            color: white;
            padding: 16px 32px;
            font-size: 16px;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            display: block !important;
        }

        .es-header-promo-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1E1E1E;
            color: white;
            padding: 12px 20px;
            font-family: sans-serif;
            font-size: var(--fs-12-16);
            max-width: 100%;
            overflow: hidden;
            position: relative;
            flex-wrap: wrap;
            row-gap: 8px;
            column-gap: 20px;
            font-family: 'Roboto', arial;
            font-weight: 500;

        }

        @media (max-width: 576px) {
            .es-header-promo-banner {
                flex-direction: column;
            }
        }

        .es-header-promo-banner::after {
            content: "";
            position: absolute;
            bottom: -12px;
            left: 0;
            width: 100%;
            height: 18px;
            background-image: repeating-radial-gradient(circle at center, white 0, white 10px, transparent 11px, transparent 20px);
            background-size: 20px 20px;
            background-repeat: repeat-x;
            z-index: 0;
        }


        .es-header-promo-title {
            font-weight: 900;
            white-space: nowrap;
            font-size: 20px;
            background: linear-gradient(to bottom,
                    #ff9933 0%, #ff9933 33.33%,
                    #ffffff 33.3%, #ffffff 66.6%,
                    #138808 66.66%, #138808 99.9%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: center;
            font-family: sans-serif;
            text-shadow: -2px -1px rgb(255 255 255 / 9%);
            backdrop-filter: blur();
        }


        .es-header-promo-details {
            flex-shrink: 0;
            white-space: nowrap;
        }

        .es-header-promo-countdown {
            font-family: monospace;
            background: rgba(255, 255, 255, 0.2);
            padding: 4px 8px;
            border-radius: 6px;
            white-space: nowrap;
            font-weight: 900;
        }

        .es-header-promo-btn {
            background-color: white;
            color: #1e1e1e;
            border: none;
            padding: 0px 12px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            white-space: nowrap;
            font-size: var(--fs-12-16);
            font-family: 'Roboto', sans-serif;
            display: flex;
            align-items: center;
            border-width: 0px;
            position: relative;
        }

        button.es-header-promo-btn::after {
            height: 10px;
            width: 10px;
            position: absolute;
            content: '';
            background: #1e1e1e;
            left: 0;
            translate-X: -50%;
            translate: -50% 0;
            border-radius: 50%;
        }

        button.es-header-promo-btn::before {
            height: 10px;
            width: 10px;
            position: absolute;
            content: '';
            background: #1e1e1e;
            right: 0;
            translate: 50% 0;
            border-radius: 50%;
        }

        .es-header-promo-btn:hover {
            border-width: 0px;
        }

        @media (max-width: 576px) {
            .es-header-promo-btn {
                font-size: 14px;

            }
        }

        .es-header-promo-close {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            right: 16px;
            position: absolute;

        }

        .es-header-promo-close:hover {
            background: none;
            color: #de9406 !important;
        }

        .es-header-promo-btn .copy-coupon-code-icon {
            height: 30px;
        } */

        /* */
        @font-face {
            font-family: 'Roboto';
            src: url('https://easyshiksha.com/assets/fonts-roboto-raleway/Roboto-Regular.woff2') format('woff2');
            font-weight: 100 400;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Roboto';
            src: url('https://easyshiksha.com/assets/fonts-roboto-raleway/Roboto-SemiBold.woff2') format('woff2');
            font-weight: 500 900;
            font-style: normal;
            font-display: swap;
        }

        body {
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
            overflow-x: clip;
        }

        :root {
            --fs-26-60: clamp(26px, 2.5297vw + 11.43px, 60px) !important;
            --fs-20-42: clamp(20px, 1.636vw + 10.5766px, 42px) !important;
            --fs-16-32: clamp(16px, 9.15px + 1.19vw, 32px) !important;
            --fs-12-24: clamp(12px, 6.8576px + 0.8928vw, 24px) !important;
            --fs-12-20: clamp(12px, 0.595vw + 8.57px, 20px) !important;
            --fs-12-18: clamp(12px, 0.44vw + 9.43px, 18px) !important;
            --fs-12-16: clamp(12px, 10.29px + 0.297vw, 16px) !important;
            --fs-10-16: clamp(10px, 8.525px + 0.3703vw, 16px) !important;
        }

        /* critical css block don't edit */
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 576px) and (max-width:768px) {
            .container {
                max-width: 100% !important;
            }
        }

        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }

        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                width: 1140px;
                max-width: 1140px;
                padding: 0 !important;
            }
        }

        @media (min-width: 1400px) {
            .container {
                width: 1320px !important;
                max-width: 1320px !important;
            }
        }

        @media (min-width: 1600px) {
            .container {
                width: 1436px !important;
                max-width: 1436px !important;
            }
        }

        .headerloginSignUp-btnBox {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;

        }

        @media (max-width: 991px) {
            .headerloginSignUp-btnBox {

                gap: 8px;
            }
        }


        @media (max-width: 767px) {
            .headerloginSignUp-btnBox {
                position: sticky;
                bottom: 0;
                left: 0;
                width: 100%;
                padding: 12px 20px;
                flex-direction: column-reverse;
                margin: 0;
                background-color: #ffffff;
            }
        }



        .headerLogin-btn {
            border: 1px solid #DE9406;
            border-radius: 6px;
            padding: 5px 20px !important;
            font-size: 15px !important;
            display: flex !important;
            justify-content: center;
            align-items: center;
            margin-top: 0 !important;
            height: 36px;
            font-weight: 700 !important;
            background-color: #FFF;
        }

        @media (max-width: 1200px) {
            .headerLogin-btn {
                padding: 5px 12px !important;
                font-size: 13px !important;
                height: 34px;
            }
        }

        @media (max-width: 991px) {
            .headerLogin-btn {
                padding: 5px 12px !important;
                font-size: 12px !important;
                height: 34px;
            }
        }



        @media (max-width: 767px) {
            .headerLogin-btn {
                width: 100%;
                color: #000 !important;
            }
        }



        .joinfree-btn {
            background: #DE9406;
            border-radius: 6px;
            border-color: transparent;
            color: #000000 !important;
            padding: 5px 20px !important;
            font-size: 15px !important;
            display: flex !important;
            justify-content: center;
            align-items: center;
            margin-top: 0 !important;
            height: 36px;
            font-weight: 700 !important;
        }

        @media (max-width: 1200px) {
            .joinfree-btn {
                padding: 5px 12px !important;
                font-size: 13px !important;
                height: 34px;
            }
        }

        @media (max-width: 991px) {
            .joinfree-btn {
                padding: 5px 12px !important;
                font-size: 12px !important;
                height: 34px;
            }
        }

        @media (max-width: 767px) {
            .joinfree-btn {
                width: 100%;
            }
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1040;
            display: none;
            overflow: hidden;
            -webkit-overflow-scrolling: touch;
            outline: 0;
            scrollbar-width: none;
        }


        #nav-menu-container {
            float: right;
            margin: 0;
        }

        .nav-menuBar-container {
            height: 100%;
            display: flex;
            align-items: center;
        }

        @media (min-width: 768px) and (max-width: 850px) {
            .reduce-font-for-tablets .com-HeaderNavLink {
                font-size: 11px !important;
            }
        }

        .nav-menu .explore-navbar-tab {
            text-decoration: none;
            display: inline-block;
            color: #000;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-size: 15px;
            cursor: pointer;
        }

        .nav-menuBar-container .nav-menu {
            height: 100%;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 20px;
        }

        @media (max-width: 1440px) {
            .nav-menuBar-container .nav-menu {
                gap: 10px;
            }
        }

        @media (min-width: 768px) and (max-width: 850px) {
            .nav-menuBar-container .nav-menu {
                gap: 7px;
            }
        }

        .nav-menu,
        .nav-menu * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .navbar-AllMenu-box li {
            margin: 0;
        }

        .navbar-AllMenu-box li {
            margin: 0;
        }

        .nav-menu>li {
            /* margin-left: 10px; */
            position: relative;
            white-space: nowrap;
            float: left;
        }

        .nav-menu .explore-navbar-tab .explore-nav-submenu {
            position: absolute;
            top: 40px;
            background: #FFF;
            left: 50%;
            transform: translateX(-50%);
            padding: 0px;
            z-index: 101;
            padding: 6px 0px;
            transition: transform 0.2s ease-in, opacity 0.2s ease-in;
            box-sizing: border-box;
            padding: 0;
            border: 0;
            transform: translate(-50%, -60%) scale(0) skewX(10deg);
            overflow: hidden;
            opacity: 0;
        }

        .nav-menu ul {
            margin: 4px 0 0;

        }

        .header-selectLangBtn {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border: 1px solid #DE9406;
            padding: 3px;
            border-radius: 50%;
        }


        .header-selectLangBtn img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        @media (max-width: 1200px) {
            .header-selectLangBtn {
                width: 36px;
                height: 36px;
                min-width: 36px;
            }
        }

        @media (max-width: 767px) {
            .header-selectLangBtn {
                color: black;
                border: 1px solid black;
                border-radius: 5px;
                font-size: 16px;
                padding: 3px 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                width: 100%;
            }
        }

        @media (max-width: 525px) {
            .header-selectLangBtn {
                margin: 0 auto;
            }
        }



        .with_login_box_search {
            width: auto !important;

        }

        .header-profileSection {
            border: 1px solid #000000;
            border-radius: 24px;
            padding: 3px 10px 3px 3px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 6px;
            height: 42px;
            cursor: pointer;
        }

        @media (max-width: 1024px) {
            .with_login_box_search {
                float: left;
            }
        }

        @media (max-width: 768px) {
            .with_login_box_search {
                float: left;
            }
        }

        .header-profileSection .profileTag_Box {
            width: 36px;
            height: 36px;
            min-width: 36px;
            border-radius: 50%;
            margin: 0;
            padding: 0;
            font-size: 16px;
            color: #ffffff;
            font-weight: 600;
            background-color: #1e1e1e;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-menu a {
            padding: 0 8px 10px;
            text-decoration: none;
            display: inline-block;
            color: #000;
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-size: 15px;
            margin-top: 18px;
            outline: none;
        }

        .com-HeaderNavLink {
            padding: 5px 15px !important;
            margin-top: 0 !important;
            font-weight: 600 !important;
        }

        @media (max-width: 1440px) {
            .com-HeaderNavLink {
                padding: 5px 5px !important;
            }
        }

        @media (max-width: 1200px) {
            .com-HeaderNavLink {
                font-size: 13px !important;
            }
        }

        @media (max-width: 991px) {
            .com-HeaderNavLink {
                padding: 5px 2px !important;
                font-size: 12px !important;
            }
        }

        @media (max-width: 767px) {
            .com-HeaderNavLink {
                color: #000 !important;
                font-weight: 400 !important;
                padding: 5px 0 !important;
                font-size: 13px !important;
            }
        }

        .header-profileSection .newProfile-arrowBtn {
            margin: 0;
            padding: 0 !important;
        }

        .header-profileSection>.profileTag_Box+div {
            font-weight: 600;
            font-family: "Poppins", sans-serif;
            font-size: 12px;
        }

        .search-menu-headerBox {

            background: #DE9406;
        }

        .mobile-topsidebar {
            background: #FFFFFF;
            padding: 15px 15px;
            position: absolute;
            width: 100%;
            top: 0;
            left: 0;
            display: none;
        }

        @media (max-width: 767px) {
            .mobile-topsidebar {
                display: flex;
            }
        }

        .search-menu-contantBox {
            padding: 15px 140px 15px 75px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 1440px) {
            .search-menu-contantBox {
                padding: 15px 40px 15px 35px;
            }
        }


        @media (max-width: 991px) {
            .search-menu-contantBox {
                flex-wrap: wrap;
                padding: 15px 25px 15px 25px;
            }
        }

        .searchBar-BoxShow {
            width: 30%;
            min-width: 300px;
        }

        @media (max-width: 767px) {
            .searchBar-BoxShow {
                width: 100%;
                min-width: 250px;
                max-width: 400px;
            }
        }

        .headersearchBar-formBox {
            display: flex;
            border: 1px solid rgb(255, 255, 255);
            width: 100%;
            align-items: center;
            justify-content: space-between;
            height: 46px;
            padding: 10px 20px;
            border-radius: 20px;
            position: relative;
            z-index: 100;
            max-width: 500px;
        }

        .search-menu-rightBox {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 30px;
        }



        @media (max-width: 767px) {
            .search-menu-rightBox {
                gap: 10px;
            }
        }

        a {
            text-decoration: none;
        }

        .rigthBox-singleBtn {
            display: flex;
            border: 1px solid rgb(255, 255, 255);
            font-size: 16px;
            font-weight: 400;
            color: #ffffff !important;
            padding: 10px 12px;
            border-radius: 6px;
            align-items: center;
            justify-content: center;
            gap: 8px;
            height: 40px;
            cursor: pointer;
        }

        @media (max-width: 991px) {
            .rigthBox-singleBtn {
                font-size: 14px;
                padding: 6px 10px;
                height: 36px;
            }
        }

        @media (max-width: 767px) {
            .rigthBox-singleBtn {
                border: 1px solid rgb(0 0 0);
                font-size: 12px;
                padding: 6px 8px;
                color: #000000 !important;
                min-width: 200px;
            }
        }

        @media (max-width: 525px) {
            .rigthBox-singleBtn {
                min-width: 137px;
            }
        }

        .btn-IconShow {
            width: 20px;
            height: 25px;
            min-width: 20px;
            display: flex;
        }

        .btn-IconShow img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .com-mobile-IconBTn {
            display: none;
        }

        @media (max-width: 767px) {
            .com-mobile-IconBTn {
                display: block;
            }

            .btn-IconShow {
                width: 16px;
                height: 16px;
                min-width: 16px;
                display: flex;
            }

            .com-desktop-IconBTn {
                display: none;
            }

        }


        .searchbar-inputVal {
            width: 100% !important;
            padding: 0 15px 0 0 !important;
            border: none;
            background-color: transparent;
            outline: none;
            color: #ffffff;
            font-size: 16px;
            font-weight: 400;
            line-height: 21px;
        }

        .searchbar-inputVal::placeholder {
            color: #FFFFFF;
        }

        @media (max-width: 991px) {
            .searchbar-inputVal {
                font-size: 14px;
                line-height: normal;
            }
        }

        @media (max-width: 767px) {
            .searchbar-inputVal {
                color: #000000;
                font-size: 12px;
                font-weight: 400;
                line-height: 21px;
            }

            .searchbar-inputVal::placeholder {
                color: #535353;
            }
        }

        .search-results-header-search-field {
            background-color: #FFF;
        }

        .headersearchBar-formBox {
            display: flex;
            border: 1px solid rgb(255, 255, 255);
            width: 100%;
            align-items: center;
            justify-content: space-between;
            height: 46px;
            padding: 10px 20px;
            border-radius: 20px;
            position: relative;
            z-index: 100;
        }

        .headersearchBar-formBox .searchbar-inputVal {
            width: 100% !important;
            padding: 0 15px 0 0 !important;
            border: none;
            background-color: transparent;
            outline: none;
            color: #ffffff;
            font-size: 16px;
            font-weight: 400;
            line-height: 21px;
        }

        .es-header-search-field-flexbox {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 5;
            height: 100%;
            justify-content: space-between;
        }

        .header-search-query-suggestion-flexbox {
            position: absolute;
            inset: 0;
            pointer-events: none;
            display: flex;
            box-sizing: border-box;
        }

        .search-results-header-search-field {
            clip-path: circle(0% at 50% 0);
        }



        .clear-header-search-field {
            opacity: 0;
        }


        .text-string-header-search-query-suggestion-field {
            padding: 0px;
            display: flex;
            align-items: center;
            pointer-events: none;
            color: #ffffff4f;
            flex-grow: 1;
            white-space: normal;
            white-space: nowrap;
            overflow-x: hidden;
            min-height: 100%;
            text-overflow: ellipsis;
            min-width: 0;
            box-sizing: border-box;
            word-break: break-all;
            word-break: break-word;
            flex-basis: 0;
        }

        @media (min-width: 768px) {
            .es-header-search-field-flexbox .tab-autofill-symbol-header-search {
                padding: 0.10em 1.0em;
                display: block !important;
                cursor: pointer;
            }
        }

        @media (max-width: 767px) {
            .es-header-search-field-flexbox .touch-autofill-symbol-header-search {
                padding: 0.1em 0.4em;
                display: block !important;
                font-size: 14px;
                font-weight: 900;
            }

            .clear-header-search-field {
                color: #1e1e1e;
            }

            .es-header-search-field-flexbox .header-search-query-submit-button svg {
                color: #1e1e1e;
                fill: #1e1e1e !important;
            }

            .es-header-search-field-flexbox input.course-search-input-field-header {
                color: #1e1e1e;
            }

            .text-string-header-search-query-suggestion-field {
                color: rgba(30, 30, 30, 0.64);
            }
        }

        .es-header-search-field-flexbox .header-search-query-submit-button {
            background-color: transparent;
            border: none;
            height: 100%;
            padding: 1px 6px;
        }

        .es-header-search-field-flexbox .header-search-query-submit-button svg {
            height: 100%;
            fill: #FFF;
        }

        .autofill-search-hint-header {
            border: 1px solid rgb(255, 255, 255);
            border-radius: 4px;
            font-size: 12px;
            color: rgb(255, 255, 255);
            opacity: 0;
            transition: opacity 0.25s ease-in;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            backdrop-filter: blur(2px);
            font-weight: 600;
            pointer-events: none;
        }

        @media (max-width: 767px) {
            .autofill-search-hint-header {
                color: #1e1e1e;
                border: 1px solid #1e1e1e;
            }
        }

        .es-header-search-field-flexbox input.course-search-input-field-header,
        .text-string-header-search-query-suggestion-field {
            padding-left: 0px !important;
            padding-right: 0px !important;
            font-size: 15px;
            font-weight: 600 !important;
            line-height: 1;
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
        }

        .es-header-search-field-flexbox input.course-search-input-field-header::placeholder {
            font-size: 14px;
        }

        .language-translate-grid {
            display: grid !important;
            grid-template-columns: repeat(3, 33%);
            justify-items: start;
            padding: 18px 20px;
            column-gap: 15px !important;
            row-gap: 11px !important;
            width: 100%;
            max-width: 100% !important;
            margin-bottom: 0 !important;
        }

        @media (max-width: 767px) {
            .language-translate-grid {
                grid-template-columns: repeat(3, 33%);
                column-gap: 25px !important;
                row-gap: 20px !important;
            }
        }

        @media (max-width: 525px) {
            .language-translate-grid {
                grid-template-columns: repeat(3, 33%);
                column-gap: 15px !important;
                row-gap: 20px !important;
            }
        }

        /* desktop header */

        .header-logoImgSet {
            margin: 0;
            object-fit: contain;
            width: 100% !important;
            height: 100%;
        }

        #header {
            padding: 10px 0;
            left: 0;
            top: 0;
            right: 0;
            transition: all 0.5s;
            z-index: 997;
        }

        .p-0 {
            padding: 0 !important;
            padding-top: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        /* */
        .header_containerBox {
            padding: 15px 75px 15px 75px;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            height: 86px;
            box-shadow: 0px 0px 16px 0px #00000040;
        }

        /* */


        .header-upperContentBox {
            padding: 12px 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* */

        .secnd-headerMobileNavbar {
            margin-top: 0 !important;
            display: none;
        }

        .menu-bar2 {
            font-size: 20px;
            line-height: 1em;
            cursor: pointer;
            float: right;
            margin-top: 11px;
        }

        .mainHeader-logoBox {
            width: 14.0625vw;
            min-width: 14.0625vw;
            height: 62px;
        }

        .SearchbtnMobileNavbar {
            width: 25px;
            height: 25px;
            min-width: 25px;
            display: flex;
        }

        .SearchbtnMobileNavbar {
            display: none;
        }

        .explore-navbar-tab .chevron-nav {

            position: relative;

            background: #de94067a;

            border-radius: 50%;

            display: inline-block;

            width: 1.25em;

            height: 1.25em;

            vertical-align: middle;

        }



        .explore-navbar-tab .chevron-nav::after {

            border-right: 1px solid #1e1e1e;

            border-bottom: 1px solid #1e1e1e;

            width: 45%;

            height: 45%;

            transform: translate(-50%, -50%) rotate(45deg);

            inset: 0;

            position: absolute;

            content: '';

            top: 50%;

            left: 50%;

            transition: transform 0.25s ease-in;

        }



        .explore-navbar-tab.show .chevron-nav::after {

            transform: translate(-50%, -50%) rotate(225deg);



        }




        .SearchbtnMobileNavbar img {
            width: 100%;
            height: 100%;
            min-width: 100%;
            object-fit: contain;
        }


        /* */

        @media (min-width: 768px) {
            .newMobile-sideBar {
                display: none !important;
            }

            .language-modal-container {
                display: none;
            }

        }

        @media (max-width: 1440px) {
            .header_containerBox {
                padding: 15px 40px 15px 35px;
            }

            .mainHeader-logoBox {
                width: 16.0625vw;
                min-width: 16.0625vw;
                height: 62px;
            }
        }

        /* */
        @media (max-width: 1200px) {
            .header-upperContentBox {
                padding: 10px 0;
            }

            .mainHeader-logoBox {
                width: 14.0625vw;
                min-width: 14.0625vw;
                height: 56px;
            }
        }

        /* */

        @media (max-width: 991px) {
            .header_containerBox {
                height: fit-content;
                padding: 0 25px 0 25px;
            }
        }

        /* */
        @media (max-width: 768px) {
            .language-modal-container {
                height: 100vh;
                width: 100vw;
                background: #FFFDEE;
                display: none;
                position: absolute;
                z-index: 9900;
                overflow-y: scroll;
            }

            #header #logo img {
                max-height: 45px;
                width: 35vw;
            }
        }

        @media (max-width: 767px) {
            #nav-menu-container {
                float: right;
                margin: 0;
                display: none;
            }

            #nav-menu-container {
                display: none;
            }

            .header_containerBox {
                height: 100%;
            }

            .SearchbtnMobileNavbar {
                display: block;
            }

            #header {
                padding: 10px 0;
                height: 63px !important;
                left: 0;
                top: 0;
                right: 0;
                transition: all 0.5s;
                z-index: 997;
                background-color: #fff;
                box-shadow: 0 0 5px 2px #eaeaea;
            }

            .search-menu-headerBox {
                width: 0;
                height: 100%;
                position: fixed;
                top: 0;
                right: 0;
                background-color: #FFFDEE;
                overflow-x: hidden;
                transition: width 0.5s ease;
                z-index: 9999;
                box-shadow: -2px 0 5px rgba(0, 0, 0, 0.5);
            }

            /* */
            .secnd-headerMobileNavbar {
                display: block;
            }

            /* */
            .mainHeader-logoBox {
                width: 20.182291666666668vw;
                min-width: 155px;
                height: 36px;
                margin: 0 auto;
            }
        }

        /* critical css block don't edit */
    </style>
</head>
<?php
$token = '';
$sgf = '';
$url = ($_SERVER['REQUEST_URI']);
$url_components = parse_url($url);
if ($url_components) {
    if (isset($url_components['query'])) {
        parse_str($url_components['query'], $params);
        if ($params) {
            if (isset($params['token'])) {
                $token = $params['token'];
            }
        }
    }
}

$sessionurlcourse = '';
if (isset($sessionurl)) {
    $sessionurlcourse = $sessionurl;
}
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $urlheaader = "https://";
else
    $urlheaader  = "http://";
$urlheaader .= $_SERVER['HTTP_HOST'];
$urlheaader .= $_SERVER['REQUEST_URI'];
?>
<input type="hidden" value="<?php echo $sessionurlcourse; ?>" class="sessionurlcourse">
<?php

if (isset($_GET['session']) && $_GET['session']) {
    $current_url = explode("?", $_SERVER['REQUEST_URI']);
    if ($current_url[0]) {
        header("Location: https://easyshiksha.com/" . $current_url[0] . "/" . rand() . "");
    } else {
        header("Location:https://easyshiksha.com/?" . rand() . "");
    }
    die();
}
// refer url
if (isset($_COOKIE['reffer_cokkie'])) {
    $Referer = urldecode($_COOKIE['reffer_cokkie']);
} else {
    $Referer = '';
}

// utm parameters
if (isset($_COOKIE['utm_data'])) {
    $utmparameters = $_COOKIE['utm_data'];
} else {
    $utmparameters = '';
}

// refer code from user
$cookie_refercode = '';
if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
    $cookie_refercode = $ref;
    setcookie('cookie_refercode', $ref, 0, "/");
}

if (isset($_COOKIE['cookie_refercode'])) {
    $cookie_refercode = $_COOKIE['cookie_refercode'];
}
$user_id = '';
$isphonenumbervalid = 0;
$contact = '';
$countrylist = '';
if (isset($_COOKIE['user_login'])) {

    $user_id = $_COOKIE['user_login'];

    $query = "select * from  user_information where user_id='$user_id'";

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {

        $username = $row["name"];
        $contact = $row["new_phone_number"];
        $contactcountrycode = $row["new_country_code"];
        $isphonenumbervalid = $row["is_phone_valid"];
        $enq_purposelist = $row["enq_purpose"];
        $countrylist = $row["country"];
        $usertype = $row["ctype"];
        //$enq_purpose=$row["enq_purpose"];    
    }
    if ($username) {
        $splitthename = explode(" ", $username);

        $firstname = substr($splitthename[0], 0);
        $firstchar = substr($splitthename[0], 0, 1);
        $secchar = substr($splitthename[1], 0, 1);
        $usernameTagSet = $firstchar . $secchar;
    }

    $withlogin = '
                 <div class="with_login_box_search">
                <div style="position:relative;display:inline-block;float: left;width: 100%;" on="alert(\'dhyan hta\');">
                               <div style="float: left;width: 100%;"  class="header-profileSection">
                                    <div class="profileTag_Box" > ' . $usernameTagSet . '</div>
                                    <div> ' . $username . '</div>
                                    <a   class="ctl00_hello newProfile-arrowBtn ">
                                        <svg style="width: 18px; min-width: 18px;max-width: 18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 10L12 15L17 10" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    </a></div>
                               
   
                              <div id="Mann_div" class="Mann_div newProfile-dropdownListBox" style="display: none;">  
                               <a class="point" href="' . $searchurl . 'users">My Profile</a>
                               <a class="point" href="' . $searchurl . 'online_courses/Course/history">My Courses & Internships</a>
                               <a class="point" href="' . $searchurl . 'career_helper">My Career Guide Reports</a>
                               <a class="point" href="' . $searchurl . 'refer-and-earn">Refer & Earn</a>
                               <a class="point" href="' . $searchurl . 'support">Help & Support</a>
                               <a class="point" href="' . $searchurl . 'online_courses/Course/logout">Logout</a>
                             <!--  <div class="point" onclick="javascript:location.href=\'' . $searchurl . 'online_courses/Course/history\'">My Courses & Internships</div>
                               <div class="point" onclick="javascript:window.location.href=\'' . $searchurl . 'career_helper/\'">My Career Guide Reports</div>
                               <div class="point" onclick="javascript:location.href=\'' . $searchurl . 'support\'">Help & Support</div>
                                <div class="point" onclick="javascript:location.href=\'' . $searchurl . 'online_courses/Course/logout\'">Logout</div> -->
                                
                              </div>

                           </div>

                    </div>';

    $loginmobprofile = '<div class="mobile-profile-container">
                        <div class="userProfile-showBox">
                            <span class="userName-tag">' . $usernameTagSet . '</span>
                            <span class="userName-textSet">' . $username . '</span>
                        </div>
                        
                        <div  class="profileDropdown-boxMob" >  
                            <a class="point" href="' . $searchurl . 'users" >My Profile</a>
                            <a class="point" href="' . $searchurl . 'online_courses/Course/history">My Courses & Internships</a>
                            <a class="point" href="' . $searchurl . 'career_helper">My Career Guide Reports</a>
                            <a class="point" href="' . $searchurl . 'refer-and-earn">Refer & Earn</a>
                            <a class="point" href="' . $searchurl . 'support">Help & Support</a>
                            <a class="point" href="' . $searchurl . 'online_courses/Course/logout">Logout</a>
                            <!-- 
                            <a class="point" onclick="javascript:window.location.href=\'' . $searchurl . 'users\'">My Profile</div>
                            <a class="point" onclick="javascript:location.href=\'' . $searchurl . 'online_courses/Course/history\'">My Courses & Internships</div>
                            <a class="point" onclick="javascript:window.location.href=\'' . $searchurl . 'career_helper/\'">My Career Guide Reports</div>
                            <a class="point" onclick="javascript:location.href=\'' . $searchurl . 'support\'">Help & Support</div>
                            <a class="point" onclick="javascript:location.href=\'' . $searchurl . 'online_courses/Course/logout\'">Logout</div>
                            -->
                        </div>
                    </div>';
} else {


    $withoutlogin = '<div class="headerloginSignUp-btnBox desktop--signupbtnbox"><button class="headerLogin-btn Signup_modal_box_btn" data-toggle="modal" data-target="#ctl00_Panel2" data-dismiss="modal" aria-label="Close">Sign In</button><button href="#login/register" id="ctl00_act_signin" class="joinfree-btn" data-toggle="modal" data-target="#ctl00_Panel1">Join for Free</button></div>';


    $logoutmobprofile = '<div class="headerloginSignUp-btnBox mobile--signupbtnbox" id="mobileLoginBoxShow">
                        <button class="headerLogin-btn Signup_modal_box_btn" data-toggle="modal" data-target="#ctl00_Panel2" data-dismiss="modal" aria-label="Close">Login</button>
                        <button href="#login/register" id="ctl00_act_signin" class="joinfree-btn" data-toggle="modal" data-target="#ctl00_Panel1">Join for Free</button>
                    </div>';
    $logoutSubMenuprofile = '<div class="subMenuloginSignUpBox">
        <button class="headerLogin-btn Signup_modal_box_btn" data-toggle="modal" data-target="#ctl00_Panel2" data-dismiss="modal" aria-label="Close">Login</button>
        <button href="#login/register" id="ctl00_act_signin" class="joinfree-btn" data-toggle="modal" data-target="#ctl00_Panel1">Join for Free</button>
    </div>';
}
?>

<script>
    function toggleMobileExploreTab(element) {
        element.classList.toggle('show-explore-menu');
    }


    $(document).ready(function() {

        $('.with_login_box_search').on('click', function() {

            if ($('.Mann_div').hasClass('show')) {
                $('.Mann_div').removeClass('show')
            } else {
                $('.Mann_div').addClass('show')
            }
        });

        // 


        $('.explore-navbar-tab').on('click', function(e) {

            e.stopPropagation();

            if ($(this).hasClass('show')) {

                $(this).removeClass('show')

            } else {

                // $(this).addClass('show')

                $('.explore-navbar-tab').removeClass('show');

                $(this).addClass('show');

            }

        })


        // This part ensures that clicking outside the dropdown or its trigger hides the dropdown
        $(document).on('click', function(event) {
            if (!$(event.target).closest('.with_login_box_search').length) {
                $('.Mann_div').removeClass('show');
            }
            // 
            if (!$(event.target).closest('.explore-nav-submenu').length && !$(event.target).closest('.explore-navbar-tab').length && !$(event.target).is('[data-show-explore-submenu]')) {


                $('.explore-navbar-tab').removeClass('show');
            }
            // 

        });

        // Prevent clicks inside the dropdown from closing it
        $('.Mann_div').on('click', function(event) {
            event.stopPropagation(); // Prevent the click event from bubbling up
        });
    });
</script>



<header id="header" class="p-0">


    <div class='language-modal-container'>
        <div class="language-modal-header">
            <img class="es-logo-translate-modal" src="https://f002.backblazeb2.com/b2api/v1/b2_download_file_by_id?fileId=4_z5822452de147f94b68b30916_f100a8ccb1a4e162d_d20221015_m051858_c002_v0203001_t0002_u01665811138136" alt="Easy Shiksha: Online Courses" title="">
            <p class="closeTranslateModal"><img src="https://easyshiksha.com/img/logo/Multiply.png" alt="EasyShiksha"></p>
        </div>
        <div class="language-modal-body">
            <div class="mobile-languageModelContBox">

                <div class="language-translate-grid lang-area" id="flags">

                    <?php foreach ($languages as $language): ?>
                        <div class="language-translate-grid-item">
                            <a class="singleLang-anchorBox" data-lang="<?php echo $language['lang']; ?>" title="<?php echo $language['title']; ?>" href="<?php echo $language['href']; ?>">

                                <span class="lang-textShow"><?php echo $language['name']; ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                    <!-- <div id="google_language_translator" class="default-language-en hide"></div> -->
                </div>
            </div>
        </div>
    </div>

    <div class="header_containerBox">
        <div class="header-upperContentBox">
            <span class="menu-bar2 secnd-headerMobileNavbar" id="menusliderbarid">&#9776;</span>
            <div id="logo" class="pull-left mainHeader-logoBox">
                <a href="<?php echo $searchurl; ?>">
                    <img class="header-logoImgSet" src="https://easyshiksha.com/assets/images/EasyShiksha-Logo.png" height="60px" width="100" alt="Easy Shiksha: Online Courses" title="" />

                </a>
            </div>

            <nav id="nav-menu-container" class="nav-menuBar-container test">
                <ul class="nav-menu navbar-AllMenu-box reduce-font-for-tablets">
                    <li><a class="com-HeaderNavLink" id="learnHeaderMenuItm">Learn</a></li>
                    <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/internship" aria-label="Online Internship with Certificate">Internship</a></li>

                    <li class="hide-on-tablets"><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>career_helper">Career Guidance</a></li>

                    <li class="hide-on-tablets com-HeaderNavLink explore-navbar-tab" data-show-explore-submenu>

                        Kids Learning

                        <span class="chevron-nav"></span>

                        <ul class="explore-nav-submenu" data-explore-submenu>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning">Kids Learning Home</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/games">Educational Games</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/tools">Learning Tools for Kids</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/stories">Stories</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/worksheets">Worksheets</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/poems">Poems</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/questions">Questions</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/essays">Essays</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/kids-learning/educational-video">Educational Video</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/parenting">Parenting</a></li>

                            <li><a href="<?php echo $searchurl; ?>online_courses/parenting/online-health-tools">Online Health Tools</a></li>

                        </ul>

                        <!-- <a class="com-HeaderNavLink" href="</?php echo $searchurl; ?>online_courses/kids-learning">Kids Learning</a> -->

                    </li>

                    <li class="explore-navbar-tab com-HeaderNavLink" data-show-explore-submenu>
                        Explore
                        <span class="chevron-nav"></span>
                        <ul class="explore-nav-submenu" data-explore-submenu>
                            <li class="hide-on-desktop" style="display:none"><a href="<?php echo $searchurl; ?>career_helper">Career Guidance</a></li>
                            <li class="hide-on-desktop" style="display:none"><a href="<?php echo $searchurl; ?>online_courses/kids-learning">Kids Learning</a></li>
                            <li><a href="<?php echo $searchurl; ?>online_courses">Online Courses</a></li>
                            <li><a href="<?php echo $searchurl; ?>institutes">Institutes & Colleges</a></li>
                            <li><a href="<?php echo $searchurl; ?>universities">Universities</a></li>
                            <li><a href="<?php echo $searchurl; ?>schools">Schools</a></li>
                            <li><a href="<?php echo $searchurl; ?>coaching-institutes">Coaching Institutes</a></li>
                            <li><a href="<?php echo $searchurl; ?>tools">Free Online Tools</a></li>
                            <li><a href="<?php echo $searchurl; ?>programming-editors-compilers">Programming Editors & Compilers</a></li>
                        </ul>
                    </li>

                    <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>support">Contact Us</a></li>
                    <li>
                        <?php echo $withlogin; ?>
                        <?php echo $withoutlogin;  ?>
                    </li>
                    <li class="header-langMainBox" style="margin-left: 5px; position: relative;cursor: pointer;">
                        <div class="header-selectLangBtn" id="selectLanguageBoxId">
                            <img src="https://easyshiksha.com/img/logo/Globe.png" alt="translate">
                        </div>

                        <div class="header-lang-menu-container" id="chooseLangDropDownBox" style="display: none;">
                            <div class="language-translate-firstBox">
                                <p class="chooseLang-boxDropdown-heading">Choose a language</p>
                                <div id="translateMenuCloseBtn" class="langclose-btnBox">
                                    <img src="https://easyshiksha.com/img/logo/Multiply.png" alt="Easyshiksha">
                                </div>
                            </div>
                            <div class="language-translate-grid lang-area" id="flags">

                                <?php foreach ($languages as $language) { ?>
                                    <div class="language-translate-grid-item">
                                        <a class="singleLang-anchorBox" data-lang="<?php echo $language['lang']; ?>" title="<?php echo $language['title']; ?>" href="<?php echo $language['href']; ?>">

                                            <span class="lang-textShow"><?php echo $language['name']; ?></span>
                                        </a>
                                    </div>
                                <?php }; ?>




                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class=" newMobile-sideBar" style="display:none">
                <div id="mySidenav" class="sidenav  ">
                    <div class="mobile-topsidebar">
                        <div class="mobile-sidebarLogo">
                            <a class="sidebar-brandLogo" href="<?php echo $searchurl; ?>">
                                <img class="header-logoImgSet" src="https://f002.backblazeb2.com/b2api/v1/b2_download_file_by_id?fileId=4_z5822452de147f94b68b30916_f100a8ccb1a4e162d_d20221015_m051858_c002_v0203001_t0002_u01665811138136" alt="Easy Shiksha: Online Courses" title="" />
                            </a>
                        </div>
                        <p class="closebtn" onclick="closeNav()"><img src="https://easyshiksha.com/img/logo/Multiply.png" alt="EasyShiksha"></p>
                    </div>


                    <div class="mob-sidebarBody-box">
                        <?php echo $loginmobprofile; ?>


                        <div class="mobile-menuFirstBox">
                            <ul class="navbar-AllMenu-box">
                                <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/internship" aria-label="Online Internship with Certificate">Internship</a></li>

                                <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>career_helper/">Career Guidance</a></li>

                                <li class="com-HeaderNavLink show-expand-icon-mobile" onClick="toggleMobileExploreTab(this)">

                                    Kids Learning

                                    <ul class="mobile--explore-nav-submenu">

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning">Kids Learning Home</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/games">Educational Games</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/tools">Learning Tools for Kids</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/stories">Stories</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/worksheets">Worksheets</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/poems">Poems</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/questions">Questions</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/essays">Essays</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/kids-learning/educational-video">Educational Video</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/parenting">Parenting</a></li>

                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses/parenting/online-health-tools">Online Health Tools</a></li>

                                    </ul>

                                </li>
                                <!--  -->
                                <li class="com-HeaderNavLink show-expand-icon-mobile" onClick="toggleMobileExploreTab(this)">
                                    Explore
                                    <ul class="mobile--explore-nav-submenu">
                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>online_courses">Online Courses</a></li>
                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>institutes">Institutes & Colleges</a></li>
                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>universities">Universities</a></li>
                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>schools">Schools</a></li>
                                         <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>coaching-institutes">Coaching Institutes</a></li>
                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>tools">Free Online Tools</a></li>
                                        <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>programming-editors-compilers">Programming Editors & Compilers</a></li>

                                    </ul>
                                </li>
                                <!--  -->
                                <li><a class="com-HeaderNavLink" href="<?php echo $searchurl; ?>support">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="learn-sidebarContaint-box">
                            <div class="learn-section-partition">
                                <h3 class="learnHeading">Goals</h3>
                                <ul class="learn-ulList">
                                    <li>
                                        <div class="learn-singleList-box">
                                            <a class="singleList-text" href=" https://easyshiksha.com/online_courses/">Get Started</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="learn-singleList-box subMenuHoverOpen earnhtmlcertificate">
                                            <button class="singleList-text" style="border-width:0px; background-color: transparent">Earn a Certificate</button>
                                            <span class="com-sideBar-arrow subMenuTargetBtn"><img loading="lazy" src="https://easyshiksha.com/img/logo/rightArrow.png" alt="arrow"></span>
                                        </div>

                                    </li>
                                    <li>
                                        <div class="learn-singleList-box">
                                            <a class="singleList-text" href=" https://easyshiksha.com/career_helper/">Find your new career </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="learn-section-partition">
                                <h3 class="learnHeading">Course List</h3>
                                <ul class="learn-ulList" id="mobilecateslider">
                                    <div class="shimmer-ui-header-sidebarcatogrylist">
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                                    </div>
                                </ul>

                            </div>

                            <div class="browser-all-subjects-container">
                                <div class="header-selectLangBtn subMenuHoverOpen" data-target="languageModel"><span class="mobileGlobe-imgBox">
                                        <img src="https://easyshiksha.com/img/logo/Globe.png" alt="translate"></span>Language</div>
                                <!-- <div class="browser-all-subjects-btn" id="browseAllSubject-btn-mobile">Browse all Categories</div> -->

                            </div>
                        </div>
                    </div>
                    <?php echo $logoutmobprofile; ?>
                </div>

                <!-- <span class="menu-bar2" onclick="openNav()">&#9776;</span> -->
            </div>
            <?php if ($urlheaader == 'https://easyshiksha.com/' || strpos($urlheaader, 'https://easyshiksha.com/online_courses/Course/search') === 0) {
            } else { ?>
                <span class="SearchbtnMobileNavbar" style="" id="openSearchBoxMob"><img src="https://easyshiksha.com/img/logo/SearchBlkIcon.png" alt="searcIcon"></span>
            <?php } ?>
        </div>
    </div>
    <?php if ($urlheaader == 'https://easyshiksha.com/' || strpos($urlheaader, 'https://easyshiksha.com/online_courses/Course/search') === 0) {
    } else { ?>
        <div class="search-menu-headerBox" id="searchMainContainer">
            <div class="mobile-topsidebar ">
                <div class="mobile-sidebarLogo">
                    <a class="sidebar-brandLogo" href="<?php echo $searchurl; ?>">
                        <img class="header-logoImgSet" src="https://f002.backblazeb2.com/b2api/v1/b2_download_file_by_id?fileId=4_z5822452de147f94b68b30916_f100a8ccb1a4e162d_d20221015_m051858_c002_v0203001_t0002_u01665811138136" alt="Easy Shiksha: Online Courses" title="" />
                    </a>
                </div>
                <p class="closebtn closeSubMenu" id="closeSearchBox"><img src="https://easyshiksha.com/img/logo/Multiply.png" alt="Easyshiksha"></p>
            </div>
            <div class="search-menu-contantBox">
                <div class="searchBar-BoxShow">
                    <div id="search-banner">
                        <!-- <form class="form-horizontal headersearchBar-formBox" method="post" action="" id="main_sectionSeach_form">
                            <div style="width: 100%; position: relative;">
                                <input type="text" autocomplete="off" class="searchbar-inputVal search_text_header" placeholder="What do you want to learn today" value="" id="Search_bar" name="search">
                                <div class="headersearch_box_disc" style="display:none;">
                                    <ul class="headershow_result">
                                    </ul>
                                </div>
                            </div>
                            <button class="search-showBtn com-desktop-IconBTn"><img src="https://easyshiksha.com/img/logo/SearchBar.png" alt="EasyShiksha"></button>
                            <button class="search-showBtn com-mobile-IconBTn"><img src="https://easyshiksha.com/img/logo/SearchBlkIcon.png" alt="EasyShiksha"></button>
                        </form> -->
                        <form class="form-horizontal headersearchBar-formBox" action="" method="post" required data-course-search-query-form-header>

                            <div class="es-header-search-field-flexbox" style="width: 100%; position: relative;" class="">

                                <div class="header-search-query-suggestion-flexbox">
                                    <div class="text-string-header-search-query-suggestion-field" data-ghostsuggestion-field-search-for-header></div>
                                    <div class="autofill-search-hint-header" style="opacity:0; pointer-events:none;">
                                        <span class="tab-autofill-symbol-header-search" style="display:none">Tab</span>
                                        <span class="touch-autofill-symbol-header-search" style="display:none">↗</span>
                                    </div>
                                    <span type="button" class="clear-header-search-field"
                                        style="opacity:0; pointer-events:none;">&times;</span>
                                    <span class="header-search-query-submit-button" type="submit" style="opacity:0; pointer-events:none;">
                                        <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div style="position:relative; flex-grow:1; display:flex; align-items:center; ">
                                    <input type="text" autocomplete="off" class="searchbar-inputVal search_text_header course-search-input-field-header" placeholder="What do you want to learn today?" name="search" required
                                        maxlength="100" data-search-course-field-for-header style="background-color: transparent;">
                                    <div class="autofill-search-hint-header" data-show-tab-suggestion-for-header="">
                                        <span class="tab-autofill-symbol-header-search" style="display:none">Tab</span>
                                        <span class="touch-autofill-symbol-header-search" style="display:none">↗</span>
                                    </div>
                                </div>
                                <button type="button" class="clear-header-search-field"
                                    data-clear-search-field-for-header="" aria-label="clear search query">&times;</button>
                                <button data-search-page-btn-for-header class="header-search-query-submit-button" type="submit" aria-label="submit search query">
                                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </button>

                                <div class="search-results-header-search-field" data-search-results-for-header>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="search-menu-rightBox">
                    <a class="rigthBox-singleBtn mobile-search-bar-quick-links" id="opnemodalone">
                        <span class="btn-IconShow com-desktop-IconBTn"><img src="https://easyshiksha.com/img/logo/sampleCertificat.png" alt="EasyShiksha"></span>
                        <span class="btn-IconShow com-mobile-IconBTn"><img src="https://easyshiksha.com/img/logo/CertificateBlack.png" alt="EasyShiksha"></span>
                        Sample Certificates
                    </a>
                    <?php if (isset($_COOKIE['user_login'])) { ?>
                        <a class="rigthBox-singleBtn" href="https://easyshiksha.com/online_courses/Course/history">
                            <span class="btn-IconShow com-desktop-IconBTn"><img src="https://easyshiksha.com/img/logo/enrollTraining.png" alt="EasyShiksha"></span>
                            <span class="btn-IconShow com-mobile-IconBTn"><img src="https://easyshiksha.com/img/logo/Trainingblack.png" alt="EasyShiksha"></span>
                            Enrolled Courses
                        </a>
                    <?php } else { ?>
                        <a id="enrolledbtnid" class="rigthBox-singleBtn" data-toggle="modal"
                            data-target="#ctl00_Panel1">
                            <input type='hidden' value='' class='enrollsearchid' />
                            <span class="btn-IconShow com-desktop-IconBTn"><img src="https://easyshiksha.com/img/logo/enrollTraining.png" alt="EasyShiksha"></span>
                            <span class="btn-IconShow com-mobile-IconBTn"><img src="https://easyshiksha.com/img/logo/Trainingblack.png" alt="EasyShiksha"></span>
                            Enrolled Courses
                        </a>
                    <?php }    ?>

                </div>

            </div>
        </div>
    <?php } ?>


</header>


<!-- here isert sample cirtificate -->
<div id="uniqueImageSlider" class="image-slider-sampleCerti" style="display:none;">
    <span class="close-btn-slider">×</span>
    <div class="image-slider-content">
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/assets/images/SampleCertificate-New.png" download="Sample Certificate 1" alt="Sample Certificate 1">
            <!-- <a href="https://news.easyshiksha.com/wp-content/uploads/SampleCertificate-New.png" download="Sample Certificate 1" class="download-link">Download</a> -->
        </div>
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/SampleInternshipCertificate.png" alt="Sample Certificate 2">

            <!-- <img src="https://easyshiksha.com/online_courses/assets/images/Certificate-new.png" alt="Sample Certificate 2" style=" width: 30%;"> -->
            <!-- <a href="https://news.easyshiksha.com/wp-content/uploads/joining_img.png" download="Sample Certificate 3" class="download-link">Download</a> -->
        </div>
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/joining_img.png" alt="Sample Certificate 3">
            <!-- <a href="https://news.easyshiksha.com/wp-content/uploads/Certificate-new.png" download="Sample Certificate 2" class="download-link">Download</a> -->
        </div>
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/loa.png" alt="Sample Certificate 4">
            <!-- <a href="https://news.easyshiksha.com/wp-content/uploads/Certificate-new.png" download="Sample Certificate 2" class="download-link">Download</a> -->
        </div>
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/assets/images/InternshipEvaluationLetter.jpg" alt="Sample Certificate 5">
            <!-- <a href="https://news.easyshiksha.com/wp-content/uploads/Certificate-new.png" download="Sample Certificate 2" class="download-link">Download</a> -->
        </div>
        <div class="image-slide">

            <img loading="lazy" src="https://easyshiksha.com/assets/images/course-india/internship-certificate-with-company-stamp-at-home.png" alt="Sample Certificate 6">
            <!-- <a href="https://news.easyshiksha.com/wp-content/uploads/Certificate-new.png" download="Sample Certificate 2" class="download-link">Download</a> -->
        </div>
        <!--  -->
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/sampleProjectReport.webp" alt="Sample Certificate 7">
        </div>
        <!--  -->
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/fancy-box-certificates-set-new/sampleInternshipProjectWithSourceCode.webp" alt="Sample Certificate 8">
        </div>
        <!--  -->
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/assets/images/livementor.webp" alt="Sample Certificate 9">
        </div>
        <!--  -->
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/fancy-box-certificates-set-new/courseCertificateInAFrame.webp" alt="Sample Certificate 10">
        </div>
        <!--  -->
        <div class="image-slide">
            <img loading="lazy" src="https://easyshiksha.com/online_courses/assets/images/fancy-box-certificates-set-new/internshipCertificateInAFrame.webp" alt="Sample Certificate 11">
        </div>
        <!--  -->

    </div>
    <button class="prev-btn">❮</button>
    <button class="next-btn">❯</button>
</div>



<div class="learn-sidebar-overlayBox" id="learnSidebarContainer" style="display: none;">
    <div class="learn-sideBar-container">
        <div class="learnBox-closeBtn"> <img id="closeBtnlearn" src="https://easyshiksha.com/img/logo/Multiply.png" alt="close"></div>
        <div class="learn-sidebarContaint-box">
            <div class="learn-section-partition">
                <h3 class="learnHeading">Goals</h3>
                <ul class="learn-ulList">
                    <li style="padding: 6px 0;">
                        <a class="singleList-text" href=" https://easyshiksha.com/online_courses/">Get Started </a>
                    </li>
                    <li>
                        <div class="learn-singleList-box subMenuHoverOpen earnhtmlcertificate">
                            <span class="singleList-text">Earn a Certificate</span>
                            <span class="com-sideBar-arrow subMenuTargetBtn"><img loading="lazy" src="https://easyshiksha.com/img/logo/rightArrow.png" alt="arrow"></span>
                        </div>

                    </li>
                    <li style="padding: 6px 0;"><a class="singleList-text" href=" https://easyshiksha.com/career_helper/">Find your new career </a></li>
                </ul>
            </div>
            <div class="learn-section-partition">
                <h3 class="learnHeading">Course List</h3>
                <ul class="learn-ulList aapendcategory catlis rrrrr" id="sidebarcatogrylist">
                    <div class="shimmer-ui-header-sidebarcatogrylist">
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                        <div class="shimmer-ui-sidebarcatogrylist-child"></div>
                    </div>

                </ul>

            </div>
        </div>
    </div>
    <div class="learn-subMenu-container appendsubcatecourse" id="learnSubMenuContainer" style="display: none;">

    </div>
</div>
</div>

<div id="loder_overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>

<?php
$login_disp = "none";
$login_error_msg = "";

$reg_error_msg = "";
$reg_disp = "none";


$overlay_disp = "";

$pass_msg_display = "block";

if ($specialerror == 1) {
    $login_disp = "block";
    $login_error_msg = "Don't Use special Character In Name in Fields.";

    $overlay_disp = "login_error";
}


if ($login_error == 1) {
    $login_disp = "block";
    $login_error_msg = "Email ID or Password is incorrect.";

    $overlay_disp = "login_error";
}


if ($reg_error == 1) {
    $reg_error_msg = "<br/>Email ID already registered.";
    $reg_disp = "block";
    $overlay_disp = "reg_error";
}

if ($register == "success") {
    $reg_disp = "block";
    $reg_success_msg = "You are registered successfully.Now you can login.";
    $overlay_disp = "block";
    $pass_msg_display = "none";
}
?>

<div id="forGotPasswordModelTarget" class="modal fade newSignUpModel" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog ">
        <div class="modal-content text-left">
            <div class="modal-body forgotPass-BodyCont">
                <div class="grid-box signUp-leftSideBox">
                    <div class="content ">
                        <div class="content-insideBox">
                            <div class="leftBox">
                                <div class="leftBox-headLogo"><img src="https://easyshiksha.com/img/logo/whiteESLogo.png" alt="logo"></div>
                                <div class="leftBox-textBox">
                                    <h3 class="leftBox-title">By signing up, one can avail of lots of benefits:</h3>
                                    <ul class="textBox-ulBox">
                                        <li>
                                            <p>Find Internship Details.</p>
                                        </li>
                                        <li>
                                            <p>Download free guides.</p>
                                        </li>
                                        <li>
                                            <p>Get special discounts on courses.</p>
                                        </li>
                                        <li>
                                            <p>Find top universities/colleges.</p>
                                        </li>
                                        <li>
                                            <p>Connect with expert instructors.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="row " id="sign_in_form">
                            <div class="singup-modelCrosBtn">
                                <img id="signUpCloseModel" data-dismiss="modal" aria-hidden="true" src="https://easyshiksha.com/img/logo/Multiply.png">
                            </div>
                            <div class="signUp-formBox">
                                <div class="headBoxSingUpModel">
                                    <h5 class="heading_second_login_box">Forgot Password</h5>
                                </div>
                                <p class="paraBoxforgot">Enter your email to reset your password.</p>
                                <form class="signUp-secondFrom" id="FormForgotPassword" style="margin-bottom: 10px">
                                    <div class="form-group com-inputLabelBox">
                                        <label for="m_email_signin">Email Address</label>
                                        <div class="main-inputBox maininputforget">
                                            <span class="inputIcon-box"><img src="https://easyshiksha.com/img/logo/emailIcon.png" alt="icon"></span>
                                            <input name="m_email_signin" type="text" id="m_email_signin_forget" class="form-control required_validation_forget_new email_validation" placeholder="Enter your registered Email ID">
                                            <span class="errorIcon-box" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                        </div>
                                        <p class="errorMsg-para"></p>
                                        <p class="errorMsg-paraBackend" style="font-size: 15px;margin-top: 20px;"></p>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px">
                                        <input type="submit" value="Reset Password" id="" class="signUp-fromSubmitBtn registerBtn">
                                    </div>
                                </form>
                                <p class="contactUs-boxpara">For additional help, contact EasyShiksha support at <span>info@easyshiksha.com</span> </p>
                            </div>
                        </div>




                        <div class="clearfix"></div>
                        <div class="modal-footer newFooterBox-set" style="margin-top: 40px">
                            Already on EasyShiksha? <a class="btn btn-link Signup_modal_box_btn pt-0 ct_bt_click" data-toggle="modal" data-target="#ctl00_Panel2" data-dismiss="modal" aria-label="Close">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php if (isset($_COOKIE['user_login'])) { ?>
    <?php if (empty($contact) || $isphonenumbervalid == 0) {  ?>

        <div id="otpmodal" class="modal fade newSignUpModel show in PanelNew extra-grid-styling" tabindex="-1" role="dialog"
            data-backdrop="static" data-keyboard="false">
            <div class="modal-backdrop fade in"></div>
            <div class="modal-dialog ">
                <div class="modal-content text-left">

                    <div class="modal-body ">
                        <div class="grid-box signUp-leftSideBox">
                            <div class="content ">
                                <div class="content-insideBox">
                                    <div class="leftBox">
                                        <div class="leftBox-headLogo"><img
                                                src="https://easyshiksha.com/img/logo/whiteESLogo.png" alt="logo"></div>
                                        <div class="leftBox-textBox">
                                            <h3 class="leftBox-title">By signing up, one can avail of lots of benefits:</h3>
                                            <ul class="textBox-ulBox">
                                                <li>
                                                    <p>Find Internship Details.</p>
                                                </li>
                                                <li>
                                                    <p>Download free guides.</p>
                                                </li>
                                                <li>
                                                    <p>Get special discounts on courses.</p>
                                                </li>
                                                <li>
                                                    <p>Find top universities/colleges.</p>
                                                </li>
                                                <li>
                                                    <p>Connect with expert instructors.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row" id="sign_in_form">

                                    <div class="col-xs-12">

                                        <div class="signUp-formBox">
                                            <div class="headBoxSingUpModel heading-signup-uniq">
                                                <h5 class="heading_second_login_box ">You're Nearly Done! Finalize Your Signup
                                                </h5>
                                            </div>
                                            <?php
                                            $contactval = '';
                                            $class = 'form-control required_validation_login_new';
                                            if ($contact) {
                                                $class = 'form-control';
                                                $contactval = $contact;
                                            }
                                            ?>
                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_contact">Whatsapp Number</label>
                                                <div class="main-inputBoxcontact " style="font-weight:600;">
                                                    <div class="contries-dropdown-flebox position-relative main-inputBoxcontact"
                                                        data-validate-phone-number-wrapper>
                                                        <div class="country-prefix-container" data-country-prefix-container>
                                                            <div class="display-country-code"
                                                                data-display-country-code>
                                                            </div>
                                                            <div class="dropdown-wrapper-country-code"
                                                                data-dropdown-menu-country-code>
                                                                <div class="flexbox-country-code-search-field">
                                                                    <span>&#x1F50E;&#xFE0E;</span>
                                                                    <input type="text" id="dropdownInput"
                                                                        class="country-code-search-dropdown-list"
                                                                        placeholder="Search" data-country-code-field>
                                                                    <input type="hidden" name="newcontact_code" id="otpcountrycode" data-countrycode-input value=" <?= $contactcountrycode ?>" />
                                                                </div>
                                                                <div id="dropdownList" class="country-code-dropdown-list"
                                                                    data-list-of-country-codes></div>
                                                            </div>
                                                        </div>
                                                        <input type="number" name="newcontact_number" id="otpphonenumber" value="<?= $contactval ?>" placeholder="Enter mobile number"
                                                            class="reduce-placeholder-size phone-number-input-field <?php echo $class ?>" data-phone-number-field>
                                                        <p data-phone-field-error></p>
                                                        <svg class="edit-icon" style="display:none;" data-edit-mobile-otp viewBox="0 0 24 24" fill="none" xmlns="https://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" fill="#de9406"></path>
                                                            </g>
                                                        </svg>

                                                        <button type="button" class="verify-user-input pointer-events-disabled" data-disable-vertify-btn>Verify</button>

                                                    </div>
                                                    <p class="errorMsg-para">This field is required</p>
                                                </div>

                                                <div class="media signUp-otp-input-area" data-show-hide-otp-area>
                                                    <p class="otp-title">Enter the 4-digit OTP sent to your whatsApp.</p>
                                                    <div id="wrap-sign-up-otp" class="signup-otp-input-wrap" data-otp-inputs>
                                                        <input class="otp-single-field" type="text"
                                                            inputmode="numeric" maxlength="1" />
                                                        <input class="otp-single-field" type="text"
                                                            inputmode="numeric" maxlength="1" />
                                                        <input class="otp-single-field" type="text"
                                                            inputmode="numeric" maxlength="1" />
                                                        <input class="otp-single-field" type="text"
                                                            inputmode="numeric" maxlength="1" />
                                                    </div>
                                                    <p class="otperror-msg"></p>
                                                    <div class="otp-verify-timer">
                                                        <p data-wait-for-timer>Please wait before resending the OTP. </p>
                                                        <div class="timerclock-wrap">
                                                            <svg class="progress-ring" width="60" height="60">
                                                                <circle
                                                                    class="progress-ring__circle"
                                                                    stroke="#de9406"
                                                                    stroke-width="4"
                                                                    fill="transparent"
                                                                    r="26"
                                                                    cx="30"
                                                                    cy="30" />
                                                            </svg>
                                                            <div class="timer-wrapper">


                                                                <p data-show-timer></p>

                                                            </div>
                                                            <button class="reset-otp-timer-btn" data-otp-resend-btn disabled>Re-send OTP</button>
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

        <?php } else if (empty($enq_purposelist) || empty($countrylist)) { ?>

            <div id="aftercontactmodel" class="modal fade newSignUpModel show in PanelNew extra-grid-styling" tabindex="-1" role="dialog"
                data-backdrop="static" data-keyboard="false">
                <div class="modal-backdrop fade in"></div>
                <div class="modal-dialog ">
                    <div class="modal-content text-left">

                        <div class="modal-body ">
                            <div class="grid-box signUp-leftSideBox">
                                <div class="content ">
                                    <div class="content-insideBox">
                                        <div class="leftBox">
                                            <div class="leftBox-headLogo"><img
                                                    src="https://easyshiksha.com/img/logo/whiteESLogo.png" alt="logo"></div>
                                            <div class="leftBox-textBox">
                                                <h3 class="leftBox-title">By signing up, one can avail of lots of benefits:</h3>
                                                <ul class="textBox-ulBox">
                                                    <li>
                                                        <p>Find Internship Details.</p>
                                                    </li>
                                                    <li>
                                                        <p>Download free guides.</p>
                                                    </li>
                                                    <li>
                                                        <p>Get special discounts on courses.</p>
                                                    </li>
                                                    <li>
                                                        <p>Find top universities/colleges.</p>
                                                    </li>
                                                    <li>
                                                        <p>Connect with expert instructors.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row" id="sign_in_form">

                                        <div class="col-xs-12">

                                            <div class="signUp-formBox">
                                                <div class="headBoxSingUpModel heading-signup-uniq">
                                                    <h5 class="heading_second_login_box ">You're Nearly Done! Finalize Your Signup
                                                    </h5>
                                                </div>
                                                <form class="signUp-secondFrom heading-signup-uniq" id="signUpSecondFrom" style="display: block;">

                                                    <?php

                                                    $purposeListArray = [];
                                                    $enquirypurposelist = '';
                                                    $class = 'form-control required_validation_login_new';
                                                    if ($enq_purposelist) {
                                                        $purposeListArray = explode(',', $enq_purposelist);
                                                    }
                                                    ?>

                                                    <div class="form-group com-inputLabelBox">
                                                        <label id="select_country">Country</label>
                                                        <div class="main-inputBoxcontact">
                                                            <select id="country-dropdown"
                                                                class="form-control main-inputBox required_validation_login_new"
                                                                style="font-size: 15px;" name="Country"
                                                                aria-labelledby="select_country">
                                                                <?php
                                                                $resultcounry = mysqli_query($conn, "SELECT * FROM countries");
                                                                while ($row = mysqli_fetch_array($resultcounry)) {
                                                                ?>
                                                                    <option value="<?php echo $row['country_id']; ?>">
                                                                        <?php echo $row["name"]; ?>
                                                                    </option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <p class="errorMsg-para">This field is required</p>
                                                    </div>

                                                    <div class="form-group com-inputLabelBox">
                                                        <label id="select_country">State</label>
                                                        <div class="main-inputBoxcontact">
                                                            <select class="form-control main-inputBox required_validation_login_new"
                                                                style="font-size: 15px;" name="Country"
                                                                aria-labelledby="select_country" id="state-dropdown">
                                                            </select>
                                                        </div>
                                                        <p class="errorMsg-para">This field is required</p>
                                                    </div>

                                                    <div class="form-group com-inputLabelBox">
                                                        <label id="select_country">City</label>
                                                        <div class="main-inputBoxcontact">
                                                            <select class="form-control main-inputBox" style="font-size: 15px;"
                                                                name="Country" aria-labelledby="select_country" id="city-dropdown">

                                                            </select>
                                                        </div>
                                                        <!--<p class="errorMsg-para">This field is required</p>-->
                                                    </div>

                                                    <div class="form-group com-inputLabelBox">
                                                        <label id="select_intrest">Interested in (multiple choice)</label>
                                                        <div class="main-inputBoxcontact">
                                                            <select
                                                                class="multi-selected-Interest-in form-control main-inputBox enq_prpr required_validation_login_new "
                                                                name="choice[]" multiple placeholder="Choose your interest"
                                                                aria-labelledby="select_intrest">
                                                                <option <?php if (in_array('internship', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="
                                                                    internship">Internship</option>
                                                                <option <?php if (in_array('online-courses', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="online-courses">Online Courses
                                                                </option>
                                                                <option <?php if (in_array('career-guidance', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="career-guidance">Career Guidance
                                                                </option>
                                                                <option <?php if (in_array('admission-help', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="admission-help">Admission Help
                                                                </option>
                                                                <option <?php if (in_array('online-test-series', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="online-test-series">Online Test
                                                                    Series</option>
                                                                <option <?php if (in_array('education-loan', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="education-loan">Education Loan
                                                                </option>
                                                                <option <?php if (in_array('partner', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="partner">Partner</option>
                                                                <option <?php if (in_array('advertise', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="advertise">Advertise</option>
                                                                <option <?php if (in_array('accommodation', $purposeListArray)) {
                                                                            echo 'selected';
                                                                        } ?> value="accommodation">Accommodation
                                                                </option>
                                                                <option <?php if (in_array(
                                                                            'Govt Job Preparation',
                                                                            $purposeListArray
                                                                        )) {
                                                                            echo 'selected';
                                                                        } ?> value="Govt Job
                                                                    Preparation">Govt Job Preparation</option>
                                                                <option <?php if (in_array(
                                                                            'Entrance Exam Preparation',
                                                                            $purposeListArray
                                                                        )) {
                                                                            echo 'selected';
                                                                        } ?> value="Entrance
                                                                    Exam Preparation">Entrance Exam Preparation</option>
                                                            </select>
                                                        </div>
                                                        <p class="errorMsg-para">This field is required</p>
                                                        <p id="errorconatact"></p>
                                                    </div>
                                                    <!-- optional referral code field -->
                                                    <div class="form-group com-inputLabelBox">
                                                        <label for="referral-code-input-field">Got a Referral Code? Enter Below (Optional)</label>
                                                        <input class="main-inputBox" type="text" value="<?= $cookie_refercode ?>" id="referral-code-input-field" placeholder="Enter referral code">
                                                    </div>
                                                    <!--  -->
                                                    <div class="form-group" style="margin-bottom: 0px">
                                                        <input type="submit" value="Complete Registration" id="continueSignUpBtn"
                                                            class="signUp-fromSubmitBtn registerBtn btn_contact_model">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="model-footerBox" style="display: none;">
                                            <div class="or-blockBox">
                                                <span class="centerLine"></span>
                                                <span class="or-text">or</span>
                                                <span class="centerLine"></span>
                                            </div>
                                            <div id="connectWith" class="googleLogin-Box">
                                                <div class="flex-box ">
                                                    <div class="social_group_login">
                                                        <div class="form-group">
                                                            <div class="g-signin2" data-onsuccess="EasyshikhshaonSignIn"
                                                                data-theme="dark">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                    <div class="modal-footer newFooterBox-set">
                                                        Already on EasyShiksha? <a
                                                            class="btn btn-link Signup_modal_box_btn pt-0 ct_bt_click"
                                                            data-toggle="modal" data-target="#ctl00_Panel2" data-dismiss="modal"
                                                            aria-label="Close">Sign in</a>
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

        <?php }
} else { ?>

        <div class="modal fade newSignUpModel" id="ctl00_Panel2" tabindex="-1" role="dialog" aria-labelledby="signModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog ">
                <div class="modal-content text-left">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="" aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="signModal">Sign in</h4>
                    </div>
                    <div class="modal-body">
                        <div class="grid-box signUp-leftSideBox">
                            <div class="content ">
                                <div class="content-insideBox">
                                    <div class="leftBox">
                                        <div class="leftBox-headLogo"><img src="https://easyshiksha.com/img/logo/whiteESLogo.png" alt="logo"></div>
                                        <div class="leftBox-textBox">
                                            <h3 class="leftBox-title">By signing up, one can avail of lots of benefits:</h3>
                                            <ul class="textBox-ulBox">
                                                <li>
                                                    <p>Find Internship Details.</p>
                                                </li>
                                                <li>
                                                    <p>Download free guides.</p>
                                                </li>
                                                <li>
                                                    <p>Get special discounts on courses.</p>
                                                </li>
                                                <li>
                                                    <p>Find top universities/colleges.</p>
                                                </li>
                                                <li>
                                                    <p>Connect with expert instructors.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row temp" id="sign_in_form">
                                    <!--  -->
                                    <div class="singup-modelCrosBtn">
                                        <img id="signUpCloseModel" data-dismiss="modal" aria-hidden="true" src="https://easyshiksha.com/img/logo/Multiply.png">
                                    </div>
                                    <!--  -->
                                    <div class="col-xs-12">

                                        <div id="facebook_login" class="alert alert-danger login_validation_error" role="alert" style="float: left;width: 100%;float: left;display: none;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><b>Error
                                            </b> 'Invalid Email Id'</div>
                                        <div id="gmail_login" class="alert alert-danger login_validation_error" role="alert" style="float: left;width: 100%;float: left;display: none;"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><b>Error
                                            </b> 'Invalid Email Id'</div>
                                    </div>
                                    <div class="signUp-formBox">
                                        <form method="post" id="FormLoginNew">
                                            <div class="headBoxSingUpModel">
                                                <h5 class="heading_second_login_box">Sign In</h5>
                                            </div>
                                            <span id="showp" style="position:absolute;left:75px;top:66px;display: none;height: 0px;overflow: hidden;">Enter
                                                Your Password</span>
                                            <div class="clearfix"></div>
                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_email_signin">Email Address</label>
                                                <div class="main-inputBox">
                                                    <span class="inputIcon-box"><img src="https://easyshiksha.com/img/logo/emailIcon.png" alt="icon"></span>
                                                    <input name="m_email_signin" type="text" id="m_email_signin_login" class="form-control required_validation_login_new email_validation" placeholder="Enter Your Email">
                                                    <span class="errorIcon-box errorIcon-box-icon" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                                </div>
                                                <p class="errorMsg-para">This field is required</p>

                                            </div>
                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_password_signin">Password</label>
                                                <div class="main-inputBox">
                                                    <span class="inputIcon-box"><img src="https://easyshiksha.com/img/logo/passwordIcon.png" alt="icon"></span>
                                                    <input name="m_password_signin" type="password" id="m_password_signin" class="form-control required_validation_login_new" placeholder="Enter Your Password">
                                                    <span class="errorIcon-box " style="display: none" id="openEye2"><img src="https://easyshiksha.com/img/logo/openEye.png" alt="eye"></span>
                                                    <span class="errorIcon-box " id="closeEye2"><img src="https://easyshiksha.com/img/logo/closedEye.png" alt="close"></span>
                                                    <span class="errorIcon-box errorIcon-box-icon" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                                </div>
                                                <p class="errorMsg-para">This field is required</p>
                                                <p class="errorMsg-para_after" style="display: none;color: #e23a3a; font-size:15px; margin-top:15px;">Email ID or Password is incorrect</p>
                                            </div>
                                            <div class="form-group"><a class="forgotPass-btnset" data-toggle="modal" data-target="#forGotPasswordModelTarget" data-dismiss="modal">Forgot password?</a>
                                            </div>
                                            <div class="form-group" style="margin: 25px 0 0">
                                                <input type="submit" name="m_log" value="Sign In" id="m_log" class="btn signUp-fromSubmitBtn loginBtn">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class=model-footerBox>
                                    <div class="or-blockBox">
                                        <span class="centerLine"></span>
                                        <span class="or-text">or</span>
                                        <span class="centerLine"></span>
                                    </div>

                                    <div class="googleLogin-Box" id="connectWith">
                                        <div class="flex-box">
                                            <div class="social_group_login social_group_google_login">
                                                <div class="form-group">
                                                    <div class="g-signin2" data-onsuccess="EasyshikhshaonSignIn" data-theme="dark" data-longtitle="true"
                                                        data-text="signup_with">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="clearfix"></div>
                                    <div class="allreadysection newFooterBox-set" style="margin-top: 30px;">
                                        New on EasyShiksha?<a class="btn btn-link Signup_modal_box_btn pt-0 ct_bt_click" data-toggle="modal" data-target="#ctl00_Panel1" data-dismiss="modal" aria-label="Close"> Sign up</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div id="ctl00_Panel1" class="modal fade newSignUpModel" tabindex="-1" role="dialog" aria-labelledby="signupModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog ">
                <div class="modal-content text-left">
                    <div class="modal-header">
                        <h4 class="modal-title" id="signupModal">Sign Up</h4>
                    </div>
                    <div class="modal-body ">
                        <div class="grid-box signUp-leftSideBox">
                            <div class="content ">
                                <div class="content-insideBox">
                                    <div class="leftBox">
                                        <div class="leftBox-headLogo"><img src="https://easyshiksha.com/img/logo/whiteESLogo.png" alt="logo"></div>
                                        <div class="leftBox-textBox">
                                            <h3 class="leftBox-title">By signing up, one can avail of lots of benefits:</h3>
                                            <ul class="textBox-ulBox">
                                                <li>
                                                    <p>Find Internship Details.</p>
                                                </li>
                                                <li>
                                                    <p>Download free guides.</p>
                                                </li>
                                                <li>
                                                    <p>Get special discounts on courses.</p>
                                                </li>
                                                <li>
                                                    <p>Find top universities/colleges.</p>
                                                </li>
                                                <li>
                                                    <p>Connect with expert instructors.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="row" id="sign_in_form">
                                    <!--  -->
                                    <div class="singup-modelCrosBtn">
                                        <img id="signUpCloseModel" data-dismiss="modal" aria-hidden="true" src="https://easyshiksha.com/img/logo/Multiply.png">
                                    </div>
                                    <!--  -->
                                    <div class="col-xs-12">
                                    </div>
                                    <div class="signUp-formBox">
                                        <div class="headBoxSingUpModel">
                                            <h5 class="heading_second_login_box">Join for Free</h5>
                                        </div>
                                        <form method="post" id="FormRegisterNew">
                                            <?php
                                            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                                                $urlss = "https://";
                                            else
                                                $urlss  = "http://";
                                            $urlss .= $_SERVER['HTTP_HOST'];
                                            $urlss .= $_SERVER['REQUEST_URI'];
                                            ?>
                                            <input type="hidden" value="<?php echo $urlss; ?>" class="current_url">

                                            <input type="hidden" value="<?php echo $Referer; ?>" class="REFERER" />
                                            <input type="hidden" value="<?php echo $utmparameters; ?>" class="utm_parameter" />

                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_name_signin">Full Name</label>
                                                <div class="main-inputBox">
                                                    <span class="inputIcon-box"><img src="https://easyshiksha.com/img/logo/maleUserIcon.png" alt="icon"></span>
                                                    <input name="m_name_signin" type="text" id="m_name" class="form-control required_validation_register_new">
                                                    <span class="errorIcon-box errorIcon-box-icon" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                                </div>
                                                <p class="errorMsg-para">This field is required</p>
                                            </div>
                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_email_signin">Email Address</label>
                                                <div class="main-inputBox">
                                                    <span class="inputIcon-box"><img src="https://easyshiksha.com/img/logo/emailIcon.png" alt="icon"></span>
                                                    <input name="m_email_signin" type="text" id="m_email" class="form-control required_validation_register_new email_validation" placeholder="">
                                                    <span class="errorIcon-box errorIcon-box-icon" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                                </div>
                                                <p class="errorMsg-para">This field is required</p>
                                            </div>

                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_contact">Whatsapp Number</label>
                                                <div class="main-inputBox test">
                                                    <span class="inputIcon-box hide-phone-icon-on-phones">
                                                        <svg viewBox="0 0 48.00 48.00" id="Layer_2" data-name="Layer 2" xmlns="https://www.w3.org/2000/svg" fill="#1e1e1e" stroke="#1e1e1e" stroke-width="0.4800000000000001">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="1.152">
                                                                <defs>
                                                                    <style>
                                                                        .cls-1 {
                                                                            fill: none;
                                                                            stroke: #1e1e1e;
                                                                            stroke-linecap: round;
                                                                            stroke-linejoin: round;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <path class="cls-1" d="M24,2.5A21.52,21.52,0,0,0,5.15,34.36L2.5,45.5l11.14-2.65A21.5,21.5,0,1,0,24,2.5ZM13.25,12.27h5.86a1,1,0,0,1,1,1,10.4,10.4,0,0,0,.66,3.91,1.93,1.93,0,0,1-.66,2.44l-2.05,2a18.6,18.6,0,0,0,3.52,4.79A18.6,18.6,0,0,0,26.35,30l2-2.05c1-1,1.46-1,2.44-.66a10.4,10.4,0,0,0,3.91.66,1.05,1.05,0,0,1,1,1v5.86a1.05,1.05,0,0,1-1,1,23.68,23.68,0,0,1-15.64-6.84,23.6,23.6,0,0,1-6.84-15.64A1.07,1.07,0,0,1,13.25,12.27Z"></path>
                                                            </g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <defs>
                                                                    <style>
                                                                        .cls-1 {
                                                                            fill: none;
                                                                            stroke: #1e1e1e;
                                                                            stroke-linecap: round;
                                                                            stroke-linejoin: round;
                                                                        }
                                                                    </style>
                                                                </defs>
                                                                <path class="cls-1" d="M24,2.5A21.52,21.52,0,0,0,5.15,34.36L2.5,45.5l11.14-2.65A21.5,21.5,0,1,0,24,2.5ZM13.25,12.27h5.86a1,1,0,0,1,1,1,10.4,10.4,0,0,0,.66,3.91,1.93,1.93,0,0,1-.66,2.44l-2.05,2a18.6,18.6,0,0,0,3.52,4.79A18.6,18.6,0,0,0,26.35,30l2-2.05c1-1,1.46-1,2.44-.66a10.4,10.4,0,0,0,3.91.66,1.05,1.05,0,0,1,1,1v5.86a1.05,1.05,0,0,1-1,1,23.68,23.68,0,0,1-15.64-6.84,23.6,23.6,0,0,1-6.84-15.64A1.07,1.07,0,0,1,13.25,12.27Z"></path>
                                                            </g>
                                                        </svg>
                                                    </span>

                                                    <div class="contries-dropdown-flebox position-relative no-borders main-inputBox"
                                                        data-validate-phone-number-wrapper>
                                                        <div class="country-prefix-container" data-country-prefix-container>
                                                            <div class="display-country-code reduce-padding no-border-right show-adjacent-icon"
                                                                data-display-country-code>
                                                            </div>
                                                            <div class="dropdown-wrapper-country-code"
                                                                data-dropdown-menu-country-code>
                                                                <div class="flexbox-country-code-search-field">
                                                                    <span>&#x1F50E;&#xFE0E;</span>
                                                                    <input type="text" id="dropdownInput"
                                                                        class="country-code-search-dropdown-list"
                                                                        placeholder="Search" data-country-code-field>
                                                                    <input type="hidden" name="newcontact_code" id="newcountrycode" data-countrycode-input />
                                                                </div>
                                                                <div id="dropdownList" class="country-code-dropdown-list"
                                                                    data-list-of-country-codes></div>
                                                            </div>
                                                        </div>
                                                        <input type="number" name="newcontact_number" id="newphonenumber" placeholder=""
                                                            class="phone-number-input-field required_validation_register_new no-borders reduce-placeholder-size" data-phone-number-field style="min-width: 0px;">
                                                        <span class="errorIcon-box errorIcon-box-icon" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                                        <p data-phone-field-error></p>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group com-inputLabelBox">
                                                <label for="m_password_signin">Password</label>
                                                <div class="main-inputBox">
                                                    <span class="inputIcon-box"><img src="https://easyshiksha.com/img/logo/passwordIcon.png" alt="icon"></span>
                                                    <input name="m_password_signin" type="password" id="m_password" class="form-control required_validation_register_new" placeholder="">
                                                    <span class="errorIcon-box passEye-box " id="openEye" style="display: none"><img src="https://easyshiksha.com/img/logo/openEye.png" alt="eye"></span>
                                                    <span class="errorIcon-box passEye-box " id="closeEye"><img src="https://easyshiksha.com/img/logo/closedEye.png" alt="eye"></span>

                                                    <span class="errorIcon-box errorIcon-box-icon" style="display: none"><img src="https://easyshiksha.com/img/logo/alertIcon.png" alt="icon"></span>
                                                </div>
                                                <p class="errorMsg-para">This field is required</p>
                                                <p class="errorMsg_para_after_ragister" style="display: none; font-size:15px; margin-top:15px;">
                                                <p>
                                            </div>

                                            <div class="form-group" style="margin-bottom: 0px">

                                                <input type="submit" name="m_log" value="Register" id="register-m_log" class="test signUp-fromSubmitBtn registerBtn">

                                            </div>

                                        </form>

                                    </div>
                                </div>

                                <div class=model-footerBox>
                                    <div class="or-blockBox">
                                        <span class="centerLine"></span>
                                        <span class="or-text">or</span>
                                        <span class="centerLine"></span>
                                    </div>



                                    <div id="connectWith" class="googleLogin-Box">
                                        <div class="flex-box ">
                                            <div class="social_group_login social_group_google_ragister">
                                                <div class="form-group">
                                                    <div class="g-signin2" data-onsuccess="EasyshikhshaonSignIn" data-theme="dark" data-longtitle="true"
                                                        data-text="signup_with">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                    <div class="modal-footer newFooterBox-set">
                                        Already on EasyShiksha? <a class="btn btn-link Signup_modal_box_btn pt-0 ct_bt_click" data-toggle="modal" data-target="#ctl00_Panel2" data-dismiss="modal" aria-label="Close">Sign in</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php  } ?>

    <div id="acceptcookies" class="acceptcookies_show" style="display:none;z-index:9999;margin-bottom:0px;bottom:0px;font-size: 16px; position: fixed; background: #de9406; padding: 5px; width: 100%; text-align:center;color:#000;font-family: 'Roboto',Arial, Helvetica, sans-serif;">
        We use cookies to improve your experience. By continuing to browse the site, you agree to our Privacy Policy and Cookie Policy.&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="button" class="btn_cokies" value="OK" style="background: #1e1e1e;border: 1px solid transparent;font-size: 16px;font-weight: 600;border-radius: 6px;text-align: center;text-decoration: none;color: #FFF;display: inline-block;width: 100px;height: 30px;line-height: 20px;padding: 5px;" />
    </div>





    <!-- </div> -->

    <div id="ctl00_Panel21" class="panel2_class" style="display:<?php echo $askfortestpin; ?>; margin-left:34%;margin-top:9.5%; position: fixed; z-index: 100001;">

        <div>
            <div style="background-color:#5e4a99;padding:8px 0px;padding-left:70px;color:White;font-weight:bold;">Test Pin
                for this test !</div>
            <div style="padding:20px 70px;position:relative;">
                <div id="ctl00_UpdatePanel1">


                    <input type="hidden" name="page_nm" id="page_nm" value="<?php echo $pg; ?>" />

                    <input type="hidden" name="test_id" id="test_id" value="<?php echo $Test_Id; ?>" />

                    <input name="test_pin_textbox" id="test_pin_textbox" type="text" style="width:257px;" placeholder="Test Pin" /><br />


                    <span id="test_pin_error" style="color:Red;display:block;"></span><br />

                </div>
                <div id="funbox" style="display:none">
                    <div style="padding-top:8px;">
                        <input type="submit" name="test_pin_button" value="Submit" onclick="javascript:check_test_pin();" id="test_pin_button" class="btn1" style="width:100px;" />
                    </div>
                </div>

            </div>
        </div>

    </div>
    <?php
    if (isset($_COOKIE['last_login_session'])) {
        $lastlogin = $_COOKIE['last_login_session'];
    } else {
        $lastlogin = '';
    }
    ?>


    <!-- Preload the stylesheet -->
    <link rel="preload" as="style" href="<?php echo $mainurl; ?>/css/popup.css">
    <link rel="stylesheet" href="<?php echo $mainurl; ?>/css/popup.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="<?php echo $mainurl; ?>/css/popup.css">
    </noscript>


    <script>
        $(document).ready(function() {
            // $('#search-banner').hide();
            $('.social_group_google_ragister .abcRioButtonContents span').text("Register with Google");
            $('.social_group_google_login .abcRioButtonContents span').text("Sign In with Google");
        });
    </script>
    <script>
        window.headerFlags = {};
        window.headerFlags.isAllcategoriesLoaded = false;

        $(document).on('click', '#enrolledbtnid', function(data) {
            $('.enrollsearchid').val('access');
        });

        $(document).on('submit', '#FormForgotPassword', function(data) {
            var checkNumber;
            var check_required_field = '';
            $(this).find('.error_msg_validation').remove();
            $(this).find(".required_validation_forget_new").each(function() {
                var val22 = ($(this).val()).trim();
                if (checkNumber) {
                    check_required_field = 'error';
                }
                if (!val22) {
                    check_required_field = 'error';
                    $(this).siblings('.errorIcon-box').css("display", "block");
                    $(this).parent('.maininputforget').siblings('.errorMsg-para').css("display", "block");
                }
                $(this).on('keypress change', function() {
                    $(this).siblings('.errorIcon-box').css("display", "none");
                    $(this).parent('.maininputforget').siblings('.errorMsg-para').css("display", "none");
                });
            });
            if (check_required_field) {
                data.preventDefault();
                return false;
            } else {
                data.preventDefault();

                var email = $('#m_email_signin_forget').val();
                $.ajax({
                    url: '<?php echo $searchurl; ?>/Home/setforgetpassword',
                    type: 'POST',
                    data: {
                        'email': email,
                    },

                    success: function(data) {
                        $('.errorMsg-paraBackend').text(data);
                        $('#m_email_signin_forget').val("");

                    }
                });
            }
        });

        $(".earnhtmlcertificate").on("click", function() {
            $('#learnSubMenuContainer').html(
                `
                  <div class="shimmer-ui-learn-submenu-container" data-shimmer-ui-learn-submenu="">
        <div class="shimmer-ui-learn--text"></div>
        <div class="shimmer-ui-learn--text"></div>

        <div class="grid-shimmer-ui-learn-submenu">
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
        </div>
                `
            ).show();
            $.ajax({
                url: "https://easyshiksha.com/Home/GetPaidCourse",
                type: "POST",
                dataType: "HTML",
                success: function(data) {
                    var trimStr = $.trim(data);
                    if (trimStr) {
                        $('#learnSubMenuContainer').html(trimStr).fadeIn(250, function() {

                            $(document).on('click.outsideSubMenu', function(event) {
                                if (!$(event.target).closest('#learnSubMenuContainer').length) {
                                    $('#learnSubMenuContainer').fadeOut(250, function() {

                                        $(document).off('click.outsideSubMenu');
                                    });
                                }
                            });;
                        });

                    } else {
                        $('learnSubMenuContainer').html("").hide();

                    }
                }
            });

        });


        function addBrowseButtonIfNeeded() {
            try {
                var $this = $('#sidebarcatogrylist');
                // 
                $this.find('.catli').slice(0, 15).addClass('shown');
                $this.find('.catli').not('.shown').hide();
                // 
                if ($this.find('li').length > 15 && $this.find('#browsebtn').length === 0) {

                    $this.append('<div id="browsebtn"><div id="browsertcatbtn" class="showMore">Browse all Categories</div></div>');
                    $this.off('click', '.showMore').on('click', '.showMore', function() {
                        $this.find('.catli').not('.shown').toggle(300);
                        $this.find('#browsertcatbtn').toggleClass('showLess');
                        if ($this.find('#browsertcatbtn').hasClass('showLess')) {
                            $this.find('#browsertcatbtn').text('Show less');
                        } else {
                            $this.find('#browsertcatbtn').text('Browse all Categories');
                        }
                    });
                } else {

                    $this.find('#browsertcatbtn').removeClass('showLess');
                    $this.find('#browsertcatbtn').text('Browse all Categories');
                }
            } catch (error) {
                console.log('please check', addBrowseButtonIfNeeded)
            }
        }

        $(document).on('click', '#learnHeaderMenuItm', function() {
            if (!window.headerFlags.isAllcategoriesLoaded) {
                getcategories();
            }
            $('.learn-sidebar-overlayBox').stop(true, true).fadeIn(250);


            addBrowseButtonIfNeeded();
        });

        function getcategories() {
            $.ajax({
                url: "https://easyshiksha.com/Home/AllCategories",
                type: "POST",
                dataType: "HTML",
                success: function(data) {
                    var trimStr = $.trim(data);
                    if (trimStr) {
                        window.headerFlags.isAllcategoriesLoaded = true;
                        $('#sidebarcatogrylist').html(trimStr);
                        $('#mobilecateslider').html(trimStr);
                        addBrowseButtonIfNeeded();
                        mobileShowBrowseMoreBtn();
                    } else {
                        $('#sidebarcatogrylist').html("");
                        $('#mobilecateslider').html("");
                    }
                }
            });
        }
        $(document).on('click', ".cateshowsubcatecourse", function(e) {
            e.stopImmediatePropagation();
            $('#learnSubMenuContainer').html(`
                             
                              <div class="shimmer-ui-learn-submenu-container" data-shimmer-ui-learn-submenu="">
        <div class="shimmer-ui-learn--text"></div>
        <div class="shimmer-ui-learn--text"></div>

        <div class="grid-shimmer-ui-learn-submenu">
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
            <div>
                <div class="shimmer-ui-learn--text"></div>
                <div class="subgrid-shimmer-ui-learn">
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                    <div class="shimmer-ui-learn--image"></div>
                    <div class="shimmer-ui-learn--text"></div>
                </div>
            </div>
        </div>
                           `).show();

            var id = $(this).find("#catid").val();
            $.ajax({
                url: "https://easyshiksha.com/Home/GetAllSubCategoriesById",
                data: 'cateid=' + id,
                type: "POST",
                dataType: "HTML",
                success: function(data) {

                    var trimStr = $.trim(data);
                    if (trimStr) {
                        $('#learnSubMenuContainer').html(trimStr).fadeIn(250, function() {

                            $(document).on('click.outsideSubMenu', function(event) {
                                if (!$(event.target).closest('#learnSubMenuContainer').length) {
                                    $('#learnSubMenuContainer').fadeOut(250, function() {

                                        $(document).off('click.outsideSubMenu');
                                    });
                                }
                            });;

                        })
                    } else {
                        $('#learnSubMenuContainer').html("").hide();

                    }
                }
            });

        });


        $(document).on('click', '.closeModal', function() {
            var $this = $('#sidebarcatogrylist');


            $this.hide();

            $this.find('.catli.shown').removeClass('shown');
            $this.find('.catli').show();


            addBrowseButtonIfNeeded();
        });
    </script>
    <script>
        const el = document.getElementById('closeEye');
        if (el) {
            document.getElementById('closeEye').addEventListener('click', function() {
                var passwordInput = document.getElementById('m_password');
                passwordInput.type = 'text';
                document.getElementById('openEye').style.display = 'inline';
                document.getElementById('closeEye').style.display = 'none';
            });
        }
        const el1 = document.getElementById('openEye');
        if (el1) {
            document.getElementById('openEye').addEventListener('click', function() {
                var passwordInput = document.getElementById('m_password');
                passwordInput.type = 'password';
                document.getElementById('openEye').style.display = 'none';
                document.getElementById('closeEye').style.display = 'inline';
            });
        }
        const el2 = document.getElementById('closeEye2');
        if (el2) {
            document.getElementById('closeEye2').addEventListener('click', function() {
                var passwordInput = document.getElementById('m_password_signin');
                passwordInput.type = 'text';
                document.getElementById('openEye2').style.display = 'inline';
                document.getElementById('closeEye2').style.display = 'none';
            });
        }

        const el3 = document.getElementById('openEye2');
        if (el3) {
            document.getElementById('openEye2').addEventListener('click', function() {
                var passwordInput = document.getElementById('m_password_signin');
                passwordInput.type = 'password';
                document.getElementById('openEye2').style.display = 'none';
                document.getElementById('closeEye2').style.display = 'inline';
            });
        }


        document.addEventListener('DOMContentLoaded', function() {
            const el4 = document.getElementById('selectLanguageBoxId');
            if (el4) {
                let langBtn = document.getElementById('selectLanguageBoxId')
                let selectDropBox = document.getElementById('chooseLangDropDownBox')
                let closeDropbtn = document.getElementById('translateMenuCloseBtn')
                langBtn.addEventListener('click', function() {
                    selectDropBox.style.display = "block"
                })
                closeDropbtn.addEventListener('click', function() {
                    selectDropBox.style.display = "none"
                })
                document.addEventListener('click', function(event) {
                    if (!selectDropBox.contains(event.target) && !langBtn.contains(event.target)) {
                        selectDropBox.style.display = "none";
                    }
                });
            }
        })


        $(document).ready(function() {
            const $mobileNavbarMainContainer = $('.mob-sidebarBody-box .learn-sidebarContaint-box');
            const $learnSidebarContainer = $('#learnSidebarContainer');
            const $subMenuContainer = $('#learnSubMenuContainer');
            const $subMenus = $('.subMenu-contantBox');
            const $searchBox = $('#searchMainContainer');
            const $closeBtn = $('#closeSearchBox');
            const $openBtn = $('#openSearchBoxMob');

            if ($closeBtn.length) {
                $closeBtn.on('click', function() {
                    $searchBox.css('width', '0%');
                });
            }

            if ($openBtn.length) {
                $openBtn.on('click', function() {
                    $searchBox.css('width', '100%');
                });
            }
            // 

            $mobileNavbarMainContainer.on('click', '.subMenuHoverOpen', function(e) {
                e.preventDefault();


                $learnSidebarContainer.stop(true, true).slideDown(250);

            });

            $('.browser-all-subjects-container').on('click', '.header-selectLangBtn', function() {
                $('.language-modal-container').stop(true, true).fadeIn(250); // or .slideDown()
            });


            $('.closeTranslateModal').on('click', function() {
                $('.language-modal-container').stop(true, true).fadeOut(250);
                $('.learn-sidebar-overlayBox').stop(true, true).fadeOut(250);
            });


            $('#learnSubMenuContainer').on('click', '#closeSubMenuId', function(e) {
                $('#learnSubMenuContainer').stop(true, true).slideUp(250);
                $('.learn-sidebar-overlayBox').stop(true, true).fadeOut(250);
            });

            $(document).on('click', '#closeBtnlearn', function() {
                //console.log('close button clicked')
                $('#learnSidebarContainer').stop(true, true).fadeOut(250);
                $('#learnSubMenuContainer').stop(true, true).fadeOut(250);


                // $('#learnSidebarContainer').hide();
            });

        });





        document.addEventListener("DOMContentLoaded", function() {





            var opnemodalone = document.getElementById("opnemodalone");
            var closeBtn = document.querySelector(".close-btn-slider");
            var slideIndex = 0;
            if (opnemodalone) {
                opnemodalone.onclick = function() {
                    document.getElementById('uniqueImageSlider').style.display = 'flex';
                    showSlides(slideIndex);
                }
            }

            closeBtn.onclick = function() {
                document.getElementById('uniqueImageSlider').style.display = 'none';
            }

            document.querySelector('.prev-btn').addEventListener('click', function() {
                showSlides(slideIndex -= 1);
            });

            document.querySelector('.next-btn').addEventListener('click', function() {
                showSlides(slideIndex += 1);
            });

            function showSlides(n) {
                let slides = document.querySelectorAll('.image-slide');
                if (n >= slides.length) {
                    slideIndex = 0;
                }
                if (n < 0) {
                    slideIndex = slides.length - 1;
                }

                slides.forEach(slide => slide.style.display = 'none');

                slides[slideIndex].style.display = 'block';
            }



        });
    </script>

    <script type="text/javascript">
        var checkCookiesStatus = localStorage.getItem("acceptcookies");
        var checkcokkiesregistration = localStorage.getItem("user_login");
        const isLighthouse = /Chrome-Lighthouse|PageSpeed|Lighthouse/i.test(navigator.userAgent);

        if (isLighthouse) {
            $('#acceptcookies').hide();
        } else {

            if (checkCookiesStatus == null) {
                $('#acceptcookies').show();
            }
        }

        $('.btn_cokies').click(function() {
            localStorage.setItem("acceptcookies", true);
            $('#acceptcookies').hide();
        });
    </script>


    <script>

    </script>

    <script type="text/javascript">
        $('#ctl00_ContentPlaceHolder1_m_full_name').focus(function() {
            if ($('#ctl00_ContentPlaceHolder1_m_full_name').val() == 'Enter Your Full Name') {
                $('#ctl00_ContentPlaceHolder1_m_full_name').val('');
            }
        });
        $('#ctl00_ContentPlaceHolder1_m_full_name').blur(function() {
            if ($('#ctl00_ContentPlaceHolder1_m_full_name').val() == '') {
                $('#ctl00_ContentPlaceHolder1_m_full_name').val('Enter Your Full Name');
            }
        });

        $('#ctl00_ContentPlaceHolder1_m_email').focus(function() {
            if ($('#ctl00_ContentPlaceHolder1_m_email').val() == 'Email ID') {
                $('#ctl00_ContentPlaceHolder1_m_email').val('');
            }
        });
        $('#ctl00_ContentPlaceHolder1_m_email').blur(function() {
            if ($('#ctl00_ContentPlaceHolder1_m_email').val() == '') {
                $('#ctl00_ContentPlaceHolder1_m_email').val('Email ID');
            }
        });
        $('#ctl00_ContentPlaceHolder1_m_phone').focus(function() {
            if ($('#ctl00_ContentPlaceHolder1_m_phone').val() == 'Enter Contact No.') {
                $('#ctl00_ContentPlaceHolder1_m_phone').val('');
            }
        });
        $('#ctl00_ContentPlaceHolder1_m_phone').blur(function() {
            if ($('#ctl00_ContentPlaceHolder1_m_phone').val() == '') {
                $('#ctl00_ContentPlaceHolder1_m_phone').val('Enter Contact No.');
            }
        });

        function reg_validation1() {
            if ($('#ctl00_ContentPlaceHolder1_m_edu_interest').val() != "all" && $('#ctl00_ContentPlaceHolder1_m_full_name')
                .val() != "" && $('#ctl00_ContentPlaceHolder1_m_full_name').val() != "Enter Your Full Name" && $(
                    '#ctl00_ContentPlaceHolder1_m_email').val() != "" && $('#ctl00_ContentPlaceHolder1_m_email').val() !=
                "Email ID" && $('#ctl00_ContentPlaceHolder1_m_phone').val() != "" && $('#ctl00_ContentPlaceHolder1_m_phone')
                .val() != "Enter Contact No.") {
                var pattern =
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (!pattern.test($('#ctl00_ContentPlaceHolder1_m_email').val())) {
                    alert('Invalid Email ID');
                    return false;
                }
                return true;
            } else {
                alert('All fields are required.');
                return false;
            }
        }

        $('#contt').click(function() {
            window.location.href = "search.aspx?category=all";
        });
    </script>


    <!-- Preload it early -->
    <link rel="preload" as="style" href="<?php echo $mainurl; ?>/css/screen.css">
    <!-- Load it non-blocking -->
    <link rel="stylesheet" href="<?php echo $mainurl; ?>/css/screen.css" media="print" onload="this.media='screen'">
    <!-- Fallback if JavaScript is disabled -->
    <noscript>
        <link rel="stylesheet" href="<?php echo $mainurl; ?>/css/screen.css" media="screen">
    </noscript>


    <script type="text/javascript">
        function seett_default(source, eventArgs) {
            var value = eventArgs.get_value();
            document.getElementById('ctl00_ContentPlaceHolder1_search_box').value = value;
        }

        function AutoCompleteClientMethod_default(source, eventArgs) {
            var str = "search.aspx?query=" + eventArgs.get_value();
            window.location = str;
        }
    </script>

    <script type="text/javascript">
        function seett(source, eventArgs) {
            var value = eventArgs.get_value();
            document.getElementById('ctl00_header_search').value = value;
            $(this).css('color', 'white');
        }

        function AutoCompleteClientMethod(source, eventArgs) {
            var str = "search.aspx?query=" + eventArgs.get_value();
            window.location = str;
        }
    </script>
    <script>
        // 
        $(document).on('click', '#menusliderbarid', function() {
            $('.newMobile-sideBar').show();

            $('#mySidenav').css('width', '100%');
            $('body').css('overflow-y', 'hidden');

            if (!window.headerFlags.isAllcategoriesLoaded) {
                getcategories();
            }

            mobileShowBrowseMoreBtn();
        });
        function closeNav() {
            $('#mySidenav').css('width', '0%');
            var $this = $('#mobilecateslider');
            $this.find('.showMore').removeClass('showLess');

            $('body').css('overflow-y', '');
            // $('.newMobile-sideBar').hide();
        }
        function mobileShowBrowseMoreBtn() {
            try {
                // 
                var $this = $('#mobilecateslider');


                if ($this.find('li').length > 8 && $this.find('#browsebtn').length === 0) {
                    $this.append('<div id="browsebtn"><div id="browsertcatbtn" class="showMore">Browse all Categories</div></div>');
                } else {

                    $this.find('.showMore').removeClass('showLess');
                    $this.find('.showMore').text('Browse all Categories');

                }
                $this.find('.catli').slice(0, 8).addClass('shown');
                $this.find('.catli').not('.shown').hide();

                $this.find('.showMore').off('click').on('click', function(event) {
                    event.stopPropagation();
                    $this.find('.catli').not('.shown').toggle(300);
                    $(this).toggleClass('showLess');

                    // Update button text based on its current state
                    if ($(this).hasClass('showLess')) {
                        $(this).text('Show less');
                    } else {
                        $(this).text('Browse all Categories');

                    }
                });
            } catch (error) {
                console.log('mobileShowBrowseMoreBtn', error)
            }
        }
    </script>

    <?php if (!($user_id) && !($token) && !isset($disableHeaderUser)) { ?>
        <script>
            $(document).ready(function() {

                setTimeout(function() {
                    if (!$('#ctl00_Panel2').hasClass('in')) {
                        $('#ctl00_Panel1').modal('show');

                        const $closeBtn = $('#ctl00_Panel1').find('.singup-modelCrosBtn img#signUpCloseModel');
                        $closeBtn.css('pointer-events', 'none').css('opacity', '0');

                        setTimeout(function() {
                            $closeBtn.css('pointer-events', 'auto').css('opacity', '1');
                        }, 10000);
                    }
                }, 25000);

            });
        </script>
    <?php } ?>

    <?php
    $NEWID;
    $NEWID = isset($_GET['U_S_R']) ? $_GET['U_S_R'] : '';
    if (!($user_id) && $NEWID == 1) { ?>
        <script>
            $(document).ready(function() {
                if (!$('#ctl00_Panel2').hasClass('in')) {

                    $('#ctl00_Panel1').modal('show');
                }
            });
        </script>
    <?php } ?>
    <?php
    $NEWIDlogin;
    $NEWIDlogin = isset($_GET['U_L_R']) ? $_GET['U_L_R'] : '';
    if (!isset($user_id) && $NEWIDlogin == 1) { ?>
        <script>
            $(document).ready(function() {
                if (!$('#ctl00_Panel1').hasClass('in')) {
                    $('#ctl00_Panel2').modal('show');
                }
            });
        </script>
    <?php } ?>
    <?php
    include('google_login_js.php');
    ?>
    <script>
        $(document).on('submit', '#signUpSecondFrom', function(data) {
            $('#errorconatact').html('');
            data.preventDefault();
            var checkNumber;
            var check_required_field = '';
            $(this).find('.error_msg_validation').remove();
            $(this).find(".required_validation_login_new").each(function() {
                var val22 = ($(this).val());
                if (checkNumber) {
                    check_required_field = 'error';
                }
                if (!val22) {
                    check_required_field = 'error';
                    $(this).parent('.main-inputBoxcontact').siblings('.errorMsg-para').css("display", "block");
                }
                $(this).on('keypress change', function() {
                    $(this).parent('.main-inputBoxcontact').siblings('.errorMsg-para').css("display", "none");
                });
            });
            if (check_required_field) {

                data.preventDefault();
                return false;
            } else {
                data.preventDefault();
                var enq_prpr = $('.enq_prpr').val();
                var countryvalue = $('#country-dropdown').val();
                var statevalue = $('#state-dropdown').val();
                var cityvalue = $('#city-dropdown').val();
                var ipaddress = "";
                var user = "<?php echo $user_id ?>";
                if (!enq_prpr) {
                    $('.enq_prpr').parent('.main-inputBoxcontact').siblings('.errorMsg-para').css("display", "block");
                    data.preventDefault();
                    return false;
                } else {
                    $('.enq_prpr').parent('.main-inputBoxcontact').siblings('.errorMsg-para').css("display", "none");
                }
                if (!countryvalue) {
                    $(this).parent('.main-inputBox').siblings('.errorMsg-para').css("display", "block");
                    data.preventDefault();
                    return false;
                } else {
                    $(this).parent('.main-inputBox').siblings('.errorMsg-para').css("display", "none");
                }
                if (!statevalue) {

                    $('#state-dropdown').siblings('.errorMsg-para').css("display", "block");
                } else {
                    $('#state-dropdown').siblings('.errorMsg-para').css("display", "none");
                }
                var userrefercode = $("#referral-code-input-field").val();
                $.ajax({
                    url: '<?php echo $searchurl; ?>include/updatecontactscript.php',
                    type: 'POST',
                    data: {
                        'user_id': user,
                        'enq_purpose': enq_prpr,
                        'countryid': countryvalue,
                        'stateid': statevalue,
                        'cityid': cityvalue,
                        'ip': ipaddress,
                        'userrefercode': userrefercode
                    },

                    success: function(data) {

                        if (data) {
                            var data = JSON.parse(data);
                            if (data.status == '200') {
                                $('#aftercontactmodel').remove();
                                location.reload();
                            }
                        }
                    },
                    error: function() {
                        $('#errorconatact').html('<b>Error : </b> Something went wrong. Try again');
                    }
                });
            }
        });

        $(document).on('submit', '#FormLoginNew', function(data) {
            $('#inc_login').hide();
            $('#facebook_login').hide();
            $('#gmail_login').hide();
            var checkNumber;
            var check_required_field = '';
            $(this).find('.error_msg_validation').remove();
            $(this).find(".required_validation_login_new").each(function() {
                var val22 = ($(this).val()).trim();
                if (checkNumber) {
                    check_required_field = 'error';
                }
                if (!val22) {
                    check_required_field = 'error';
                    //$(this).css("border-color", "red");
                    $(this).siblings('.errorIcon-box-icon').css("display", "block");
                    $(this).parent('.main-inputBox').siblings('.errorMsg-para').css("display", "block");
                }
                $(this).on('keypress change', function() {
                    $(this).siblings('.errorIcon-box-icon').css("display", "none");
                    $(this).parent('.main-inputBox').siblings('.errorMsg-para').css("display", "none");
                });
            });
            if (check_required_field) {
                data.preventDefault();
                return false;
            } else {
                data.preventDefault();

                var email = $('#m_email_signin_login').val();
                var password = $('#m_password_signin').val();
                var enrollsearch = $('.enrollsearchid').val();
                $.ajax({
                    url: '<?php echo $searchurl; ?>include/header_login.php',
                    type: 'POST',
                    data: {
                        'email_signin': email,
                        'password_signin': password,
                        'login_signin': 'login'
                    },

                    success: function(data) {
                        var data = JSON.parse(data);
                        if (data.status != 'error') {
                            $.ajax({
                                url: '<?php echo $searchurl; ?>include/session_set.php',
                                type: 'post',
                                data: {
                                    id: data.userid,
                                    token: data.jwtttoken
                                },
                                success: function(datadd) {
                                    session_last_login(data.userid);
                                    var $crossurl = '<?php echo $sessionurlcourse ?>';
                                    if ($crossurl != '') {
                                        window.location.href = 'https://easyshiksha.com/online_courses/course/MyCourse/' + $crossurl;

                                    } else {
                                        window.location.href = "";
                                    }
                                },

                            });

                        } else {

                            $('.errorMsg-para_after').show();
                            $('#facebook_login').hide();
                            $('#gmail_login').hide();
                        }
                    }
                });
            }
        });
        function session_last_login(user) {
            var session_last = '<?php $lastlogin ?>';
            if (session_last) {} else {
                $.ajax({
                    url: '<?php echo $searchurl; ?>include/update_last_login.php',
                    type: 'POST',
                    data: {
                        'user_id': user
                    },
                    success: function(data) {
                        var data = JSON.parse(data);
                        if (data.userid) {
                            $.ajax({
                                url: '<?php echo $searchurl; ?>include/last_login_session_set.php',
                                type: 'POST',
                                data: {
                                    'id': data.userid
                                },
                                success: function(datass) {},
                            });
                        }
                    },
                });
            }
        }
        function ValidateEmail(email) {
            var expr =
                /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            return expr.test(email);
        };
        $(".email_validation").blur(function() {
            var email = $(this).val().trim();
            if (!ValidateEmail(email)) {
                $(this).val("");
            } else {
                return true;
            }
        });

        function validatecontact(phone) {
            var intRegex = /[0-9 -()+]+$/;
            return intRegex.test(phone);
        };
        $("#m_contact").blur(function() {
            if (!validatecontact($(this).val())) {
                $("#m_contact").val("");
            } else {
                return true;
            }
        });
        $("#m_contact_second").blur(function() {
            if (!validatecontact($(this).val())) {
                $("#m_contact_second").val("");
            } else {
                return true;
            }
        });
        // sentotp start
        function whatsappGenerateId() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let id = '';
            for (let i = 0; i < 10; i++) {
                id += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return id;
        }
        let customerotp = '';
        let customercrmid = '';
        async function senotptostudent(userId) {
            if ($("#FormRegisterNew .registerBtn")) {
                $("#FormRegisterNew .registerBtn").css('opacity', '0.5');
                $("#FormRegisterNew .registerBtn").css('pointer-events', 'none');
            }
            const otp = String(Math.floor(Math.random() * 10000)).padStart(4, '0');
            const crmid = whatsappGenerateId();
            return new Promise((resolve, reject) => {
                $.ajax({
                    url: 'https://easyshiksha.com/Home/sendotp',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        user_id: userId || '<?php echo $user_id ?>',
                        name: $('#m_name').val(),
                        email: $('#m_email').val(),
                        phone: $("#otpmodal #otpphonenumber").val() ? $("#otpmodal #otpphonenumber").val() : $("#newphonenumber").val(),
                        phonecode: $("#otpmodal #otpcountrycode").val() ? $("#otpmodal #otpcountrycode").val() : $("#newcountrycode").val(),
                        otp: otp,
                        crmid: crmid
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            customerotp = otp;
                            customercrmid = crmid;
                            resolve("ok");
                        } else if (data.code == 401) {
                            resolve("issue");
                        } else {
                            $('[data-phone-field-error]').text(data.message);
                            resolve("error");
                        }
                    },
                    error: function() {
                        resolve("error");
                    }
                });
            });
        }
        // sentotp end

        $(document).on('submit', '#FormRegisterNew', async function(data) {
            $('[data-phone-field-error]').text('');
            $('#facebook_login').hide();
            $('#gmail_login').hide();
            var checkNumber;
            var check_required_field = '';
            $(this).find('.error_msg_validation').remove();
            $(this).find(".required_validation_register_new").each(function() {
                var val22 = ($(this).val()).trim();
                if (checkNumber) {
                    check_required_field = 'error';
                }
                if (!val22) {
                    check_required_field = 'error';
                    $(this).siblings('.errorIcon-box-icon').css("display", "block");
                    $(this).parent('.main-inputBox').siblings('.errorMsg-para').css("display", "block");
                }
                $(this).on('keypress change', function() {
                    $(this).siblings('.errorIcon-box-icon').css("display", "none");
                    $(this).parent('.main-inputBox').siblings('.errorMsg-para').css("display", "none");
                });
            });   
            if (check_required_field) {
                data.preventDefault();
                return false;
            } else {
                data.preventDefault();
                var name = $('#m_name').val();
                var newcountrycode = $("#FormRegisterNew #newcountrycode").val();
                var newphonenumber = $("#FormRegisterNew #newphonenumber").val();
                var trimStr = $('#m_email').val();
                var email = $.trim(trimStr);
                var password = $('#m_password').val();
                var currentUrl = $('.current_url').val();
                var reefeer = $(".REFERER").val();
                var enq_purpose = '';
                var utm_parameter = $(".utm_parameter").val();
                
                // if (newphonenumber) {
                //     let checkotpfun = await senotptostudent();
                //     $("#FormRegisterNew .registerBtn").css('opacity', '1');
                //     $("#FormRegisterNew .registerBtn").css('pointer-events', 'auto');

                //     if (checkotpfun == "error") {
                //         return false;
                //     }
                // }
                $.ajax({
                    url: '<?php echo $searchurl; ?>include/signup_ajax_script.php',
                    type: 'POST',
                    data: {
                        'name': name,
                        'newcountrycode': newcountrycode,
                        'newphonenumber': newphonenumber,
                        'email': email,
                        'password': password,
                        'login_signin': 'register',
                        'currentUrl': currentUrl,
                        'enq_purpose': enq_purpose,
                        'Referer': reefeer ? reefeer : 'direct',
                     //   'otp': customerotp,
                        'utm_parameter': utm_parameter,
                       // 'crmid': customercrmid
                    },
                    beforeSend: function() {
                        $("#loder_overlay").show();
                    },
                    success: function(data) {
                        if (data) {

                            var data = JSON.parse(data);
                            if (data.userid) {
                                if (data.isphonevalid != 1) {
                                    senotptostudent(data.userid);
                                                   }

                               
                                  
                              
                                $.ajax({
                                    url: '<?php echo $searchurl; ?>include/session_set.php',
                                    type: 'post',
                                    data: {
                                        id: data.userid,
                                        token: data.jwtttoken
                                    },
                                    success: function(datadd) {
                                        session_last_login(data.userid);
                                        var $crossurl = '<?php echo $sessionurlcourse ?>';
                                        if ($crossurl != '') {
                                            window.location.href = 'https://easyshiksha.com/online_courses/course/MyCourse/' + $crossurl;

                                        } else {
                                            window.location.href = "";
                                        }
                                    },
                                });
                            } else {

                                $('.errorMsg_para_after_ragister').html('<b>Error : </b>' + data.message);
                                $('#facebook_login_signup').hide();
                                $('#gmail_login_signup').hide();
                                $('.errorMsg_para_after_ragister').show();
                            }
                        } else {
                            $('.errorMsg_para_after_ragister').html('<b>Error : </b>' + data.message);
                            $('#facebook_login_signup').hide();
                            $('#gmail_login_signup').hide();
                            $('.errorMsg_para_after_ragister').show();
                        }
                    },
                    error: function() {
                        $('.errorMsg_para_after_ragister').html('<b>Error : </b> Something went wrong. Try again');
                        $('#facebook_login_signup').hide();
                        $('#gmail_login_signup').hide();
                        $('.errorMsg_para_after_ragister').show();
                    },
                    complete: function() {
                        setTimeout(function() {
                            $("#loder_overlay").hide();
                        }, 1000);

                    },
                });

            }
        });
    </script>
    <script>
        $(document).ready(function() {

            <?php if (isset($_COOKIE['user_login'])) { ?>
                var ussid = '<?php echo $_COOKIE['user_login']; ?>';
                if (ussid) {
                    session_last_login(ussid);
                } else {

                }
            <?php } ?>

        });
    </script>

    <script>
        $(document).mouseup(function(e) {
            var container = $(".Mann_div");
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.hide();
            }
        });
    </script>


    <script src="https://easyshiksha.com/assets/js/select2.min.js" defer></script>
    <script>
        $(document).ready(function() {
            $('.multi-selected-Interest-in').select2({
                placeholder: "Choose your interest",
                allowClear: true
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $('#country-dropdown').val('101').trigger('change');
            triggerstate('101');
            triggercity('33');
            $('#country-dropdown').on('change', function() {
                var val = $(this).val();
                triggerstate(val);


            });

            function triggerstate(country) {
                var ddlState = $('#state-dropdown');
                var Selectstate_text = '';
                ddlState.empty();
                $.ajax({
                    url: 'https://easyshiksha.com/Users/getstate',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        CountryId: country
                    },
                    success: function(d) {
                        ddlState.append($("<option></option>").val('').html('Select State'));
                        $.each(d, function(i, state) {
                            Selectstate_text = '';

                            ddlState.append($("<option " + Selectstate_text + " ></option>")
                                .val(state.state_id).html(state.name));
                        });



                    }
                });
            }

            $(document).on('change', '#state-dropdown', function() {
                var val = $(this).val();
                triggercity(val);
            });

            function triggercity(stateid) {
                var ddlCity = $('#city-dropdown');
                var Selectcity_text = '';
                ddlCity.empty();

                $.ajax({
                    url: 'https://easyshiksha.com/Users/getcities',
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        "StateId": stateid
                    },
                    success: function(d) {
                        ddlCity.append($("<option></option>").val('').html('Select City'));
                        $.each(d, function(i, city) {

                            ddlCity.append($("<option " + Selectcity_text + " ></option>").val(
                                city.id).html(city.name));
                        });
                    },
                });
            }

        });
    </script>




    <?php //if(!isset($_COOKIE['user_login'])){
    ?>

    <?php if (!isset($_COOKIE['user_login']) && !isset($disableHeaderUser)) { ?>
        <script>
            function parseJwt(token) {
                var base64Url = token.split('.')[1];
                var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
                var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
                    return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
                }).join(''));

                return JSON.parse(jsonPayload);
            };

            function loginGoogleCredentialResponse(response) {
                if (response) {
                    var t = parseJwt(response.credential);
                    var name = t.name;
                    var email = t.email;
                    var currentUrl = $('.current_url').val();
                    //var reefeer = $('.REFERER').val();
                    var reefeer = $(".REFERER").val();
                    var image = t.picture;
                    var cncode = '<?php echo $countryCokkiesName; ?>';
                    var utm_parameter = $(".utm_parameter").val();
                    $.ajax({
                        url: '<?php echo $searchurl; ?>include/signup_ajax_script.php',
                        type: 'POST',

                        data: {
                            'name': name,
                            'phone': '',
                            'email': email,
                            'password': '',
                            'login_signin': 'google_register',
                            'currentUrl': currentUrl,
                            'enq_purpose': '',
                            'Referer': reefeer,
                            'image': image,
                            'cncode': cncode,
                            'utm_parameter': utm_parameter
                        },
                        beforeSend: function() {
                            // $("#loder_overlay").show();
                        },
                        success: function(data) {
                            if (data) {
                                var data = JSON.parse(data);

                                if (data.userid) {
                                    $.ajax({
                                        url: '<?php echo $searchurl; ?>include/session_set.php',
                                        type: 'post',
                                        data: {
                                            id: data.userid,
                                            token: data.jwtttoken
                                        },
                                        success: function(datadd) {
                                            session_last_login(data.userid);
                                            window.location.href = "";
                                        },

                                    });


                                }

                            } else {
                                $('#inc_login_signup').html('<b>Error : </b>' + data.message);
                            }
                        },
                        error: function() {
                            $('#inc_login_signup').html('<b>Error : </b> Something went wrong. Try again');
                        },
                        complete: function() {

                        },
                    });

                }
            }

            window.onload = function() {
                google.accounts.id.initialize({
                    client_id: '665424091666-tsr89g5u2vgch3f09v2cafbcu7rgn90q.apps.googleusercontent.com',
                    auto_select: true,
                    callback: loginGoogleCredentialResponse
                });
                try {
                    $page = basename($_SERVER['PHP_SELF']);
                    if ($page != ' https://easyshiksha.com/online_courses/internship') {
                        google.accounts.id.prompt();
                    }
                } catch (e) {

                }
            }
        </script>

    <?php } else {
    } ?>


    <!-- otp verfication -->
    <script>
        let alreadygenratedphone = [];
        window.addEventListener('load', function() {
            const otpInputs = document.querySelector('[data-otp-inputs]');
            const resentOtpBtn = document.querySelector('[data-otp-resend-btn]');
            let display = document.querySelector('[data-show-timer]');
            let singleDigitOtpNumber = document.querySelectorAll('[data-otp-inputs] .otp-single-field');
            let resetMobileNumber = document.querySelector('[data-edit-mobile-otp]');
            let phoneNumberField1 = document.querySelector('[data-phone-number-field]');
            let countryCodeField = document.querySelector('[data-country-prefix-container]');
            let otpWrapper = document.querySelector('[data-show-hide-otp-area]');
            let bgColor = document.querySelector('[data-validate-phone-number-wrapper]');
            const verifyBtn = document.querySelector('[data-disable-vertify-btn]');
            let waitForTimerText = document.querySelector('[data-wait-for-timer]');
            if (otpInputs) {
                singleDigitOtpNumber.forEach((input, index) => {
                    input.addEventListener("input", async (e) => {
                        const value = e.target.value;
                        if (value && index < singleDigitOtpNumber.length - 1) {
                            singleDigitOtpNumber[index + 1].focus();
                        }
                        const otpCode = Array.from(singleDigitOtpNumber).map(input => input.value).join("");
                        if (otpCode.length === singleDigitOtpNumber.length) {
                            let otpcheck = await submitOtp(otpCode);
                            if (otpcheck) {
                                $(".isotpverified").val(1);
                                phoneNumberField1.setAttribute('disabled', 'true');
                                resetMobileNumber.style.display = "none";
                                verifyBtn.style.display = "block";
                                countryCodeField.style.pointerEvents = "none";
                                verifyBtn.textContent = '✔';
                                verifyBtn.style.color = "#fff";
                                verifyBtn.style.backgroundColor = "#00c700";
                                verifyBtn.classList.add('pointer-events-disabled');
                                otpWrapper.style.maxHeight = "0px";
                                otpWrapper.style.transform = "scale(0)";
                                otpWrapper.style.display = "none";
                                location.reload();
                            } else {


                                otpInputs.classList.add('otp-mismatched');

                                setTimeout(function() {
                                    otpInputs.classList.remove('otp-mismatched');

                                }, 350)

                                singleDigitOtpNumber.forEach(function(input) {
                                    input.value = "";
                                })
                            }
                        }
                    });
                    input.addEventListener("keydown", (e) => {
                        if (e.key === "Backspace" && !input.value && index > 0) {
                            singleDigitOtpNumber[index - 1].focus();
                        }
                    });
                });
                otpInputs.addEventListener("paste", async (event) => {
                    event.preventDefault();
                    let pastedText = (event.clipboardData || window.clipboardData).getData("text").trim();
                    if (pastedText.length === singleDigitOtpNumber.length) {
                        pastedText.split("").forEach((char, index) => {
                            if (singleDigitOtpNumber[index]) {
                                singleDigitOtpNumber[index].value = char;
                            }
                        });
                        const otpCode = Array.from(singleDigitOtpNumber).map(input => input.value).join("");
                        if (otpCode.length === singleDigitOtpNumber.length) {
                            let otpcheck = await submitOtp(otpCode);
                            if (otpcheck) {
                                $(".isotpverified").val(1);
                                phoneNumberField1.setAttribute('disabled', 'true');
                                resetMobileNumber.style.display = "none";
                                verifyBtn.style.display = "block";
                                countryCodeField.style.pointerEvents = "none";
                                verifyBtn.textContent = '✔';
                                verifyBtn.style.color = "#fff";
                                verifyBtn.style.backgroundColor = "#00c700";
                                verifyBtn.classList.add('pointer-events-disabled');
                                otpWrapper.style.maxHeight = "0px";
                                otpWrapper.style.transform = "scale(0)";
                                otpWrapper.style.display = "none";
                                location.reload();
                            } else {

                            }
                        }
                    }
                });
            }

            function submitOtp(otpCode) {
                $(".otperror-msg").text('');
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: 'https://easyshiksha.com/Home/otpverify',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            user_id: '<?php echo $user_id ?>',
                            otp: otpCode,
                            phone: $("#otpmodal #otpphonenumber").val() ? $("#otpmodal #otpphonenumber").val() : $("#newphonenumber").val(),
                            phonecode: $("#otpmodal #otpcountrycode").val() ? $("#otpmodal #otpcountrycode").val() : $("#newcountrycode").val()
                        },
                        success: function(data) {
                            if (data.code == 200) {
                                verifyemailuser().then((res) => {
                                    resolve(true);
                                });
                            } else {
                                resolve(false);
                            }
                        },
                        error: function() {
                            resolve(false);
                        }
                    });
                });
            }

            function verifyemailuser() {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: 'https://easyshiksha.com/Home/sendemailverification',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            user_id: '<?php echo $user_id ?>',
                        },
                        success: function(data) {
                            resolve(true);
                        },
                        error: function() {
                            resolve(false);
                        }
                    });
                });
            }

            let timerObj = '';

            function setClock() {
                waitForTimerText.style.display = "block";

                resentOtpBtn.style.display = "none";
                display.style.display = "block";
                singleDigitOtpNumber.forEach(function(val) {
                    val.value = "";
                });
                resentOtpBtn.setAttribute("disabled", "true");

                let Clockcount = 30;

                // SVG ring setup
                const circle = document.querySelector('.progress-ring__circle');
                const radius = circle.r.baseVal.value;
                const circumference = 2 * Math.PI * radius;

                circle.style.strokeDasharray = `${circumference}`;
                circle.style.strokeDashoffset = `0`;

                function setProgress(percent) {
                    const offset = circumference - (percent / 100) * circumference;
                    circle.style.strokeDashoffset = offset;
                }

                setProgress(100); // full ring at start

                timerObj = setInterval(function() {
                    Clockcount -= 1;

                    // update timer display
                    display.textContent = `00:${Clockcount < 10 ? '0' + Clockcount : Clockcount}`;

                    // update circle progress
                    const progressPercent = (Clockcount / 30) * 100;
                    setProgress(progressPercent);

                    if (Clockcount <= 0) {
                        waitForTimerText.style.display = "none";

                        clearInterval(timerObj);
                        resentOtpBtn.removeAttribute('disabled');
                        resentOtpBtn.style.display = "block";
                        display.style.display = "none";
                    }
                }, 1000);
            }
            if (resentOtpBtn) {
                resentOtpBtn.addEventListener('click', async function() {
                    $('[data-phone-field-error]').text('');
                    let senotptostudentfun = await senotptostudent();
                    if (senotptostudentfun == "ok") {
                        clearInterval(timerObj);
                        display.textContent = '';
                        phoneNumberField1.setAttribute('disabled', 'true');
                        countryCodeField.style.pointerEvents = "none";
                        setClock();
                        bgColor.style.backgroundColor = "#EEE";
                    } else if (senotptostudentfun == "issue") {
                        $(".isotpverified").val(1);
                        phoneNumberField1.setAttribute('disabled', 'true');
                        resetMobileNumber.style.display = "none";
                        verifyBtn.style.display = "block";
                        countryCodeField.style.pointerEvents = "none";
                        verifyBtn.textContent = '✔';
                        verifyBtn.style.color = "#fff";
                        verifyBtn.style.backgroundColor = "#00c700";
                        verifyBtn.classList.add('pointer-events-disabled');
                        otpWrapper.style.maxHeight = "0px";
                        otpWrapper.style.transform = "scale(0)";
                        otpWrapper.style.display = "none";
                        location.reload();

                    } else {
                        bgColor.style.borderColor = 'red';
                    }
                });
            }



            if (verifyBtn) {
                verifyBtn.addEventListener('click', async function() {
                    verifyBtn.classList.add('pointer-events-disabled');
                    $(".otperror-msg").text('');
                    $('[data-phone-field-error]').text('');
                    let filter = alreadygenratedphone.filter((e) => e == phoneNumberField1.value)[0];
                    if (!filter) {
                        let senotptostudentfun = await senotptostudent();
                        if (senotptostudentfun == "ok") {
                            verifyBtn.classList.remove('pointer-events-disabled');
                            clearInterval(timerObj);
                            display.textContent = '';
                            resetMobileNumber.style.display = "block";
                            phoneNumberField1.setAttribute('disabled', 'true');
                            countryCodeField.style.pointerEvents = "none";
                            otpWrapper.style.maxHeight = '100%';
                            otpWrapper.style.transform = 'scale(1)';
                            otpWrapper.style.display = "block";
                            setClock();
                            bgColor.style.backgroundColor = "#EEE";
                            verifyBtn.style.display = "none";
                            if (phoneNumberField1.value) {
                                alreadygenratedphone.push(phoneNumberField1.value);
                            }
                        } else if (senotptostudentfun == "issue") {
                            $(".isotpverified").val(1);
                            phoneNumberField1.setAttribute('disabled', 'true');
                            resetMobileNumber.style.display = "none";
                            verifyBtn.style.display = "block";
                            countryCodeField.style.pointerEvents = "none";
                            verifyBtn.textContent = '✔';
                            verifyBtn.style.color = "#fff";
                            verifyBtn.style.backgroundColor = "#00c700";
                            verifyBtn.classList.add('pointer-events-disabled');
                            otpWrapper.style.maxHeight = "0px";
                            otpWrapper.style.transform = "scale(0)";
                            otpWrapper.style.display = "none";
                            //   location.reload();
                        } else {
                            verifyBtn.classList.remove('pointer-events-disabled');
                            bgColor.style.borderColor = 'red';
                        }
                    } else {
                        verifyBtn.classList.remove('pointer-events-disabled');
                        clearInterval(timerObj);
                        display.textContent = '';
                        resetMobileNumber.style.display = "block";
                        phoneNumberField1.setAttribute('disabled', 'true');
                        countryCodeField.style.pointerEvents = "none";
                        otpWrapper.style.maxHeight = '100%';
                        otpWrapper.style.transform = 'scale(1)';
                        otpWrapper.style.display = "block";
                        setClock();
                        bgColor.style.backgroundColor = "#EEE";
                        verifyBtn.style.display = "none";
                    }
                });
            }
            if (resetMobileNumber) {
                resetMobileNumber.addEventListener('click', function() {
                    resetMobileNumber.style.display = "none";
                    phoneNumberField1.removeAttribute('disabled');
                    countryCodeField.style.pointerEvents = "auto";
                    resetMobileNumber.style.display = "none";
                    bgColor.style.backgroundColor = "#FFF";
                    otpWrapper.style.maxHeight = "0px";
                    otpWrapper.style.transform = "scale(0)";
                    otpWrapper.style.display = "none";
                    this.style.display = "none";
                    verifyBtn.style.display = "block";
                })
            }

            let element = document.querySelector('#otpmodal')

            if ('<?php echo $contact ?>' && element) {
                verifyBtn.classList.remove('pointer-events-disabled');
                if (!'<?php echo $countrylist ?>') {
                    verifyBtn.style.display = "none";
                    clearInterval(timerObj);
                    display.textContent = '';
                    resetMobileNumber.style.display = "block";
                    phoneNumberField1.setAttribute('disabled', 'true');
                    countryCodeField.style.pointerEvents = "none";
                    otpWrapper.style.maxHeight = '100%';
                    otpWrapper.style.transform = 'scale(1)';
                    otpWrapper.style.display = "block";
                    setClock();
                    bgColor.style.backgroundColor = "#EEE";
                    if (phoneNumberField1.value) {
                        alreadygenratedphone.push(phoneNumberField1.value);
                    }
                }
            }

            let mainotpcontactdiv = document.querySelector(".main-inputBoxcontact");
            if (mainotpcontactdiv) {
                const phoneNumberField = mainotpcontactdiv.querySelector('[data-phone-number-field]');
                let phoneFieldErr = mainotpcontactdiv.querySelector('[data-phone-field-error]');
                if (phoneNumberField) {
                    phoneNumberField.addEventListener("input", function() {
                        const phoneNumberFieldValue = phoneNumberField.value.trim();
                        let borderColor = '#b0b0b0';
                        let phoneFieldMsg = '';
                        let isValid = true;
                        let verifyBtn = document.querySelector('[data-disable-vertify-btn]');
                        if (phoneNumberFieldValue === "") {
                            borderColor = 'red';
                            phoneFieldMsg = 'This field cannot be empty';
                            isValid = false;
                            verifyBtn.classList.add('pointer-events-disabled');
                        } else if (phoneNumberFieldValue.length < 8) {
                            borderColor = 'red';
                            phoneFieldMsg = 'Please input a valid number';
                            isValid = false;
                            verifyBtn.classList.add('pointer-events-disabled');
                        } else if (/^(\d)\1+$/.test(phoneNumberFieldValue)) {
                            borderColor = 'red';
                            phoneFieldMsg = 'Please input a valid number';
                            isValid = false;
                            verifyBtn.classList.add('pointer-events-disabled');
                        }
                        if (isValid) {
                            borderColor = '#b0b0b0';
                            phoneFieldMsg = '';
                            verifyBtn.classList.remove('pointer-events-disabled');
                        }
                        mainotpcontactdiv.style.borderColor = borderColor;
                        phoneFieldErr.textContent = phoneFieldMsg;
                    });
                    phoneNumberField.addEventListener("keypress", function(e) {
                        if (phoneNumberField.value.length >= 12 && e.key !== 'Backspace') {
                            e.preventDefault();
                        }
                    });
                }
            }

        })
    </script>
    <!-- refer -->
    <script>
        const refKey = 'reffer_cokkie';
        if (!document.cookie.includes(refKey)) {
            const referrer = document.referrer;
            if (referrer && !referrer.includes(location.hostname)) {
                document.cookie = refKey + '=' + encodeURIComponent(referrer) + '; path=/; max-age=604800'; // 7 days
                $(".REFERER").val(referrer);
            } else {
                $(".REFERER").val('direct');
            }
        }

        const params = new URLSearchParams(window.location.search);
        if (params.get('utm_source') || params.get('utm_medium') || params.get('utm_medium')) {
            const utm = {
                source: params.get('utm_source') ? params.get('utm_source') : '',
                medium: params.get('utm_medium') ? params.get('utm_medium') : '',
                campaign: params.get('utm_medium') ? params.get('utm_campaign') : ''
            };
            localStorage.setItem('utm_data', JSON.stringify(utm));
            $(".utm_parameter").val(JSON.stringify(utm));
        }
    </script>
    <!--  -->
    <!--  -->
    <script>
        try {
            let keypressTimeoutHeader;
            let searchCourseFieldHeader = document.querySelector('[data-search-course-field-for-header]');
            let clearSearchQueryBtnHeader = document.querySelector('[data-clear-search-field-for-header]');
            let ghostSuggestFIeldHeader = document.querySelector('[data-ghostsuggestion-field-search-for-header]');
            let showTabIconHeader = document.querySelector('[data-show-tab-suggestion-for-header]');
            let searchResultsListHeader = document.querySelector('[data-search-results-for-header]');
            let btnSubmitSearchHeader = document.querySelector('[data-search-page-btn-for-header]');
            let searchQueryFormHeaderES = document.querySelector('[data-course-search-query-form-header]');

            // 
            //

            if (!btnSubmitSearchHeader || !searchResultsListHeader || !showTabIconHeader || !ghostSuggestFIeldHeader || !clearSearchQueryBtnHeader || !searchCourseFieldHeader) {
                throw 'break early is the variables aren \'t found'
            }



            document.addEventListener('click', function(event) {
                if (!searchResultsListHeader.contains(event.target)) {
                    searchResultsListHeader.classList.remove('active');
                }
            });

            // 

            clearSearchQueryBtnHeader.addEventListener('click', function(event) {
                event.stopImmediatePropagation();
                searchResultsListHeader.classList.remove('active');
                setTimeout(() => {
                    searchResultsListHeader.innerHTML = "";
                }, 250)
                searchCourseFieldHeader.classList.add('empty-search-field-query');
                searchCourseFieldHeader.value = "";
                this.classList.remove('active');
                showTabIconHeader.classList.remove('active');
                ghostSuggestFIeldHeader.textContent = '';

            })

            searchCourseFieldHeader.addEventListener('input', (event) => {

                searchResultsListHeader.classList.add('active');
                searchResultsListHeader.innerHTML =
                    `
                <li class="shimmer-ui-header-seach-field"></li>
                <li class="shimmer-ui-header-seach-field" ></li>
                <li class="shimmer-ui-header-seach-field" ></li>
                <li class="shimmer-ui-header-seach-field" ></li>
                <li class="shimmer-ui-header-seach-field" ></li>
                `;

                if (event.target.value.trim()) {
                    clearSearchQueryBtnHeader.classList.add('active');
                } else {
                    ghostSuggestFIeldHeader.textContent = '';

                    showTabIconHeader.classList.remove('active')

                    clearSearchQueryBtnHeader.classList.remove('active');
                    searchResultsListHeader.classList.remove('active');
                    setTimeout(() => {
                        searchResultsListHeader.innerHTML = "";
                    }, 250)

                }

                updateSearchQueryHeaderCourseSearchField(event);

            })

            function applyGhostSuggestionOnHeaderSearchField() {
                const userInputHeaderSearchField = searchCourseFieldHeader.value.trim();
                const ghostTextFieldHeader = ghostSuggestFIeldHeader.textContent.trim();

                if (ghostTextFieldHeader && ghostTextFieldHeader.toLowerCase().startsWith(userInputHeaderSearchField.toLowerCase())) {
                    searchCourseFieldHeader.value = ghostTextFieldHeader;
                    ghostSuggestFIeldHeader.textContent = '';
                    showTabIconHeader.classList.remove('active');
                    // fetchSearchQueryHeaderSearchField(searchCourseFieldHeader.value.trim());
                    clearSearchQueryBtnHeader.classList.add('active');
                }
            }


            searchCourseFieldHeader.addEventListener('keydown', (e) => {

                if (e.key === 'Tab') {
                    e.preventDefault();
                    applyGhostSuggestionOnHeaderSearchField();
                    submitSearchFormHeaderCourseField()
                } else if (e.key === "Escape" || e.key === "Delete") {
                    showTabIconHeader.classList.remove('active');
                    ghostSuggestFIeldHeader.textContent = '';
                } else if (e.key === "ArrowDown") {
                    e.preventDefault();
                    const searchResArrHeaderSearchField = Array.from(searchResultsListHeader.children);
                    if (!searchResArrHeaderSearchField.length) return;

                    let foundActiveHeaderSearchFIeld = false;

                    for (let i = 0; i < searchResArrHeaderSearchField.length; i++) {
                        if (searchResArrHeaderSearchField[i].classList.contains('active')) {
                            foundActiveHeaderSearchFIeld = true;

                            if (i < searchResArrHeaderSearchField.length - 1) {
                                searchResArrHeaderSearchField[i].classList.remove('active');
                                searchResArrHeaderSearchField[i + 1].classList.add('active');
                                searchResArrHeaderSearchField[i + 1].scrollIntoView({
                                    block: "nearest"
                                });
                                searchCourseFieldHeader.value = searchResArrHeaderSearchField[i + 1].textContent;
                                ghostSuggestFIeldHeader.textContent = '';
                                showTabIconHeader.classList.remove('active');
                            }
                            break;
                        }
                    }

                    if (!foundActiveHeaderSearchFIeld) {
                        searchResArrHeaderSearchField[0].classList.add('active');
                        searchResArrHeaderSearchField[0].scrollIntoView({
                            block: "nearest"
                        });
                        // console.log('searchResArrHeaderSearchField[0]',searchResArrHeaderSearchField[0])
                        searchCourseFieldHeader.value = searchResArrHeaderSearchField[0].textContent;
                        ghostSuggestFIeldHeader.textContent = '';
                        showTabIconHeader.classList.remove('active');
                    }
                } else if (e.key === "ArrowUp") {
                    e.preventDefault();
                    const searchResArrHeaderSearchField = Array.from(searchResultsListHeader.children);
                    if (!searchResArrHeaderSearchField.length) return;

                    let foundActiveHeaderSearchFIeld = false;

                    for (let i = 0; i < searchResArrHeaderSearchField.length; i++) {
                        if (searchResArrHeaderSearchField[i].classList.contains('active')) {
                            foundActiveHeaderSearchFIeld = true;

                            if (i > 0) {
                                searchResArrHeaderSearchField[i].classList.remove('active');
                                searchResArrHeaderSearchField[i - 1].classList.add('active');
                                searchResArrHeaderSearchField[i - 1].scrollIntoView({
                                    block: "nearest"
                                });
                                searchCourseFieldHeader.value = searchResArrHeaderSearchField[i - 1].textContent;
                                ghostSuggestFIeldHeader.textContent = '';
                                showTabIconHeader.classList.remove('active');
                            }
                            break;
                        }
                    }

                    if (!foundActiveHeaderSearchFIeld) {

                        searchResArrHeaderSearchField[0].classList.add('active');
                        searchResArrHeaderSearchField[0].scrollIntoView({
                            block: "nearest"
                        });
                        // console.log('searchResArrHeaderSearchField[0]',searchResArrHeaderSearchField[0])
                        searchCourseFieldHeader.value = searchResArrHeaderSearchField[0].textContent;
                        ghostSuggestFIeldHeader.textContent = '';
                        showTabIconHeader.classList.remove('active');
                        // 
                    }
                } else if (e.key === "Enter") {
                    e.preventDefault();
                    const searchResArrHeaderSearchField = Array.from(searchResultsListHeader.children);
                    const activeItem = searchResArrHeaderSearchField.find(item => item.classList.contains('active'));
                    if (activeItem) {
                        const link = activeItem.querySelector('a');
                        if (link) {
                            link.click();
                        }
                    } else {
                        // submitSearchFormHeaderCourseField()
                        searchQueryFormHeaderES.submit();

                    }

                }
            });


            showTabIconHeader.addEventListener('click', applyGhostSuggestionOnHeaderSearchField);




            searchQueryFormHeaderES.addEventListener('submit', function() {
                submitSearchFormHeaderCourseField()
            })

            searchCourseFieldHeader.addEventListener('input', () => {
                submitSearchFormHeaderCourseField()
            });



            function submitSearchFormHeaderCourseField() {
                const userInputHeaderSearchField = searchCourseFieldHeader.value.trim();
                if (!userInputHeaderSearchField) {
                    showTabIconHeader.classList.remove('active');
                    ghostSuggestFIeldHeader.textContent = '';
                }

                // 
                var search = encodeURIComponent(searchCourseFieldHeader.value.trim());
                // var search = searchCourseFieldHeader.value;
                var newSearchUl = 'https://easyshiksha.com/online_courses/Course/search?search=' + search;

                document.querySelector('[data-course-search-query-form-header]').setAttribute('action', newSearchUl)
                // 
            }



            function updateSearchQueryHeaderCourseSearchField(e) {
                ghostSuggestFIeldHeader.textContent = '';
                showTabIconHeader.classList.remove('active');
                // 
                if (keypressTimeoutHeader) {
                    clearTimeout(keypressTimeoutHeader);
                }
                keypressTimeoutHeader = setTimeout(() => {
                    if (!e.target.value.trim()) {
                        searchResultsListHeader.innerHTML = "";

                        return
                    }
                    fetchSearchQueryHeaderSearchField(e.target.value)
                    return
                }, 300)

                if (e.keyCode === 9) {


                }

            }

            // 
            // 
            let headerSearchFieldCachedRes = {};

            function cacheHeaderSearchQueryData(searchVal) {
                const raw = sessionStorage.getItem('headerSearchFieldCache');
                if (raw) {
                    try {
                        headerSearchFieldCachedRes = JSON.parse(raw);
                        if (headerSearchFieldCachedRes[searchVal]) {
                            return true;
                        } else {
                            return false;
                        }
                    } catch (err) {
                        console.error("Cache parse failed", err);
                        headerSearchFieldCachedRes = {};
                        return false;
                    }
                } else {
                    return false;
                }
            }


            // 


            function fetchSearchQueryHeaderSearchField(searchQueryHeaderSearchField) {
                // 
                const key = searchQueryHeaderSearchField.toLowerCase()
                if (cacheHeaderSearchQueryData(key)) {
                    searchResultsListHeader.innerHTML = headerSearchFieldCachedRes[key];
                    searchResultsListHeader.classList.add('active');
                    // 
                    // 
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(headerSearchFieldCachedRes[key], 'text/html');

                    generateGhostSuggestionsForHeaderSearchField(doc);

                    //  console.log('window?.headerSearchField[searchQueryHeaderSearchField]', headerSearchFieldCachedRes[key])

                    return
                }

                // 


                fetch('https://easyshiksha.com/Profile/ajax_search', {
                        method: 'POST',
                        body: 'search=' + encodeURIComponent(key),
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded"
                        }
                    })
                    .then((data) => {
                        return data.text();
                    })
                    .then((res) => {
                        if (!res.trim()) {
                            searchResultsListHeader.innerHTML = "<li style='color:#de9406;font-weight:600'>We couldn't find any matches. Feel free to try another keyword.</li>"
                            searchResultsListHeader.classList.add('active');
                            return
                        }

                        searchResultsListHeader.innerHTML = res;
                        searchResultsListHeader.classList.add('active');
                        // 
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(res, 'text/html');

                        generateGhostSuggestionsForHeaderSearchField(doc);
                        // 
                        //
                        // window.headerSearchFieldCache = window.headerSearchFieldCache ? window.headerSearchFieldCache : {};
                        headerSearchFieldCachedRes[key.toLowerCase()] = res
                        sessionStorage.setItem('headerSearchFieldCache', JSON.stringify(headerSearchFieldCachedRes))
                    })
            }


            function generateGhostSuggestionsForHeaderSearchField(doc) {
                const suggestionsHeaderSearchField = doc?.querySelectorAll('li .title');
                const userInputHeaderSearchField = searchCourseFieldHeader.value.trim().toLowerCase();

                if (!userInputHeaderSearchField || !suggestionsHeaderSearchField.length) {
                    ghostSuggestFIeldHeader.textContent = '';
                    showTabIconHeader.classList.remove('active');

                    return;
                }

                for (let suggestion of suggestionsHeaderSearchField) {
                    const suggestionTextHeaderSearchField = suggestion.textContent.trim();

                    if (suggestionTextHeaderSearchField.toLowerCase().startsWith(userInputHeaderSearchField)) {
                        ghostSuggestFIeldHeader.textContent =
                            searchCourseFieldHeader.value + suggestionTextHeaderSearchField.slice(userInputHeaderSearchField.length);
                        showTabIconHeader.classList.add('active')
                        return;
                    }
                }

                ghostSuggestFIeldHeader.textContent = '';
            }

        } catch (e) {}
    </script>
   