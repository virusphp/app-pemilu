@extends('layouts.backend')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">

             @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="btn-close" data-coreui-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="card">
                <div class="card-header bg-white">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4>Data Koordinator</h4>
                        </div>
                        <div>
                            <a type="button" class="btn btn-info btn-sm" href="{{ route('koordinator.create') }}">+Tambah</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Alamat</th>
                                    <th>TPS</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Antok</td>
                                    <td>Slamaran</td>
                                    <td>2</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm p-1">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm p-1">Hapus</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
