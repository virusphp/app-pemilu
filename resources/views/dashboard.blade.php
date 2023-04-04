@extends('layouts.backend')
@section('title')
Dashboard
@endsection
@section('breadcrumb')
Dashboard
@endsection

@section('content')
<div class="container-lg">
    <div class="row">
      <!-- /.col-->
      <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
          <div class="card-body pb-0 d-flex justify-content-center">
            <div>
              <div>
                <i class="bi bi-person-fill mx-5" style="color:orange; font-size: 4rem; "></i> 
                <h4 class="justify-content-center mx-4 fw-semibold"> 20.000</h4> 
                <p class="justify-content-center mx-4 "> Pendukung</p>
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
              <div>
                <i class="bi bi-stopwatch mx-5" style="color:rgb(40, 194, 245); font-size: 4rem; "></i> 
                <h4 class="justify-content-center mx-4 fw-semibold"> {{$diff}} Hari</h4> 
                <p class="justify-content-center mx-2"> Menjelang Pemilu</p>
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
              <div>
                <i class="bi bi-people-fill mx-5" style="color:rgb(73, 238, 155); font-size: 4rem; "></i> 
                <h4 class="justify-content-center mx-5 fw-semibold"> 76</h4> 
                <p class="justify-content-center mx-4"> Tim Sukses</p>
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
              <div>
                <i class="bi bi-cash mx-5" style="color:rgb(238, 92, 73); font-size: 4rem; "></i> 
                <h4 class="justify-content-center fw-semibold">Rp. {{rupiah($budget)}}</h4> 
                <p class="justify-content-center mx-4">Telah Dikeluarkan</p>
              </div>
            </div>
           </div>
        </div>
      </div>
    </div>

      <div class="col-sm-6 col-lg-12">
        <div class="card mb-4 text-Black">
          <div class="card-body pb-0 d-flex justify-content-between align-items-start">
            <div  class="col-lg-12">
              <div class="fs-4 fw-semibold">Jadwal Terdekat</div>
              <br>
              <div class="table-responsive mb-4">
                <table class="table table-sm table-hover">
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
                       <tr >
                        @foreach ($jadwal_kegiatan as $val) 
                           <tr >
                            <td>{{$loop->iteration}}</td>
                            <td>{{$val->tgl_kegiatan}}</td>
                            <td>{{$val->jam_kegiatan}}</td>
                            <td>{{$val->nama_kegiatan}}</td>
                            <td>{{$val->tempat_kegiatan}}</td>
                            <td>{{$val->jenis_kegiatan}}</td>
                            @endforeach
                       </tr>
                      </tbody>
                  </table>
              </div>    
            </div>
          </div>
        </div>
      </div>
      
    <!-- /.row-->

  </div>
@endsection