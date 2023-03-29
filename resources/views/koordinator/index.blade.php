@extends('layouts.backend')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">

        <div class="row">

          @include('koordinator.alert')

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
                                @foreach ($koordinators as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->area }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm p-1">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm p-1">Hapus</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                            {!! $koordinators->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
