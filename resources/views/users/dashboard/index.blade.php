@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>IKLAN HERE</h1>
  </div>
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Online User</h4>
          </div>
          <div class="card-body">
            10
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
          <i class="far fa-newspaper"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Pencarian</h4>
          </div>
          <div class="card-body">
            42
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
          <i class="far fa-file"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Visitor</h4>
          </div>
          <div class="card-body">
            1,201
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>User Mendaftar</h4>
          </div>
          <div class="card-body">
            47
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 mb-4">
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
      <div class="hero bg-primary text-white">
        <div class="hero-inner">
          <h2>IKLAN HERE</h2>
          <p class="lead">Widget ini untuk promosi iklan <a style="color:red;" href="{{ route('pricing') }}">Klik Disini</a></p>
        </div>
      </div>
    </div>
  </div>
  <form method="POST" action="{{ route('search') }}">
    {{ csrf_field() }}
    <div class="card">
      <div class="card-header">
        <h4>Bandingin Sekarang!</h4>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label class="form-label">Pilih Online Shop</label>
          <div class="selectgroup selectgroup-pills">
            @foreach($site as $key)
            <label class="selectgroup-item">
              <input type="checkbox" name="site_id" value="{{$key->id}}" class="selectgroup-input">
              <span class="selectgroup-button">{{ $key->name }}</span>
            </label>
            @endforeach
          </div>
        </div>
        <div class="form-group">
          <label>Nama Barang</label>
          <input type="text" name="nama_barang" class="form-control colorpickerinput">
        </div>
        <div class="form-group">
          <label>Harga Maximum Barang</label>
          <input type="number" name="harga_maximum" class="form-control colorpickerinput">
        </div>
        <div class="form-group">
          <label>Limit Data</label>
          <input type="number" name="limit_data" class="form-control colorpickerinput">
        </div>
        <button type="submit" id="checkBtn" class="btn btn-primary">Cari Barang</button>
      </div>
    </div>
  </form>
  <form method="POST" action="{{ route('save') }}">
  {{ csrf_field() }}
  <div class="row">
    <div class="col-12">
      <div class="card">
        @if(!empty($data))
        @foreach($data as $key)
        <?php
        for ($i = 0; $i < count($key['data_scrap']); $i++) {
          $key['data_scrap'][$i]['custom_text'] = 'checkbox-' . $i;
        }
        ?>
        <div class="card-header">
          <h4>{{ $key['site_name'] }}</h4>
          <div class="card-header-form">
            <div class="buttons"> <button type="submit" id="saveBtn" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>
                  List
                </th>
                <th>Nama Produk</th>
                <th>Nama Toko</th>
                <th>Harga Produk</th>
                <th>Foto Produk</th>
                <th>Lokasi</th>
                <th>Action</th>
              </tr>
              @foreach($key['data_scrap'] as $scrap)
              <tr>

                <td class="p-0 text-center">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" name="scrap_data[]" data-checkboxes="mygroup" class="custom-control-input" id="{{$scrap['custom_text']}}" value="{{json_encode($scrap)}}">
                    <label for="{{$scrap['custom_text']}}" class="custom-control-label">&nbsp;</label>
                  </div>
                </td>
                <td>{{ $scrap['product_name'] }}</td>
                <td>{{ $scrap['shop_name'] }}</td>
                <td>
                  {{ $scrap['product_price_format'] }}
                </td>
                <td>
                  <div class="gallery gallery-md">
                    <img src="{{ $scrap['product_img_url'] }}" class="gallery-item">
                  </div>
                </td>
                <td>
                  <div class="badge badge-warning">{{ $scrap['shop_location'] }}</div>
                </td>
                <td><a href="{{$scrap['product_click_url'] }}" class="btn btn-primary">Detail</a></td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </div>
  </form>
  <div class="card">
    <div class="card-header">Data count = {{ isset($data_count) ? $data_count : 0 }}</div>
  </div>
  <div class="section-body">
  </div>
</section>
@endsection