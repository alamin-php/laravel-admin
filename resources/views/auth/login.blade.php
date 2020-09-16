@extends('layouts.auth.app')
@section('title','Login')
@section('content')
    <div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/') }}"><b>Dashboard Login</b></a>
  </div>
  <!-- /.login-logo -->
<livewire:login />
</div>
<!-- /.login-box -->
@endsection