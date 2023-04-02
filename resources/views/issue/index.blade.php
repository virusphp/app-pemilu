@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data Issue</h4>
                    <a type="button" class="btn btn-info btn-sm" href="{{route('issue.create') }}" >+ Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Detail Issue</th>
                                <th>Sumber</th>
                                <th>Wilayah</th>
                                <th>Status</th>
                                <th>Solusi</th>
                                <th>Pelaksanaan Solusi</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($issue as $val)    
                            <td>{{$loop->iteration}}</td>
                            <td>{{$val->detail}}</td>
                            <td>{{$val->sumber}}</td>
                            <td>{{$val->wilayah}}</td>
                            <td>{{$val->status}}</td>
                            <td>{{$val->solusi}}</td>
                            <td>{{$val->tanggal_pelaksanaan_solusi}}</td>
                            <td>
                                <form action="{{route('issue.delete', $val->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="{{route('issue.edit', $val->id) }}">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                            </form>
                            </td>
                           </tr>
                           @endforeach
                          </tbody>
                      </table>
                </div>                
            </div>            
        </div>        
    </div>
  </div>
@endsection