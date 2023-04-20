{{--extent from master layout--}}
@extends('layouts.master')

@section('title','Home')


@section('content')
    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="swiper-container home-slider">

            <div class="swiper-wrapper wrapper">

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>Best Food in Country</span>
                        <h3>
                            Greate Tasted
                        </h3>
                        <p>Food is your body's fuel. Without fuel, your body wants to shut down.</p>
{{--                        <a href="Menu.html" class="btn">order now</a>--}}
                    </div>
                    <div class="image">
                        <img src="images/home-img-3.png" alt="">
                    </div>
                </div>

            </div>
        </div>

        <!-- feature part -->
        <div class=" feature">
            <h3 class="sub-heading">Feature</h3>
            <h1 class="heading">New feature</h1>

            <div class="item">
                <div class="main-item1 ">
                    <i class="fa-solid fa-pizza-slice"></i>
                    <h4>Order</h4>
                </div>
                <div class="main-item2">
                    <i class="fa-solid fa-truck"></i>
                    <h4>Delivery</h4>
                </div>
                <div class="main-item3">
                    <i class="fa-solid fa-hand-holding-dollar"></i>
                    <h4>Payment</h4>
                </div>
                <div class="main-item4">
                    <i class="fas fa-headset"></i>
                    <h4>24/7 service</h4>
                </div>
            </div>
        </div>
        <!-- Story part -->
        <div class="story">
            <h1 class="heading">Our story</h1><br><br>

                <div class="row">
                    <div class="content">
                        <h3 class="sub-heading">from 2017</h3>
                        <p>
                            Fresh Daily was born out of a vision to provide a simple, yet warm and comfortable
                            dining experience.
                            It all started with an idea of two childhood friends, baseball teammates and
                            food lovers, to bring
                        </p>
                        <p>
                            together each of their own strenghts, to create something they can share with
                            others. With Chef
                            Krsna – a natural artist, with an immense passion in culinary art, and Kai – a
                            CPA accountant with
                            business acumen, Ichiruka Restaurant was born.
                        </p>
                        <p>
                            Fresh Daily is your place to enjoy good food with the comfort and familiarity of
                            home! Ichiruka’ was
                            born out of a vision to provide you a simple yet warm and comfortable dining
                            experience!
                        </p>
                    </div>
                    <div class="image">
                        <img src="images/stroy1.png" alt="">
                    </div>

                </div>
                <div class="row">
                    <div class="image">
                        <img src="images/story2.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3 class="sub-heading">In the future</h3>
                        <p>
                            Fresh Daily was born out of a vision to provide a simple, yet warm and comfortable
                            dining experience.
                            It all started with an idea of two childhood friends, baseball teammates and
                            food lovers, to bring
                        </p>
                        <p>
                            together each of their own strenghts, to create something they can share with
                            others. With Chef
                            Krsna – a natural artist, with an immense passion in culinary art, and Kai – a
                            CPA accountant with
                            business acumen, Ichiruka Restaurant was born.
                        </p>
                        <p>
                            Fresh Daily is your place to enjoy good food with the comfort and familiarity of
                            home! Ichiruka’ was
                            born out of a vision to provide you a simple yet warm and comfortable dining
                            experience!
                        </p>
                    </div>

                </div>

        </div>

    </section>

@endsection
