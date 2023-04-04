@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data Saksi</h4>
                    <a type="button" class="btn btn-info btn-sm" href="{{route('saksi.create') }}" >+ Tambah</a>
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
                           <tr >
                            <td>1</td>
                            <td>Deni</td>
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