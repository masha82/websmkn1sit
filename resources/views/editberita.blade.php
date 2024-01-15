@extends('layouts.master');
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@section('title')
    <title>Edit Berita</title>
@endsection

@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Edit Berita</h1>
        </div>
    </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">

                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <form class="row" action="{{ route('berita.update', $data->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 form-group">
                                <label>Judul Berita:</label>
                                <input type="text" value="{{ $data->judul }}" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Kategori:</label>
                                <input type="text" value="{{ $data->kategori }}" name="kategori" id="kategori" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Berita:</label>
                                <textarea class="summernote" name="isi">{{ $data->isi }}</textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label">Foto:</label>
                                <img src="{{asset('gambar_berita/'.$data->foto)}}" alt="Image">
                            </div>
                            <div class="col-12 form-group">
                                <label>Editor:</label>
                                <input type="text" value="{{ $data->editor }}" name="editor" id="editor" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
         $(document).ready(function () {
            $('.summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['link', ['link']]
                ]
            });
        });
    </script>
@endpush
