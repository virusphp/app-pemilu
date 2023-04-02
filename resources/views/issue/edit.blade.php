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
                    <div class="d-flex justify-content-between"><h4>Edit Issue</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('issue.update',$issue->id)}}" method="post">
                        @method('PUT')
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Detail Issue</label>
                        <input type="text" class="form-control" name="detail" value="{{old('detail',$issue->detail)}}" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Sumber</label>
                          <input type="text" class="form-control" name="sumber" value="{{old('sumber',$issue->sumber)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wilayah</label>
                            <input type="text" class="form-control" name="wilayah" value="{{old('wilayah',$issue->wilayah)}}" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Solusi</label>
                            <input type="text" class="form-control" name="solusi" value="{{old('solusi',$issue->solusi)}}" required>
                        </div>
                        <div class="mb-3">
                          <div class="form-group">
                              <label>Status</label>
                              <select class="form-control" name="status">
                                <option value="1">Acc</option>
                                <option value="2">Pending</option>
                                <option value="3">Tolak</option>
                              </select>
                          </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Pelaksanaan Solusi</label>
                            <input type="date" class="form-control" name="tanggal_pelaksanaan_solusi" value="{{old('tanggal_pelaksanaan_solusi',$issue->tanggal_pelaksanaan_solusi)}}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="jenis" value="issue" hidden required>
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