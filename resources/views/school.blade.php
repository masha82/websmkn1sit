@extends('layouts.master')
@section('title')
    <title>Tentang Sekolah</title>
@endsection
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Tentang SMKN 1 Situbondo</h1>
    </div>
</section>
        <div class="container clearfix">
            <div class="topmargin-sm center">
        </div>
                <div class="row col-mb-50">
                    <div class="col-md-6 d-none d-md-flex align-self-end">
                        <img src="{{asset('gambar_about/'.$data->foto)}}" alt="Image" class="mb-0">
                    </div>
                    <div class="col-md-6 mb-5 subscribe-widget">
                        {!! $data->tentang !!}
                    </div>
                </div>
            </div>
@endsection
