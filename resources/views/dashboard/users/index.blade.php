@extends('dashboard.layouts.app')
@section('title', 'Imad Daimi - dashboard users')
@section('content')
<link rel="stylesheet" href="{{asset('dashboard/css/dataTables.bootstrap4.css')}}">
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <div style="display: flex;justify-content: space-between;align-items: center;">
        <h2 class="mb-2 page-title">Users</h2>
        <a href="{{route('add.user')}}"><button type="button" class="btn mb-2 btn-outline-primary">Create New User</button></a>
      </div>
      <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <!-- table -->
              <table class="table datatables" id="dataTable-1">
                <thead>
                  <tr>
                    <th></th>
                    <th>#</th>
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
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->first_name}} {{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->roles->first()->name}}</td>
                 
                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{url('/admin-dashboard/user/edit/'.$user->id)}}">Edit</a>
                        <a class="dropdown-item" href="{{url('/admin-dashboard/user/delete/'.$user->id)}}">Remove</a>

                      </div>
                    </td>
                  </tr>
                   
                  @endforeach
                @else
                    <tr>
                      <td>There are no Clients.</td>
                    </tr>
                @endif
                  
                 
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- simple table -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
</div> <!-- .container-fluid -->
@endsection
@push('scripts')
    <script src="{{asset('dashboard/js/jquery.dataTables.min.js')}}"></script>
        <script src='{{asset('dashboard/js/dataTables.bootstrap4.min.js')}}'></script>
        <script>
          $('#dataTable-1').DataTable(
          {
            autoWidth: true,
            "lengthMenu": [
              [16, 32, 64, -1],
              [16, 32, 64, "All"]
            ]
          });
    </script>
   
    <!-- Global site tag (gtag.js) - Google Analytics -->
  
    
@endpush