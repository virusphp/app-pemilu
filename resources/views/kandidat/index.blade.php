@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data Kandidat</h4>
                    <a type="button" class="btn btn-info btn-sm" href="sad" >+ Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Caleg</th>
                                <th>Partai</th>
                                <th>No Urut</th>
                                <th>Alamat (basecamp)</th>
                                <th>Medsos</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr >                
                            <td>asd</td>
                            <td>asd</td>
                            <td>asdsa</td>
                            <td>asdas</td>
                            <td>asda</td>
                            <td><a href="" class="">asd</a></td>
                            <td>
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