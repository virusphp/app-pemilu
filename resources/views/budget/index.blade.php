@extends('layouts.backend')
@section('title')
    Dashboard
@endsection

@section('content')

    <div class="container-fluid">        
        <div class="row">
          @include('koordinator.alert')
            <div class="col-lg-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-coreui-toggle="pill" data-coreui-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pengeluaran</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-coreui-toggle="pill" data-coreui-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Pemasukan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link bi bi-gear" id="pills-settings-tab" data-coreui-toggle="pill" data-coreui-target="#pills-settings" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"></button>
                    </li>
                </ul>
                <div class="card">                      
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="card-header bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Data Pengeluaran</h4>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-outline-primary  btn-sm" href="{{ route('relawan.create') }}">+Tambah</a>
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
                                        <h4>Data Pemasukan</h4>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-outline-primary  btn-sm" href="{{ route('relawan.create') }}">+Tambah</a>
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


                        <div class="tab-pane fade" id="pills-settings" role="tabpanel" aria-labelledby="pills-settings-tab" tabindex="0">
                            <div class="card-header bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Settings</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4"> 
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Kategori Pengeluaran</h5>
                                            </div>
                                            <div>
                                                <a type="button" class="btn btn-info btn-sm" href="{{ route('koordinator.create') }}">+Tambah</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kategori</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Pembelian Barang</td>
                                                        <td>
                                                            <form action="" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Pembayaran Jasa</td>
                                                        <td>
                                                            <form action="" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <nav aria-label="Page navigation example mx-auto my-auto ">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav> 
                                    </div>  
                                    
                                    <div class="col-4"> 
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Kategori Pemasukan</h5>
                                            </div>
                                            <div>
                                                <a type="button" class="btn btn-info btn-sm" href="{{ route('koordinator.create') }}">+Tambah</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Kategori</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dana Pribadi</td>
                                                        <td>
                                                            <form action="" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dana Partai</td>
                                                        <td>
                                                            <form action="" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <nav aria-label="Page navigation example mx-auto my-auto ">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav> 
                                    </div>    
                                    
                                    
                                    <div class="col-4"> 
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h5>Tipe Satuan</h5>
                                            </div>
                                            <div>
                                                <a type="button" class="btn btn-info btn-sm" href="{{ route('koordinator.create') }}">+Tambah</a>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Satuan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Pcs</td>
                                                        <td>
                                                            <form action="" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Buah</td>
                                                        <td>
                                                            <form action="" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <nav aria-label="Page navigation example mx-auto my-auto ">
                                            <ul class="pagination justify-content-center">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav> 
                                    </div>   
                                </div>
                         <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                    </div>   
                </div>
            </div>
        </div>
        
        <div class="container-flud mt-3">   
            <div class="row">           
                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-header bg-white ">
                            <div class="justify-content-between">
                                <div>
                                    <h4 class=" mx-auto my-auto ">Chart Budgeting</h4>
                                </div>
                            </div>
                        </div>
                        <canvas class="mt-1 mb-2 pb-2" id="Budget" style="width:100%; max-width:600px"></canvas>       
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="card">
                        <div class="card-header bg-white ">
                            <div class="justify-content-between">
                                <div>
                                    <h4 class=" mx-auto my-auto ">Grafik Budgeting</h4>
                                </div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper">
                            <canvas class="mt-1 mb-2 pb-2" id="buget2" style="width:100%; max-width:600px"></canvas>       
                        </div>
                    </div>
                </div>

               
                
                <div class="col-lg-4">
                    <div class="row ">
                        <div class="col-sm-12 col-md-12">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                <div class="text-medium-emphasis-inverse text-end">
                                    <div class="icon icon-xxl">
                                        <i class="bi bi-person-fill text-center"></i> 
                                    </div>
                                </div>
                                <div class="fs-4 fw-semibold" >Total Transaksi</div><small class="text-medium-emphasis-inverse text-uppercase fw-semibold">200 Transaksi Pengeluaran dan Pemasukan</small>
                                <div class="progress progress-white progress-thin mt-3" >
                                    <div class="progress-bar" role="progressbar" style="width: 25%" ></div>
                                </div>
                                </div>
                            </div>
                        </div>
                                
                        <div class="col-sm-6 col-md-6 mt-3">
                            <div class="card bg-primary text-white ">
                                <div class="card-body d-flex align-items-center">
                                    <div class="mb-2 mt-2">
                                        <div class="fs-6 fw-semibold text-white">Total Pengeluaran</div>
                                        <div class="text-uppercase small "><small>190 Transaksi</small></div>
                                        <div class="progress progress-white progress-thin mt-3" >
                                            <div class="progress-bar" role="progressbar" style="width: 90%" ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 mt-3">
                            <div class="card bg-primary text-white ">
                                <div class="card-body  d-flex align-items-center">
                                    <div class="mb-2 mt-2">
                                        <div class="fs-6 fw-semibold text-white">Total Pemasukan</div>
                                        <div class="text-uppercase small "><small>10 Transaksi</small></div>
                                        <div class="progress progress-white progress-thin mt-3" >
                                            <div class="progress-bar" role="progressbar" style="width: 10%" ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>                                                            
            </div> 
        </div>
        
        <div class="continer-fluid mt-3">
            <div class="row">
                <div class="col-lg-2">
                    <div>
                        <div class="fs-5 fw-semibold text-primary text-center">Pemasukan by Kategori</div>
                    </div>
                    <div class="row">
                        <div class="col mt-4 ms-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary text-white p-2 me-3">
                                    <div class="icon icon-xl">
                                        <i class="bi bi-person-fill text-center"></i> 
                                    </div>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">Dana Partai</div>
                                    <div class="text-medium-emphasis fw-semibold small">Rp. 200.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4 ms-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary text-white p-2 me-3">
                                    <div class="icon icon-xl">
                                        <i class="bi bi-person-fill text-center"></i> 
                                    </div>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">Dana Sponsor</div>
                                    <div class="text-medium-emphasis fw-semibold small">Rp. 20.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-4 ms-4">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary text-white p-2 me-3">
                                    <div class="icon icon-xl">
                                        <i class="bi bi-person-fill text-center"></i> 
                                    </div>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-primary">Dana Pribadi</div>
                                    <div class="text-medium-emphasis fw-semibold small">Rp. 100.000.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-10 mb-5">
                    <div>
                        <div class="fs-5 fw-semibold text-primary">Pengeluaran by Kategori</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-3 mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembelian Barang</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp.1.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3  mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembayaran Jasa</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembelian Barang</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp.1.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3  mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembayaran Jasa</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembelian Barang</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp.1.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3  mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembayaran Jasa</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembelian Barang</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp.1.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3  mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembayaran Jasa</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembelian Barang</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp.1.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3  mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembayaran Jasa</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembelian Barang</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp.1.000.000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3  mt-3">
                                    <div class="card">
                                        <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Pembayaran Jasa</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Rp 5.000.000</div>
                                            </div>
                                        </div>
                                    </div>
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
        </script>

   
    
@endsection



