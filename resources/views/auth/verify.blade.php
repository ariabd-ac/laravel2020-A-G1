@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tolong, verfikasi email anda terlebih dahulu!') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Email verfikasi sudah terikirm ke email anda.') }}
                            {{__('Periksa kotak masuk atau spam')}}
                        </div>  
                    @endif

                    {{ __('Sebelum masuk, harap klik email untuk verfikasi.') }}
                    {{ __('Jika tidak menerimanya klik ulang lagi.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Kirim email') }}</button>.
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
