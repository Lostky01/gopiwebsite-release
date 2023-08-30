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
            height: 30vh;
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

        .custom-underline {
            border-bottom: 3px solid #002D92;
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
            <a href=".background-imageoffice"><img src="{{ asset('panahauah.png') }}" alt=""></a>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 mt-5">
                <div class="col-md-5 mt-5" style="margin-left: 40%">
                    <h1 style="color: black"><strong>Overview</strong></h1>
                    <p style="color: black">Our journey started in 2018 as the newest digital catalyst within the largest
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
                            style="height:20%; background-color: #000000; border-radius: 0 !important;"
                            data-toggle="collapse" data-target="#collapseExample2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="background-color: black; height: 55vh;">
                <!-- Isi konten dari col-lg-6 -->
            </div>
            <img src="{{ asset('people.png') }}" width="653" height="400" class="imgpeopledesktop"
                style="position: absolute; left: 915px; top:806px; display:block">
        </div>
        <div class="container mt-5" style="max-width: 1500px;">
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
                    <a href="{{ route('contact') }}" class="contact mt-5"
                        style="font-size: 24px; color: #ffffff; background-color:rgba(30, 30, 30, 0.74) ; padding: 20px; border-radius: 5px;">
                        Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG">
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
        <div class="col-sm-2" style="background-color: black; height: 30vh;">
            <img src="{{ asset('peoplemobile.png') }}" width="625" height="350" style="display:block">
        </div>
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
                <h1 style="color: black"><strong>Business Sector</strong></h1>
            </center>
        </div>
        <div class="row">
            <div class="image-containerspecial">
                <img src="{{ asset('gambar1.png') }}" alt="Gambar 1">
                <div class="image-text">
                    <h1><strong>Property and<br> Construction</strong></h1>
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
            <div class="background-imageoffice-mobile">
                <div class="left"
                    style="position: absolute; top: -10px; left: -10px; width: 100%; height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: flex-start; padding: 20px; border-radius: 3px;">
                    <h1 class="contact" style="font-size: 30px; color: #ffffff; margin-bottom: 10px;"><strong>Create
                            Good<br> Business With Us</strong></h1>
                    <p class="contact" style="font-size: 15px; color: #FFCE2D; margin-bottom: 15px;">Grow Together To
                        Achieve Goals!</p>
                    <a href="{{ route('contact') }}" class="contact"
                        style="font-size: 15px; color: #ffffff; background-color: rgba(30, 30, 30, 0.74); padding: 10px 15px; border-radius: 3px; display: inline-flex; align-items: center;">
                        Join with us <img src="{{ asset('panah.svg') }}" alt="Panag SVG" style="margin-left: 10px;">
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
        $(document).ready(function() {
            $('#collapseExample2').on('show.bs.collapse', function() {
                $('#collapseButton').text("Read Less");
            });

            $('#collapseExample2').on('hide.bs.collapse', function() {
                $('#collapseButton').text("Read More");
            });
        });
    </script>
@endsection
