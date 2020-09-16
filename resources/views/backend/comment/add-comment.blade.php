@extends('layouts.backend.app')
@section('title','Add Comments')
@push('styles')

@endpush
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Comments</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user') }}">User</a></li>
                    <li class="breadcrumb-item active">Create</li>
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
                <a type="button" href="{{ route('user') }}" class="btn btn-info btn-sm float-sm-right"><i class="fa fa-undo"></i> Back</a>
                <h3 class="card-title"><i class="fa fa-plus"></i> Create Comments</h3>
              </div>
              <!-- /.card-header -->
<livewire:comments />
            </div>
        </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection
@push('scripts')

@endpush
