@extends('layouts.app-front')

@section('css')
    <style>
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

        .background-image {
            width: 100%;
            height: 70vh;
            /* Set the height of the container */
            background-image: url('{{ asset('officemockup.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center center;
        }

        .desktop-show {
            display: block;
        }

        .mobile-show {
            display: none;
        }

        @media screen and (max-width:450px) {
            .desktop-show {
                display: none;
            }

            .mobile-show {
                display: block;
            }



        }

        .img-container {
            position: relative;
            display: inline-block;
            align-content: center;
            align-items: center;
            justify-content: center;

        }

        .img-description {
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;

        }

        .img-description-mobile {
            position: absolute;
            top: 70%;
            left: 35%;
            transform: translate(-50%, -50%);
            text-align: left;
            font-size: 20px;
            margin: 0 !important;
            margin-bottom: 0 !important;
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

        .background-image-mobile {
            margin-top: 20%;
            width: 100%;
            height: 187px;
            /* Set the height of the container */
            background-image: url('{{ asset('officemockup.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center;
        }

        .ordinary-phone {
            display: block;
        }

        .iphone-mini {
            display: none;
        }

        .iphone-mid {
            display: none;
        }

        .iphone-semi-mid {
            display: none;
        }

        @media screen and (width:390px) {
            .iphone-mid {
                display: block;
            }

            .ordinary-phone {
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
        }

        @media screen and (max-width: 360px) and (max-height: 780px) {
            .iphone-semi-mid {
                display: block;
            }

            .ordinary-phone {
                display: none;
            }
        }

        p {
            line-height: normal;
        }
    </style>
@endsection

@section('content')
    <section class="desktop-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-image"></div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <h2 class="contact"
                    style="font-size: 50px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                    <strong>About Us</strong>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mt-5">
                <h5 style="color: black; margin-left:15%"><strong><a href="{{ route('home') }}"
                            style="color: black;">Home</a>/</strong>About us</h5>
                <div class="col-md-8" style="margin-left:15%; padding-top:5%">
                    <h1 style="color: black; font-size:50px"><strong>About Us</strong></h1>
                    <p style="color: black;font-size:20px">PT Global Pristiya Group is a company that continues to grow and
                        develop for the
                        better in Indonesia with main businesses engaged in the digital innovation sector, Digital Marketing
                        and Strategy, Property Construction, Food and Beverages, Pre-seed Venture, Gadgets and Wearables, by
                        building a business strong in the consumer market such as: <strong>Goodeva Technology, Anywell,
                            Digideva,
                            Gagoo, Odevaa, and SiTukang.com.</strong> <br><br> We strive to develop new business lines that
                        focus on
                        consumer needs. It all starts with
                        continuing
                        to innovate and develop in a better direction.</p>
                </div>
            </div>
            <div class="col-xl-5" style="background-color: black; height: 70vh;">
            </div>
            <img src="{{ asset('gopilaptop.png') }}" width="647" height="498" class="imgpeople"
                style="position: absolute; left: 1066px; top: 799px; display:block">
        </div>
        <div class="col-md-12 mt-5">
            <h1 style="color: black; font-size:50px"><strong>
                    <center>Our Vision & Mission</center>
                </strong></h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-3">
                    <h3 style="color: black; font-size:40px">
                        <center>Vision</center>
                    </h3>
                    <p style="color: black; font-size:36px">
                        <center>To be the best business ecosystem in Indonesia and always provide the best for consumer
                            needs</center>
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 style="color: black; font-size:40px">
                        <center>Mission</center>
                    </h3>
                    <p style="color: black;font-size:36px">
                        <center>Continue to strive to further develop and grow together by building strong relationships
                            with consumers</center>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="background-color: #1E1E1E; padding-bottom: 50px;">
            <div class="col-sm-12 mt-5">
                <h1 style="color: white"><strong>
                        <center>Our Values</center>
                    </strong></h1>
            </div>
            <div class="container mt-5">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-5">
                        <div class="img-container">
                            <img src="{{ asset('value1.png') }}" width="1015" height="800">
                            <div class="img-description col-md-8">
                                <h3 style="color: white"><strong>Persistent</strong></h3>
                                <p style="color: white">Continue to strive to provide the best results more than expected
                                </p>
                            </div>
                        </div>
                        <div class="img-container mt-5">
                            <img src="{{ asset('value3.png') }}" width="1015" height="800">
                            <div class="img-description col-md-10">
                                <h3 style="color: white"><strong>Perfect</strong></h3>
                                <p style="color: white">Provide maximum output that can meet the standards of consumers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-container">
                            <img src="{{ asset('value2.png') }}" width="1015" height="800">
                            <div class="img-description col-md-8">
                                <h3 style="color: white"><strong>Optimistic</strong></h3>
                                <p style="color: white">Confident in doing something and have an unyielding spirit</p>
                            </div>
                        </div>
                        <div class="img-container mt-5">
                            <img src="{{ asset('value4.png') }}" width="1015" height="800">
                            <div class="img-description col-md-8">
                                <h3 style="color: white"><strong>Innovation</strong></h3>
                                <p style="color: white">Able to adapt to every change and create new things</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black; "><strong>Organizational Structure</strong></h1>
            </center>
        </div>
        <div class="container justify-content-center">
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
        </div>
    </section>
    <section class="mobile-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-image-mobile"></div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <h2 class="contact"
                    style="font-size: 36px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                    <strong>About Us</strong>
                </h2>
            </div>
        </div>
        <section class="ordinary-phone">
            <div class="col-sm-2 mb-2" style="background-color: black; height: 35vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopilaptopmobile.png') }}"
                style="display:block; position:absolute; top:275px; left:21px">
        </section>
        <section class="iphone-mid">
            <div class="col-sm-2 mb-2" style="background-color: black; height: 35vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopilaptopmobile.png') }}"
                style="display:block; position:absolute; top:275px; left:21px">
        </section>
        <section class="iphone-semi-mid">
            <div class="col-sm-2 mb-2" style="background-color: black; height: 35vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopilaptopmobile.png') }}"
                style="display:block; position:absolute; top:275px; left:21px">
        </section>
        <section class="iphone-mini">
            <div class="col-sm-2 mb-2" style="background-color: black; height: 15vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopilaptopmobile.png') }}"
                style="display:block; position:absolute; top:295px; left:21px">
        </section>
            <div class="col-lg-8 mt-5">
                <div class="col-md-6">
                    <h1 style="color: black; font-size:30px"><strong>About Us</strong></h1>
                    <p style="color: black; font-size:13px">PT Global Pristiya Group is a company that continues to grow and develop for
                        the
                        better in Indonesia with main businesses engaged in the digital innovation sector, Digital Marketing
                        and Strategy, Property Construction, Food and Beverages, Pre-seed Venture, Gadgets and Wearables, by
                        building a business strong in the consumer market such as: <strong>Goodeva Technology, Anywell,
                            Digideva,
                            Gagoo, Odevaa, and SiTukang.com.</strong></p>
                    <p style="color: black;font-size:13px">
                        We strive to develop new business lines that focus on consumer needs. It all starts with
                        continuing
                        to innovate and develop in a better direction.</p>
                </div>
            </div>
        <div class="col-sm-12 mt-5">
            <h1 style="color:black;font-size:24px; font-weight:bold">Our Vision & Mission</h1>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-4">
                    <h1 style="color: black; font-size:26px; font-weight:bold">Vision</h1>
                </div>
                <div class="col-8">
                    <p style="color: black">To be the best business ecosystem in Indonesia and always provide the best for consumer
                        needs</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h1 style="color: black; font-size:26px; font-weight:bold">Mission</h1>
                </div>
                <div class="col-8">
                    <p style="color: black">Continue to strive to further develop and grow together by building strong relationships
                        with consumers</p>
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="background-color: #1E1E1E; padding-bottom: 50px; padding-top:10px">
            <div class="col-sm-12 mt-5">
                <h1 style="color: white"><strong>
                        <center>Our Values</center>
                    </strong></h1>
            </div>
            <div class="container mt-5 justify-content-center text-center">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-6">
                        <div class="img-container text-center">
                            <img src="{{ asset('value1mobile.png') }}">
                            <div class="img-description-mobile">
                                <h3 style="color: white; padding:0 !important;"><strong>Persistent</strong></h3>
                                <p style="color: white; font-size:11px;">Continue to strive to provide the best results
                                    more than expected</p>
                            </div>
                        </div>
                        <div class="img-container mt-2">
                            <img src="{{ asset('value2mobile.png') }}">
                            <div class="img-description-mobile" style="margin: 0; padding:0;">
                                <h3 style="color: white; padding-bottom:0px !important;"><strong>Optimistic</strong></h3>
                                <p style="color: white; font-size:11px;">Confident in doing something and have an
                                    unyielding spirit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-container mt-2">
                            <img src="{{ asset('valuemobile3.png') }}">
                            <div class="img-description-mobile">
                                <h3 style="color: white; padding-bottom:0px !important;"><strong>Perfect</strong></h3>
                                <p style="color: white; font-size:11px;">Provide maximum output that can meet the standards
                                    of consumers</p>
                            </div>
                        </div>
                        <div class="img-container mt-2">
                            <img src="{{ asset('valuemobile4.png') }}">
                            <div class="img-description-mobile">
                                <h3 style="color: white; padding-bottom:0px !important;"><strong>Innovation</strong></h3>
                                <p style="color: white; font-size:11px;">Able to adapt to every change and create new
                                    things</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black; font-size:24px"><strong>Organizational Structure</strong></h1>
            </center>
        </div>
        <div class="container text-center justify-content-center">
            <div class="col-md-12">
                <img src="{{ asset('dooleydummy.png') }}" alt="" class="mb-2">
                <center>
                    <h1 style="color: black; font-size:24px; font-weight:bold">Agustinus Putra</h1>
                </center>
                <center>
                    <p style="color: black;">Goodeva Technology CEO</p>
                </center>
            </div>
            <div class="col-md-12">
                <img src="{{ asset('dooleydummy.png') }}" alt="" class="mb-2">
                <center>
                    <h1 style="color: black; font-size:24px; font-weight:bold">Agustinus Putra</h1>
                </center>
                <center>
                    <p style="color: black;">Goodeva Technology CEO</p>
                </center>
            </div>
            <div class="col-md-12">
                <img src="{{ asset('dooleydummy.png') }}" alt="" class="mb-2">
                <center>
                    <h1 style="color: black; font-size:24px; font-weight:bold">Agustinus Putra</h1>
                </center>
                <center>
                    <p style="color: black;">Goodeva Technology CEO</p>
                </center>
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
