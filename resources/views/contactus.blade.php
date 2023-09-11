@extends('layouts.app-front')

@section('css')
    <style>
        .image-container {
            position: relative;
            text-align: center;
        }

        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .contact {
            font-size: 50px;
            color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        .input-container {
            position: relative !important;
            margin: 50px auto !important;
            width: 590px !important;
        }

        .input-container input[type="text"] {
            font-size: 20px !important;
            width: 100% !important;
            border: none !important;
            border-bottom: 2px solid #ccc !important;
            padding: 5px 0 !important;
            background-color: transparent !important;
            outline: none !important;
        }

        .input-container .label {
            position: absolute !important;
            top: 0 !important;
            left: 0 !important;
            color: #ccc !important;
            transition: all 0.3s ease !important;
            pointer-events: none !important;
        }

        .input-container input[type="text"]:focus~.label,
        .input-container input[type="text"]:valid~.label {
            top: -20px !important;
            font-size: 16px !important;
            color: #333 !important;
        }

        .input-container .underline {
            position: absolute !important;
            bottom: 0 !important;
            left: 0 !important;
            height: 2px !important;
            width: 100% !important;
            background-color: #333 !important;
            transform: scaleX(0) !important;
            transition: all 0.3s ease !important;
        }

        .input-container input[type="text"]:focus~.underline,
        .input-container input[type="text"]:valid~.underline {
            transform: scaleX(1) !important;
        }

        .desktop-show {
            display: block;
        }

        .mobile-show {
            display: none;
        }

        .background-image {
            width: 100%;
            height: 50vh;
            /* Set the height of the container */
            background-image: url('{{ asset('officemockup.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center center;
        }

        @media screen and (max-width:450px) {
            .desktop-show {
                display: none;
            }

            .mobile-show {
                display: block;
            }

            .input-container {
                position: relative !important;
                margin: 50px auto !important;
                width: 300px !important;
            }
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
                    <strong>Contact Us</strong>
                </h2>
            </div>
        </div>
        <br>
        <div class="container" style="padding: 10px !important;">
            <div class="col-sm-12">
                <h5 style="color: black"><strong>Home/</strong>Contact Us</h5>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center" style="height: 30vh;">
                <div class="text-center">
                    <h1 style="color: black"><strong>Join With Us !</strong></h1>
                    <p style="color: black">Are you interested in joining us? We warmly welcome you to contact us here.</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <p style="color: black; font-size:24px"><strong>Address :</strong></p>
                    <p style="color: black; font-size:16px">GOODEVA CBD Division, Grand Galaxy Commercial RSK 6 No. 15, Kota Bekasi</p>

                    <p style="color: black; font-size:24px"><strong>Email :</strong></p>
                    <p style="color: black; font-size:16px">globalpristiya@gopi.com</p>

                    <p style="color: black"><strong>Follow Us</strong></p>
                    <a href=""><i class="fa fa-youtube-play mr-2" style="font-size:40px; color:rgb(0, 0, 0)"> </i></a>
                    <a href=""><i class="fa fa-twitter mx-2" style="font-size:40px; color:rgb(0, 0, 0)"> </i></a>
                    <a href="https://www.instagram.com/goodeva.id/?hl=id"><i class="fa fa-instagram mx-2"
                            style="font-size:40px; color:rgb(0, 0, 0)"> </i></a>
                    <a href="https://www.facebook.com/globalpristya"><i class="fa fa-facebook-square mx-2"
                            style="font-size:40px; color:rgb(0, 0, 0)"> </i></a>
                </div>
                <div class="col-lg-8">
                    <form method="post" action="{{ route('send.email') }}">
                        @csrf
                        <div class="input-container">
                            <input type="text" name="name" required>
                            <label for="input" class="label">Your Name</label>
                            <div class="underline"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" name="email" required>
                            <label for="input" class="label">Email</label>
                            <div class="underline"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" name="phone" required>
                            <label for="input" class="label">Phone Number</label>
                            <div class="underline"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" name="message" required>
                            <label for="input" class="label">Messages</label>
                            <div class="underline"></div>
                        </div>
                        <div class="input-container">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: #000000; border-radius: 0 !important;">Submit</button>
                        </div>
                        <input type="hidden" name="send_email" value="1">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-show">
        <div class="image-container" style="position: relative; text-align: center; margin-top:25%">
            <img src="{{ asset('mockupmobile.png') }}">
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <h2 class="contact"
                    style="font-size: 36px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                    <strong>Contact Us</strong>
                </h2>
            </div>
        </div>
        <br>
        <div class="col-md-5">
            <p style="color: black"><strong>Home/</strong>Contact Us</p>
            <h1 style="color: black"><strong>Join With Us !</strong></h1>
            <p style="color: black">Are you interested in joining us? We warmly welcome you to contact us here.</p>
            <form method="post" action="{{ route('send.email') }}">
                @csrf
                <div class="input-container">
                    <input type="text" name="name" required>
                    <label for="input" class="label">Your Name</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="email" required>
                    <label for="input" class="label">Email</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="phone" required>
                    <label for="input" class="label">Phone Number</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <input type="text" name="message" required>
                    <label for="input" class="label">Messages</label>
                    <div class="underline"></div>
                </div>
                <div class="input-container">
                    <button type="submit" class="btn btn-primary"
                        style="background-color: #000000; border-radius: 0 !important;">Submit</button>
                </div>
                <input type="hidden" name="send_email" value="1">
            </form>
            <div class="col-md-3 mb-3">
                <p style="color: black"><strong>Address :</strong></p>
                <p style="color: black; white-space:pre-line">GOODEVA CBD Division,
                     Grand Galaxy
                      Commercial RSK 6 No. 15,
                      Kota Bekasi</p>
                <p style="color: black"><strong>Email :</strong></p>
                <p style="color: black">globalpristiya@gopi.com</p>

                <p style="color: black"><strong>Follow Us</strong></p>
                <a href=""><i class="fa fa-youtube-play mr-2" style="font-size:26px; color:rgb(0, 0, 0)"> </i></a>
                <a href=""><i class="fa fa-twitter mx-2" style="font-size:26px; color:rgb(0, 0, 0)"> </i></a>
                <a href="https://www.instagram.com/goodeva.id/?hl=id"><i class="fa fa-instagram mx-2" style="font-size:26px; color:rgb(0, 0, 0)"> </i></a>
                <a href="https://www.facebook.com/globalpristya"><i class="fa fa-facebook-square mx-2" style="font-size:26px; color:rgb(0, 0, 0)"> </i></a>
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
