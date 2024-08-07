@extends('dashboard.layouts.app')
@section('title', 'Imad Daimi - dashboard help requests')
@section('content')
<link rel="stylesheet" href="{{asset('dashboard/css/dataTables.bootstrap4.css')}}">
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <div style="display: flex;justify-content: space-between;align-items: center;">
        <h2 class="mb-2 page-title">Help Requests</h2>
       
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
                    <th >First Name</th>
                    <th >Last Name</th>
                    <th >Description</th>
                    <th >Phone</th>
                    <th >Type</th>
                    <th >Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($help_requests) && $help_requests->count())
                  @foreach($help_requests as $request)
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>{{$request->id}}</td>
                    <td>{{$request->first_name}}</td>
                    <td>{{$request->last_name}}</td>
                    <td>
                        @if(strlen($request->description)>80)
                         {{substr($request->description,0,80)}}...
                        @else
                        {{$request->description}}
                        @endif
                      </td>
                    <td >{{$request->phone}}</td>
                    <td >{{$request->type}}</td>
                 
                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{url('/admin-dashboard/help_request/show/'.$request->id)}}">View</a>
                      </div>
                    </td>
                  </tr>
                   
                  @endforeach
                @else
                    <tr>
                      <td>There are no Help Requests.</td>
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