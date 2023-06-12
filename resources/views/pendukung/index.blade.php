@extends('layouts.backend')
@section('title')
    Dashboard
@endsection

@section('content')

    <div class="container-fluid">   
        
        <div class="container-flud mt-3">   
            <div class="row">           
                <div class="col-lg-4 ">
                    <div class="card  bg-light border-light ">
                        <div class="card-header  bg-light  border border-light">
                            <div class="justify-content-between">
                                <div>
                                    <h4 class=" mx-auto my-auto ">3.000 Target Dukungan</h4>
                                </div>
                            </div>
                        </div>
                        <canvas class="mt-1 mb-2 pb-2" id="Pendukung" style="width:100%; max-width:600px"></canvas>       
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="card bg-light border-light">
                        <div class="card-header bg-light border-light">
                            <div class="justify-content-between">
                                <div>
                                    <h4 class=" mx-auto my-auto ">Topografi Usia Pendukung</h4>
                                </div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper">
                            <canvas class="mt-1 mb-2 pb-2" id="UsiaPe" style="width:100%; max-width:600px"></canvas>       
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="card bg-light border-light">
                        <div class="card-header bg-light border-light">
                            <div class="justify-content-between">
                                <div>
                                    <h4 class=" mx-auto my-auto ">Pembawa Data Ganda</h4>
                                </div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper">
                            <canvas class="mt-1 mb-2 pb-2" id="ganda" style="width:100%; max-width:600px"></canvas>       
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row mb-3">
            
            <div class="col-lg-3 col-xm-12 mt-3">
                <div class="card border-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-primary p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">Total DPT</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">5.000 Data</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xm-12 mt-3">
                <div class="card border-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-primary p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">Total Pendukung</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">2.000 Data</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-xm-12 mt-3">
                <div class="card border-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-primary p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">Total Data Primer</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">1.500 Data Pendukung</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xm-12 mt-3">
                <div class="card bg-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-white p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-white">Total Data Ganda</div>
                            <div class="text-white text-uppercase fw-semibold"> <small>500 Data Pendukung</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
          @include('koordinator.alert')
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-coreui-toggle="pill" data-coreui-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Data Primer</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-coreui-toggle="pill" data-coreui-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Data Ganda</button>
                    </li>
                </ul>
                <div class="card">                      
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="card-header bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Data Primer</h4>
                                    </div>
                                </div>
                            </div>
                              
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table  table-sm table-hover" id="myTable" style="white-space:nowrap;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Jumlah</th>
                                                <th>Harga Satuan</th>
                                                <th>Total Harga</th>
                                                <th>Penanggung Jawab</th>
                                                <th>Tempat Penyimpanan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>29 Agustus 2023</td>
                                                <td>Pembelian barang</td>
                                                <td>Pembelian Kaos TIm Sukses</td>
                                                <td>12 Pcs</td>
                                                <td>Rp. 10.0000</td>
                                                <td>Rp. 120.000</td>
                                                <td><a type="button" class="btn btn-ghost-primary btn-sm p-1 me-1" data-coreui-toggle="modal" data-coreui-target="#detailRealwan">Kliwon (Tim Lapangan)</a></td>
                                                <td>Posko Utama</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-outline-primary btn-bg p-1 me-1" title="detail"  data-coreui-toggle="modal" data-coreui-target="#detailTransaksi">
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

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="card-header bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Data Ganda</h4>
                                    </div>
                                </div>
                            </div>
                            
                              
                              
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table  table-sm table-hover" id="Pemasukan" style="white-space:nowrap;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Kategori</th>
                                                <th>Nominal</th>
                                                <th>Diterima Dari</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>29 Agustus 2023</td>
                                                <td>Dana Partai</td>
                                                <td>Rp. 200.000</td>
                                                <td>Bendahara Partai</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="button" class="btn btn-outline-primary btn-bg p-1 me-1" title="detail"  data-coreui-toggle="modal" data-coreui-target="#detailTransaksi">
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
    </div>



<!-- Modal -->
    <div class="modal fade" id="detailRealwan" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="detailRealwanLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="detailRealwanLabel">Detail Data Relawan</h5>
            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover" style="white-space: nowrap">                        
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
                                <th>Jobdesk</th>
                                <td>Survey WIlayah Krapyak</td>
                            </tr>
                            <tr>
                                <th>Keanggotaan</th>
                                <td>Koordinator</td>
                            </tr>
                            <tr>
                                <th>Target</th>
                                <td>2000 Suara</td>
                            </tr>
                            <tr>
                                <th>Sistem Honor</th>
                                <td>Per Dukungan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div   div class="modal fade" id="detailTransaksi" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Detail Transaksi</h5>
            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                        <table class="table table-sm table-hover" style="white-space: nowrap">                        
                            <tbody>
                                <tr>
                                    <th>Tanggal Transaksi</th>
                                    <td>26 Agustus 2023</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>Pembelian Barang</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>Pembelian Atribut Partai</td>
                                </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <td>12 PCs</td>
                                </tr>
                                <tr>
                                    <th>Harga Satuan</th>
                                    <td>Rp. 10.0000</td>
                                </tr>
                                <tr>
                                    <th>Total Harga</th>
                                    <td>Pekalongan</td>
                                </tr>
                                <tr>
                                    <th>Penanggung Jawab</th>
                                    <td>Kliwon (Tim Lapangan)</td>
                                </tr>
                                <tr>
                                    <th>Tempat Penyimpanan</th>
                                    <td>Posko Utama</td>
                                </tr>
                                <tr>
                                    <th>Nama Toko / Usaha / Perorangan</th>
                                    <td>Haji Doyok</td>
                                </tr>
                                <tr>
                                    <th>Alamat Toko / Usaha / Perorangan </th>
                                    <td>Jl Raya Pantura Wiradesa - Sragi</td>
                                </tr>
                                <tr>
                                    <th>No Hp  Toko / Usaha / Perorangan</th>
                                    <td>134234234</td>
                                </tr>
                            </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        
    } );

    
        $(document).ready( function () {
        $('#Pemasukan').DataTable();
        
    } );
        </script>

   
    
@endsection



