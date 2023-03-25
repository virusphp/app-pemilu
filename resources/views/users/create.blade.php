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
                    <div class="d-flex justify-content-between"><h4>Tambah Users</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label for="nik" class="form-label">ID Tim Sukses</label>
                        <input type="text" class="form-control" id="nik" required>
                      </div>
                        <div class="mb-3">
                          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                          <input type="text" class="form-control" id="nama_lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                          </div>
                          <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
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