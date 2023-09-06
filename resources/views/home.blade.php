@extends('layouts.app-front')

@section('css')
    <style>
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

            .slider-description {
                background-color: rgba(0, 0, 0, 0.8);
                color: #ffffff;
                padding: 10px;
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
                opacity: 1;
                transition: opacity 0.3s ease;
            }


            .imgpeopledesktop {
                display: none !important;
            }
        }

        .background-video-office {
            width: 100%;
            height: 70vh;
            position: relative;
        }

        .background-video-office video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        .background-video-office-mobile {
            margin-top: 10%;
            width: 390px;
            height: 208px;
            position: relative;
        }

        .background-video-office-mobile video {
            width: 390px;
            height: 208px;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
        }

        @media screen and (max-width:360px) {
            .background-video-office-mobile {
                margin-top: 10%;
                width: 370px;
                height: 208px;
                position: relative;
            }

            .background-video-office-mobile video {
                width: 370px;
                height: 208px;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
            }



        }

        @media screen and (max-width:320px) {
            .background-video-office-mobile {
                margin-top: 10%;
                width: 330px;
                height: 208px;
                position: relative;
            }

            .background-video-office-mobile video {
                width: 330px;
                height: 208px;
                object-fit: cover;
                position: absolute;
                top: 0;
                left: 0;
            }
        }

        @media screen and (max-height:1020px) {
            .desc {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: absolute;
                top: 182px;
                left: -694px;
                width: 100%;
                height: 100%;
            }
        }

        .desc {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 149px;
            left: -694px;
            width: 100%;
            height: 100%;
        }

        .background-image-mobile {
            margin-top: 10%;
            width: 390px;
            height: 208px;
            background-image: url('{{ asset('services.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center;
        }

        .image-containerspecial {
            position: relative;
            display: inline-block;
            margin: 0;
            padding: 0;
        }

        .image-containerspecial img {
            width: 640px;
            height: 800px;
            display: block;
            margin: 0;
            padding: 0;
        }

        .image-containerspecial-mobile {
            position: relative;
            display: inline-block;
            margin: 0;
            padding: 0;
            max-width: 100%;
        }

        .image-containerspecial-mobile img {
            display: block;
            margin: 0;
            padding: 0;
        }

        .image-containerspecial-mobile h1 {
            font-size: 20px;
        }

        .image-text {
            position: absolute;
            bottom: 10px;

            left: 50%;
            transform: translateX(-50%);
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }

        .background-imageoffice {
            width: 100%;
            height: 70vh;
            /* Set the height of the container */
            background-image: url('{{ asset('officemockup.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center center;
        }

        .background-imageoffice-mobile {
            width: 100%;
            height: 50vh;
            /* Set the height of the container */
            background-image: url('{{ asset('officemockup.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center center;
        }

        .carousel {
            max-width: 50vh;
            max-height: 30vh
        }

        .slider-description {
            background-color: rgba(0, 0, 0, 0.8);
            color: #ffffff;
            padding: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            opacity: 1;
            transition: opacity 0.3s ease;
        }

        .slider-image {
            transition: transform 0.3s ease;
        }

        .swiper-slide:hover .slider-image,
        .swiper-slide:hover .slider-description-mobile {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .swiper-slide:hover .slider-description-mobile {
            opacity: 0;
            transition: transform 0.3s ease;
        }


        .swiper-slide:hover .slider-description {
            opacity: 0;
        }

        .slider-description-mobile {
            background-color: rgba(0, 0, 0, 0.8);
            color: #ffffff;
            padding: 10px;
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            opacity: 1;
            transition: opacity 0.3s ease;
        }



        .custom-underline {
            border-bottom: 3px solid #002D92;
        }

        .android-join {
            display: block;
        }

        .iphone-join {
            display: none;
        }

        .iphone-mini {
            display: none;
        }

        @media screen and (width:414px) {
            .iphone-join {
                display: block
            }

            .android-join {
                display: none;
            }
        }

        @media screen and (width:320px) {
            .iphone-mini {
                display: block;
            }

            .ordinary-phone {
                display: none;
            }

            .android-join {
                display: none;
            }

            .iphone-join {
                display: none;
            }

            .iphone-join-mini {
                display: block;
            }
        }

        .iphone-join-mini {
            display: none;
        }

        .swiper-button-prev::before,
        .swiper-button-next::before {
            color: rgba(255, 255, 255, 0);
            /* Warna putih dengan tingkat transparansi 50% */
        }
    </style>
@endsection

@section('content')
    <section class="desktop-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-video-office">
                <video autoplay muted loop>
                    <source src="{{ asset('FN2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="centered"
                style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); width: 100%; text-align: center;">
                <a href="#Join" style="text-decoration: none; color: #ffffff;">
                    <img src="{{ asset('panahauah.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 mt-5">
                <div class="col-md-5 mt-5" style="margin-left: 30%">
                    <h1 style="color: black; font-size: 30px;"><strong>Overview</strong></h1>
                    <p style="color: black; font-size: 20px;">Our journey started in 2018 as the newest digital catalyst
                        within the largest
                        consumer-focused group in Indonesia: Global Pristya. We are here to design, build and enable digital
                        transformation within the ecosystem.</p>
                    <div class="collapse" id="collapseExample2">
                        <div>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident.
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="#collapseExample2" class="btn btn-primary" id="collapseButton"
                            style="height: 20%; font-size: 20px; background-color: #000000; border-radius: 0 !important;"
                            data-toggle="collapse" data-target="#collapseExample2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="background-color: black; height: 55vh;">
                <!-- Isi konten dari col-lg-6 -->
            </div>
            <img src="{{ asset('people.png') }}" width="653" height="400" class="imgpeopledesktop"
                style="position: absolute; left: 883px; top:867px; display:block">
        </div>
        <div class="container" style="max-width: 1500px; padding-top:10%">
            <h1 style="color: black; text-align: center;"><strong>Business Strategy</strong></h1>
            <div class="row">
                <div class="col-sm-6 mx-auto mt-5">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">Customers</h3>
                    </center>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <!-- menggunakan d-flex untuk mengatur konten di tengah secara horizontal -->
                <img src="{{ asset('panahstrategy.png') }}" width="128" height="128">
            </div>
            <div class="col-sm-10 mx-auto mt-5">
                <center>
                    <h3 style="color: black; border-bottom: 2px solid #002D92;">Omnichannel</h3>
                </center>
            </div>
            <div class="row mt-5 mx-auto d-flex justify-content-center">
                <div class="col-sm-2">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">Offline B2C</h3>
                    </center>
                </div>
                <div class="col-sm-2">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">Online B2C</h3>
                    </center>
                </div>
                <div class="col-sm-2">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">Offline B2B</h3>
                    </center>
                </div>
                <div class="col-sm-2">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">Online B2B</h3>
                    </center>
                </div>
                <div class="col-sm-2">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">B2B2C</h3>
                    </center>
                </div>
            </div>
            <div class="row mt-5 mx-auto d-flex justify-content-center">
                <div class="col-sm-5">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">CRM And Loyalty</h3>
                    </center>
                </div>
                <div class="col-sm-5">
                    <center>
                        <h3 style="color: black; border-bottom: 2px solid #002D92;">Digital And Offline Marketing</h3>
                    </center>
                </div>
            </div>
            <div class="row mt-5 mx-auto justify-content-center">
                <div class="col-lg-2 my-2 mx-2"
                    style="background-color: #EC1E22; text-align: center; height: 0; padding-bottom: 15%; position: relative;">
                    <p
                        style="font-size:24px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold;">
                        Erajaya Digital</p>
                </div>
                <div class="col-lg-2 my-2 mx-5"
                    style="background-color: #16AEDE; text-align: center; height: 0; padding-bottom: 15%; position: relative;">
                    <p
                        style="font-size:24px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold;">
                        Erajaya Active Lifestyle</p>
                </div>
                <div class="col-lg-2 my-2 mx-5"
                    style="background-color: #FDD200; text-align: center; height: 0; padding-bottom: 15%; position: relative;">
                    <p
                        style="font-size:24px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold;">
                        Erajaya Beauty and Wellness</p>
                </div>
                <div class="col-lg-2 my-2 mx-2"
                    style="background-color: #A6C140; text-align: center; height: 0; padding-bottom: 15%; position: relative;">
                    <p
                        style="font-size:24px; color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-weight: bold;">
                        Erajaya Food and Nourishment</p>
                </div>
            </div>
            <div class="col-sm-10 mx-auto mt-5">
                <center>
                    <h3 style="color:#000000">Supply Chain Management</h3>
                    <h3 style="color: black; border-bottom: 2px solid #002D92;">(Regulatory Management / Import /
                        Intrabution / Last Mile Management)</h3>
                </center>
            </div>
            <div class="col-sm-10 mx-auto mt-5">
                <center>
                    <h3 style="color: black; border-bottom: 2px solid #002D92;">Human Capital Management</h3>
                </center>
            </div>
            <div class="col-sm-10 mx-auto mt-5">
                <center>
                    <h3 style="color: black; border-bottom: 2px solid #002D92;">Financial Management</h3>
                </center>
            </div>
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Business Sector</strong></h1>
            </center>
        </div>
        <div class="row">
            <div class="image-containerspecial">
                <img src="{{ asset('gambar1.png') }}" alt="Gambar 1">
                <div class="image-text">
                    <h1><strong>Property and<br>Construction</strong></h1>
                </div>
            </div>
            <div class="image-containerspecial">
                <img src="{{ asset('gambar2.png') }}" alt="Gambar 2">
                <div class="image-text">
                    <h1><strong>Technology and Inovation</strong></h1>
                </div>
            </div>
            <div class="image-containerspecial">
                <img src="{{ asset('gambar3.png') }}" alt="Gambar 3">
                <div class="image-text">
                    <h1><strong>Digital Marketing and Branding</strong></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="image-containerspecial">
                <img src="{{ asset('gambar4.png') }}" alt="Gambar 4">
                <div class="image-text">
                    <h1><strong>Food and Beverages</strong></h1>
                </div>
            </div>
            <div class="image-containerspecial">
                <img src="{{ asset('gambar5.png') }}" alt="Gambar 5">
                <div class="image-text">
                    <h1><strong>Gadgets and Wearables</strong></h1>
                </div>
            </div>
            <div class="image-containerspecial">
                <img src="{{ asset('gambar6.png') }}" alt="Gambar 6">
                <div class="image-text">
                    <h1><strong>Pre-seed Venture</strong></h1>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Organization Structure</strong></h1>
            </center>
        </div>
        <div class="container">
            <div class="swiper-container two">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 1">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 2">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"
                    style="position: absolute; width: 300px; height: 100px; color: rgba(255, 255, 255, 0);">
                    <img src="{{ asset('slidekiri.png') }}" alt="Prev">
                </div>
                <div class="swiper-button-next"
                    style="position: absolute; width: 300px; height: 100px; color : rgba(255, 255, 255, 0); padding-left:50px">
                    <img src="{{ asset('slidekanan.png') }}" alt="Next">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="image-container" id="Join" style="position: relative;">
            <div class="background-imageoffice">
                <div class="left desc">
                    <h1 class="contact"
                        style="font-size: 50px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                        <strong>Create Good <br> Business With Us</strong>
                    </h1>
                    <p class="contact"
                        style="font-size: 24px; color: #FFCE2D; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; padding-bottom: 10px; border-radius: 5px;">
                        Grow Together To Achieve Goals!
                    </p>
                    <a href="{{ route('contact') }}" class="contact mt-5"
                        style="font-size: 24px; color: #ffffff; background-color:rgba(30, 30, 30, 0.74) ; padding: 20px; border-radius: 0px !important; width: 300px;">
                        Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG" style="padding-left:36% ">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-video-office-mobile">
                <video autoplay muted loop>
                    <source src="{{ asset('FN2.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
            </div>
        </div>
        <section class="ordinary-phone">
            <div class="col-sm-2" style="background-color: black; height: 42vh; width: 90%; float: right;"></div>
            <img src="{{ asset('peoplemobile.png') }}" height="175"
                style="display:block; position:absolute; top:273px; left:21px">
        </section>
        <section class="iphone-mini">
            <div class="col-sm-2" style="background-color: black; height: 48vh; width: 90%; float: right;"></div>
            <img src="{{ asset('peoplemobile.png') }}" height="175"
                style="display:block; position:absolute; top:273px; left:21px">
        </section>
        <div class="col-lg-6 mt-5">
            <div class="col-md-5 mt-5">
                <h1 style="color: black"><strong>Overview</strong></h1>
                <p style="color: black">Our journey started in 2018 as the newest digital catalyst within the largest
                    consumer-focused group in Indonesia: Global Pristya. We are here to design, build and enable digital
                    transformation within the ecosystem.</p>
                <div class="collapse" id="collapseExample3">
                    <div>
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                        proident.
                    </div>
                </div>
                <div class="button-container">
                    <a href="#collapseExample3" class="btn btn-primary"
                        style="height:20%; background-color: #000000; border-radius: 0 !important;" data-toggle="collapse"
                        data-target="#collapseExample3" id="collapseButton">Read More</a>
                </div>
            </div>
        </div>
        <div class="container mt-5" style="max-width: 1500px;">
            <h1 style="color: black; text-align: center;"><strong>Business Strategy</strong></h1>
            <div class="image-strategy" style="text-align: center;">
                <img src="{{ asset('strategy.png') }}" width="1400" height="890" style="max-width: 100%;">
            </div>
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Business Unit</strong></h1>
            </center>
        </div>
        <section class="android">
            <div class="row">
                <div class="image-containerspecial-mobile col-6 col-sm-6 w-100">
                    <img src="{{ asset('gambar1.png') }}" alt="Gambar 1">
                    <div class="image-text">
                        <h1><strong>Property and<br> Construction</strong></h1>
                    </div>
                </div>
                <div class="image-containerspecial-mobile col-6 col-sm-6 w-100">
                    <img src="{{ asset('gambar2.png') }}" alt="Gambar 2">
                    <div class="image-text">
                        <h1><strong>Technology and Inovation</strong></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="image-containerspecial-mobile col-6 col-sm-6 w-100">
                    <img src="{{ asset('gambar3.png') }}" alt="Gambar 3">
                    <div class="image-text">
                        <h1><strong>Digital Marketing and Branding</strong></h1>
                    </div>
                </div>
                <div class="image-containerspecial-mobile col-6 col-sm-6 w-100">
                    <img src="{{ asset('gambar4.png') }}" alt="Gambar 4">
                    <div class="image-text">
                        <h1><strong>Food and Beverages</strong></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="image-containerspecial-mobile col-6 col-sm-6 w-100">
                    <img src="{{ asset('gambar5.png') }}" alt="Gambar 5">
                    <div class="image-text">
                        <h1><strong>Gadgets and Wearables</strong></h1>
                    </div>
                </div>
                <div class="image-containerspecial-mobile col-6 col-sm-6 w-100">
                    <img src="{{ asset('gambar6.png') }}" alt="Gambar 6">
                    <div class="image-text">
                        <h1><strong>Pre-seed Venture</strong></h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Organization Structure</strong></h1>
            </center>
        </div>
        <div class="container">
            <div class="swiper-container two">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 1">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 2">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-image">
                            <img src="{{ asset('dooleydummy.png') }}" alt="slide 3">
                        </div>
                        <div class="slider-description-mobile">
                            <h3><strong>Agustinus Putra</strong></h3>
                            <p>Goodeva Technology CEO</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <section class="android-join">
            <div class="image-container" style="position: relative;">
                <div class="background-imageoffice-mobile">
                    <div class="left"
                        style="position: absolute; top: 77px; left: -10px; width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 20px; border-radius: 3px;">
                        <h1 class="contact" style="font-size: 30px; color: #ffffff; margin-bottom: 10px;"><strong>Create
                                Good<br> Business With Us</strong></h1>
                        <p class="contact" style="font-size: 15px; color: #FFCE2D; padding-bottom: 50px;">Grow Together To
                            Achieve Goals!</p>
                        <a href="{{ route('contact') }}" class="contact"
                            style="font-size: 16px; color: #ffffff; background-color: rgba(30, 30, 30, 0.74); height: 7vh; display: inline-flex; align-items: center; width: 50%; padding:10px">
                            Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG" style="margin-left: 10px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="iphone-join">
            <div class="image-container" style="position: relative;">
                <div class="background-imageoffice-mobile">
                    <div class="left"
                        style="position: absolute; top: 98px; left: -10px; width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 20px; border-radius: 3px;">
                        <h1 class="contact" style="font-size: 30px; color: #ffffff; margin-bottom: 10px;"><strong>Create
                                Good<br> Business With Us</strong></h1>
                        <p class="contact" style="font-size: 15px; color: #FFCE2D; padding-bottom: 50px;">Grow Together To
                            Achieve Goals!</p>
                        <a href="{{ route('contact') }}" class="contact"
                            style="font-size: 16px; color: #ffffff; background-color: rgba(30, 30, 30, 0.74); height: 7vh; display: inline-flex; align-items: center; width: 50%; padding:10px">
                            Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG" style="margin-left: 10px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="iphone-join-mini">
            <div class="image-container" style="position: relative;">
                <div class="background-imageoffice-mobile">
                    <div class="left"
                        style="position: absolute; top: 25px; left: -10px; width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 20px; border-radius: 3px;">
                        <h1 class="contact"
                            style="font-size: 25px; color: #ffffff; margin-bottom: 10px; line-height: 1.5;">
                            <strong>Create Good<br> Business With Us</strong>
                        </h1>
                        <p class="contact" style="font-size: 16px; color: #FFCE2D; padding-bottom: 50px;">Grow Together To
                            Achieve Goals!</p>
                        <a href="{{ route('contact') }}" class="contact"
                            style="font-size: 16px; color: #ffffff; background-color: rgba(30, 30, 30, 0.74); height: 7vh; display: inline-flex; align-items: center; width: 50%; padding:10px">
                            Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG" style="margin-left: 10px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

@section('js-after')
    <script>
        function Contact() {
            window.location.href = "{{ route('contact') }}"
        }
        $(document).ready(function() {
            $('#collapseExample2').on('show.bs.collapse', function() {
                $('#collapseButton').text("Read Less");
            });

            $('#collapseExample2').on('hide.bs.collapse', function() {
                $('#collapseButton').text("Read More");
            });
        });
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
@endsection
