<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Data Master - Discover the dorm that fits your needs and budget with our comprehensive system.</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Discover the dorm that fits your needs and budget with our comprehensive system.">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    @yield('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <meta name="google-translate-customization" content="..." />
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,tr',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,tr',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }

        function loadGoogleTranslate() {
            var lang = getCookie("googtrans");
            if (lang) {
                var translateElement = document.createElement("script");
                translateElement.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
                document.body.appendChild(translateElement);
                var intervalId = setInterval(function() {
                    var frame = document.querySelector(".goog-te-menu-frame.skiptranslate");
                    if (frame) {
                        clearInterval(intervalId);
                        frame.contentWindow.document.querySelector('.goog-te-menu2-item-selected').click();
                    }
                }, 100);
            } else {
                googleTranslateElementInit();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            loadGoogleTranslate();
        });

        document.addEventListener('click', function() {
            setTimeout(function() {
                var frame = document.querySelector(".goog-te-menu-frame.skiptranslate");
                if (frame) {
                    frame.contentWindow.document.querySelector('.goog-te-menu2-item-selected').click();
                }
            }, 500);
        });
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <style>
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }

        body {
            top: 0 !important;
        }

        .goog-te-gadget-icon {
            display: none !important;
        }
    </style>


</head>

<body class="bg-light">

    <header class="navbar-light header-sticky">
        <livewire:pages.nav-bar>
    </header>

    <main>
        @yield('contents')
    </main>

    @yield('room-modal')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>
