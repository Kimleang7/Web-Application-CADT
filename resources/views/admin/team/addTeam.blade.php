
<!DOCTYPE html>
<html lang="en" dir="ltr">

<base href="/public">
@include('partails.Admin_link')

<body>
@include('partails.Adminsidebar')
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
    <div class="home-content">
        <form action="{{url('/uploadTeam')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="inputBox">
                <div class="input">
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="input">
                    <label>Position</label>
                    <input type="text" name="position" placeholder="position" required>
                </div>
                <div class="input">
                    <label>Image</label>
                    <input type="file" name="image" placeholder="image" required>
                </div>
                <div class="input">
                    <label>Description</label>
                    <input type="text" name="description" placeholder="description" required>
                </div>
                <div class="input">
{{--                    <label>Press button submit</label>--}}
                    <input type="submit" name="submit" class="submit" style="background-color: #0d3073">
                </div>
            </div>
        </form>
    </div>
</section>
@include('partails.Admin_script');


</body>
</html>



