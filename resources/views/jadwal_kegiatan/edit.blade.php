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
                    <div class="d-flex justify-content-between"><h4>Edit Jadwal Kegiatan</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('jadwal_kegiatan.update',$jadwal_kegiatan->id)}}" method="post">
                        @method('PUT')
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tgl_kegiatan" value="{{old('tgl_kegiatan',$jadwal_kegiatan->tgl_kegiatan)}}" required>
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Waktu Kegiatan</label>
                        <input type="time" class="form-control" name="jam_kegiatan"  value="{{old('jam_kegiatan',$jadwal_kegiatan->jam_kegiatan)}}" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
                          <input type="text" class="form-control" name="nama_kegiatan" value="{{old('nama_kegiatan',$jadwal_kegiatan->nama_kegiatan)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tempat Kegiatan</label>
                            <input type="text" class="form-control" name="tempat_kegiatan" value="{{old('tempat_kegiatan',$jadwal_kegiatan->tempat_kegiatan)}}" required>
                          </div>
                          <div class="mb-3">
                            <div class="form-group">
                              <label>Jenis Kegiatan</label>
                              <select class="form-control" name="jenis_kegiatan" required>
                                <option value="Pembuatan Konten">Pembuatan Konten</option>
                                <option value="Kampanye">Kampanye</option>
                                <option value="Sosialisasi">Sosialisasi</option>
                                <option value="Suvey Lapangan">Suvey Lapangan</option>
                                <option value="Rapat">Rapat</option>
                                <option value="Jumpa Pers">Jumpa Pers</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3">
                            <div class="form-group">
                                <label>Visibilitas</label>
                                <select class="form-control" name="visibilitas">
                                  <option value="Ya">Ya</option>
                                  <option value="Tidak">Tidak</option>
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