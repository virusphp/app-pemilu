@extends('layouts.backend')
@section('title')
Form
@endsection

@section('content')
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-white mt-2">
                    <div class="d-flex justify-content-between"><h4>Tambah Koordinator</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('koordinator.update', $timsukses->id) }}" method="POST">
                      @csrf
                      @method("PUT")
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" value="{{old('nik', $timsukses->nik)}}" readonly required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{old('nama_lengkap', $timsukses->nama_lengkap)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{old('alamat', $timsukses->alamat)}}" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No. Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{old('no_hp', $timsukses->no_hp)}}" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Area</label>
                            <input type="text" class="form-control" id="area" name="area" value="{{old('area', $timsukses->area)}}" required>
                          </div>
                          
                          <div class="mb-3">
                            <input type="hidden" class="form-control" id="jenis_tugas" name="jenis_tugas" value="koordinator" readonly>
                          </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                      </form>
                </div>            
            </div>    
        </div>            
    </div>
  </div>
@endsection