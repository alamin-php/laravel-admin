@extends('layouts.backend.app')
@section('title','Settings')
@push('styles')

@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Setting</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Setting</li>
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
                <h3 class="card-title"><i class="fa fa-tools"></i> Dashboard Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form method="post" action="{{ route('setting.update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="tbl" value="{{ encrypt('settings') }}">
                <input class="form-control" type="hidden" name="id" value="{{ $data->id }}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNameText">Footer Left Text</label>
                    <input type="text" name="footer_left_text" class="form-control" id="inputNameText" value="{{ $data->footer_left_text }}">
                  </div>                   
                  <div class="form-group">
                    <label for="inputNameLink">Footer Web Link</label>
                    <input type="text" name="footer_web_link" class="form-control" id="inputNameLink" value="{{ $data->footer_web_link }}">
                  </div>                   
                  <div class="form-group">
                    <label for="inputName">Footer Right Text</label>
                    <input type="text" name="footer_right_text" class="form-control" id="inputName" value="{{ $data->footer_right_text }}">
                  </div>                  
                  <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
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
