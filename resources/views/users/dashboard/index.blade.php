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
      <div class="hero bg-primary text-white">
        <div class="hero-inner">
          <h2>IKLAN HERE</h2>
          <p class="lead">Widget ini untuk promosi iklan</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <h4>Bandingin Sekarang!</h4>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label class="form-label">Pilih Online Shop</label>
        <div class="selectgroup selectgroup-pills">
          <label class="selectgroup-item">
            <input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
            <span class="selectgroup-button">Tokopedia</span>
          </label>
          <label class="selectgroup-item">
            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
            <span class="selectgroup-button">Bukalapak</span>
          </label>
          <label class="selectgroup-item">
            <input type="checkbox" name="value" value="CSS" class="selectgroup-input">
            <span class="selectgroup-button">Shope</span>
          </label>
        </div>
      </div>
      <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control colorpickerinput">
      </div>
      <div class="form-group">
        <label>Harga Maximum Barang</label>
        <input type="text" class="form-control colorpickerinput">
      </div>
      <div class="form-group">
        <label>Limit Data</label>
        <input type="text" class="form-control colorpickerinput">
      </div>
      <a href="#" class="btn btn-primary">Cari Barang</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Tokopedia</h4>
          <div class="card-header-form">
            <div class="buttons"> <a href="#" class="btn btn-primary">Save</a>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped">
              <tr>
                <th>
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                  </div>
                </th>
                <th>Nama Produk</th>
                <th>Nama Toko</th>
                <th>Harga Produk</th>
                <th>Foto Produk</th>
                <th>Lokasi</th>
                <th>Action</th>
              </tr>
              <tr>
                <td class="p-0 text-center">
                  <div class="custom-checkbox custom-control">
                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                  </div>
                </td>
                <td>Masker Nih Bos</td>
                <td>Toko Masker</td>
                <td>
                  Rp. 20.000,-
                </td>
                <td>
                  <div class="gallery gallery-md">
                    <div class="gallery-item" data-image="../assets/img/news/img03.jpg" data-title="Image 1"></div>
                    <div class="gallery-item" data-image="../assets/img/news/img14.jpg" data-title="Image 2"></div>
                  </div>
                  <div class="gallery-item gallery-hide" data-image="../assets/img/news/img01.jpg" data-title="Image 9"></div>
                </td>
                <td>
                  <div class="badge badge-warning">Jakarta Timur</div>
                </td>
                <td><a href="#" class="btn btn-primary">Detail</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">Data Count : 1</div>
  </div>
  <div class="section-body">
  </div>
</section>
@endsection