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
                           <tr >
                            <td>1</td>
                            <td>31 April 2023</td>
                            <td>18.00 WIB</td>
                            <td>Penyuluhan Pemilu</td>
                            <td>RT 04 perum slaamaran</td>
                            <td>Penyuluhan</td>
                            <td>Ya</td>
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