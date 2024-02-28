@extends('layouts.mimin')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
@endpush
@section('title')
    <title>Form Opini Sekolah</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Opini Sekolah</h1>
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
                        <form class="row" action="{{ route('pendapat.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Judul Opini:</label>
                                <input type="text" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Tanggal:</label>
                                <input type="text" name="tgl_opini" id="tgl_opini" class="form-control datepicker">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Opini:</label>
                                <textarea class="summernote" name="isi"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Status Editor:</label>
                                <select class="form-control" name="editor" id="editor">
                                    <option><label>-- Pilih Salah Satu --</label></option>
                                    <option value="1">Guru</option>
                                    <option value="2">Siswa</option>
                                    <option value="3">Wali Murid</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label>Nama Editor:</label>
                                <input type="text" name="nama_editor" id="nama_editor" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                {{-- <div class="row">
                    <h6 class="text-center">Daftar Opini Siswa dan Guru</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Judul Opini</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
                                <th>Status Editor</th>
                                <th>Nama Editor</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            $('#tgl_opini').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                    ]
            });
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('pendapat.data') }}",
                columns: [{
                    data: 'judul',
                    name: 'judul'
                }, {
                    data: 'tgl_opini',
                    name: 'tgl_opini'
                }, {
                    data: 'isi',
                    name: 'isi'
                }, {
                    data: 'editor',
                    name: 'editor'
                },
                    {
                        data: 'nama_editor',
                        name: 'nama_editor'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            var del = function (id) {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang sudah terhapus tidak bisa dikembalikan lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('pendapat/hapus') }}/" + id,
                            method: "POST",
                            success: function (response) {
                                table.ajax.reload();
                                Swal.fire(
                                    'Terhapus!',
                                    'File sudah dihapus',
                                    'sukses'
                                )
                            },
                            failure: function (response) {
                                swal(
                                    "Internal Error",
                                    "Oops, your note was not saved.", // had a missing comma
                                    "error"
                                )
                            }
                        });
                    }
                })
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });

        });
    </script>
@endpush
