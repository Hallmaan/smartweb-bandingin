@extends('layouts.master')

@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Pricing</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Pricing</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Pricing</h2>
        <p class="section-lead">Harga paket pasang iklan di aplikasi bandingin</p>

        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="pricing">
                    <div class="pricing-title">
                        Basic
                    </div>
                    <div class="pricing-padding">
                        <div class="pricing-price">
                            <div>Rp 100.000</div>
                            <div>per bulan</div>
                        </div>
                        <div class="pricing-details">
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Navbar)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                <div class="pricing-item-label">1 Banner (Main Content)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                <div class="pricing-item-label">1 Banner (Sidebar)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                <div class="pricing-item-label">Data clicked banner/iklan</div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-cta">
                        <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="pricing pricing-highlight">
                    <div class="pricing-title">
                        Business
                    </div>
                    <div class="pricing-padding">
                        <div class="pricing-price">
                            <div>Rp 500.000</div>
                            <div>per bulan</div>
                        </div>
                        <div class="pricing-details">
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Navbar)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Main Content)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Sidebar)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                <div class="pricing-item-label">Data clicked banner/iklan</div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-cta">
                        <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="pricing">
                    <div class="pricing-title">
                        Enterprise
                    </div>
                    <div class="pricing-padding">
                        <div class="pricing-price">
                            <div>Rp 800.000</div>
                            <div>per bulan</div>
                        </div>
                        <div class="pricing-details">
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Navbar)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Main Content)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">1 Banner (Sidebar)</div>
                            </div>
                            <div class="pricing-item">
                                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                <div class="pricing-item-label">Data clicked banner/iklan</div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-cta">
                        <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection