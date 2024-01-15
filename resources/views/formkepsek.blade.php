@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Form Kepala Sekolah</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Data Kepala Sekolah</h1>
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
                        <form class="row" action="{{ route('kepala.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Nama Kepala Sekolah:</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>NIP:</label>
                                <input type="text" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Jabatan:</label>
                                <input type="text" name="jabatan" id="jabatan" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Riwayat Pendidikan:</label>
                                <input type="text" name="riwayat" id="riwayat" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto Kepala Sekolah:</label>
                                <input type="file" class="form-control" name="foto" id="foto"/>
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Ucapan:</label>
                                <input type="text" name="ucapan" id="ucapan" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h5 class="text-center">Data Kepala Sekolah</h5>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Nama Kepala Sekolah</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Riwayat</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('kepala.data') }}",
                columns: [{
                    data: 'nama',
                    name: 'nama'
                    },
                    {
                        data: 'nip',
                        name: 'nip'
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan'
                    },
                    {
                        data: 'riwayat',
                        name: 'riwayat'
                    },
                    {
                        data: 'foto',
                        name: 'foto'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
            var del = function(id) {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang sudah terhapus tidak bisa dikembalikan lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus data'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('kepala/hapus') }}/" + id,
                            method: "POST",
                            success: function(response) {
                                table.ajax.reload();
                                Swal.fire(
                                    'Terhapus!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                            },
                            failure: function(response) {
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
            $('body').on('click', '.hapus-data', function() {
                del($(this).attr('data-id'));
            });
        });
    </script>
@endpush
