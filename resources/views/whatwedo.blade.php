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

            left: 50%;
            transform: translateX(-50%);
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
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
                    <strong>What We Do</strong>
                </h2>
            </div>
        </div>
        <div class="col-sm-12 mt-5">
            <h5 style="color: black"><strong>Home/</strong>What We Do</h5>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <div class="col-md-5 mt-5" style="margin-left: 40%">
                    <h1 style="color: black"><strong>What We Do</strong></h1>
                    <p style="color: black">Increasing consumer demand and expectations have driven us to continue to
                        develop and innovate in creating a business sector that can always meet the needs of consumers</p>
                    <div class="button-container">
                        <a href="#" class="btn btn-primary"
                            style="height:20%; background-color: #000000; border-radius: 0 !important;">Read
                            More</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="background-color: black; height: 50vh;">
            </div>
            <img src="{{ asset('gopioffice.png') }}" width="653" height="400" class="imgpeople"
                style="position: absolute; left: 928px; top:738px; display:block">
        </div>
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Business Unit</strong></h1>
            </center>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar1.png') }}" alt="Gambar 1">
                        <div class="image-text">
                            <h1><strong>Property and<br>Construction</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar2.png') }}" alt="Gambar 2">
                        <div class="image-text">
                            <h1><strong>Technology and Inovation</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar3.png') }}" alt="Gambar 3">
                        <div class="image-text">
                            <h1><strong>Digital Marketing and Branding</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar4.png') }}" alt="Gambar 4">
                        <div class="image-text">
                            <h1><strong>Food and Beverages</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar5.png') }}" alt="Gambar 5">
                        <div class="image-text">
                            <h1><strong>Gadgets and Wearables</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar6.png') }}" alt="Gambar 6">
                        <div class="image-text">
                            <h1><strong>Pre-seed Venture</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="background-color: #1E1E1E; padding-bottom: 50px;">
            <div class="col-sm-12 mt-5">
                <h1 style="color: white"><strong>
                        <center>Group Companies We Service</center>
                    </strong></h1>
            </div>
            <div class="container mt-5 justify-content-center">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('service1.png') }}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('service2.png') }}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('service3.png') }}">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <img src="{{ asset('service4.png') }}">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('service5.png') }}">
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
            <div class="background-image"></div>
            <div class="centered"
                style="display: flex; justify-content: center; align-items: center; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                <h2 class="contact"
                    style="font-size: 36px; color: #ffffff; /* background-color: rgba(0, 0, 0, 0.7); */ padding: 20px; border-radius: 5px;">
                    <strong>What We Do</strong>
                </h2>
            </div>
        </div>
        <div class="col-sm-12 mt-5">
            <h5 style="color: black"><strong>Home/</strong>What We Do</h5>
        </div>
            <div class="col-lg-6 mt-5">
                <div class="col-md-5 mt-5" >
                    <h1 style="color: black"><strong>What We Do</strong></h1>
                    <p style="color: black">Increasing consumer demand and expectations have driven us to continue to
                        develop and innovate in creating a business sector that can always meet the needs of consumers</p>
                    <div class="button-container">
                        <a href="#" class="btn btn-primary"
                            style="height:20%; background-color: #000000; border-radius: 0 !important;">Read
                            More</button></a>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6" style="background-color: black; height: 50vh;">
            </div>
            <img src="{{ asset('gopioffice.png') }}" width="653" height="400" class="imgpeople"
                style="position: absolute; left: 928px; top:738px; display:block"> --}}
        <div class="col-sm-12 mt-5 mb-5">
            <center>
                <h1 style="color: black"><strong>Business Unit</strong></h1>
            </center>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar1.png') }}" alt="Gambar 1">
                        <div class="image-text">
                            <h1><strong>Property and<br> Construction</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar2.png') }}" alt="Gambar 2">
                        <div class="image-text">
                            <h1><strong>Technology and Inovation</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar3.png') }}" alt="Gambar 3">
                        <div class="image-text">
                            <h1><strong>Digital Marketing and Branding</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar4.png') }}" alt="Gambar 4">
                        <div class="image-text">
                            <h1><strong>Food and Beverages</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar5.png') }}" alt="Gambar 5">
                        <div class="image-text">
                            <h1><strong>Gadgets and Wearables</strong></h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-containerspecial">
                        <img src="{{ asset('gambar6.png') }}" alt="Gambar 6">
                        <div class="image-text">
                            <h1><strong>Pre-seed Venture</strong></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12" style="background-color: #1E1E1E; padding-bottom: 50px;">
            <div class="col-sm-12 mt-5">
                <h1 style="color: white"><strong>
                        <center>Group Companies We Service</center>
                    </strong></h1>
            </div>
            <div class="container mt-5 justify-content-center">
                <div class="row">
                    <div class="col-md-4 mt-5">
                        <img src="{{ asset('service1.png') }}">
                    </div>
                    <div class="col-md-4 mt-5">
                        <img src="{{ asset('service2.png') }}">
                    </div>
                    <div class="col-md-4 mt-5">
                        <img src="{{ asset('service3.png') }}">
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-4 mt-5">
                        <img src="{{ asset('service4.png') }}">
                    </div>
                    <div class="col-md-4 mt-5">
                        <img src="{{ asset('service5.png') }}">
                    </div>
                    <div class="col-md-4 mt-5">
                        <img src="{{ asset('service6.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection