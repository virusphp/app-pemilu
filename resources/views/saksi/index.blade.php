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
                                        <h4>Data Saksi</h4>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-outline-primary  btn-sm" href="{{ route('relawan.create') }}">+Tambah</a>
                                        <a type="button" class="btn btn-outline-primary  btn-sm" href="{{ route('relawan.create') }}">Ubah Status Masal</a>
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
                                                <th>Nama Lengkap</th>
                                                <th>Panggilan</th>
                                                <th>TPS</th>
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
                                                <td>KRistianto</td>
                                                <td>Antok</td>
                                                <td>02, Krapyak, Pekalongan Utara, Kota Pekalongan, Jawa Tengah</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-outline-primary btn-sm p-1 me-1" title="detail"  data-coreui-toggle="modal" data-coreui-target="#staticBackdrop">
                                                            <i class="bi bi-eye"></i>
                                                          </button>
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



<!-- Modal -->
    <div   div class="modal fade" id="staticBackdrop" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detail Data Relawan</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover">                        
                            <tbody>
                                <tr>
                                    <th>NIK</th>
                                    <td>2132131421343242</td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>Kristianto Satrio Utomo</td>
                                </tr>
                                <tr>
                                    <th>Panggilan</th>
                                    <td>Kris</td>
                                </tr>
                                <tr>
                                    <th>No Hp</th>
                                    <td>2132131421343242</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>Laki - Laki</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>Pekalongan</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>2 Agustus 2000</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>Jl Damar Dalam I No 53 Perum Slamaran RT 04 RW 09, Krapyak Kota Pekalongan</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>No TPS</th>
                                    <td>02</td>
                                </tr>
                                <tr>
                                    <th>Kelurahan / Desa</th>
                                    <td>Krapayak</td>
                                </tr>
                                <tr>
                                    <th>Kota / Kabupaten</th>
                                    <td>Kota Pekkalongan</td>
                                </tr>
                                <tr>
                                    <th>Provinsi</th>
                                    <td>Jawa tengah</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary">Understood</button>
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



