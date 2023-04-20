<div class="sidebar">
    <div class="logo-details">
    </div>
    <ul class="nav-links">
        <li>
            <a class="{{ Request::path() === 'Admin' ? 'active' : ''}}" href="{{url('Admin')}}" >
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="{{ Request::path() === 'users' ? 'active' : ''}}" href="{{url('users')}}">
                <i class='bx bx-user' ></i>
                <span class="links_name">User</span>
            </a>
        </li>
        <li>
            <a class="{{ Request::path() === 'foodMenu' ? 'active' : ''}}" href="{{url('foodMenu')}}" >
                <i class='bx bx-box' ></i>
                <span class="links_name">Menu</span>
            </a>
        </li>
        <li>
            <a class="{{ Request::path() === 'teamView' ? 'active' : ''}}" href="{{url('teamView')}}">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">Team</span>
            </a>
        </li>

        <li>
            <a class="{{ Request::path() === 'orderView' ? 'active' : ''}}" href="{{url('orderView')}}">
                <i class='bx bx-book-alt' ></i>
                <span class="links_name">Total order</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-message' ></i>
                <span class="links_name">Messages</span>
            </a>
        </li>
    </ul>
</div>
