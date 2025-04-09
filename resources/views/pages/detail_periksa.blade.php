@extends('layouts.app')

@section('title', 'Detail Pemeriksaan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Detail Pemeriksaan</h2>

    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            Informasi Pemeriksaan
        </div>
        <div class="card-body">
            <p><strong>Nama Pasien:</strong> Andi Saputra</p>
            <p><strong>Nama Dokter:</strong> dr. Budi Santoso</p>
            <p><strong>Tanggal Periksa:</strong> 2025-04-09</p>
            <p><strong>Catatan:</strong> Pasien mengalami demam dan nyeri kepala</p>
            <p><strong>Biaya Pemeriksaan:</strong> Rp100.000</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Obat yang Digunakan
        </div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Paracetamol (Tablet 500mg)
                    <span class="badge bg-success rounded-pill">Rp10.000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    OBH (Cair)
                    <span class="badge bg-success rounded-pill">Rp15.000</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
