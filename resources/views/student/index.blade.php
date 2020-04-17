@extends('layout.app')
@section('title', 'Data Siswa')
@section('content')
    

<div class="row">

    
    
    <div class="col-12">
        
        <div class="card">
            
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <button type="button" class="btn btn-primary float-right tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                
            </div>

            <div class="table-responsive">
                <table class="table" id="datatable">


                    <thead class="">

                        <tr>

                            <th>#</th>

                            <th>Nama</th>

                            <th>Nis</th>
                            
                            <th>TTL </th>

                            <th>Alamat</th>

                            <th>JK</th>

                            <th>Phone</th>

                            <th>Kelas</th>

                            <th>Jurusan</th>

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
  @include('student.modals')
@endsection
