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
                        VIsi & Misi
                      </a>
                    </li>
                    <li  class="nav-item">
                      <a href="#" class="nav-link " style="color:black">
                        Program Kerja
                      </a>
                    </li>
                    <li  class="nav-item">
                      <a href="#" class="nav-link " style="color:black">
                        Galeri Kegiatan
                      </a>
                    </li>
                </ul>           
                <hr>
                <ul class="nav flex-column mb-2 pe-5 me-5" >
                  <li class="nav-item">
                    <a href="#profil" class="nav-link" aria-current="page">
                      Lihat Website
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
                                    <small id="emailHelp" class="form-text text-danger">File Foto berukuran 340 x 500 px format PNG </small>
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
                              <input type="text" class="form-control" id="nama_caleg" placeholder="Nama Caleg" required>
                            </div>
                          </div>

                          <div class="col-4">
                            {{-- <label for="partai" class="form-label">Asal Partai</label> --}}
                            <div class="input-group has-validation">
                              {{-- <span class="input-group-text"></span> --}}
                              <input type="text" class="form-control" id="partai" placeholder="Asal Partai" required>
                            </div>
                          </div>

                          <div class="col-2">
                            {{-- <label for="no_urut" class="form-label">DAPIL</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="no_urut" placeholder="Dapil" required>
                            </div>
                          </div>

                          <div class="col-2">
                            {{-- <label for="no_urut" class="form-label">Nomor Urut</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="no_urut" placeholder="No.Urut" required>
                            </div>
                          </div>                         

                          <div class="col-10">
                            {{-- <label for="username" class="form-label">Nama Caleg</label> --}}
                            <div class="input-group has-validation">
                              <input type="text" class="form-control" id="alamat" placeholder="Alamat Posko Pemenangan" required>
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

          <div class="col-12 mt-4" id="visi-misi">
            <div class="card">
              <div class="container">
                  <form class="needs-validation" novalidate>
                      <div class="row g-3 mt-1">
                        <div class="col-12">
                          <h3 for="username" class="form-label">VISI CALEG</h3>
                        </div>
                        <div class="col-12">
                          <div class="input-group has-validation">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                        </div>
                        <hr>
                        <div class="col-12 row">
                          <div class="col-2">
                            <h3 for="username" class="form-label">MISI CALEG</h3>  
                          </div>
                          <div class="col-2">
                             <button class="w-10 btn btn-success btn-md" type="submit">+ Tambah Misi</button>
                          </div>
                          
                        </div>
                        <div class="col-12">
                          <div class="input-group has-validation">
                            <span class="input-group-text">1</span>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Misi" required>
                            <span class="input-group-text btn btn-danger">Delete</span>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="input-group has-validation">
                            <span class="input-group-text">2</span>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Misi" required>
                            <span class="input-group-text btn btn-danger">Delete</span>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="input-group has-validation">
                            <span class="input-group-text">3</span>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Misi" required>
                            <span class="input-group-text btn btn-danger">Delete</span>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="input-group has-validation">
                            <span class="input-group-text">4</span>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Misi" required>
                            <span class="input-group-text btn btn-danger">Delete</span>
                          </div>
                        </div>

                        <div class="col-12">
                          <div class="input-group has-validation">
                            <span class="input-group-text">5</span>
                            <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Misi" required>
                            <span class="input-group-text btn btn-danger">Delete</span>
                          </div>
                        </div>
                        
                        <div class="col-4 mb-4 mx-auto">                           
                          <button class="w-100 btn btn-info btn-md text-center " type="submit">Update</button>
                        </div>
                    </form>    
              </div>     
            </div> 
          </div>

          
          <div class="col-12 mt-4" id="proker">
            <div class="card">
              <div class="container">
                  <form class="needs-validation" novalidate>
                      <div class="row g-3 mt-1">
                        <div class="col-12 row mt-4">
                          <div class="col-4 ">
                            <h3 for="username" class="form-label">PROGRAM KERJA CALEG</h3>  
                          </div>
                          <div class="col-2">
                             <button class="w-10 btn btn-success btn-md" type="submit">+ Tambah Proker</button>
                          </div>
                          
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/light-grey.jpg" class="card-img-top" alt="...">                              
                              <form class="needs-validation" novalidate>
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Program Kerja" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1080 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Uraian Program Kerja"></textarea>
                                      </div>
                                    </div>    
                                    
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/light-grey.jpg" class="card-img-top" alt="...">                              
                              <form class="needs-validation" novalidate>
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Program Kerja" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1080 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Uraian Program Kerja"></textarea>
                                      </div>
                                    </div>    
                                    
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                            </div>
                          </div>
                          
                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/light-grey.jpg" class="card-img-top" alt="...">                              
                              <form class="needs-validation" novalidate>
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Program Kerja" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1080 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Uraian Program Kerja"></textarea>
                                      </div>
                                    </div>    
                                    
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/light-grey.jpg" class="card-img-top" alt="...">                              
                              <form class="needs-validation" novalidate>
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Program Kerja" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1080 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Uraian Program Kerja"></textarea>
                                      </div>
                                    </div> 
                                    
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                          </div>
                    </div>
              </div>    
              <div class="col-4 mb-4 mx-auto">                           
                <button class="w-100 btn btn-info btn-md text-center " type="submit">Update</button>
              </div>
              </form>  
            </div> 
          </div> 
          </div>

          <div class="col-12 mt-4" id="galeri">
            <div class="card">
              <div class="container">
                  <form class="needs-validation" novalidate>
                      <div class="row g-3 mt-1">
                        <div class="col-12 row mt-4">
                          <div class="col-4 ">
                            <h3 for="username" class="form-label">GALERI KEGIATAN CALEG</h3>  
                          </div>
                          <div class="col-2">
                             <button class="w-10 btn btn-success btn-md" type="submit">+ Tambah Galeri</button>
                          </div>
                          
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/grey.png" class="card-img-top" alt="...">                              
                              <form class="needs-validation" novalidate>
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1920 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan Max 150 Karakter" required>
                                      </div>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                        <span class="input-group-text">Tanggal Kegiatan</span>
                                        <input type="date" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                    </div> 
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/grey.png" class="card-img-top" alt="...">
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1920 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan Max 150 Karakter" required>
                                      </div>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                        <span class="input-group-text">Tanggal Kegiatan</span>
                                        <input type="date" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                    </div> 
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/grey.png" class="card-img-top" alt="...">     
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1920 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan Max 150 Karakter" required>
                                      </div>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                        <span class="input-group-text">Tanggal Kegiatan</span>
                                        <input type="date" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                    </div> 
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
                            </div>
                          </div>

                          <div class="col">
                            <div class="card">
                              <img src="assets/img/avatars/grey.png" class="card-img-top" alt="..."> 
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="input-group has-validation">
                                        <input type="file" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                      <small id="emailHelp" class="form-text text-danger">File Foto berukuran 1920 x 1080 px. Max 2 Mb</small>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan Max 150 Karakter" required>
                                      </div>
                                    </div>    
                                    <div class="col-12 mt-4">
                                      <div class="input-group has-validation">                                        
                                        <span class="input-group-text">Tanggal Kegiatan</span>
                                        <input type="date" class="form-control" id="whatsapp" placeholder="Uraian Kegiatan" required>
                                      </div>
                                    </div> 
                                  </div>                                     
                                  <br>                            
                                  <div class="col-4 mb-2 mx-auto">                           
                                    <button class="w-100 btn btn-danger btn-md text-center " type="submit">Delete</button>
                                  </div>  
                              </div>
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