@extends('layouts.backend')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
          @include('koordinator.alert')
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Data Tim Sukses</h4>
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
                                        <th>Koordinator</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Tim Media</td>
                                        <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>
                                        <td>Bambang</td>
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
                                        <td>Tim Media</td>
                                        <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>
                                        <td>Bambang</td>
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
                                        <td>Tim Media</td>
                                        <td>Membuat Konten Instagram, Tiktok, Facebook, Website</td>
                                        <td>Bambang</td>
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
                                {!! $koordinators->links() !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4>Data Koordinator</h4>
                            </div>
                            <div>
                                <a type="button" class="btn btn-info btn-sm" href="{{ route('koordinator.create') }}">+Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive container">
                            <table class="table table-striped table-sm table-hover">
                                <thead class="">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No.Hp</th>
                                        <th>Pemimpin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($koordinators as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>08582923421</td>
                                        <td>Tim Media</td>
                                        <td>
                                            <form action="{{ route('koordinator.delete', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a type="button" class="btn btn-warning btn-sm p-1" href="{{route('koordinator.edit', $item->id) }}">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>08582923421</td>
                                        <td>Tim Media</td>
                                        <td>
                                            <form action="{{ route('koordinator.delete', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a type="button" class="btn btn-warning btn-sm p-1" href="{{route('koordinator.edit', $item->id) }}">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>08582923421</td>
                                        <td>Tim Media</td>
                                        <td>
                                            <form action="{{ route('koordinator.delete', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a type="button" class="btn btn-warning btn-sm p-1" href="{{route('koordinator.edit', $item->id) }}">Edit</a>
                                                <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
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
            </div>
            
        </div>

        <div class="card mt-2">
            <div class="card-header bg-white">
                <div class="d-flex justify-content-between">
                    <div>
                        <h4>Data Relawan</h4>
                    </div>
                    <div>
                        <a type="button" class="btn btn-info btn-sm" href="{{ route('relawan.create') }}">+Tambah</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Panggilan</th>
                                <th>No.Hp</th>
                                <th>Alamat</th>
                                <th>Anggota</th>
                                <th>Jobdesk</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>1</td>
                                <td>asd</td>
                                <td>Kristianto</td>
                                <td>Antok</td>
                                <td>08000928127</td>
                                <td>Jl Damar Dalam I No 53 Perum Slamaran RT 04 RW 09, Krapyak Kota Pekalongan</td>
                                <td>Tim Media</td>
                                <td>Membuat Video Tiktok</td>
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
                                <td>asd</td>
                                <td>Kristianto</td>
                                <td>Antok</td>
                                <td>08000928127</td>
                                <td>Jl Damar Dalam I No 53 Perum Slamaran RT 04 RW 09, Krapyak Kota Pekalongan</td>
                                <td>Tim Media</td>
                                <td>Membuat Video Tiktok</td>
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
                                <td>asd</td>
                                <td>Kristianto</td>
                                <td>Antok</td>
                                <td>08000928127</td>
                                <td>Jl Damar Dalam I No 53 Perum Slamaran RT 04 RW 09, Krapyak Kota Pekalongan</td>
                                <td>Tim Media</td>
                                <td>Membuat Video Tiktok</td>
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
        
        <div class="container-flud">   
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
                        <div class="container mt-1">
                                <div class="row d-flex">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4">
                                    <p class="text-end">Tim Media </p>                            
                                    </div>
                                    <div class="col-lg-7 col-md-5 col-sm-5 col-5 mt-1">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
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
                                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
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
                                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
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
                <div class="col-lg-8">
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
                </div>
            </div>                           
        </div>        
    </div>
@endsection
