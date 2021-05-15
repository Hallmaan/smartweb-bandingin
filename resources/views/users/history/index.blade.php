@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>History</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">History</a></div>
            <div class="breadcrumb-item">All History</div>
        </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Posts</h2>
        <p class="section-lead">
            Anda dapat melihat data pencarian yang sudah anda save
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card mb-0">
                    <div class="card-body">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active <span class="badge badge-white">{{ count($data) }}</span></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Dihapus <span class="badge badge-primary">1</span></a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>History Pencarian</h4>
                    </div>
                    <div class="card-body">
                        <div class="float-right">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>
                                        Site
                                    </th>
                                    <th>Nama Produk</th>
                                    <th>Nama Toko</th>
                                    <th>Harga Produk</th>
                                    <th>Foto Produk</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($data as $history)
                                <tr>

                                    <td>
                                    <?php
                                        if($history['site_category_id']== 1){
                                            $sitee = 'Tokopedia';
                                        } else if ($history['site_category_id'] == 2){
                                            $sitee = 'Bukalapak';
                                        }
                                    ?>
                                        <strong>{{$sitee}}<strong>
                                    </td>
                                    <td>{{ $history['product_name'] }}</td>
                                    <td>{{ $history['shop_name'] }}</td>
                                    <td>
                                        {{ $history['product_price_format'] }}
                                    </td>
                                    <td>
                                        <div class="gallery gallery-md">
                                            <img src="{{ $history['product_img_url'] }}" class="gallery-item">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="badge badge-warning">{{ $history['shop_location'] }}</div>
                                    </td>
                                    <td><a href="{{$history['product_click_url'] }}" class="btn btn-primary">Detail</a></td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection