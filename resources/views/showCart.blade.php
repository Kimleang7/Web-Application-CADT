@extends('layouts.master')

@section('title','Cart')

<base href="/public">

@include('partails.Admin_link')

@section('content')
    <style>
        table{
            margin: 9rem;
        }
        .input-box{
            padding: 50px 200px;
        }
        .order-now{
            margin: auto;
            padding: 20px 300px;
        }
        .submit {
            /*color: #fff;*/
            /*width: 80px;*/
            /*height: 40px;*/
            /*background-color: #f44336;*/

            background-color: #2563eb;
            /*width: 80px;*/
            /*height: 30px;*/
            /*line-height: 30px;*/
            border-radius: 5px;
            text-align: center;
            color: #fff;
        }
        label{
            color: #1a202c;
        }

    </style>

    <table>

        <tr>
            <td>Image</td>
            <td>Title</td>
            <td>Price</td>
            <td>QTY</td>
        </tr>
        <form action="{{url('orderNow')}}" method="post">
            @csrf
        @foreach($data as $data)
            <tr>
                <td style="padding: 10px 10px;"><img width="100px" height="70px" src="/ImageMenu/{{$data->image}}"></td>
                <td>
                    <input type="text" name="foodName[]" value="{{$data->title}}" hidden="">
                    {{$data->title}}
                </td>
                <td>
                    <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                    {{$data->price}}
                </td>
                <td>
                    <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                    {{$data->quantity}}
                </td>
            </tr>
        @endforeach

        <tr>
            <td>Food_ID</td>
            <td>Action</td>
            <td></td>
            <td></td>
        </tr>

        @foreach($data2 as $data2)
            <tr>
                <td>{{$data2->id}}</td>
                <td ><a id="remove" class="fa-solid fa-trash" href="{{url('/deleteCart',$data2->id)}}"></a></td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
    </table>
    <h3 class="sub-heading">please fill your information</h3>
    <!-- add to cart -->


    <div  class="input-box">
        <div class="input">
            <label>Phone Number</label>
            <input type="text" name="name" placeholder="Your Name"required>
        </div>
        <div class="input">
            <label>Phone Number</label>
            <input type="number" name="phone" placeholder="Your Number" required>
        </div>
        <div class="input">
            <label>Address</label>
            <input type="text" name="address" placeholder="Your Address"  required>
        </div>
        <div class="order-now">
            <input class="submit" type="submit" value="Order Now">
        </div>


    </div>


    </form>

@endsection
