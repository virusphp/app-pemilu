@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data Jadwal Kegiatan</h4>
                    <a type="button" class="btn btn-info btn-sm" href="{{route('jadwal_kegiatan.create') }}" >+ Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Nama Kegiatan</th>
                                <th>Tempat</th>
                                <th>Jenis Kegiatan</th>
                                <th>Visibilitas</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($jadwal_kegiatan as $val) 
                           <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$val->tgl_kegiatan}}</td>
                            <td>{{$val->jam_kegiatan}}</td>
                            <td>{{$val->nama_kegiatan}}</td>
                            <td>{{$val->tempat_kegiatan}}</td>
                            <td>{{$val->jenis_kegiatan}}</td>
                            <td>{{$val->visibilitas}}</td>
                            <td>                                
                                <form action="{{route('jadwal_kegiatan.delete', $val->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="{{route('jadwal_kegiatan.edit', $val->id) }}">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                </form>
                            </td>
                            @endforeach
                           </tr>
                          </tbody>
                      </table>
                </div>                
            </div>            
        </div>        
    </div>
  </div>
@endsection