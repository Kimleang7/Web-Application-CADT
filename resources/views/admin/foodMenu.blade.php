<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partails.Admin_link')


<body>
@include('partails.Adminsidebar');
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Menu</span>
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
        <a id="create" href="{{url('/addMenu')}}">Create</a>
        <table>
            <tr>
                <td>Image</td>
                <td>Icon</td>
                <td>Title</td>
                <td>Price</td>
                <td>Description</td>
                <td>Remove</td>
                <td>Update</td>
            </tr>

            @foreach($data as $data)
            <tr>
                <td style="padding: 10px 10px;"><img width="200px" height="170px" src="/ImageMenu/{{$data->image}}"></td>
                <td >{{$data->icon}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><a id="remove" class="fa-solid fa-trash" href="{{url('/deleteMenu',$data->id)}}"></a></td>
                <td><a id="update" class="fa-solid fa-pen-to-square" href="{{url('/updateView',$data->id)}}"></a></td>
            </tr>
            @endforeach
        </table>
    </div>
</section>
@include('partails.Admin_script');


</body>
</html>
