<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('partails.Admin_link')
<body>

@include('partails.Adminsidebar');

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Team</span>
        </div>
        <div class="search-box">
            <x-app-layout>
            </x-app-layout>
        </div>
    </nav>

    <div>
        <a id="create" href="{{url('/addTeam')}}">Create</a>
        <table>
            <tr>
                <td>Image</td>
                <td>Name</td>
                <td>Position</td>
                <td>Description</td>
                <td>Remove</td>
                <td>Update</td>
            </tr>

            @foreach($data as $data)
                <tr>
                    <td style="padding: 10px 10px;"><img width="100px" height="60px" src="/ImageTeam/{{$data->image}}"></td>
                    <td >{{$data->name}}</td>
                    <td>{{$data->position}}</td>
                    <td>{{$data->description}}</td>
                    <td><a id="remove" class="fa-solid fa-trash" href="{{url('/deleteTeam',$data->id)}}"></a></td>
                    <td><a id="update" class="fa-solid fa-pen-to-square" href="{{url('/updateTeamView',$data->id)}}"></a></td>
                </tr>
            @endforeach
        </table>
    </div>


</section>

@include('partails.Admin_script');

</body>
</html>






