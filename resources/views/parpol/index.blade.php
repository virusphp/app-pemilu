@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="card col-8 mx-auto">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data Parpol</h4>
                    <a type="button" class="btn btn-info btn-sm" href="sad" >+ Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr  class="text-center">
                                <th>No</th>
                                <th>Nama Partai</th>
                                <th>Jumlah Kandidat</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr >                
                            <td class="text-center">1</td>
                            <td>PDIP</td>
                            <td class="text-center">10 </td>
                            <td class="text-center">
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="sad">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                </form>
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