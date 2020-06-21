@extends('layout.app')
@section('title', 'Data Guru')
@section('content')
    

<div class="row">

   
    
    <div class="col-12">
        
        <div class="card">
            
            <div class="card-body ">
                <h4 class="card-title">Data Guru</h4>
                <button type="button" class="btn btn-primary float-right tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                
            </div>

            <div class="table-responsive">
                <table class="table data-table" id="table">

                    <thead class="">

                        <tr>

                            <th>#</th>

                            <th>Kode Guru</th>

                            <th>Nama</th>

                            <th>No. Induk Guru</th>

                            <th>SK Guru</th>

                            <th>Img</th>

                            <th>Phone</th>

                            <th>Alamat</th>

                            <th>Tanggal Lahir</th>

                            <th>JK</th>

                            <th>Status</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>
                           
                    </tbody>

                </table>

            </div>
        </div>

    </div>

</div>

@endsection

@section('modals')
  @include('teacher.modals')
@endsection
