<!DOCTYPE html>
<html lang="en" dir="ltr">

<base href="/public">
@include('partails.Admin_link')
<style>
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }
</style>

<body>
@include('partails.Adminsidebar')
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Menu</span>
        </div>
        <div class="search-box">
            <x-app-layout>
            </x-app-layout>
        </div>
    </nav>
    <div class="home-content">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

            @csrf
            <h2 style="text-align: center; font-size: 1.5rem; color: #0d3073; text-transform: uppercase">Update Item in Menu</h2>
            <div class="inputBox">
                <div class="input">
                    <label>Title</label>
                    <input type="text" name="title" value="{{$data->title}}" required>
                </div>
                <div class="input">
                    <label>Icon</label>
                    <input type="text" name="icon" value="{{$data->icon}}" required>
                </div>
                <div class="input">
                    <label>Price</label>
                    <input type="number" name="price" value="{{$data->price}}"required>
                </div>
                <div class="input">
                    <label>New Image</label>
                    <input type="file" name="image" value="{{$data->image}}">
                </div>
                <div class="input">
                    <label>Description</label>
                    <input type="text" name="description" value="{{$data->description}}" required>
                </div>
                <div class="input">
                    <label>Old Image</label>
                    <img width="250px" height="170px" src="/ImageMenu/{{$data->image}}">
                </div>
                <div class="input">
{{--                    <label>Press button Update</label>--}}
                    <input type="submit" name="Update" class="submit" style="background-color: #0d3073">
                </div>
            </div>
        </form>
    </div>
</section>
@include('partails.Admin_script');


</body>
</html>

