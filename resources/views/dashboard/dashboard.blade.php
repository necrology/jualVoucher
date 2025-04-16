@extends('layouts.layout')
@section('content')

<style>
    #chart {
        max-width: 100%;
        /* margin: 35px auto; */
    }

    #chart2 {
        max-width: 100%;
        /* margin: 35px auto; */
    }
</style>
<small>Selamat datang, Maulana Gandawijaya</small>
<h5>Dashboard</h5>

<!-- Summary Cards -->
<div class="row g-3 mb-4">
    <div class="col-md-2">
        <div class="card p-1 card-custom1">
            <div class="card-body">
                <h6>Total Pengiriman</h6>
                <div class="value">152.300</div>
                <div class="text-muted small">Voucher</div>
                <hr>
                <h6>Total Stok</h6>
                <div class="value">152.300</div>
                <div class="text-muted small">Voucher</div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="card p-1 card-custom">
            <div class="card-body">
                <h6>Total Stok Outlet</h6>
                <div class="value">152.300</div>
                <div class="text-muted small">Voucher</div>
                <hr>
                <h6>Total Stok Outlet</h6>
                <div class="value">152.300</div>
                <div class="text-muted small">Voucher</div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card p-1 card-custom">
            <div class="card-body d-flex">
                <div style="border-right: 1px solid #c7c4ba;padding-right: 2rem;">
                    <h6>Total Di Beli</h6>
                    <div class="value">152.300</div>
                    <div class="text-muted small">Voucher</div>
                    <hr style="visibility: hidden">
                    <h6>Total Terjual</h6>
                    <div class="value">152.300</div>
                    <div class="text-muted small">Voucher</div>
                </div>

                <div id="chart2">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Filters -->
<div class="d-flex justify-content-between align-items-center mb-2">
    <h6 class="mb-0">Total Penjualan</h6>
    <div class="filter-group d-flex gap-2">
        <select class="form-select form-select-sm">
            <option>Semua Bulan</option>
            <option>Januari</option>
            <option>Februari</option>
        </select>
        <select class="form-select form-select-sm">
            <option>Semua Brand</option>
            <option>Brand A</option>
            <option>Brand B</option>
        </select>
        <select class="form-select form-select-sm">
            <option>Semua Outlet</option>
            <option>Outlet A</option>
            <option>Outlet B</option>
        </select>
    </div>
</div>

<!-- Bar Chart -->
<div class="card">
    <div id="chart">
    </div>
</div>
@endsection