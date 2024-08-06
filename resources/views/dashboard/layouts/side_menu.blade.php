<section id="sidebar">
    <a href="{{url('/admin-dashboard/home')}}" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Dashboard</span>
    </a>
    <ul class="side-menu top">
        <li class="active" data-section="dashboard">
            <a href="{{url('/admin-dashboard/home')}}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li data-section="table">
            <a href="{{url('/admin-dashboard/users')}}">
                <i class='bx bxs-spreadsheet'></i>
                <span class="text">Users</span>
            </a>
        </li>
        <li data-section="form">
            <a href="./form.html">
                <i class='bx bxs-file'></i>
                <span class="text">Form</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li data-section="settings">
            <a href="#">
                <i class='bx bxs-cog'></i>
                <span class="text">Settings</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>