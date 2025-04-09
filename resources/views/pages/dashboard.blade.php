@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Dokter</h5>
                    <p class="card-text">5</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pasien</h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Obat</h5>
                    <p class="card-text">20</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-body">
                    <h5 class="card-title">Pemeriksaan Hari Ini</h5>
                    <p class="card-text">3</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
