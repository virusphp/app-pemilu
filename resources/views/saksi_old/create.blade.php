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
                    <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="nik" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No. Handphone</label>
                            <input type="text" class="form-control" id="no_hp" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Area</label>
                            <input type="text" class="form-control" id="area" required>
                          </div>
                          
                          <div class="mb-3">
                            <input type="text" class="form-control" id="jenis_tugas" value="saksi" readonly hidden>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>            
            </div>    
        </div>            
    </div>
  </div>
@endsection