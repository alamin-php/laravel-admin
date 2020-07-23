@extends('layouts.backend.app')
@section('title','Change Password')
@push('styles')

@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Change Password</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
                    <li class="breadcrumb-item active">Change Password</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-user"></i> Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Old Password</label>
                     <input id="oldPass" type="password" class="form-control" name="oldPass" value="{{ $oldPass ?? old('oldPass') }}" required autocomplete="oldPass" autofocus placeholder="Enter old password">
                  </div>                  
                  <div class="form-group">
                    <label for="inputEmail">New Password</label>
                   <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Enter new password">
                  </div>                 
                  <div class="form-group">
                    <label for="inputTextarea">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter confirm password">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-danger"><i class="fa fa-paper-plane"></i> Change Password</button>
                </div>
              </form>
            </div>
        </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection
@push('scripts')

@endpush
