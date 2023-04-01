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
                <p class="justify-content-center mx-4"> Pendukung</p>
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
                <h4 class="justify-content-center mx-4 fw-semibold"> 245 Hari</h4> 
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
                <h4 class="justify-content-center fw-semibold">Rp. 350.000.000</h4> 
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
                            <th>Hari</th>
                            <th>Tanggal</th>
                            <th>Pukul</th>
                            <th>Tempat</th>
                            <th>Kegiatan</th>
                        </tr>
                      </thead>
                      <tbody>
                       <tr >
                        <td>Senin</td>
                        <td>12 Maret 2023</td>
                        <td>13.00 WIB</td>
                        <td>Lapangan Jetayu, Kota Pekalongan</td>
                        <td>Kampanye dapil panjang</td>
                       </tr>
                       <tr >
                        <td>Senin</td>
                        <td>12 Maret 2023</td>
                        <td>13.00 WIB</td>
                        <td>Lapangan Jetayu, Kota Pekalongan</td>
                        <td>Kampanye dapil panjang</td>
                       </tr>
                       <tr >
                        <td>Senin</td>
                        <td>12 Maret 2023</td>
                        <td>13.00 WIB</td>
                        <td>Lapangan Jetayu, Kota Pekalongan</td>
                        <td>Kampanye dapil panjang</td>
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