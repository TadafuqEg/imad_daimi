@extends('dashboard.layouts.app')
@section('title', 'Imad Daimi - dashboard contact us')
@section('content')
<link rel="stylesheet" href="{{asset('dashboard/css/dataTables.bootstrap4.css')}}">
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-12">
      <div style="display: flex;justify-content: space-between;align-items: center;">
        <h2 class="mb-2 page-title">Contact us</h2>
        <a href="{{url('/admin-dashboard/contact_us?export=excel')}}"><button type="button" class="btn mb-2 btn-outline-primary">Export  <span class="fe fe-24 fe-download"></span></button></a>
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
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th >Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($contact_us) && $contact_us->count())
                  @foreach($contact_us as $contact_us1)
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>{{$contact_us1->id}}</td>
                    <td >{{$contact_us1->first_name}}</td>
                            <td >{{$contact_us1->last_name}}</td>
                            <td >{{$contact_us1->email}}</td>
                            <td >{{$contact_us1->phone}}</td>
                            <td >@if(strlen($contact_us1->message)>50)
                                {{substr($contact_us1->message,0,50)}}...
                               @else
                               {{$contact_us1->message}}
                               @endif</td>
                 
                    <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{url('/admin-dashboard/contact_us/show/'.$contact_us1->id)}}">View</a>
                      </div>
                    </td>
                  </tr>
                   
                  @endforeach
                @else
                    <tr>
                      <td>There are nothing.</td>
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