@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Main Content -->
<section class="section">
  <div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Dashboard</div>
      <div class="breadcrumb-item active">Profile</div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Hi, {{ $data->name }}</h2>
    <p class="section-lead">
      Change information about yourself on this page.
    </p>

    <div class="row">
      <div class="col-12 col-md-12  ">
        <div class="card">
          <form method="POST" action="{{ route('profile_update', ['user_id' => Auth::user()->id]) }}">
            {{ csrf_field() }}

            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif


            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
              {{ $error }}
            </div>
            @endforeach
            <div class="card-header">
              <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-12 col-12">
                  <label>Name</label>
                  <input type="text" name="nama" class="form-control" value="{{ $data->name }}" required="">
                  <div class="invalid-feedback">
                    Please fill in the first name
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-7 col-12">
                  <label>Email</label>
                  <input type="email" class="form-control" value="{{ $data->email }}" disabled>
                  <div class="invalid-feedback">
                    Please fill in the email
                  </div>
                </div>
                <div class="form-group col-md-5 col-12">
                  <label>Registered At</label>
                  <input type="tel" class="form-control" value="{{ $data->created_at }}" disabled>
                </div>
              </div>
              </div>
              <div class="card-footer text-right">
              <button class="btn btn-primary">Save Changes</button>
            </div>
              </form>
              </div>
              <div class="card">
              <form method="POST" action="{{ route('password_update', ['user_id' => Auth::user()->id]) }}">
            {{ csrf_field() }}
              <div class="card-header">
              <h4>Edit Password</h4>
            </div>
              <div class="card-body">
              <div class="form-group row">
                <label for="password" class="col-md-12 col-form-label text-md-left">Current Password</label>

                <div class="col-md-12">
                  <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                </div>
              </div>


              <div class="form-group row">
                <label for="password" class="col-md-12 col-form-label text-md-left">New Password</label>

                <div class="col-md-12">
                  <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-12 col-form-label text-md-left">New Confirm Password</label>

                <div class="col-md-12">
                  <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                </div>
              </div>

            </div>
            <div class="card-footer text-right">
              <button class="btn btn-primary">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>
@endsection