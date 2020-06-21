@extends('layout.app')

@section('content')

<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Edit data wali murid</h4>

                             <form action="{{ route('walim.update', $walim->id) }}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_method" value="PUT">
                                    @csrf
                                    <div class="form-row">

                                        <div class="col-md-5 mb-3">

                                          <label>Masukan Foto</label>
                                          <input type="file" name="gambar" id="gambar"value="{{ $walim->gambar }}">
                                          

                                        </div>

                                      <div class="col-md-7 mb-3">

                                         <label>Nama Siswa</label>
                                          <select  class="form-control" name="student_id">
                                                  <option disabled selected>-- Pilih Siswa --</option>
                                                    @foreach($student as $s)
                                                        <option value="{{ $s->nama }}"> {{ $s->nama }} </option>
                                                    @endforeach
                                          </select> 

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nama Ayah</label>

                                          <input type="text" class="form-control" id="validationDefault02" placeholder="Masukan nama ayah.." value="{{ $walim->nama_ayah }}" required="" name="nama_ayah">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nama Ibu</label>

                                          <input type="text" class="form-control" id="validationDefault02" placeholder="Masukan nama ibu.." value="{{ $walim->nama_ibu }}" required="" name="nama_ibu">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nama Wali</label>

                                          <input type="text" class="form-control" id="validationDefault02" placeholder="Masukan nama wali.." value="{{ $walim->nama_wali }}" name="nama_wali">

                                        </div>

                                        <div class="col-md-12 mb-3">

                                          <label for="validationDefault02">Alamat</label>
                                          <textarea class="form-control" row="5" id="validationDefault02" placeholder="Masukan alamat.." value="{{ $walim->alamat }}" name="alamat"></textarea>

                                        </div>
                                        <div class="col-md-6 mb-3">

                                          <label for="validationDefault02">Phone</label>
                                          <input type="number" class="form-control" id="validationDefault02" placeholder="Masukan nomer telefon.." value="{{ $walim->phone }}" name="phone">

                                        </div>

                                        <div class="col-md-6 mb-3">

                                          <label for="validationDefault02">Pekerjaan</label>
                                          <input type="text" class="form-control" id="validationDefault02" placeholder="Masukan pekerjaan" value="{{ $walim->pekerjaan }}" name="pekerjaan">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
                                          <label class="form-check-label" for="invalidCheck2">
                                            Mengisi data dengan benar?
                                          </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Simpan perubahan</button>
                                    
                                    <a href="{{ route('walim.index') }}" class="btn btn-info">Cancle</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection