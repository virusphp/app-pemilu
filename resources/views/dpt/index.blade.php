@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between">
                    <h4>Data DPT</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>TPS</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr >
                            <td>1234234141233</td>
                            <td>M Deni Setiawan</td>
                            <td>Laki Laki</td>
                            <td>Pekalongan</td>
                            <td>26 JUni 1994</td>
                            <td>Jl Damar Dalam I no 58 RT 001 RW 002 Krapyak Pekalongan Utara Kota Pekalongan</td>
                            <td>4</td>
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