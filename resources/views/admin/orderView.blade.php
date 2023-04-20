<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partails.Admin_link')

<style>
    table{
        margin: 50px 20px;
    }

</style>
<body>
@include('partails.Adminsidebar');
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Total Order</span>
        </div>
        {{--        <form action="{{url('/searchMenuAdmin')}}" method="get" class="search-box">--}}
        {{--            <input type="text" name="searchUser" placeholder="Search...">--}}
        {{--            <i class='bx bx-search' ></i>--}}
        {{--        </form>--}}
        <div class="profile-details">
            <x-app-layout>
            </x-app-layout>
        </div>
    </nav>

    <div>
        <table>
            <tr>
                <td>FoodName</td>
                <td>Price</td>
                <td>QTY</td>
                <td>Customer</td>
                <td>Phone</td>
                <td>Address</td>
                <td>Total Price</td>
            </tr>

            @foreach($data as $data)
                <tr>
                    <td >{{$data->foodName}}</td>
                    <td>{{$data->price}}$</td>
                    <td>{{$data->quantity}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->price * $data->quantity}}$</td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
@include('partails.Admin_script');


</body>
</html>

