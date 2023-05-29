@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="card col-12 mx-auto">
            <div class="card-header bg-white mt-2">
                <div class="d-flex justify-content-between"><h4>Data TPS</h4>
                    <a type="button" class="btn btn-info btn-sm" href="sad" >+ Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-hover">
                        <thead>
                            <tr  class="text-center">
                                <th>No</th>
                                <th>Provinsi</th>
                                <th>Kota / Kabupaten</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan / Desa</th>
                                <th>No TPS</th>
                                <th>Alamat TPS</th>
                                <th>Lokasi GPS</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                           <tr >                
                            <td class="text-center">1</td>
                            <td>Jawa Tengah</td>
                            <td>Pekalongan</td>
                            <td>Pekalongan Utara</td>
                            <td>Krapyak</td>
                            <td>01</td>
                            <td>Jl Damar dalam I </td>
                            <td><a>sadsad</a></td>
                            <td class="text-center">
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="sad">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                </form>
                            </td>
                           </tr>
                           <tr >                
                            <td class="text-center">1</td>
                            <td>Jawa Tengah</td>
                            <td>Pekalongan</td>
                            <td>Pekalongan Utara</td>
                            <td>Krapyak</td>
                            <td>01</td>
                            <td>Jl Damar dalam I </td>
                            <td><a>sadsad</a></td>
                            <td class="text-center">
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="sad">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                </form>
                            </td>
                           </tr>
                           <tr >                
                            <td class="text-center">1</td>
                            <td>Jawa Tengah</td>
                            <td>Pekalongan</td>
                            <td>Pekalongan Utara</td>
                            <td>Krapyak</td>
                            <td>01</td>
                            <td>Jl Damar dalam I </td>
                            <td><a>sadsad</a></td>
                            <td class="text-center">
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="sad">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                </form>
                            </td>
                           </tr>
                           <tr >                
                            <td class="text-center">1</td>
                            <td>Jawa Tengah</td>
                            <td>Pekalongan</td>
                            <td>Pekalongan Utara</td>
                            <td>Krapyak</td>
                            <td>01</td>
                            <td>Jl Damar dalam I </td>
                            <td><a>sadsad</a></td>
                            <td class="text-center">
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="sad">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm p-1">Hapus</button>
                                </form>
                            </td>
                           </tr>
                           <tr >                
                            <td class="text-center">1</td>
                            <td>Jawa Tengah</td>
                            <td>Pekalongan</td>
                            <td>Pekalongan Utara</td>
                            <td>Krapyak</td>
                            <td>01</td>
                            <td>Jl Damar dalam I </td>
                            <td><a>sadsad</a></td>
                            <td class="text-center">
                                <form action="" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a type="button" class="btn btn-warning btn-sm p-1" href="sad">Edit</a>
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
    </div>
</div>

<div class="container-fluid mb-5">
    <div class="mt-4"><h4>Total TPS berdasarkan Wilayah</h4>
    <div class="row">
        <div class="col-4">
            <div class="card-body">

                <div class="form-group col-10 mt-2">
                    <select id="inputState" class="form-control">
                    <option selected disabled>-- Pilih Provinsi --</option>
                    <option>Jawa Tengah</option>
                    <option>Jawa Barat</option>
                    <option>Jawa Timur</option>
                    </select>
                </div>

                <div class="form-group col-10 mt-2">
                    <select id="inputState" class="form-control">
                    <option selected disabled>-- Pilih Kota / Kabupaten --</option>
                    <option>Pekalongan</option>
                    <option>Bandung</option>
                    <option>Surabaya</option>
                    </select>
                </div>

                <div class="form-group col-10 mt-2">
                    <select id="inputState" class="form-control">
                    <option selected disabled>-- Pilih Kecamatan --</option>
                    <option>Utara</option>
                    <option>Timur</option>
                    <option>Selatan</option>
                    </select>
                    
                <div class="col-2 mt-3 px-2 float-end">
                    <button type="button" class="btn btn-success" href="sad" >Filter</button>
                </div>
                </div>
            </div>
        </div>   

        <div class="card col-8 mx-auto">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-sm table-hover">
                                <thead>
                                    <tr  class="text-center">
                                        <th>No</th>
                                        <th>Wilayah</th>
                                        <th>Jumlah TPS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr >                
                                    <td class="text-center">1</td>
                                    <td>Jawa Tengah</td>                      
                                    <td class="text-center">10</td>                            
                                </tr>    
                                <tr >                
                                    <td class="text-center">1</td>
                                    <td>Jawa Tengah</td>                      
                                    <td class="text-center">10</td>                            
                                </tr> 
                                <tr >                
                                    <td class="text-center">1</td>
                                    <td>Jawa Tengah</td>                      
                                    <td class="text-center">10</td>                            
                                </tr>                       
                                <tr >                
                                    <td class="text-center">1</td>
                                    <td>Jawa Tengah</td>                      
                                    <td class="text-center">10</td>                            
                                </tr> 
                                <tr >                
                                    <td class="text-center">1</td>
                                    <td>Jawa Tengah</td>                      
                                    <td class="text-center">10</td>                            
                                </tr> 
                                <tr class="text-center font-weight-bold">                
                                    <th colspan="2" >Total</th>
                                    <th  class="text-center font-weight-bold">50 TPS</th>                                               
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