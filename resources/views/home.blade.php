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

        .background-image {
            margin-top: 10%;
            width: 100%;
            height: 70vh;
            /* Set the height of the container */
            background-image: url('{{ asset('services.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center center;
        }

        .background-image-mobile {
            margin-top: 10%;
            width: 420px;
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
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .swiper-slide:hover .slider-description {
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <section class="desktop-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-image"></div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="col-md-5 mt-5" style="margin-left: 40%">
                    <h1 style="color: black"><strong>Overview</strong></h1>
                    <p style="color: black">Our journey started in 2018 as the newest digital catalyst within the largest
                        consumer-focused group in Indonesia: Global Pristya. We are here to design, build and enable digital
                        transformation within the ecosystem.</p>
                    <div class="button-container">
                        <a href="#" class="btn btn-primary"
                            style="height:20%; background-color: #000000; border-radius: 0 !important;">Read
                            More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="background-color: black; height: 50vh;">
                <!-- Isi konten dari col-lg-6 -->
            </div>
            <img src="{{ asset('people.png') }}" width="653" height="400" class="imgpeopledesktop"
                style="position: absolute; left: 928px; top:1014px; display:block">
        </div>
        <div class="container mt-5" style="max-width: 1500px;">
            <h1 style="color: black; text-align: center;"><strong>Business Strategy</strong></h1>
            <div class="image-strategy" style="text-align: center;">
                <img src="{{ asset('strategy.png') }}" width="1400" height="890" style="max-width: 100%;">
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
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="image-container" style="position: relative;">
            <div class="background-imageoffice">
                <div class="left"
                    style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: absolute;  top: 149px; left: -694px; width: 100%; height: 100%;">
                    <h1 class="contact"
                        style="font-size: 50px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                        <strong>Create Good <br> Business With Us</strong>
                    </h1>
                    <p class="contact"
                        style="font-size: 24px; color: #FFCE2D; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; padding-bottom: 10px; border-radius: 5px;">
                        Grow Together To Achieve Goals!
                    </p>
                    <a href="" class="contact mt-5"
                        style="font-size: 24px; color: #ffffff; background-color: ; padding: 20px; border-radius: 5px;">
                        Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-image-mobile"></div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
            </div>
        </div>
        <div class="col-sm-2" style="background-color: black; height: 30vh;">
            <img src="{{ asset('peoplemobile.png') }}" width="625" height="350" style="display:block">
        </div>
        <div class="col-lg-6 mt-5">
            <div class="col-md-5 mt-5">
                <h1 style="color: black"><strong>Overview</strong></h1>
                <p style="color: black">Our journey started in 2018 as the newest digital catalyst within the largest
                    consumer-focused group in Indonesia: Global Pristya. We are here to design, build and enable digital
                    transformation within the ecosystem.</p>
                <div class="button-container">
                    <a href="#" class="btn btn-primary"
                        style="height:20%; background-color: #000000; border-radius: 0 !important;">Read
                        More</button></a>
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
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="image-container" style="position: relative;">
            <div class="background-imageoffice">
                <div class="left"
                    style="display: flex; flex-direction: column; justify-content: center; align-items: center; position: absolute;  top: 188px; left: -10px; width: 100%; height: 100%;">
                    <h1 class="contact"
                        style="font-size: 30px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 3px;">
                        <strong>Create Good <br> Business With Us</strong>
                    </h1>
                    <p class="contact"
                        style="font-size: 15px; color: #FFCE2D; /* background-color: rgba(0, 0, 0, 0.7); */">
                        Grow Together To Achieve Goals!
                    </p>
                    <a href="" class="contact mt-5" style="font-size: 15px; color: #ffffff; background-color: ; ">
                        Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js-after')
    <script>
        function Contact() {
            window.location.href = "{{ route('contact') }}"
        }
    </script>
@endsection
