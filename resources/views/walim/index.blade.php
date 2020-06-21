@extends('layout.app')
@section('title', 'Data Wali Murid')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Wali Murid</h4>
                {{-- <button type="button" class="btn btn-primary float-right tambahModal" h>Tambah</button> --}}
            <a href="{{ route('walim.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

                        <tr>

                            <th>#</th>
                            
                             <th>Foto</th>

                            <th>Nama Murid</th>

                            <th>Nama Ayah</th>

                            <th>Nama Ibu</th>

                            <th>Nama Wali</th>

                            <th>Alamat</th>

                            <th>No. Telefon</th>

                            <th>Pekerjaan</th>

                            <th>Aksi</th>
                        </tr>

                    </thead>
                    @php
                        $i=1
                    @endphp
                        @foreach ($walim as $w)
                    <tbody>
                        <tr>
                        <td>{{$i++}}</td>
                        <!-- <td><img src="{{asset($w->gambar)}}" alt="" class="img-fluid" style="width: 90px;"></td> -->
                        @php $gambar = Storage::url('public/uploads/walim/'.$w->gambar); @endphp
                        <td><img src="{{ url($gambar) }}" alt="" class="img-fluid" style="width: 90px;"></td>
                        <td>{{$w->student->nama}}</td>
                        <td>{{$w->nama_ayah}}</td>
                        <td>{{$w->nama_ibu}}</td>
                        <td>{{$w->nama_wali}}</td>
                        <td>{{$w->alamat}}</td>
                        <td>{{$w->phone}}</td>
                        <td>{{$w->pekerjaan}}</td>
                            <td class="text-nowrap">
                            <form action="{{route('walim.destroy', $w->id)}}" method="post">
                                <a href="{{ route('walim.edit', $w->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                @csrf
                                {{-- <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a> --}}
                                {{-- <button class="btn btn-danger btn-sm" type="submit">Delete</button> --}}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" value="{{$w->id}}" name="name">
                                <input class="btn btn-xs btn-info" type="submit" value="Hapus" onclick="return confirm('Are you sure?')">
                                
                            <a href="{{ route('walim.show', $w->id) }}" data-toggle="tooltip" data-original-title="Detail"> <i class="fa fa-drivers-license"></i> </a>
                            
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection