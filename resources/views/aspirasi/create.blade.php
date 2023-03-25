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
                    <div class="d-flex justify-content-between"><h4>Tambah Aspirasi</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Detail Aspirasi</label>
                        <input type="text" class="form-control" id="detail" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Sumber</label>
                          <input type="text" class="form-control" id="sumber" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wilayah</label>
                            <input type="text" class="form-control" id="wilayah" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Solusi</label>
                            <input type="text" class="form-control" id="solusi" required>
                        </div>
                        <div class="mb-3">
                          <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" id="status">
                                <option value="1">Acc</option>
                                <option value="2">Pending</option>
                                <option value="3">Tolak</option>
                              </select>
                          </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Pelaksanaan Solusi</label>
                            <input type="date" class="form-control" id="tanggal_pelaksanaan_solusi">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="jenis" value="aspirasi" hidden required>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                </div>            
            </div>    
        </div>            
    </div>
  </div>
@endsection