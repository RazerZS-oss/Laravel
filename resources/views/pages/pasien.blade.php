@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Data Pasien</h2>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pasien</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Andi Saputra</td>
                    <td>25</td>
                    <td>Laki-laki</td>
                    <td>Jl. Melati No. 12</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti Aminah</td>
                    <td>30</td>
                    <td>Perempuan</td>
                    <td>Jl. Mawar No. 7</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Budi Hartono</td>
                    <td>40</td>
                    <td>Laki-laki</td>
                    <td>Jl. Kenanga No. 21</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
