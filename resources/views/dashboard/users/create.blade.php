@extends('dashboard.layouts.app')
@section('title', 'Imad Daimi - dashboard create user')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Create New User</h2>
                <div class="card shadow mb-4">
                    <form id="quickForm" method="post" action="{{route('create.user')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" name="first_name" class="form-control"  placeholder="Enter First Name"value="{{ old('first_name') }}">
                                        @if ($errors->has('first_name'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('first_name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" name="last_name" class="form-control"  placeholder="Enter Last Name"value="{{ old('last_name') }}">
                                        @if ($errors->has('last_name'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('last_name') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control"  placeholder="Enter Email"value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('email') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="number" name="phone_number" class="form-control"  placeholder="Enter Phone Number"value="{{ old('phone_number') }}">
                                        @if ($errors->has('phone_number'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('phone_number') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" name="username" class="form-control"  placeholder="Enter Username"value="{{ old('username') }}">
                                        @if ($errors->has('username'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('username') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" name="password" class="form-control"  placeholder="Enter Password">
                                        @if ($errors->has('password'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('password') }}</p>
                                        @endif
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm Password">
                                        @if ($errors->has('password_confirmation'))
                                            <p class="text-error more-info-err" style="color: red;">
                                                {{ $errors->first('password_confirmation') }}</p>
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                            <button type="submit" class="btn mb-2 btn-outline-primary" style="width: 10%">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')

@endpush