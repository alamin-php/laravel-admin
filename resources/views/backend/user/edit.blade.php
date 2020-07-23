@extends('layouts.backend.app')
@section('title','Edit User')
@push('styles')

@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                <h3 class="card-title"><i class="fa fa-edit"></i> Edit User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form method="post" action="{{ route('user.update',$data->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tbl" value="{{ encrypt('users') }}">
                <input class="form-control" type="hidden" name="id" value="{{ $data->id }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Full Name</label>
                    <input type="text" name="name" class="form-control" id="inputName" value="{{ $data->name }}" required="">
                  </div>                  
                  <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" value="{{ $data->email }}" required="">
                  </div>                 
                  <div class="form-group">
                    <label for="selectUser">Type</label>
                    <select class="form-control" name="type">
                        <option value="admin" {{ $data->type == 'admin'?'selected' : '' }}>Admin</option>
                        <option value="user" {{ $data->type == 'user'?'selected' : '' }}>User</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  @if ($data->image)
                      <img src="{{ asset($data->image) }}" class="img-circle" alt="User Image" width="80" height="80">
                  @else
                      <p class="text-danger"><i>Image Not Found</i></p>
                  @endif
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Update</button>
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
