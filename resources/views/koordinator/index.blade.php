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
                      <button class="nav-link active" id="pills-home-tab" data-coreui-toggle="pill" data-coreui-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Relawan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-coreui-toggle="pill" data-coreui-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Keanggotaan</button>
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
                                        <h4>Data Relawan</h4>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-outline-primary  btn-sm" href="{{ route('relawan.create') }}">+Tambah</a>
                                    </div>
                                </div>
                            </div>
                            
                              
                              
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table  table-sm table-hover" style="white-space:nowrap;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>Panggilan</th>
                                                <th>Tingkatan</th>
                                                <th>Keanggotaan</th>
                                                <th>Tipe</th>
                                                <th>Jobdesk</th>
                                                <th>Target</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Kristianto</td>
                                                <td>Antok</td>
                                                <td>Provinsi</td>
                                                <td>Tim Media</td>
                                                <td>Koordinator</td>
                                                <td>Membuat Video Tiktok</td>
                                                <td>200 pendukung</td>
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
                                            <tr>
                                                <td>1</td>
                                                <td>Kristianto</td>
                                                <td>Antok</td>
                                                <td>Kota / Kab</td>
                                                <td>Tim Media</td>
                                                <td>Koordinator</td>
                                                <td>Membuat Video Tiktok</td>
                                                <td>200 pendukung</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a type="button" class="btn btn-outline-primary btn-sm p-1 me-1" title="detail"  href=""><i class="bi bi-eye"></i></a>
                                                        <a type="button" class="btn btn-outline-primary btn-sm p-1 me-1" title="edit" href=""><i class="bi bi-pencil-square"></i></a>
                                                        <button type="submit" class="btn btn-outline-primary btn-sm p-1 me-1" title="hapus"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Kristianto</td>
                                                <td>Antok</td>
                                                <td>Kelurahan / Desa</td>
                                                <td>Tim Media</td>
                                                <td>Koordinator</td>
                                                <td>Membuat Video Tiktok</td>
                                                <td>200 pendukung</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <a type="button" class="btn btn-outline-primary btn-sm p-1 me-1" title="detail" href=""><i class="bi bi-eye"></i></a>
                                                        <a type="button" class="btn btn-outline-primary btn-sm p-1 me-1" title="edit" href=""><i class="bi bi-pencil-square"></i></a>
                                                        <button type="submit" class="btn btn-outline-primary btn-sm p-1 me-1" title="hapus"><i class="bi bi-trash"></i></button>
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
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="card-header bg-white">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4>Data Pembagian Keanggotaan</h4>
                                    </div>
                                    <div>
                                        <a type="button" class="btn btn-info btn-sm" href="{{ route('koordinator.create') }}">+Tambah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Tim</th>
                                                <th>Tugas</th>
                                                <th>Area Kerja</th> 
                                                <th>Target</th> 
                                                <th>Jumlah Anggota</th>
                                                <th>Koordinator</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tim Media</td>
                                                <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>
                                                <td>Posko Kemenangan Utama</td>
                                                <td>10</td>
                                                <td>Bambang</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                         <button type="button" class="btn btn-success btn-sm p-1" data-coreui-toggle="modal" data-coreui-target="#detailkeanggotaan">
                                                           detail
                                                          </button>
                                                        <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                        <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Tim Media</td>
                                                <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>
                                                <td>Kota Pekalongan</td>
                                                <td>10</td>
                                                <td>Bambang</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                         <button type="button" class="btn btn-success btn-sm p-1" data-coreui-toggle="modal" data-coreui-target="#detailkeanggotaan">
                                                           detail
                                                          </button>
                                                        <a type="button" class="btn btn-warning btn-sm p-1" href="">Edit</a>
                                                        <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Tim Media</td>
                                                <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>
                                                <td>Kelurahan Krapyak</td>
                                                <td>10</td>
                                                <td>Bambang</td>
                                                <td>
                                                    <form action="" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                         <button type="button" class="btn btn-success btn-sm p-1" data-coreui-toggle="modal" data-coreui-target="#detailkeanggotaan">
                                                           detail
                                                          </button>
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
                                        {!! $koordinators->links() !!}
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
                                                <h5>Tipe Relawan</h5>
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
                                                        <th>Tipe</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Koordinator</td>
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
                                                        <td>Anggota</td>
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
                                                <h5>Satuan Target</h5>
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
                                                        <th>Target</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Pendukung</td>
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
                                                        <td>Pengikut</td>
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
                                                <h5>Tingkatan Relawan</h5>
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
                                                        <th>Tingkatan</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Provinsi</td>
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
                                                        <td>Kota /Kab</td>
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
                <div class="col-lg-4">
                    <div class="card mt-2">
                        <div class="card-header bg-white">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="align-items-center">Pencapaian Tim</h4>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-1 mb-4">
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 25%">25%</div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                        <p class="text-start"><b>25</b>/100 </p>   
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 75%">75%</div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                        <p class="text-start"><b>25</b>/100 </p>   
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 25%">25%</div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                        <p class="text-start"><b>25</b>/100 </p>   
                                    </div>
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
                </div>

                <div class="col-lg-4 ">
                    <div class="card mt-2">
                        <div class="card-header bg-white ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4 class="align-items-center">Pencapaian Personal</h4>
                                </div>
                            </div>
                        </div>
                        <div class="container mt-1  mb-4">
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 25%">25%</div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                        <p class="text-start"><b>25</b>/100 </p>   
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 25%">25%</div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                        <p class="text-start"><b>25</b>/100 </p>   
                                    </div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 25%">25%</div>
                                        </div>  
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                                        <p class="text-start"><b>25</b>/100 </p>   
                                    </div>
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
                </div>
                
                <div class="col-lg-4 mt-2">
                    <div class="col-lg-12 ">
                        <div class="row ">
                            <div class="col-lg-12 mt-3 mb-1">
                                <div class="">
                                    <div>
                                        <div class="fs-4 fw-semibold text-primary">Informasi Relawan</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-1">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Total Relawan</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">59 Orang</div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Total Tim</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">15 Tim</div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            
                            <div class="col-lg-12 mt-2">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Total Relawan Pria</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">30 Orang</div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <div class="card-body  d-flex align-items-center">
                                            <div class="bg-primary text-white p-2 me-3">
                                                <div class="icon icon-xl">
                                                    <i class="bi bi-person-fill text-center"></i> 
                                                </div>
                                            </div>
                                            <div>
                                                <div class="fs-6 fw-semibold text-primary">Total Relawan Wanita</div>
                                                <div class="text-medium-emphasis text-uppercase fw-semibold small">29 Orang</div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                            
        
                            {{-- <div class="col-lg-8">
                                <div class="card mt-2">
                                    <div class="card-header bg-white">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="align-items-center">Agenda Tim</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tim</th>
                                                        <th>Detail Agenda</th>
                                                        <th>Tanggal</th>
                                                        <th>Target</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tim Media</td>
                                                        <td>Menyelesaikan Podcast</td>
                                                        <td>12-Maret-2023</td>
                                                        <td>Antok</td>
                                                        <td>
                                                            Selesai
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
                            </div> --}}
                    </div>  
                </div>                                            
        </div> 

        <div class="row mt-4">
            <div class="col-lg-6">                  
                <div class="card bg-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="row col-lg-12">                            
                            <div class="col-lg-1">
                                <div class="bg-primary text-white px-auto mx-auto">
                                    <div class="icon icon-3xl">
                                        <i class="bi bi-person-fill text-center"></i> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-11">
                                <div class="fs-4 text-white fw-semibold">Total Target Pendukung</div>
                                    <div class="row text-white ">
                                        <div class="col-4 fw-semibold medium">34.000 Pendukung</div>
                                        <div class="col-4"></div>
                                        <div class="col-4 text-end"><b>5.000</b> <small>(25%)</small></div>
                                    </div>                       
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-11">
                                <div class="progress progress-white progress-thin mt-3 justify-content-right">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-6">                  
                <div class="card bg-primary">
                    <div class="card-body d-flex align-items-center">
                        <div class="row col-lg-12">                            
                            <div class="col-lg-1">
                                <div class="bg-primary text-white px-auto mx-auto">
                                    <div class="icon icon-3xl">
                                        <i class="bi bi-person-fill text-center"></i> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-11">
                                <div class="fs-4 text-white fw-semibold">Total Target Selain Pendukung</div>
                                    <div class="row text-white ">
                                        <div class="col-4 fw-semibold medium">34.000 Lainnya</div>
                                        <div class="col-4"></div>
                                        <div class="col-4 text-end"><b>5.000</b> <small>(25%)</small></div>
                                    </div>                       
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-11">
                                <div class="progress progress-white progress-thin mt-3 justify-content-right">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" bis_skin_checked="1"></div>
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
    <div   div class="modal fade" id="detailkeanggotaan" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Detail Data Pembagian Keanggotaan</h5>
            <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <h5>Tim Media</h5>
                    <p>Membuat Konten Instagram, Tiktok, Facebook, Website zzzzzzzzzzz zzzzzz zzzzzzzzzzzzzzzzzzzz</p>
                    <p>Area Kerja : sdasdasdasd sadasd asd</p>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">                        
                       <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Anggota</th>
                                                <th>Tipe</th>
                                                <th>Jobdesk</th>
                                                <th>Target</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Kristianto</td>
                                                <td>Koordinator</td>
                                                <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>                                           
                                                <td>200 Pendukung</td>                                           
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Kristianto</td>
                                                <td>Koordinator</td>
                                                <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>                                         
                                                <td>200 Pendukung</td>                                                                                    
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Kristianto</td>
                                                <td>Koordinator</td>
                                                <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>                                          
                                                <td>200 Pendukung</td>                                                                                   
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

@endsection
