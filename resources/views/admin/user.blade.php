<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partails.Admin_link')
<style>
    table {
        margin: 10px 20px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>

@include('partails.Adminsidebar')
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">User</span>
        </div>
        <form action="{{url('/searchUser')}}" method="get" class="search-box">
            <input type="text" name="searchUser" placeholder="Search...">
            <i class='bx bx-search' ></i>
        </form>
        <div class="profile-details">
            <x-app-layout>
            </x-app-layout>
        </div>
    </nav>
    <div style="position:relative; padding-top: 50px;">
        <table >
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>

                @if($data->name != 'admin')
                <td style="color: #dc3545"><a class="fa-solid fa-trash" href="{{url('/deleteUser',$data->id)}}"></a></td>
                @else
                <td><a href="">Not allowed</a></td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</section>

@include('partails.Admin_script');


</body>
</html>
