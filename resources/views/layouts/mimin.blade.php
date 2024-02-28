<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard Admin SMKN 1 Situbondo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets-mimin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-mimin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets-mimin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets-mimin/css/style.css') }}" rel="stylesheet">    @stack('css')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route('home') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets-mimin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        {{-- <h6 class="mb-0">Jhon Doe</h6> --}}
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('home') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Home</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('berita.create') }}" class="dropdown-item">Berita</a>
                            <a href="{{ route('gallery.create') }}" class="dropdown-item">Foto</a>
                            <a href="{{ route('media.create') }}" class="dropdown-item">Video</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-laptop me-2"></i>Profil</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('kepala.create') }}" class="dropdown-item dropdown-link">Kepala Sekolah</a>
                            <a href="{{ route('jurusan.create') }}" class="dropdown-item">Kompetensi Keahlian</a>
                            <a href="{{ route('achievement.create')}}" class="dropdown-item">Prestasi Sekolah</a>
                            <a href="{{ route('visidanmisi.create')}}" class="dropdown-item">Visi & Misi</a>
                            <a href="{{ route('tentangsekolah.create')}}" class="dropdown-item">Tentang Sekolah</a>
                            <a href="{{ route('pejabat.create')}}" class="dropdown-item">Pejabat Waka</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Data</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('sarana.create') }}" class="dropdown-item">Sarana Prasarana</a>
                                <a href="{{ route('matapelajaran.create') }}" class="dropdown-item">Mata Pelajaran</a>
                                <a href="{{ route('gurusekolah.create') }}" class="dropdown-item">Guru</a>
                                <a href="{{ route('tenagapendidik.create')}}l" class="dropdown-item">Tenaga Pendidik</a>
                                <a href="{{ route('siswasekolah.create')}}l" class="dropdown-item">Siswa</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Info</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('infosekolah.create') }}" class="dropdown-item">Pengumuman</a>
                                <a href="{{ route('agendasekolah.create') }}" class="dropdown-item">Agenda Kegiatan</a>
                                <a href="{{ route('jadwalmapel.create')}}" class="dropdown-item">Jadwal Mata Pelajaran</a>
                                <a href="{{ route('jadwalexam.create')}}" class="dropdown-item">Jadwal Ujian</a>
                                <a href="{{ route('ekskul.create')}}" class="dropdown-item">Ekstrakurikuler</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>OSIS</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('tentangosis.create') }}" class="dropdown-item">Tentang OSIS</a>
                                <a href="{{ route('pengurus.create') }}" class="dropdown-item">Pengurus OSIS</a>
                                <a href="{{ route('kegosis.create')}}" class="dropdown-item">Kegiatan OSIS</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Tautan/Link</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('appschool.create') }}" class="dropdown-item">Aplikasi</a>
                                <a href="{{ route('infoppdb.create') }}" class="dropdown-item">PPDB</a>
                                <a href="{{ route('berita.create')}}" class="dropdown-item">Show</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>GOTA</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('gotakeg.create') }}" class="dropdown-item">Kegiatan GOTA</a>
                                <a href="{{ route('lapkeuangan.create') }}" class="dropdown-item">Laporan Keuangan</a>
                                <a href="{{ route('donasi.create')}}" class="dropdown-item">Donasi</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Literasi</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('infosekolah.create') }}" class="dropdown-item">Buku Tamu</a>
                                <a href="{{ route('agendasekolah.create') }}" class="dropdown-item">Daftar Buku</a>
                                <a href="{{ route('jadwalmapel.create')}}" class="dropdown-item">Film</a>
                                <a href="{{ route('jadwalexam.create')}}" class="dropdown-item">Sinopsis</a>
                                <a href="{{ route('ekskul.create')}}" class="dropdown-item">Mading</a>
                            </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-laptop me-2"></i>Opini</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="{{ route('pendapat.create') }}" class="dropdown-item">Opini</a>
                                {{-- <a href="{{ route('agendasekolah.create') }}" class="dropdown-item">Agenda Kegiatan</a> --}}
                    </div>
                    {{-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets-mimin/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin SMK</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            {{-- <a href="#" class="dropdown-item">Settings</a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                             class="d-none">
                                 @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        {{-- <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Sale</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <section id="content">
                <div class="container-fluid pt-4 px-4">
                    @yield('content')
                </div>
            </section>

            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">SMKN 1 Situbondo</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets-mimin/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('assets-mimin/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets-mimin/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-mimin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-mimin/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets-mimin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets-mimin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets-mimin/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @stack('js')
</body>

</html>