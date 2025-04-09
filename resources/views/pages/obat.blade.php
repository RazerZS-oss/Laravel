@extends('layouts.app')

@section('title', 'Data Obat')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Data Obat</h2>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Jenis</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Paracetamol</td>
                    <td>Tablet</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>OBH</td>
                    <td>Cair</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Amoxicillin</td>
                    <td>Kapsul</td>
                    <td>60</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
