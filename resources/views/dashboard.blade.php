@extends('layouts.backend')
@section('title')
Dashboard
@endsection
@section('breadcrumb')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
  
    <div class="col-lg-12 col-sm-12">
      <div class="card-body">
          <div class="row">
              <div class="form-group col-lg-2 col-sm-12 mt-2">
                  <select id="inputState" class="form-control">
                  <option selected disabled>-- Pilih Versi Chanel --</option>
                  <option>Chanel 1</option>
                  <option>Chanel 2</option>
                  <option selected>Chanel 3</option>
                  </select>
              </div>
              <div class="form-group col-lg-1 mt-2 col-sm-12 ">
                  <button  type="button" class="btn btn-primary form-control" href="sad" >Pilih Chanel</button>
              </div>
          </div>
      </div>
    </div>

    <div class="row mt-4">
      <!-- /.col-->
        <div class="col-3 mt-3">
            <div class="card">
                <div class="card-body  d-flex align-items-center">
                    <div class="bg-primary text-white p-2 me-3">
                        <div class="icon icon-xl">
                            <i class="bi bi-person-fill text-center"></i> 
                        </div>
                    </div>
                    <div>
                        <div class="fs-6 fw-semibold text-primary">Total DPT</div>
                        <div class="fs-5">5000 Data</div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="col-3 mt-3">
          <div class="card">
              <div class="card-body  d-flex align-items-center">
                  <div class="bg-primary text-white p-2 me-3">
                      <div class="icon icon-xl">
                          <i class="bi bi-calendar-check-fill text-center"></i> 
                      </div>
                  </div>
                  <div>
                      <div class="fs-6 fw-semibold text-primary">Pelaksanaan Pemilu</div>
                      <div class="fs-5 ">{{$diff}} Hari Lagi</div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-3 mt-3">
            <div class="card">
                <div class="card-body  d-flex align-items-center">
                    <div class="bg-primary text-white p-2 me-3">
                        <div class="icon icon-xl">
                            <i class="bi bi-megaphone-fill text-center"></i> 
                        </div>
                    </div>
                    <div>
                        <div class="fs-6 fw-semibold text-primary">Target Perolehan Suara</div>
                        <div class="fs-5">4.200 Suara</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3 mt-3">
            <div class="card">
                <div class="card-body  d-flex align-items-center">
                    <div class="bg-primary text-white p-2 me-3">
                        <div class="icon icon-xl">
                            <i class="bi bi-cash text-center"></i> 
                        </div>
                    </div>
                    <div>
                        <div class="fs-6 fw-semibold text-primary">Total Pengeluaran</div>
                        <div class="fs-5">Rp.1.000.000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">   
      
      <div class="col-lg-5">
        <div class="card border border-light bg-light">
          <div class="card-header  border border-light bg-light">
              <div class="justify-content-between">
                  <div>
                      <h4 class=" mx-auto my-auto ">Estimasi Perolehan Pendukung</h4>
                  </div>
              </div>
          </div>
          <canvas class="mt-2 mb-2" id="Pendukung" style="width:100%; max-width:600px"></canvas>       
        </div>
      </div>

      <div class="col-lg-7 mt-5">
        <div class="mb-2 text-Black">
          <div class="mx-auto my-auto mb-1">
            <div class="row">
              <div class="col-lg-4 col-12">
                <div class="card ">
                  <div  class="mx-auto my-auto row ">
                    <p class="fw-semibold text-center mt-2">Total Relawan</p> 
                    <div class="container">
                      <div class="row ">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                          <div class="card py-2 px-2 bg-primary mb-3">
                            <i class="text-center bi bi-graph-up-arrow text-white" style="font-size: 1.5rem;"></i>
                          </div>                    
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-8">                    
                          <h4 class="fw-bold text-start text-primary ">1.200</h4>
                          <p class="no-padding-card text-start fs-6" style="margin-top: -12px">Relawan</p>
                        </div>
                      </div>                     
                    </div>                   
                  </div>   
                </div>                  
              </div>

              <div class="col-lg-4 col-12">
                <div class="card ">
                  <div  class="mx-auto my-auto row">
                    <p class="fw-semibold text-center mt-2">Total Saksi</p> 
                    <div class="container">
                      <div class="row ">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                          <div class="card py-2 px-2 bg-primary mb-3">
                            <i class="text-center bi bi-gender-male text-white" style="font-size:1.5rem;"></i>
                          </div>                    
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-8">                         
                          <h4 class="fw-bold text-start text-primary ">1.200</h4>
                          <p class="no-padding-card text-start fs-6" style="margin-top: -12px">Saksi</p>
                        </div>
                      </div>                     
                    </div>                   
                  </div>   
                </div>                  
              </div>
              
              <div class="col-lg-4 col-12">
                <div class="card ">
                  <div  class="mx-auto my-auto row ">
                    <p class="fw-semibold text-center mt-2">Total TPS</p> 
                    <div class="container">
                      <div class="row ">
                        <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                          <div class="card py-2 px-2 bg-primary mb-3">
                            <i class="text-center bi bi-gender-female text-white" style="font-size: 1.5rem;"></i>
                          </div>                    
                        </div>
                        <div class="col-lg-8 col-sm-8 col-md-8 col-8">                    
                          <h4 class="fw-bold text-start text-primary">3.200</h4>
                          <p class="no-padding-card text-start fs-6" style="margin-top: -12px">TPS</p>
                        </div>
                      </div>                     
                    </div>                   
                  </div>   
                </div>                  
              </div>

              <div class="col-lg-12 mt-4">
                <div class="card mb-1 text-Black  bg-light border border-light">
                  <div class="row d-flex py-3">
                    <p class="fs-4 fw-semibold text-center py-1 bg-light text-primary">Kinerja Tim Sukses</p> 
                    <div class="col-lg-1 col-md-4 col-sm-4 col-4">
                    <p class="text-end">0</p>                            
                    </div>
                    <div class="col-lg-8 col-md-5 col-sm-5 col-5 mt-1">
                        <div class="progress" role="progressbar" aria-label="Example 20px high" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 20px">
                            <div class="progress-bar bg-primary progress-bar-animated" style="width: 25%">25%</div>
                        </div>  
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-3">
                        <p class="text-start"><b>1.050</b>/4.200 DTDC </p>   
                    </div>
                  </div>        
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
    <div class="col-lg-12 mt-4 mb-2">
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