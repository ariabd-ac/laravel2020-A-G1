@extends('layout.app')

@section('content')

<div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Masukan Data Mapel</h4>

                                <form method="POST" action="{{ route('mapel.store') }}">
                                    @csrf
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault01">Kode Mapel </label>

                                          <input type="text" class="form-control" id="validationDefault01" name="kode" placeholder="Example B21" value="{{ old('kode') }}" required="">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nama Mapel</label>

                                          <input type="text" class="form-control" id="validationDefault02" placeholder="Bahasa Indonesia  " value=""{{ old('nama') }}" required="" name="nama">

                                        </div>
                                             <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Guru Pengampu</label>
                                          <input type="text" class="form-control" id="validationDefault02" placeholder=""  " value=""{{ old('nama') }}" required="" name="teacher_id">
                                          <small style="color:red; ">Masukan nomer urut guru</small>
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
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                    
                                    <a href="{{ route('mapel.index') }}" class="btn btn-info">Cancle</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
@endsection