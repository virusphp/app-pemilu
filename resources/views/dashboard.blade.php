@extends('layouts.backend')
@section('title')
Dashboard
@endsection
@section('breadcrumb')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
          <div class="card-body pb-0 d-flex align-items-center">
            <div  class="mx-auto my-auto text-center">
              <i class="text-center bi bi-person-fill " style="color:orange; font-size: 4rem; "></i>
                <h4 class="text-center fw-semibold">{{angka($dpt)}}</h4> 
                <p class="text-center ">Total Daftar Pemilih Tetap</p>
            </div>           
          </div>
        </div>
      </div>
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
          <div class="card-body pb-0 d-flex justify-content-center mx-auto my-auto">
            <div>
              <div>
                <i class="bi bi-stopwatch mx-5" style="color:rgb(40, 194, 245); font-size: 4rem; "></i> 
                <h4 class="text-center fw-semibold">{{$diff}} Hari</h4> 
                <p class="text-center">Menjelang Pemilu</p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
          <div class="card-body pb-0 d-flex mx-auto my-auto">
            <div>
              <div>
                <i class="bi bi-people-fill mx-5" style="color:rgb(73, 238, 155); font-size: 4rem; "></i> 
                <h4 class="text-center fw-semibold"> 76</h4> 
                <p class="text-center"> Tim Sukses</p>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
          <div class="card-body pb-0 d-flex justify-content-center">
            <div>
              <div  class="mx-auto my-auto text-center">
                <i class="bi bi-cash text-center" style="color:rgb(238, 92, 73); font-size: 4rem; "></i> 
                <h4 class="text-center fw-semibold">Rp. {{rupiah($budget)}}</h4> 
                <p class="text-center">Telah Dikeluarkan</p>
              </div>
            </div>
           </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3">
        <div class="card mb-3 text-Black">
          <h2 class="fs-4 fw-semibold mx-auto my-auto py-4">Pemetaan Pendukung</h2>
          <div class="container">
            <div class="table-responsive mb-4">
              <table class="table table-hover text-center">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>TPS</th>
                          <th>Terhitung</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr >
                          <td>1</td>
                          <td>02</td>
                          <td>200 dukungan</td>
                     </tr>
                     <tr >
                      <td>2</td>
                      <td>02</td>
                      <td>200 dukungan</td>
                    </tr>
                    <tr >
                      <td>3</td>
                      <td>02</td>
                      <td>200 dukungan</td>
                    </tr>
                    <tr >
                      <td>4</td>
                      <td>02</td>
                      <td>200 dukungan</td>
                    </tr>
                    </tbody>
              </table>
              
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

      
      <div class="col-lg-6 ">
        <div class="mb-2 text-Black">
          <div class="mx-auto my-auto mb-1">
            <div class="row">
              <div class="col-lg-4 col-12">
                <div class="card ">
                  <div  class="mx-auto my-auto row ">
                    <p class="fw-semibold text-center mt-2">Presentase Pendukung</p> 
                    <div class="container">
                      <div class="row ">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                          <div class="card py-2 px-2 bg-warning mb-3">
                            <i class="text-center bi bi-graph-up-arrow " style="font-size: 2.5rem;color:white "></i>
                          </div>                    
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-8">                    
                          <h1 class="fw-bold text-start"style="color:orange; ">99,99%</h1>
                          <p class="no-padding-card text-start" style="margin-top: -12px">30.000 Pendukung</p>
                        </div>
                      </div>                     
                    </div>                   
                  </div>   
                </div>                  
              </div>

              <div class="col-lg-4 col-12">
                <div class="card ">
                  <div  class="mx-auto my-auto row ">
                    <p class="fw-semibold text-center mt-2">Pendukung Pria</p> 
                    <div class="container">
                      <div class="row ">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                          <div class="card py-2 px-2 bg-info mb-3">
                            <i class="text-center bi bi-gender-male" style="font-size: 2.5rem; color:white"></i>
                          </div>                    
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-8">                    
                          <h1 class="fw-bold text-start"style="color: #39f; ">99,99%</h1>
                          <p class="no-padding-card text-start" style="margin-top: -12px">30.000 Pendukung</p>
                        </div>
                      </div>                     
                    </div>                   
                  </div>   
                </div>                  
              </div>
              
              <div class="col-lg-4 col-12">
                <div class="card ">
                  <div  class="mx-auto my-auto row ">
                    <p class="fw-semibold text-center mt-2">Pendukung Wanita</p> 
                    <div class="container">
                      <div class="row ">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                          <div class="card py-2 px-2 bg-success mb-3">
                            <i class="text-center bi bi-gender-female" style="font-size: 2.5rem; color:white "></i>
                          </div>                    
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-8">                    
                          <h1 class="fw-bold text-start"style="color:#2eb85c; ">99,99%</h1>
                          <p class="no-padding-card text-start" style="margin-top: -12px">30.000 Pendukung</p>
                        </div>
                      </div>                     
                    </div>                   
                  </div>   
                </div>                  
              </div>
             

              
      <div class="col-lg-12 mt-4">
        <div class="card mb-1 text-Black">
          <p class="fw-semibold text-center py-1 bg-warning">Topografi Usia Pendukung</p> 
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="table-responsive mb-3">
                  <table class="table table-hover">
                        <thead>
                          <tr>
                              <th>Usia</th>
                              <th>Terhitung</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                               <td>17-25</td>
                               <td>200 Pendukung</td>
                          </tr>
                         <tr >
                              <td>26-35</td>
                              <td>200 Pendukung</td>
                         </tr>
                        </tbody>
                  </table>
                </div> 
              </div>
              <div class="col-lg-4">
                <div class="table-responsive mb-3">
                  <table class="table table-hover">
                        <thead>
                          <tr>
                              <th>Usia</th>
                              <th>Terhitung</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                               <td>17-25</td>
                               <td>200 Pendukung</td>
                          </tr>
                         <tr >
                              <td>26-35</td>
                              <td>200 Pendukung</td>
                         </tr>
                        </tbody>
                  </table>
                </div> 
              </div>
              <div class="col-lg-4">
                <div class="table-responsive mb-3">
                  <table class="table table-hover">
                        <thead>
                          <tr>
                              <th>Usia</th>
                              <th>Terhitung</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr >
                               <td>17-25</td>
                               <td>200 Pendukung</td>
                          </tr>
                         <tr >
                              <td>26-35</td>
                              <td>200 Pendukung</td>
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
      </div>
      
      <div class="col-lg-3">
        <div class="card mb-1 text-Black">
          <h2 class="fs-4 fw-semibold mx-auto my-auto py-3">Top Koordinator</h2>
          <div class="container">
            <div class="table-responsive mb-5">
              <table class="table table-hover text-center">
                    <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Terhitung</th>
                      </tr>
                    </thead>
                    <tbody>
                     <tr >
                          <td>1</td>
                          <td>Kristianto</td>
                          <td>200 dukungan</td>
                     </tr>
                     <tr >
                      <td>2</td>
                      <td>Satrio</td>
                      <td>200 dukungan</td>
                    </tr>
                    <tr >
                      <td>3</td>
                      <td>Utomo</td>
                      <td>200 dukungan</td>
                    </tr>
                    <tr >
                      <td>4</td>
                      <td>Slamet</td>
                      <td>200 dukungan</td>
                    </tr>
                    <tr >
                      <td>5</td>
                      <td>Sugandi</td>
                      <td>200 dukungan</td>
                    </tr>
                    </tbody>
              </table>
              
                
            </div> 
          </div>          
        </div>
      </div>
      

      
    </div>
    <div class="col-lg-12 mb-4">
      <div class="card text-Black">
        <h2 class="fs-4 fw-semibold mx-auto mt-3">Jadwal Terdekat</h2>
        <div class="container">
          <div class="table-responsive mb-1">
            <table class="table table-hover">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pukul</th>
                        <th>Nama Kegiatan</th>
                        <th>Tempat</th>
                        <th>Kegiatan</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach ($jadwal_kegiatan as $val) 
                      <tr >
                        <td>{{$loop->iteration}}</td>
                        <td>{{$val->tgl_kegiatan}}</td>
                        <td>{{$val->jam_kegiatan}}</td>
                        <td>{{$val->nama_kegiatan}}</td>
                        <td>{{$val->tempat_kegiatan}}</td>
                        <td>{{$val->jenis_kegiatan}}</td>
                  </tr>
                  @endforeach --}}
                    <tr >
                      <td>1</td>
                      <td>26 Agustus 2022</td>
                      <td>19.00 WIB</td>
                      <td>Sambutan Kegiatan</td>
                      <td>RT o4 RW 09 Krapyak Kota pekalongan</td>
                      <td>Memberikan Sambutan kepada Ibu Ibu PKK di Tempat Tersebut.</td>
                    </tr>
                    <tr >
                      <td>1</td>
                      <td>26 Agustus 2022</td>
                      <td>19.00 WIB</td>
                      <td>Sambutan Kegiatan</td>
                      <td>RT o4 RW 09 Krapyak Kota pekalongan</td>
                      <td>Memberikan Sambutan kepada Ibu Ibu PKK di Tempat Tersebut.</td>
                    </tr>
                  </tbody>
            </table>
          </div> 
        </div>          
      </div>
    </div>

      
    <!-- /.row-->

  </div>
@endsection