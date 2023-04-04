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
                    <div class="d-flex justify-content-between"><h4>Tambah Saksi</h4>
                    </div>
                </div>
                <div class="card-body">
                  <form action="{{ route('saksi.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="nik" class="form-label">NIK</label>
                      <input type="text" class="form-control" id="nik" name="nik" required>
                    </div>
                      <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                      </div>
                      <div class="mb-3">
                          <label for="alamat" class="form-label">Alamat</label>
                          <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                          <label for="no_hp" class="form-label">No. Handphone</label>
                          <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <div class="mb-3">
                          <label for="area" class="form-label">Area</label>
                          <input type="text" class="form-control" id="area" name="area" required>
                        </div>
                        
                        <div class="mb-3">
                          <input type="hidden" class="form-control" id="jenis_tugas" name="jenis_tugas" value="saksi" readonly>
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>            
            </div>    
        </div>            
    </div>
  </div>
@endsection