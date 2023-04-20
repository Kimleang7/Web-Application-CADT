@extends('layouts.master')

@section('title','Menu')

@section('content')

<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's speciality </h1>

    <div class="box-container" >
        @foreach($data as $data)
            <form action="{{url('addCart',$data->id)}}" method="post">
                @csrf
                <div class="items-container">
                    <img class="product-image" src="/ImageMenu/{{$data->image}}" alt="">
                    <div class="stars">
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                        <i class="{{$data->icon}}"></i>
                    </div>
                    <h3 class="product-title">{{$data->title}}</h3>
                    <p>{{$data->description}}</p>
                    <span class="product-price">{{$data->price}}$</span>
                    <input type="number" name="quantity" value="1" class="qty-box">
                    <input type="submit" class="add-to-cart" value="Add To Cart" name="Add to cart">
                </div>
            </form>
        @endforeach
    </div>


</section>
@endsection


{{--<div class="box">--}}
{{--    <div class="image">--}}
{{--        <img class="product-image" src="/ImageMenu/{{$data->image}}" alt="">--}}
{{--    </div>--}}
{{--    <div class="content">--}}


{{--        <span class="product-price">${{$data->price}}</span>--}}

{{--        <button class="add-to-cart" >add to cart</button>--}}
{{--        --}}{{--                        <input type="number" name="quantity" value="1"  style="text-align: center; margin: 10px;border: 1px solid var(--bs-green);">--}}
{{--    </div>--}}
{{--</div>--}}
{{--</form>--}}
