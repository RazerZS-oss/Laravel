@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Data Dokter</h2>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>No. Telepon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>dr. Budi Santoso</td>
                    <td>Umum</td>
                    <td>081234567890</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>dr. Lisa Maharani</td>
                    <td>Anak</td>
                    <td>082345678901</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>dr. Tono Rahmad</td>
                    <td>Gigi</td>
                    <td>083456789012</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
