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
                    <div class="d-flex justify-content-between"><h4>Tambah Jadwal Kegiatan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal_kegiatan" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu Kegiatan</label>
                        <input type="time" class="form-control" id="jam" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                          <input type="text" class="form-control" id="nama_kegiatan" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tempat Kegiatan</label>
                            <input type="text" class="form-control" id="tempat_kegiatan" required>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kegiatan</label>
                            <input type="text" class="form-control" id="jenis_kegiatan" required>
                          </div>
                          <div class="mb-3">
                            <div class="form-group">
                                <label>Visibilitas</label>
                                <select class="form-control" id="visibilitas">
                                  <option value="1">Ya</option>
                                  <option value="2">Tidak</option>
                                </select>
                            </div>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>            
            </div>    
        </div>            
    </div>
  </div>
@endsection