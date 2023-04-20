@extends('layouts.master')

@section('title','Contact')

@section('content')

<section class="order" id="order">

    <h3 class="sub-heading"> Contact us </h3>
    <h1 class="heading"> Please fill your information</h1>

    <form action="{{url('reservation')}}" method="post">
        @csrf
        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name">
            </div>
            <div class="input">
                <span>Table Booking</span>
                <input type="number" placeholder="enter number of table">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>Phone Number</span>
                <input type="text" placeholder="enter phone number">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="inputBox1">
            <div class="input1">
                <span>Your address and Email</span>
                <textarea name="" placeholder="enter your address and email" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="submit" name="submit" class="btn">
    </form>

</section>

@endsection
