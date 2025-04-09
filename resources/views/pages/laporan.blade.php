@extends('layouts.app')

@section('title', 'Laporan Pemeriksaan')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Laporan Pemeriksaan</h2>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal</th>
                    <th>Diagnosa</th>
                    <th>Obat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Andi Saputra</td>
                    <td>dr. Budi Santoso</td>
                    <td>2025-04-01</td>
                    <td>Demam</td>
                    <td>Paracetamol</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti Aminah</td>
                    <td>dr. Lisa Maharani</td>
                    <td>2025-04-02</td>
                    <td>Batuk</td>
                    <td>OBH</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Rina Kurniawati</td>
                    <td>dr. Budi Santoso</td>
                    <td>2025-04-03</td>
                    <td>Flu</td>
                    <td>Antihistamin</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
