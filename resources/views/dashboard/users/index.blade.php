@extends('dashboard.layouts.app')
@section('title', 'Clients')
@section('content')
<main>
    <div class="content-section active" id="dashboard-content">
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Users</a>
                    </li>
                </ul>
                
            </div>
            <div class="d-flex align-items-center" style="display:flex;">
                <form class=" mx-2 my-0" id="search_categories" method="post" action="{{ route('users') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="input-group">
                    <input type="search" style="height: 40px; font-size: 15px;" name="search" class="form-control form-control-lg"
                      placeholder="Type your keywords here">
                    <div class="input-group-append">
                      <button type="submit" style="height: 40px; font-size: 15px;" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                      </button>
                    </div>
                  </div>
                  
                </form>
                
                <a href="{{route('add.user')}}" class="btn btn-primary">Create User<i class="bi bi-plus"></i> </a>
                
              </div>

        </div>
        <!-- <h1>Table</h1> -->
        <!-- Add content for Table -->
        <div class="box-info" style="display: block;">
            <table id="dataTable">
                <thead>
                    <tr>
                       
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                        <th>Action</th>
  
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($all_users) && $all_users->count())
                        @foreach($all_users as $user)
                          <tr >
                            <td >{{$user->first_name}} {{$user->last_name}}</td>
                            <td >{{$user->email}}</td>
                            <td >{{$user->username}}</td>
                            <td >{{$user->phone}}</td>
                            <td >{{$user->roles->first()->name}}</td>
                            
                            <td >
                              
                              
                             
                              <a href="{{url('/admin-dashboard/user/edit/'.$user->id)}}" style="margin-right: 1rem;">
                                <span  class="bi bi-pen" style="font-size: 1rem; color: rgb(0,255,0);"></span>
                              </a>
                             
                              <a href="{{url('/admin-dashboard/user/delete/'.$user->id)}}">
                                <span class="bi bi-trash" style="font-size: 1rem; color: rgb(255,0,0);"></span>
                              </a>
                             
                              
                            </td>
                          </tr>
                        @endforeach
                      @else
                          <tr>
                            <td colspan="10" class="text-center py-3">There are no Clients.</td>
                          </tr>
                      @endif
                </tbody>
            </table>
            {!! $all_users->links("pagination::bootstrap-4") !!}
        </div>

       
    </div>
    
</main>
@endsection