@extends('layouts.app-front')
@section('css')
    <!-- Tambahin CSS buat datatables kalo perlu -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <section class="desktop-show">
        <div class="container" style="padding: 100px">
            <div class="col-md-12">
                <p style="color: black"><strong>Home</strong>/Admin Menu</p>
                <h1 style="color: black; font-size: 60px;"><strong>Email Data Table</strong></h1>
                <div class="row mx-2">
                    <a href="{{ route('download-pdf') }}" class="btn btn-primary mr-2"
                        style="border-radius: 0 !important; padding-top:10px; background-color: #1E1E1E">Download PDF</a>

                    <a href="{{ route('export-excel') }}" class="btn btn-primary"
                        style="border-radius: 0 !important; padding-top:10px; background-color: #1E1E1E">Download Excel</a>

                </div>
                <table id="dataTable" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Message</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="mobile-show">

        <table id="dataTableMobile" class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection

@section('js-after')
    <!-- Tambahin JS buat datatables -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable(); // Inisialisasi datatables
            $('#dataTableMobile').DataTable(); // Inisialisasi datatables buat versi mobile
        });
    </script>
@endsection
