@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data Budgeting</h4>
                    <a type="button" class="btn btn-info btn-sm" href="{{route('budget.create') }}" >+ Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Keperluan</th>
                                <th>Sumber</th>
                                <th>Wilayah</th>
                                <th>Nominal</th>
                                <th>Progres</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr >
                            @foreach ($budget as $val)                                
                           <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$val->keperluan}}</td>
                            <td>{{$val->sumber}}</td>
                            <td>{{$val->wilayah}}</td>
                            <td>{{rupiah($val->nominal)}}</td>
                            <td>{{status($val->status)}}</td>
                            <td>
                                <form action="{{route('budget.delete', $val->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="{{route('budget.edit', $val->id) }}">Edit</a>
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