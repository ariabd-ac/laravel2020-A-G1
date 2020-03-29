@extends('layout.app')

@section('content')
    

<div class="row">

    <div class="col-12">
                @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
     
    </div>
    
    <div class="col-12">
        
        <div class="card">
            
            <div class="card-body">
                <h4 class="card-title">Data Siswa</h4>
                <button type="button" class="btn btn-primary float-right tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

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
                            @php $i = 1 @endphp 
                            @forelse ($students as $student)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->nama }}</td>
                            <td>{{ $student->nis }}</td>
                            <td>{{ $student->ttl }}</td>
                            <td>{{ $student->alamat }}</td>
                            <td>{{ $student->jk }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->kelas }}</td>
                            <td>{{ $student->jurusan }}</td>


                            <td class="text-nowrap">
                                <button type="button" class="btn ml-1 mr-1 btn-danger hapusModal" data-id="{{ $student['id'] }}">Hapus</button>
                               <button type="button" class="btn ml-1 mr-1 btn-warning editModal" data-id="{{ $student['id'] }}">Edit</button>
                                <button type="button" class="btn ml-1 mr-1 btn-info text-white" onclick="location.href ='{{ url('siswa/'.$student['id']) }}'">Detail</button>
                                 
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">Tidak ada data</td>
                        @endforelse
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
