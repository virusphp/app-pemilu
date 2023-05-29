@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="card" style="position: fixed;">
                <ul class="nav flex-column mt-2 pe-5 me-5" >
                    <li class="nav-item">
                      <a href="#profil" class="nav-link" aria-current="page">
                        Profil
                      </a>
                    </li>
                    <li  class="nav-item">
                      <a href="#visi-misi" class="nav-link" style="color:black">
                        Akun
                      </a>
                    </li>
                </ul>      
            </div>             
        </div>
        
        <div class="col-9">
          <div class="col-12" id="profil">
              <div class="card">
                <div class="container">
                    <form class="needs-validation" novalidate>
                        <div class="row g-3 mt-1">
                          <div class="col-12">
                            <h3 for="username" class="form-label">PROFIL CALEG</h3>
                          </div>
                          <div class="col-12">
                            <div class="card mb-3" style="max-width: 540px;">
                              <div class="row g-0">
                                <div class="col-md-4">
                                  <img src="assets/img/avatars/user.png" class="img-fluid rounded-start" alt="...">                                 
                                </div>
                                <div class="col-md-8 mt-4 pt-1">
                                  <div class="card-body">
                                    <div class="input-group has-validation">
                                      <input type="File" class="form-control" id="username" placeholder="Username" required>
                                    </div>                                    
                                    <small id="emailHelp" class="form-text text-danger">File Foto berukuran 500 x 500 px format JPG </small>
                                    <br>
                                    <small id="emailHelp" class="form-text text-danger">Foto Tanpa Background. Maximal 5 MB</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-4">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="nama_caleg" placeholder="Nama Caleg (sertakan gelar)" required>
                            </div>
                          </div>

                          <div class="col-2">
                            {{-- <label for="partai" class="form-label">Asal Partai</label> --}}
                            <div class="input-group has-validation">
                              {{-- <span class="input-group-text"></span> --}}
                              <input type="text" class="form-control" id="partai" placeholder="Asal Partai" required>
                            </div>
                          </div>

                          <div class="form-group col-4">
                            <select id="inputState" class="form-control">
                              <option selected disabled>Jenis Pemilihan</option>
                              <option>DPR RI</option>
                              <option>DPRD PROVINSI</option>
                              <option>DPR KOTA / KABUPATEN</option>
                            </select>
                          </div>

                          <div class="col-1">
                            {{-- <label for="no_urut" class="form-label">DAPIL</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="no_urut" placeholder="Dapil" required>
                            </div>
                          </div>

                          <div class="col-1">
                            {{-- <label for="no_urut" class="form-label">Nomor Urut</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="no_urut" placeholder="No.Urut" required>
                            </div>
                          </div>                         

                          <div class="col-10">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="alamat" placeholder="Alamat Posko Pemenangan Utama" required>
                            </div>
                          </div>

                          <div class="col-2">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="wa" placeholder="Nomor Telepon" required>
                            </div>
                          </div>

                          <div class="col-12">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Profil Singkat"></textarea>
                            </div>
                          </div>

                          <div class="col-3">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="tiktok" placeholder="Link Tiktok" required>
                            </div>
                          </div>

                          <div class="col-3">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="instagram" placeholder="Link Instagram" required>
                            </div>
                          </div>

                          <div class="col-3">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="facebook" placeholder="Link Facebook" required>
                            </div>
                          </div>

                          <div class="col-3">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="whatsapp" placeholder="Link WA" required>
                            </div>
                          </div>
              
                          <div class="col-4 mb-4 mx-auto">                           
                            <button class="w-100 btn btn-info btn-md text-center " type="submit">Update</button>
                          </div>
                      </form>    
                </div>     
            </div> 
          </div>  
            <div class="col-12 mt-4" id="profil">
                <div class="card">
                  <div class="container">
                      <form class="needs-validation" novalidate>
                          <div class="row g-3 mt-1">
                            <div class="col-12">
                              <h3 for="username" class="form-label">AKUN CALEG</h3>
                            </div>
                            <div class="col-4">
                              {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                              <div class="input-group has-validation">
                                <input type="text" class="form-control" id="username" placeholder="Username" required>
                              </div>
                            </div>
                            <div class="col-4">
                              {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                              <div class="input-group has-validation">
                                <input type="text" class="form-control" id="Password" placeholder="Password" required>
                              </div>
                            </div>
  
                            <div class="col-4">
                                {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                                <div class="input-group has-validation">
                                  <input type="text" class="form-control" id="Email" placeholder="Email" required>
                                </div>
                              </div>
    
  
                            
                
                            <div class="col-4 mb-4 mx-auto">                           
                              <button class="w-100 btn btn-info btn-md text-center " type="submit">Update</button>
                            </div>
                        </form>    
                  </div>     
              </div> 
            </div>  
          </div>  
    </div>
  </div>
@endsection