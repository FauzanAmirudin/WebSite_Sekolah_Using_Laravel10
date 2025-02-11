@extends('layouts.layout')

@section('content')
{{-- Foto --}}
<section id="foto" style="margin-top: 100px" data-aos="fade-down">
    <div class="container">
        <div class="text-center p-5">
            <h2 class="fw-bold">Foto Kegiatan SMPN 04 Menggala</h2>
        </div>

        <div class="row g-4 ">
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <img src="{{ asset('assets/img/ngaji.jpg') }}" class="img-fluid rounded-2" alt="">
            </div>
        </div>
    </div>
</section>
{{-- Foto --}}
@endsection