@extends('layouts.backend')
@section('title')
Dashboard
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2">
            
            <div class="col-lg-12 col-xm-12 ">
                <div class="card border-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-primary p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">Total DPT</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">5.000 Data</div>
                        </div>
                    </div>
                </div>
            </div>
                        
            <div class="col-lg-12 col-xm-12 mt-4">
                <div class="card border-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-primary p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">Target Perolehan Suara</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">4.000 Data</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-xm-12 mt-4">
                <div class="card border-primary">
                    <div class="card-body  d-flex align-items-center">
                        <div class="text-primary p-2 me-3">
                            <div class="icon icon-3xl">
                                <i class="bi bi-person-fill text-center"></i> 
                            </div>
                        </div>
                        <div>
                            <div class="fs-6 fw-semibold text-primary">Total Data DTDC</div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">2.000 Data</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-white mt-2">
                    <div class="d-flex justify-content-between"><h4>Data DTDC</h4>
                        <a type="button" class="btn btn-info btn-sm" href="" >+ Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-sm table-hover" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tps</th>
                                    <th>Petugas</th>
                                    <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                                    <td>124312341</td>
                                    <td>Kristianto Satrio Utomo</td>
                                    <td>02 Krapyak</td>
                                    <td><a>Kliwon</a></td>
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
                </div>            
            </div>   
        </div>
             
    </div>
</div>




  <script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        pageLength : 5,
        lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 100]]
    });
    
} );


    $(document).ready( function () {
    $('#Pemasukan').DataTable();
    
} );
    </script>

@endsection