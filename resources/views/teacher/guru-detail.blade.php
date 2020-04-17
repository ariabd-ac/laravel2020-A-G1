@extends('layout.app')
@section('title', 'Detail Data Guru')

@section('content')
    <div class="row">
        <div class="col-md-4">

            <div class="card">

                @forelse ($data as $t)
                <div class="card-body">

                    <center class="m-t-30"> <img src="{{asset('images/users/5.jpg')}}" class="img-circle" width="150">

                        <h4 class="card-title m-t-10">{{ $t['nama'] }}</h4>

                        <h6 class="card-subtitle">{{ $t['jk'] }}</h6>

                        <h6 class="card-subtitle">{{ $t['nig'] }}</h6>

                        <h6 class="card-subtitle">{{ $t['kodeguru'] }}</h6>

                        {{-- @foreach ($t->mapel as $m)
                            <h6 class="card-subtitle">{{$m->nama}}</h6>
                            @endforeach --}}

                        


                    </center>

                </div>

                <div>

                    <hr> </div>

                <div class="card-body"> 
                     <small class="text-muted">Tanggal Lahir </small>

                    <h6>{{ $t['ttl'] }}</h6> 

                    <small class="text-muted">Phone </small>

                    <h6>{{ $t['phone'] }}</h6> 
                    
                    <small class="text-muted">Address</small>

                    <h6>{{ $t['alamat'] }}</h6>

                    <div class="map-box">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                    </div> <small class="text-muted p-t-30 db">Social Profile</small>

                    <br>

                    <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>

                    <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>

                    <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>

                    <button type="button" class="btn ml-1 mr-1 btn-info text-white align-left" onclick="location.href ='javascript:history.go(-1)'">Back</button>

                </div>

                @empty
                          <h3 colspan="3">Tidak dapat menampilkan detail data</h3>
                @endforelse
            </div>

        </div>
        <div class="col-md-8">
            @foreach ($data as $p)


            <div class="card">
                <div class="card-body">

                    <form class="form-horizontal form-material">

                        <div class="form-group">

                            <label class="col-md-12">Nama Guru</label>

                            <div class="col-md-12">

                            <h5>{{$p['nama']}}</h5>

                            </div>

                        </div>


                        <div class="form-group">

                            <label class="col-md-12">Phone</label>

                            <div class="col-md-12">

                            <h5>{{$p['phone']}}</h5>

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Kode Guru</label>

                            <div class="col-md-12">

                            <h5>{{$p['kodeguru']}}</h5>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="table-responsive">
                                <table class="table color-table warning-table">
                                    <thead>

                                        <tr>

                                            <th>#</th>

                                            <th>Kode Mapel</th>

                                            <th>Nama Mapel</th>

                                        </tr>
                                    </thead>
                                        @php
                                            $i=1
                                        @endphp
                                        @foreach ($p->mapel as $mp)


                                    <tbody>
                                        <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$mp['kode']}}</td>
                                        <td>{{$mp['nama']}}</td>
                                        </tr>
                                    </tbody>
                                       @endforeach
                                </table>
                            </div>
                        </div>



                    </form>

                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection