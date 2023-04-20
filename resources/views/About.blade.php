@extends('layouts.master');

@section('title','About')
@section('content')


<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">
        <div class="image">
            <img src="images/menu-10-removebg.png" alt="">
        </div>
        <div class="content">
            <h3>Our mission</h3>
            <p>
                "Bringing good food into your everyday. That's our mission.
                That means we don't just deliver we bring it, always going the extra mile to make your experience memorable.
            </p>
            <p>
                And it means this is delicious food you can enjoy everyday: from vibrant salads for healthy office lunches, to indulgent family-sized pizzas, to fresh sushi
                for a romantic night in. Whatever you crave, we can help."
            </p>

            <a href="#" class="btn">learn more</a>
        </div>

    </div>
    <div class="row">
        <div class="content">
            <br>
            <h3>Our vision</h3>
            <p>
                Well, there's a good reason for it — because of their values which are expressed
                in their mission statement. As consumers, we like to patronize businesses that have values we believe in.
            </p>
            <p>
                And it means this is delicious food you can enjoy everyday: from vibrant salads for healthy office lunches, to indulgent family-sized pizzas, to fresh sushi
                for a romantic night in. Whatever you crave, we can help."
            </p>

            <a href="#" class="btn">learn more</a>
        </div>
        <div class="image">
            <img src="images/About_pizza.png" alt="">
        </div>
    </div>
</section>

@endsection


