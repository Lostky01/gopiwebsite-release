@extends('layouts.app-front')
@section('css')
    <style>
        .background-image {
            width: 100%;
            height: 50vh;
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

            .iphone-image {
                display: none;
            }


        }

        .image-containerspecial {
            position: relative;
            display: inline-block;
            margin: 0;
            padding: 0;
        }

        .image-containerspecial img {
            width: 400px;
            height: 500px;
            display: block;
            margin: 0;
            padding: 0;
        }

        .image-text {
            position: absolute;
            bottom: 10px;

            left: 38%;
            transform: translateX(-50%);
            color: white;
            border-radius: 5px;
            font-size: 12px;
        }

        /* .image-text-mobile {
            position: absolute;
            bottom: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border-radius: 5px;
            font-size: 10px;
        } */

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

        .background-image-mobile {
            margin-top: 20%;
            width: 100%;
            height: 208px;
            /* Set the height of the container */
            background-image: url('{{ asset('officemockup.png') }}');
            background-size: cover;
            /* or background-size: contain; */
            background-position: center center;
        }

        .iphone-image-mini {
            display: none;
        }

        .iphone-mini-image {
            display: none;
        }

        @media screen and (width:414px) {
            .android-image {
                display: none;
            }

            .iphone-image {
                display: block
            }
        }

        @media screen and (max-width:320px) {
            .iphone-image-mini {
                display: block;
            }

            .android-image {
                display: none;
            }

            .iphone-image {
                display: none;
            }

            .ordinary-phone-service {
                display: none;
            }

            .iphone-mini-image {
                display: none;
            }
        }

        .text-left {
            text-align: left !important;
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
                    <strong>What We Do</strong>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <h5 style="color: black; margin-left:15%"><strong><a href="{{ route('home') }}"
                            style="color: black;">Home</a>/</strong>What We Do</h5>
                <div class="col-md-8 mt-5" style="margin-left: 25%">
                    <h1 style="color: black; font-size:50px"><strong>What We Do</strong></h1>
                    <p style="color: black;font-size:20px;">Increasing consumer demand and expectations have driven us to continue to
                        develop and innovate in creating a business sector that can always meet the needs of consumers</p>
                </div>
            </div>
            <div class="col-lg-6" style="background-color: black; height: 50vh;">
            </div>
            <img src="{{ asset('gopioffice.png') }}" width="653" height="400" class="imgpeople"
                style="position: absolute; left: 928px; top:601px; display:block">
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Business Unit</strong></h1>
            </center>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar1.png') }}" alt="Gambar 1">
                        <div class="image-text text-left"> <!-- Ini yang nambahin class text-left biar teksnya ke kiri -->
                            <h1><strong>Property and<br>Construction</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar2.png') }}" alt="Gambar 2">
                        <div class="image-text text-left"> <!-- Ini yang nambahin class text-left biar teksnya ke kiri -->
                            <h1><strong>Technology and Inovation</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar3.png') }}" alt="Gambar 3">
                        <div class="image-text text-left"> <!-- Ini yang nambahin class text-left biar teksnya ke kiri -->
                            <h1><strong>Digital Marketing and Branding</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar4.png') }}" alt="Gambar 4">
                        <div class="image-text text-left"> <!-- Ini yang nambahin class text-left biar teksnya ke kiri -->
                            <h1><strong>Food and Beverages</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar5.png') }}" alt="Gambar 5">
                        <div class="image-text text-left"> <!-- Ini yang nambahin class text-left biar teksnya ke kiri -->
                            <h1><strong>Gadgets and Wearables</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar6.png') }}" alt="Gambar 6">
                        <div class="image-text text-left"> <!-- Ini yang nambahin class text-left biar teksnya ke kiri -->
                            <h1><strong>Pre-seed Venture</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="col-lg-12" style="background-color: #1E1E1E; padding-bottom: 50px; padding-top:10px">
            <div class="col-sm-12 mt-5">
                <h1 style="color: white"><strong>
                        <center>Group Companies We Service</center>
                    </strong></h1>
            </div>
            <div class="container mt-5 justify-content-center">
                <div class="row">
                    <div class="col-md-4">
                        <a href="https://odeva.co.id/"><img src="{{ asset('service1.png') }}"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.goodeva.co.id/"><img src="{{ asset('service2.png') }}"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.gagoo.id/"><img src="{{ asset('service3.png') }}"></a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <a href="https://digideva.id/"><img src="{{ asset('service4.png') }}"></a>
                    </div>
                    <div class="col-md-4">
                        <a href="https://situkang.com/"><img src="{{ asset('service5.png') }}"></a>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('service6.png') }}">
                    </div>
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
                    <strong>What We Do</strong>
                </h2>
            </div>
        </div>
        <section class="android-image">
            <div class="col-sm-2 mb-5" style="background-color: black; height: 38vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopioffice.png') }}" width="550" height="435"
                style="display:block; position:absolute; top:324px; left:21px">
        </section>
        <section class="iphone-image">
            <div class="col-sm-2 mb-5" style="background-color: black; height: 35vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopioffice.png') }}" width="350" height="235"
                style="display:block; position:absolute; top:303px; left:21px">
        </section>
        <section class="iphone-image-mini">
            <div class="col-sm-2 mb-5" style="background-color: black; height: 50vh; width: 90%; float: right;"></div>
            <img src="{{ asset('gopioffice.png') }}" width="350" height="235"
                style="display:block; position:absolute; top:304px; left:21px">
        </section>
        <div class="col-lg-6" style="margin-top: 5%">
            <div class="col-md-5 mt-2">
                <h1 style="color: black; font-size:24px"><strong>What We Do</strong></h1>
                <p style="color: black; line-height:normal">Increasing consumer demand and expectations have driven us to continue to
                    develop and innovate in creating a business sector that can always meet the needs of consumers</p>
            </div>
        </div>

        <div class="col-sm-12 mt-2 mb-5">
            <center>
                <h1 style="color: black; font-size:24px"><strong>Business Unit</strong></h1>
            </center>
        </div>
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
        <div class="col-lg-12" style="background-color: #1E1E1E; padding-bottom: 50px; padding-top:10px">
            <div class="col-sm-12 mt-5">
                <h1 style="color: white; font-size:26px"><strong>
                        <center>Group Companies We Service</center>
                    </strong></h1>
            </div>
            <section class="ordinary-phone-service">
                <div class="container mt-5 text-center">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <a href="https://odeva.co.id/"><img src="{{ asset('service1mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                    <a href="https://www.goodeva.co.id/"><img src="{{ asset('service2mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <a href="https://www.gagoo.id/"><img src="{{ asset('service3mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                    <a href="https://digideva.id/"><img src="{{ asset('service4mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <a href="https://situkang.com/"><img src="{{ asset('service5mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                    <img src="{{ asset('service6mobile.png') }}" width="130" height="150"
                                        class="mx-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="iphone-mini-image">
                <div class="container mt-5 text-center">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <a href="https://odeva.co.id/"><img src="{{ asset('service1mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                    <a href="https://www.goodeva.co.id/"><img src="{{ asset('service2mobile.png') }}"
                                            width="130" height="150" class="mx-2 mt-4"></a>
                                </div>
                                <div class="col-md-6 mt-4">
                                    <a href="https://www.gagoo.id/"><img src="{{ asset('service3mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                    <a href="https://digideva.id/"><img src="{{ asset('service4mobile.png') }}"
                                            width="130" height="150" class="mx-2 mt-4"></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-4">
                                    <a href="https://situkang.com/"><img src="{{ asset('service5mobile.png') }}"
                                            width="130" height="150" class="mx-2"></a>
                                    <img src="{{ asset('service6mobile.png') }}" width="130" height="150"
                                        class="mx-2 mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
