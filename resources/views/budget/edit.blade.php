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
                    <div class="d-flex justify-content-between"><h4>Edit Budgeting</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('budget.update',$budget->id)}}" method="post">
                        @method('PUT')
                      @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Keperluan</label>
                        <input type="text" class="form-control" name="keperluan" value="{{old('keperluan',$budget->keperluan)}}" required>
                      </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Sumber</label>
                          <input type="text" class="form-control" name="sumber" value="{{old('sumber',$budget->sumber)}}"  required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Wilayah</label>
                            <input type="text" class="form-control" name="wilayah" value="{{old('wilayah',$budget->wilayah)}}"  required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nominal</label>
                            <input type="text" class="form-control" name="nominal" value="{{old('nominal',$budget->nominal)}}"  required>
                        </div>
                        <div class="mb-3">
                          <div class="form-group">
                              <label>Progress</label>
                              <select class="form-control" name="status">
                                <option value="1">Acc</option>
                                <option value="2">Pending</option>
                                <option value="3">Tolak</option>
                              </select>
                          </div>
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