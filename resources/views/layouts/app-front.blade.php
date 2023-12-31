<!DOCTYPE html>

<html lang="en">

<?php
$baseurl = 'https://monitoring.globaldeva.com/';
?>


<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ request()->routeIs('home') ? 'Home | Global Pristya ID' : (request()->routeIs('about') ? 'About | Global Pristya ID' : (request()->routeIs('whatwedo') ? 'What We Do | Global Pristya ID' : 'Contact Us | Global Pristya ID')) }}</title>
    <!-- Add the FilePond CSS -->
    <!-- Add this in the <head> section of your HTML -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ $baseurl }}/public/img/favicon3/apple-icon-57x57.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ $baseurl }}/public/img/favicon3/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ $baseurl }}/public/img/favicon3/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ $baseurl }}/public/img/favicon3/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ $baseurl }}/public/img/favicon3/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ $baseurl }}/public/img/favicon3/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ $baseurl }}/public/img/favicon3/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ $baseurl }}/public/img/favicon3/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ $baseurl }}/public/img/favicon3/apple-icon-180x180.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ $baseurl }}/public/img/favicon3/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ $baseurl }}/public/img/favicon3/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ $baseurl }}/public/img/favicon3/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ $baseurl }}/public/img/favicon3/favicon-16x16.png">
    <link rel="manifest" href="{{ $baseurl }}/public/img/favicon3/manifest.json">
    <meta name="msapplication-TileColor" content="{{ asset('gopiicon.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('gopiicon.png') }}">
    <meta name="theme-color" content="{{ asset('gopiicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ $baseurl }}/public/css/style_timelane.css?v2?>">
    <link rel="stylesheet" href="{{ $baseurl }}/public/css/style.css?v=1.0">
    <link rel="stylesheet" href="{{ $baseurl }}/public/css/responsive.css">
    <link rel="stylesheet" href="{{ $baseurl }}/public/css/dropify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">


    @yield('css')

    <style>
        .logo-box,
        .main-navigation {
            float: left;
        }

        .right-side-box {
            float: right;
        }

        .desktop-show {
            display: block !important;
        }

        .mobile-show {
            display: none !important;
        }

        @media screen and (max-width:450px) {
            .desktop-show {
                display: none !important;
            }

            .mobile-show {
                display: block !important;
            }

            .header-navigation.fixed-top {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 1000;
                /* Atur nilai z-index sesuai kebutuhan */
            }
        }

        .header-navigation.fixed-top {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            /* Atur nilai z-index sesuai kebutuhan */
        }

        .swiper-pagination-bullet {
            border: 1px solid #1da1f2;
        }

        .swiper-pagination-bullet-active {
            background: #1da1f2
        }

        img:not([draggable]),
        embed,
        object,
        video {
            max-width: 100%;
            height: auto;
        }

        .swiper-container {
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
            z-index: 1;
            width: 100%;
            height: 100%;
        }

        .swiper-container-no-flexbox .swiper-slide {
            float: left
        }

        .swiper-container-vertical>.swiper-wrapper {
            -webkit-box-orient: vertical;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            box-sizing: content-box
        }

        .swiper-container-android .swiper-slide,
        .swiper-wrapper {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0)
        }

        .swiper-container-multirow>.swiper-wrapper {
            -webkit-box-lines: multiple;
            -moz-box-lines: multiple;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .swiper-container-free-mode>.swiper-wrapper {
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            margin: 0 auto
        }

        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex: 0 0 auto;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative
        }

        .swiper-container-autoheight,
        .swiper-container-autoheight .swiper-slide {
            height: auto
        }

        .swiper-container-autoheight .swiper-wrapper {
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: flex-start;
            -webkit-transition-property: -webkit-transform, height;
            -webkit-transition-property: height, -webkit-transform;
            transition-property: height, -webkit-transform;
            transition-property: transform, height;
            transition-property: transform, height, -webkit-transform
        }

        .swiper-container .swiper-notification {
            position: absolute;
            left: 0;
            top: 0;
            pointer-events: none;
            opacity: 0;
            z-index: -1000
        }

        .swiper-wp8-horizontal {
            -ms-touch-action: pan-y;
            touch-action: pan-y
        }

        .swiper-wp8-vertical {
            -ms-touch-action: pan-x;
            touch-action: pan-x
        }

        .swiper-button-next,
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            width: 27px;
            height: 44px;
            margin-top: -22px;
            z-index: 10;
            cursor: pointer;
            background-size: 27px 44px;
            background-position: center;
            background-repeat: no-repeat
        }

        .swiper-button-next.swiper-button-disabled,
        .swiper-button-prev.swiper-button-disabled {
            opacity: .35;
            cursor: auto;
            pointer-events: none
        }

        .swiper-button-prev,
        .swiper-container-rtl .swiper-button-next {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            left: 10px;
            right: auto
        }

        .swiper-button-prev.swiper-button-black,
        .swiper-container-rtl .swiper-button-next.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
        }

        .swiper-button-prev.swiper-button-white,
        .swiper-container-rtl .swiper-button-next.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
        }

        .swiper-button-next,
        .swiper-container-rtl .swiper-button-prev {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23007aff'%2F%3E%3C%2Fsvg%3E");
            right: 10px;
            left: auto
        }

        .swiper-button-next.swiper-button-black,
        .swiper-container-rtl .swiper-button-prev.swiper-button-black {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23000000'%2F%3E%3C%2Fsvg%3E")
        }

        .swiper-button-next.swiper-button-white,
        .swiper-container-rtl .swiper-button-prev.swiper-button-white {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E")
        }

        .swiper-pagination {
            position: absolute;
            text-align: center;
            -webkit-transition: .3s;
            transition: .3s;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            z-index: 10
        }

        .swiper-pagination.swiper-pagination-hidden {
            opacity: 0
        }

        .swiper-container-horizontal>.swiper-pagination-bullets,
        .swiper-pagination-custom,
        .swiper-pagination-fraction {
            bottom: 10px;
            left: 0;
            width: 100%
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            display: inline-block;
            border-radius: 100%;
            background: #000;
            opacity: .2
        }

        button.swiper-pagination-bullet {
            border: none;
            margin: 0;
            padding: 0;
            box-shadow: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -webkit-appearance: none;
            appearance: none
        }

        .swiper-pagination-clickable .swiper-pagination-bullet {
            cursor: pointer
        }

        .swiper-pagination-white .swiper-pagination-bullet {
            background: #fff
        }

        .swiper-pagination-bullet-active {
            opacity: 1;
            background: #007aff
        }

        .swiper-pagination-white .swiper-pagination-bullet-active {
            background: #fff
        }

        .swiper-pagination-black .swiper-pagination-bullet-active {
            background: #000
        }

        .swiper-container-vertical>.swiper-pagination-bullets {
            right: 10px;
            top: 50%;
            -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0)
        }

        .swiper-container-vertical>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 5px 0;
            display: block
        }

        .swiper-container-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px
        }

        .swiper-pagination-progress {
            background: rgba(0, 0, 0, .25);
            position: absolute
        }

        .swiper-pagination-progress .swiper-pagination-progressbar {
            background: #007aff;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: left top;
            transform-origin: left top
        }

        .swiper-container-rtl .swiper-pagination-progress .swiper-pagination-progressbar {
            -webkit-transform-origin: right top;
            transform-origin: right top
        }

        .swiper-container-horizontal>.swiper-pagination-progress {
            width: 100%;
            height: 4px;
            left: 0;
            top: 0
        }

        .swiper-container-vertical>.swiper-pagination-progress {
            width: 4px;
            height: 100%;
            left: 0;
            top: 0
        }

        .swiper-pagination-progress.swiper-pagination-white {
            background: rgba(255, 255, 255, .5)
        }

        .swiper-pagination-progress.swiper-pagination-white .swiper-pagination-progressbar {
            background: #fff
        }

        .swiper-pagination-progress.swiper-pagination-black .swiper-pagination-progressbar {
            background: #000
        }

        .swiper-container-3d {
            -webkit-perspective: 1200px;
            -o-perspective: 1200px;
            perspective: 1200px
        }

        .swiper-container-3d .swiper-cube-shadow,
        .swiper-container-3d .swiper-slide,
        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top,
        .swiper-container-3d .swiper-wrapper {
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d
        }

        .swiper-container-3d .swiper-slide-shadow-bottom,
        .swiper-container-3d .swiper-slide-shadow-left,
        .swiper-container-3d .swiper-slide-shadow-right,
        .swiper-container-3d .swiper-slide-shadow-top {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 10
        }

        .swiper-container-3d .swiper-slide-shadow-left {
            background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-container-3d .swiper-slide-shadow-right {
            background-image: -webkit-gradient(linear, right top, left top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-container-3d .swiper-slide-shadow-top {
            background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-container-3d .swiper-slide-shadow-bottom {
            background-image: -webkit-gradient(linear, left bottom, left top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, 0)));
            background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0));
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0))
        }

        .swiper-container-coverflow .swiper-wrapper,
        .swiper-container-flip .swiper-wrapper {
            -ms-perspective: 1200px
        }

        .swiper-container-cube,
        .swiper-container-flip {
            overflow: visible
        }

        .swiper-container-cube .swiper-slide,
        .swiper-container-flip .swiper-slide {
            pointer-events: none;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            z-index: 1
        }

        .swiper-container-cube .swiper-slide .swiper-slide,
        .swiper-container-flip .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-active .swiper-slide-active,
        .swiper-container-flip .swiper-slide-active,
        .swiper-container-flip .swiper-slide-active .swiper-slide-active {
            pointer-events: auto
        }

        .swiper-container-cube .swiper-slide-shadow-bottom,
        .swiper-container-cube .swiper-slide-shadow-left,
        .swiper-container-cube .swiper-slide-shadow-right,
        .swiper-container-cube .swiper-slide-shadow-top,
        .swiper-container-flip .swiper-slide-shadow-bottom,
        .swiper-container-flip .swiper-slide-shadow-left,
        .swiper-container-flip .swiper-slide-shadow-right,
        .swiper-container-flip .swiper-slide-shadow-top {
            z-index: 0;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden
        }

        .swiper-container-cube .swiper-slide {
            visibility: hidden;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            width: 100%;
            height: 100%
        }

        .swiper-container-cube.swiper-container-rtl .swiper-slide {
            -webkit-transform-origin: 100% 0;
            transform-origin: 100% 0
        }

        .swiper-container-cube .swiper-slide-active,
        .swiper-container-cube .swiper-slide-next,
        .swiper-container-cube .swiper-slide-next+.swiper-slide,
        .swiper-container-cube .swiper-slide-prev {
            pointer-events: auto;
            visibility: visible
        }

        .swiper-container-cube .swiper-cube-shadow {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #000;
            opacity: .6;
            -webkit-filter: blur(50px);
            filter: blur(50px);
            z-index: 0
        }

        .swiper-container-fade.swiper-container-free-mode .swiper-slide {
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out
        }

        .swiper-container-fade .swiper-slide {
            pointer-events: none;
            -webkit-transition-property: opacity;
            transition-property: opacity
        }

        .swiper-container-fade .swiper-slide .swiper-slide {
            pointer-events: none
        }

        .swiper-container-fade .swiper-slide-active,
        .swiper-container-fade .swiper-slide-active .swiper-slide-active {
            pointer-events: auto
        }

        .swiper-zoom-container {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-align: center
        }

        .swiper-zoom-container>canvas,
        .swiper-zoom-container>img,
        .swiper-zoom-container>svg {
            max-width: 100%;
            max-height: 100%;
            -o-object-fit: contain;
            object-fit: contain
        }

        .swiper-scrollbar {
            border-radius: 10px;
            position: relative;
            -ms-touch-action: none;
            background: rgba(0, 0, 0, .1)
        }

        .swiper-container-horizontal>.swiper-scrollbar {
            position: absolute;
            left: 1%;
            bottom: 3px;
            z-index: 50;
            height: 5px;
            width: 98%
        }

        .swiper-container-vertical>.swiper-scrollbar {
            position: absolute;
            right: 3px;
            top: 1%;
            z-index: 50;
            width: 5px;
            height: 98%
        }

        .swiper-scrollbar-drag {
            height: 100%;
            width: 100%;
            position: relative;
            background: rgba(0, 0, 0, .5);
            border-radius: 10px;
            left: 0;
            top: 0
        }

        .swiper-scrollbar-cursor-drag {
            cursor: move
        }

        .swiper-lazy-preloader {
            width: 42px;
            height: 42px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -21px;
            margin-top: -21px;
            z-index: 10;
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-animation: swiper-preloader-spin 1s steps(12, end) infinite;
            animation: swiper-preloader-spin 1s steps(12, end) infinite
        }

        .swiper-lazy-preloader:after {
            display: block;
            content: "";
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%236c6c6c'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E");
            background-position: 50%;
            background-size: 100%;
            background-repeat: no-repeat
        }

        .swiper-lazy-preloader-white:after {
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20viewBox%3D'0%200%20120%20120'%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20xmlns%3Axlink%3D'http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink'%3E%3Cdefs%3E%3Cline%20id%3D'l'%20x1%3D'60'%20x2%3D'60'%20y1%3D'7'%20y2%3D'27'%20stroke%3D'%23fff'%20stroke-width%3D'11'%20stroke-linecap%3D'round'%2F%3E%3C%2Fdefs%3E%3Cg%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(30%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(60%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(90%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(120%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.27'%20transform%3D'rotate(150%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.37'%20transform%3D'rotate(180%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.46'%20transform%3D'rotate(210%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.56'%20transform%3D'rotate(240%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.66'%20transform%3D'rotate(270%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.75'%20transform%3D'rotate(300%2060%2C60)'%2F%3E%3Cuse%20xlink%3Ahref%3D'%23l'%20opacity%3D'.85'%20transform%3D'rotate(330%2060%2C60)'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E")
        }

        @-webkit-keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg)
            }
        }

        @keyframes swiper-preloader-spin {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg)
            }
        }

        .swiper-container.one {
            padding-top: 40px;
            text-align: center;
        }

        .swiper-container.one .swiper-slide {
            padding: 0 43px;
        }

        .swiper-container {
            width: 100%;
            padding-bottom: 60px;
        }

        .swiper-slide img {
            display: block;
            margin: auto;
            width: 100%;
        }

        .swiper-slide {
            width: 390px;
            height: auto;
            padding: 0 15px;
        }

        .two .swiper-slide {
            width: 300px;
        }

        .swiper-slide img {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .swiper-slide .slider-image .preview-icon {
            z-index: -1;
            width: calc(100% - 30px);
        }

        .swiper-slide.swiper-slide-active .slider-image:hover .preview-icon {
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            z-index: 1;
        }

        .swiper-container-horizontal>.swiper-pagination-bullets,
        .swiper-pagination-custom,
        .swiper-pagination-fraction {
            bottom: 0;
        }

        .swiper-pagination-bullet {
            background: transparent none repeat scroll 0 0;
            border: 1px solid #000000;
            border-radius: 10px;
            display: inline-block;
            height: 10px;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            width: 26px;
            -webkit-transition: 0.2s;
            transition: 0.2s;
        }

        .swiper-pagination-bullet-active {
            background: rgba(0, 0, 0, 0) -webkit-linear-gradient(left, #000000 0%, #ffffff 100%) repeat scroll 0 0;
            background: rgba(0, 0, 0, 0) linear-gradient(to right, #000000 0%, #ffffff 100%) repeat scroll 0 0;
            border: medium none;
            height: 12px;
            opacity: 1;
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            width: 12px;
        }

        .loader {
            position: relative;
            width: 2.5em;
            height: 2.5em;
            transform: rotate(165deg);
        }

        .loader:before,
        .loader:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            display: block;
            width: 0.5em;
            height: 0.5em;
            border-radius: 0.25em;
            transform: translate(-50%, -50%);
        }

        .loader:before {
            animation: before8 2s infinite;
        }

        .loader:after {
            animation: after6 2s infinite;
        }

        @keyframes before8 {
            0% {
                width: 0.5em;
                box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
            }

            35% {
                width: 2.5em;
                box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);
            }

            70% {
                width: 0.5em;
                box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);
            }

            100% {
                box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);
            }
        }

        @keyframes after6 {
            0% {
                height: 0.5em;
                box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
            }

            35% {
                height: 2.5em;
                box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);
            }

            70% {
                height: 0.5em;
                box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);
            }

            100% {
                box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);
            }
        }

        .loader {
            position: absolute;
            top: calc(50% - 1.25em);
            left: calc(50% - 1.25em);
        }

        .site-content {
            flex: 1;
            /* Konten mengambil sisa ruang */
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Minimal 100% tinggi viewport */
            margin: 0;
        }

        .navigation-box .scrollToLink.active a {
            font-weight: bold;
        }

        .navigation-box .scrollToLink:hover a {
            font-weight: bold;
        }
    </style>


</head>

{{-- @php
    $role = Auth::check() ? Auth::user()->role : null;
@endphp --}}

<body>
    <div class="preloader" style="display: none;"></div>
    <div class="page-wrapper">
        <header class="site-header header-one desktop-show" style="background-color: #ffffff;">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation fixed-top"
                style="background-color: #ffffff; ">
                <div class="container clearfix"
                    style="width: 100% !important; padding-right: 0px !important; padding-left: 0px !important; margin-left:5% !important; margin-right:0px !important;">
                    <div class="logo-box clearfix" style="display: flex !important; align-items: center !important;">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('gopilogo.png') }}" class="main-logo" alt="Awesome Image"
                                style="margin-right: 10px !important;">
                        </a>
                        <button class="menu-toggler" data-target=".header-one .main-navigation">
                            <span class="fa fa-bars"></span>
                        </button>
                    </div>
                    <div class="main-navigation" style="margin-left:30% !important;">
                        <ul class="navigation-box one-page-scroll-menu" style="text-align: left;">
                            <li class="scrollToLink {{ request()->routeIs('home') ? 'active' : '' }}">
                                <a class="ex3" href="{{ route('home') }}"
                                    style="color: rgb(0, 0, 0); font-size:20px;">Home</a>
                            </li>
                            <li class="scrollToLink {{ request()->routeIs('about') ? 'active' : '' }}">
                                <a class="ex3" href="{{ route('about') }}"
                                    style="color: rgb(0, 0, 0);  font-size:20px;">About Us</a>
                            </li>
                            <li class="scrollToLink {{ request()->routeIs('whatwedo') ? 'active' : '' }}">
                                <a class="ex3" href="{{ route('whatwedo') }}"
                                    style="color: rgb(0, 0, 0);  font-size:20px;">What We Do</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="right-side-box warna-logout" style="margin-left:20% !important;">
                    <form action="{{ route('contact') }}">
                        <button type="submit" class="btn btn-primary"
                        style="background-color: #F1343B; border-radius: 0 !important;">Contact Us !</button>
                    </form>
                </div>
            </nav>
        </header>
        <header class="site-header header-one mobile-show" style="background-color: #ffffff;">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky slideIn animated fixed-top"
                style="background-color: #ffffff;">
                <div class="container clearfix">
                    <div class="logo-box clearfix" style="margin-right: 20%; float: left;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('gopiicon.png') }}" class="main-logo" alt="Awesome Image"
                                    width="57" height="57">
                            </a>
                            <a style="color: #F1343B; width: 26px; height: 20px; margin-bottom:5%"
                                data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">
                                <i class="fa fa-bars" style="font-size: 35px;"></i>
                            </a>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <ul class="navigation-box one-page-scroll-menu">
                                <li class="scrollToLink current">
                                    <a class="ex3" href="{{ route('home') }}"
                                        style="color: rgb(0, 0, 0);">Home</a>
                                </li>
                                <li class="scrollToLink">
                                    <a class="ex3" href="{{ route('about') }}" style="color: rgb(0, 0, 0);">About
                                        Us</a>
                                </li>                              
                                <li class="scrollToLink">
                                    <a class="ex3" href="{{ route('whatwedo') }}"
                                        style="color: rgb(0, 0, 0);">What
                                        We Do</a>
                                </li>
                                <li class="scrollToLink">
                                    <form action="{{ route('contact') }}">
                                        <button type="submit" class="btn btn-primary"
                                        style="background-color: #F1343B; border-radius: 0 !important; width:100%;">Contact Us !</button>
                                    </form>
                                </li>
                                <li class="scrollToLink">
                                    <p style="color: white"></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <br><br><br>
        @yield('content')
        <footer class="site-footer desktop-show"
            style="background-color: #1E1E1E; height:50vh; padding-top: 116px; padding-bottom: 60px; padding-left:70px; padding-right:60px">
            <div class="">
                <div class="row">
                    <div class="row" style="width: 100%">
                        <div class="col-md-5">
                            <img src="{{ asset('logofooter.png') }}" alt="logo" width="540" height="180"
                                class="mt-5" style="margin-left: 10% !important;">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <p style="color: #FFCE2D; margin-bottom: 2px !important; font-size: 26px;">Address
                                        :</p>
                                    <p style="color: white; font-size: 20px;">GOODEVA CBD Division, Grand <br> Galaxy
                                        CommercialRSK 6 No.
                                        <br> 15,
                                        Kota Bekasi
                                    </p>
                                </div>
                                <div class="col-sm-6" style="height: 10vh !important;">
                                    <p style="color: #FFCE2D; margin-bottom:2px !important; font-size: 26px;">Phone :
                                    </p>
                                    <p style="color: white; font-size: 20px;">(021) 8273-8692 </p>
                                    <p
                                        style="color: #FFCE2D; margin-bottom:2px !important; margin-top:20px !important; font-size: 26px;">
                                        Email :</p>
                                    <p style="color: white; font-size: 20px;">globalpristiya@gopi.com</p>
                                </div>
                                <div class="col-md-6 mt-5">
                                    <div style="color: white; font-size: 28px; font-weight: bold; text-transform: capitalize; line-height: 31.92px;"
                                        class="mb-2">
                                        Follow Us</div>
                                    <a href=""><i class="fa fa-youtube-play mr-3"
                                            style="font-size: 40px; color: white;"></i></a>
                                    <a href=""><i class="fa fa-twitter mx-3"
                                            style="font-size: 40px; color: white;"></i></a>
                                    <a href="https://www.instagram.com/goodeva.id/?hl=id"><i
                                            class="fa fa-instagram mx-3"
                                            style="font-size: 40px; color: white;"></i></a>
                                    <a href="https://www.facebook.com/globalpristya"><i
                                            class="fa fa-facebook-square mx-3"
                                            style="font-size: 40px; color: white;"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="site-footer mobile-show"
            style="background-color: #1E1E1E; padding-top: 10px; padding-bottom: 10px;">
            <div class="col-lg-5" style="margin-top: 20px !important;">
                <img src="{{ asset('logofooter.png') }}" alt="logo" width="255" height="60"
                    style="margin-top: 20px !important;">
            </div>
            <section style="margin-top:2%">
                <div class="col-md-4">
                    <p style="color: #FFCE2D; font-weight: bold; margin-bottom:2px">Address :</p>
                    <p style="color: white">GOODEVA CBD Division, Grand Galaxy CommercialRSK 6 No. 15, Kota Bekasi
                    </p>
                </div>
                <div class="col-md-4">
                    <p style="color: #FFCE2D; margin-bottom:2px"><strong>Phone : </strong></p>
                    <p style="color: white">(021) 8273-8692 </p>
                </div>
                <div class="col-md-2">
                    <p style="color: #FFCE2D; margin-bottom:2px"><strong>Email :</strong></p>
                    <p style="color: white">globalpristiya@gopi.com</p>
                </div>
                <div class="col-md-4">
                    <div style=" color: white; font-size:25px;  font-family: Montserrat; font-weight: 700; text-transform: capitalize; line-height: 31.92px;"
                        class="mb-2">
                        Follow Us</div>
                    <a href=""><i class="fa fa-youtube-play mx-2" style="font-size:24px; color:white"></i></a>
                    <a href=""><i class="fa fa-twitter mx-2" style="font-size:24px; color:white">
                        </i></a>
                    <a href="https://www.instagram.com/goodeva.id/?hl=id"><i class="fa fa-instagram mx-2"
                            style="font-size:24px; color:white"></i></a>
                    <a href="https://www.facebook.com/globalpristya"><i class="fa fa-facebook-square mx-2"
                            style="font-size:24px; color:white"></i></a>
                </div>
            </section>
        </footer>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top" style="display: none;"><i
            class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->

    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="{{ asset('public/js/jquery.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/js/theme.js') }}"></script>
    <script src="{{ asset('public/js/dropify.min.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>




    @yield('js_after')



    <script>
        $(document).ready(function() {

            $('.js-example-basic-single').select2({

                theme: "bootstrap4"

            });

            $('#collapseExample2').on('show.bs.collapse', function() {
                $('#collapseButton').text("Read Less");
            });

            $('#collapseExample2').on('hide.bs.collapse', function() {
                $('#collapseButton').text("Read More");
            });
        });

        function Contact() {
            console.log('Contact function executed');
            window.location.href = "http://localhost:8000/contact";
        }

        var swiper = new Swiper('.swiper-container.two', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            effect: 'coverflow',
            loop: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflow: {
                rotate: 0,
                stretch: 100,
                depth: 150,
                modifier: 1.5,
                slideShadows: false,
            }
        });
    </script>

</body>
</html>
