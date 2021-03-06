<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/primer.css') }}" rel="stylesheet">

<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&family=Roboto:wght@100;300&display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style type="text/css">
@font-face {
    font-family: RobotoThin;
    src: url(../fonts/roboto/Roboto-Thin.ttf);
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: Roboto-Light;
    src: url(../fonts/roboto/Roboto-Light.ttf);
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Cormorant-Regular';
    src: url(../fonts/cormorant/CormorantGaramond-Regular.ttf);
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'CormorantSemiBold';
    src: url(../fonts/cormorant/CormorantGaramond-SemiBold.ttf);
    font-weight: normal;
    font-style: normal;
}

        body {
            font-size: 102%;
            font-family: 'Roboto-Light', sans-serif;
            letter-spacing: 2px;
        }

        h1, h2, .font-serif {
            font-family: 'Cormorant-Regular', serif;
            letter-spacing: 0.5px;
        }

        h1, h2 , h3, h4 {
            line-height: 1.1;
            margin-bottom: .5em;
        }

        a {
            color: inherit;
        }

        a:hover {
            text-decoration: none;
        }

        .font-lg {
            font-size: 3.25rem;
        }

        .font-thin {
            font-family: 'RobotoThin', sans-serif;
        }

        .font-600 {
            font-family: 'Cormorant-SemiBold', serif;
        }

        .btn-lg {
            /*font-size: 1.2rem;*/
            padding: .8rem 2.25rem !important;
        }

        .border-dotted {
            background-image: linear-gradient(to right, #09244b 10%, rgba(255, 255, 255, 0) 0%);
            background-position: bottom;
            background-size: 24px 2.8px;
            background-repeat: repeat-x;
        }

        .btn:focus, button:focus {
            outline: none;
            box-shadow: none;
        }

        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            -webkit-animation-duration: .2s;
            animation-duration: .2s;
        }

        .dropdown-item:hover {
            background-color: transparent;
        }

        footer a:not(.btn):hover, #lead-bg a:not(.btn):hover {
            color: inherit;
            opacity: 0.6;
        }

        @-webkit-keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 12%, 0);
    transform: translate3d(0, 12%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 12%, 0);
    transform: translate3d(0, 12%, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
}

.animate__animated.animate__faster {
    -webkit-animation-duration: .2s;
    animation-duration: .2s;
    -webkit-animation-duration: .2s;
    animation-duration: .2s;
}

.play-icon {
    opacity: 0.8;
    transition: .2s;
}

.video-container:hover .play-icon {
    opacity: 1;
}
    </style>

    @stack('header')
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ mix('js/app.js') }}"></script>

    <script type="text/javascript">
        onMobile = function() {
            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
        }

        $(document).ready(function() {
            $('button.navbar-toggler').on('click', function () {
                let $hamburger = $('.animated-icon2');

                $hamburger.toggleClass('open');

                if ($hamburger.hasClass('open')) {
                    $('nav.navbar').not('.navbar-fixed').addClass('bg-primary');
                } else {
                    setTimeout(function() {
                        $('nav.navbar').not('.navbar-fixed').delay(200).removeClass('bg-primary');
                    }, 200);
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).on('show.bs.dropdown', '.nav-item', function (event) {
            console.log($(event.relatedTarget));
          $(event.relatedTarget).addClass('bg-primary-light');
        });

        $(document).on('hide.bs.dropdown', '.nav-item', function (event) {
            $(event.relatedTarget).removeClass('bg-primary-light');
        });

        $('#video1-modal, #video2-modal').on('hidden.bs.modal', function (e) {
            let $video = $(e.target).find('video');
            $video.get(0).pause();
            $video.get(0).currentTime = 0;
        })
    </script>
    @stack('scripts')
</body>
</html>
