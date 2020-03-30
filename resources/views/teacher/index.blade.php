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
                <h4 class="card-title">Data Guru</h4>
                <button type="button" class="btn btn-primary float-right tambahModal" data-toggle="modal" data-target="#tambahModal">Tambah</button>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Kode Guru</th>

                            <th>Nama</th>

                            <th>No. Induk Guru</th>

                            {{-- <th>Mata Pelajaran</th> --}}

                            <th>Phone</th>

                            <th>Alamat</th>

                            <th>Tanggal Lahir</th>

                            <th>JK</th>

                            <th>Status</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>
                            @php $i = 1 @endphp 
                            @forelse ($teachers as $teacher)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $teacher->kodeguru }}</td>
                            <td>{{ $teacher->nama }}</td>
                            <td>{{ $teacher->nig }}</td>
                            {{-- @foreach ($teacher->mapel as $m)
                            <td>{{$m->nama}}</td>
                            @endforeach --}}
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->alamat }}</td>
                            <td>{{ $teacher->ttl }}</td>
                            <td>{{ $teacher->jk }}</td>
                            <td>{{ $teacher->status }}</td>


                            <td class="text-nowrap">
                                <button type="button" class="btn ml-1 mr-1 btn-danger hapusModal" data-id="{{ $teacher['id'] }}">Hapus</button>
                               <button type="button" class="btn ml-1 mr-1 btn-warning editModal" data-id="{{ $teacher['id'] }}">Edit</button>
                                <button type="button" class="btn ml-1 mr-1 btn-info text-white" onclick="location.href ='{{ url('guru/'.$teacher['id']) }}'">Detail</button>
                                 
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
  @include('teacher.modals')
@endsection
