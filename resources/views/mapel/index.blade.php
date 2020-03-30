@extends('layout.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Guru</h4>
                {{-- <button type="button" class="btn btn-primary float-right tambahModal" h>Tambah</button> --}}
            <a href="{{ route('mapel.create') }}" class="btn btn-primary float-right">Tambah Data</a>
                
            </div>

            <div class="table-responsive">
                <table class="table color-table warning-table">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Kode Mapel</th>

                            <th>Nama Mapel</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>
                    @php
                        $i=1
                    @endphp
                        @foreach ($mapel as $m)
                    <tbody>
                        <tr>
                        <td>{{$i++}}</td>
                        <td>{{$m->kode}}</td>
                        <td>{{$m->nama}}</td>
                            <td class="text-nowrap">
                            <form action="{{route('mapel.destroy', $m->id)}}" method="post">
                                <a href="{{ route('mapel.edit', $m->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                @csrf
                                {{-- <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a> --}}
                                {{-- <button class="btn btn-danger btn-sm" type="submit">Delete</button> --}}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" value="{{$m->id}}" name="name">
                                <input class="btn btn-xs btn-info" type="submit" value="Hapus" onclick="return confirm('Are you sure?')">
                                
                            <a href="{{ route('mapel.show', $m->id) }}" data-toggle="tooltip" data-original-title="Detail"> <i class="fa fa-drivers-license"></i> </a>
                            
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