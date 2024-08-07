<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{url('/admin-dashboard/home')}}">
          <img style="width: 100%;" src="{{ app('logo') }}">
        </a>
      </div>
      
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Dashboard</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="{{url('/admin-dashboard/users')}}">
            <i class="fe fe-users fe-16"></i>
            <span class="ml-3 item-text">Users</span>
          </a>
        </li>
        <li class="nav-item w-100">
            <a class="nav-link" href="{{url('/admin-dashboard/help_requests')}}">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Help Requests</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="{{url('/admin-dashboard/volunteers')}}">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Volunteers</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="{{url('/admin-dashboard/contact_us')}}">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Contact Us</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="{{url('/admin-dashboard/recommendations')}}">
              <i class="fe fe-box fe-16"></i>
              <span class="ml-3 item-text">Recommendations</span>
            </a>
          </li>
          <li class="nav-item w-100">
            <a class="nav-link" href="{{url('/admin-dashboard/settings')}}">
              <i class="fe fe-settings fe-16"></i>
              <span class="ml-3 item-text">Settings</span>
            </a>
          </li>
        
        
       
        
      </ul>
      
      
     
    </nav>
  </aside>