@extends('layout.app')

@section('content')

<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Edit Data Mapel</h4>

                                <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="PUT">
                                    @csrf
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault01">Kode Mapel </label>

                                          <input type="text" class="form-control" id="validationDefault01" name="kode" placeholder="Example B21" value="{{ $mapel->kode }}" required="">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nama Mapel</label>

                                        <input type="text" class="form-control" id="validationDefault02" placeholder="Bahasa Indonesia  " value="{{$mapel->nama}}" required="" name="nama">

                                        </div>
                                             <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Guru Pengampu</label>
                                             <input type="text" class="form-control" id="validationDefault02" placeholder=""   value="{{$mapel->teacher_id}}" required="" name="teacher_id">
                                          <small style="color:red; ">Masukan nomer urut guru</small>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                                    
                                    <a href="{{ route('mapel.index') }}" class="btn btn-info">Back</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection