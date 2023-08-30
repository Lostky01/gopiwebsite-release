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

            .background-image {
                margin-top: 20%;
                width: 390px;
                height: 187px;
                /* Set the height of the container */
                background-image: url('{{ asset('officemockup.png') }}');
                background-size: cover;
                /* or background-size: contain; */
                background-position: center;
            }


        }

        .img-container {
            position: relative;
            display: inline-block;
        }

        .img-description {
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 20px;
        }

        .img-description-mobile {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding: 20px;
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
                    style="font-size: 36px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                    <strong>About Us</strong>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mt-5">
                <h5 style="color: black; margin-left:15%"><strong>Home/</strong>About us</h5>
                <div class="col-md-6" style="margin-left:25%">
                    <h1 style="color: black"><strong>About Us</strong></h1>
                    <p style="color: black">PT Global Pristiya Group is a company that continues to grow and develop for the
                        better in Indonesia with main businesses engaged in the digital innovation sector, Digital Marketing
                        and Strategy, Property Construction, Food and Beverages, Pre-seed Venture, Gadgets and Wearables, by
                        building a business strong in the consumer market such as: <strong>Goodeva Technology, Anywell,
                            Digideva,
                            Gagoo, Odevaa, and SiTukang.com.</strong></p>
                    <div class="collapse" id="collapseExample2">
                        <div>
                            We strive to develop new business lines that focus on consumer needs. It all starts with
                            continuing
                            to innovate and develop in a better direction.
                        </div>
                    </div>
                    <div class="button-container">
                        <a href="#collapseExample2" class="btn btn-primary" id="collapseButton"
                            style="height:20%; background-color: #000000; border-radius: 0 !important;"
                            data-toggle="collapse" data-target="#collapseExample2">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4" style="background-color: black; height: 50vh;">
            </div>
            <img src="{{ asset('gopilaptop.png') }}" width="447" height="298" class="imgpeople"
                style="position: absolute; left: 1240px; top: 694px; display:block">
        </div>
        <div class="col-md-12 mt-5">
            <h1 style="color: black"><strong>
                    <center>Our Vision & Mission</center>
                </strong></h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-3">
                    <h3 style="color: black">
                        <center>Vision</center>
                    </h3>
                    <p style="color: black">
                        <center>To be the best business ecosystem in Indonesia and always provide the best for consumer
                            needs</center>
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 style="color: black">
                        <center>Mission</center>
                    </h3>
                    <p style="color: black">
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
                            <img src="{{ asset('value1.png') }}" width="915" height="600">
                            <div class="img-description">
                                <h3 style="color: white"><strong>Persistent</strong></h3>
                                <p style="color: white">Continue to strive to provide the best results more than expected
                                </p>
                            </div>
                        </div>
                        <div class="img-container mt-5">
                            <img src="{{ asset('value3.png') }}" width="915" height="600">
                            <div class="img-description">
                                <h3 style="color: white"><strong>Perfect</strong></h3>
                                <p style="color: white">Provide maximum output that can meet the standards of consumers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-container">
                            <img src="{{ asset('value2.png') }}" width="915" height="600">
                            <div class="img-description">
                                <h3 style="color: white"><strong>Optimistic</strong></h3>
                                <p style="color: white">Confident in doing something and have an unyielding spirit</p>
                            </div>
                        </div>
                        <div class="img-container mt-5">
                            <img src="{{ asset('value4.png') }}" width="915" height="600">
                            <div class="img-description">
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
                <h1 style="color: black"><strong>Organizational Structure</strong></h1>
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
    </section>
    <section class="mobile-show">
        <div class="image-container" style="position: relative; text-align: center;">
            <div class="background-image"></div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <h2 class="contact"
                    style="font-size: 36px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                    <strong>About Us</strong>
                </h2>
            </div>
        </div>

        {{--  <div class="col-xl-4" style="background-color: black; height: 50vh;">
            <img src="{{ asset('gopilaptop.png') }}" width="447" height="298" class="imgpeople"
                style="display:block">
        </div> --}}
        <div class="col-sm-12">
            <h5 style="color: black"><strong>Home/</strong>About us</h5>
        </div>
        <div class="col-lg-8 mt-5">
            <div class="col-md-6">
                <h1 style="color: black"><strong>About Us</strong></h1>
                <p style="color: black">PT Global Pristiya Group is a company that continues to grow and develop for
                    the
                    better in Indonesia with main businesses engaged in the digital innovation sector, Digital Marketing
                    and Strategy, Property Construction, Food and Beverages, Pre-seed Venture, Gadgets and Wearables, by
                    building a business strong in the consumer market such as: <strong>Goodeva Technology, Anywell,
                        Digideva,
                        Gagoo, Odevaa, and SiTukang.com.</strong></p>
                <div class="collapse" id="collapseExample3">
                    <div>
                        We strive to develop new business lines that focus on consumer needs. It all starts with continuing
                        to innovate and develop in a better direction.
                    </div>
                </div>
                <div class="button-container">
                    <a href="#collapseExample3" class="btn btn-primary"
                        style="height:20%; background-color: #000000; border-radius: 0 !important;" data-toggle="collapse"
                        data-target="#collapseExample3" id="collapseButton">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <h1 style="color: black"><strong>
                    <center>Our Vision & Mission</center>
                </strong></h1>
            <div class="row justify-content-center mt-5">
                <div class="col-md-3">
                    <h3 style="color: black">
                        <center>Vision</center>
                    </h3>
                    <p style="color: black">
                        <center>To be the best business ecosystem in Indonesia and always provide the best for consumer
                            needs</center>
                    </p>
                </div>
                <div class="col-md-3">
                    <h3 style="color: black">
                        <center>Mission</center>
                    </h3>
                    <p style="color: black">
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
                            <img src="{{ asset('value1.png') }}" width="915" height="600">
                            <div class="img-description-mobile">
                                <h3 style="color: white"><strong>Persistent</strong></h3>
                                <p style="color: white; font-size:10px">Continue to strive to provide the best results more
                                    than expected
                                </p>
                            </div>
                        </div>
                        <div class="img-container mt-5">
                            <img src="{{ asset('value3.png') }}" width="915" height="600">
                            <div class="img-description-mobile">
                                <h3 style="color: white"><strong>Perfect</strong></h3>
                                <p style="color: white;font-size:10px">Provide maximum output that can meet the standards
                                    of consumers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="img-container mt-5">
                            <img src="{{ asset('value2.png') }}" width="915" height="600">
                            <div class="img-description-mobile">
                                <h3 style="color: white"><strong>Optimistic</strong></h3>
                                <p style="color: white;font-size:10px">Confident in doing something and have an unyielding
                                    spirit</p>
                            </div>
                        </div>
                        <div class="img-container mt-5">
                            <img src="{{ asset('value4.png') }}" width="915" height="600">
                            <div class="img-description-mobile">
                                <h3 style="color: white"><strong>Innovation</strong></h3>
                                <p style="color: white;font-size:10px">Able to adapt to every change and create new things
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Organizational Structure</strong></h1>
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
    </section>
@endsection
