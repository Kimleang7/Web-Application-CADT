<!DOCTYPE html>
<html lang="en" dir="ltr">
<base href="/public">
@include('partails.Admin_link')
<body>

@include('partails.Adminsidebar');

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Update Team</span>
        </div>
        <div class="search-box">
            <x-app-layout>
            </x-app-layout>
        </div>
    </nav>
    <div class="home-content">
        <form action="{{url('/updateTeam',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="inputBox">
                <div class="input">
                    <label>Name</label>
                    <input type="text" name="name" value="{{$data->name}}"  required>
                </div>
                <div class="input">
                    <label>Position</label>
                    <input type="text" name="position" value="{{$data->position}}" required>
                </div>
                <div class="input">
                    <label>New Image</label>
                    <input type="file" name="image" value="" required>
                </div>
                <div class="input">
                    <label>Description</label>
                    <input type="text" name="description" value="{{$data->description}}" required>
                </div>
                <div class="input">
                    <label>Old Image</label>
                    <img style="width: 300px;height: 200px;" src="ImageTeam/{{$data->image}}">
                </div>
                <div class="input">
{{--                    <label>Click upate!</label>--}}
                    <input type="submit" value="Update" class="submit" style="background-color: #0d3073">
                </div>
            </div>
        </form>
    </div>

</section>

@include('partails.Admin_script');

</body>
</html>






