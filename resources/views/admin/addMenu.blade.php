
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
            <span class="dashboard">Menu</span>
        </div>
        <div class="search-box">
            <x-app-layout>
            </x-app-layout>
        </div>
    </nav>
    <div class="home-content">
        <form action="{{url('/uploadMenu')}}" method="post" enctype="multipart/form-data">
            @csrf
            <h2 style="text-align: center; font-size: 1.5rem; color: #0d3073; text-transform: uppercase">Add Item to Menu</h2>
            <div class="inputBox">
                <div class="input">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="title" required>
                </div>
                <div class="input">
                    <label>Icon</label>
                    <input type="text" name="icon" placeholder="icon" required>
                </div>
                <div class="input">
                    <label>Price</label>
                    <input type="number" name="price" placeholder="price" required>
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


