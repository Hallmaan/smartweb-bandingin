@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Main Content -->
<section class="section">
  <div class="section-header">
    <h1>Iklan Here</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item">Dashboard</div>
      <div class="breadcrumb-item active">Guest Book</div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Guest book</h2>
    <p class="section-lead">
      Information about user list (guest book)
    </p>
    <div class="row">
    <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-group">
                    @foreach($data as $key)
                      <li class="list-group-item">{{ $key->name }}</li>
                    @endforeach
                    </ul>
                  </div>
                </div>
              </div>
    </div>
</section>
@endsection