@extends('layouts.backend')
@section('title')
    Dashboard
@endsection

@section('content')

    <div class="container-fluid">        
        <div class="row">
          @include('koordinator.alert')
            <div class="col-lg-12">
                <div class="card">                      
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="card-header bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Versi Chanel</h4>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-outline-primary  btn-sm" href="{{ route('relawan.create') }}">+Tambah Chanel Baru</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table  table-sm table-hover" id="myTable" >
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Status</th>
                                                <th>Nama Chanel</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                                                    </div>
                                                </td>
                                                <td>Chanel 1</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a type="button" class="btn btn-outline-primary btn-sm p-1 me-1" title="edit" href=""><i class="bi bi-pencil-square"></i></a>
                                                        <button type="submit" class="btn btn-outline-primary btn-sm p-1 me-1" title="hapus"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                </div>                               
                            </div> 
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>


    
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        
    } );
        </script>
@endsection



