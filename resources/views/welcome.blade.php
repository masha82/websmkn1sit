@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css') }}" type="text/css" />
    <style>
        .img-fit {
            display: block;
            max-width: 400px;
            max-height: 200px;
            width: auto;
            height: auto;
            object-fit: cover !important;
        }
    </style>
@endpush

@section('title')
    <title>SMKN 1 Situbondo</title>
@endsection

@section('content')
    <section id="slider" class="slider-element include-header" style="background-color: rgb(253, 227, 161);">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: transparent url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04">
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-100 pt-5 pb-4">
                <div class="col-lg-6">
                    <h6 class="mb-4 ls1 text-uppercase fw-normal">Bergabunglah Bersama Kami</h6>
                    <h1 class="display-3 fw-bolder">Solusi Tepat Menjawab Tantangan</h1>

                    <!--
                <a href="#" class="btn text-white bg-color rounded-1 py-3 px-5 fw-medium">Enroll Now  <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>
                <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" class="btn bg-white rounded-1 px-5 py-3 fw-medium ms-2" data-lightbox="iframe"><i class="icon-play-circle me-1" style="position: relative; top: 1px; margin-right: 5px;"></i> Watch Video</a>
                -->
                </div>
                <div class="col-lg-6 align-self-end mt-5 mt-lg-0">
                    <br><br>
                    <img src="{{ asset('assets/demos/kindergarten/images/Bu-KS.png') }}" alt="Hero Bg">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section" style="padding: 100px 0; background-color: #ECF4F1">
            <div class="shape-divider" data-shape="wave-5" data-height="50" id="shape-divider-4352"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1">
                    <path class="shape-divider-fill"
                        d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z">
                    </path>
                </svg></div>
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04">
            </div>
            <div class="container z-3">
                <h2 class="color text-center h1 fw-bold mb-6 pb-2">GOTA</h2>
                <div class="row gutter-10">
                    <div class="row col-lg-8">
                        <div class="posts-md">
                            <div class="entry">
                                <div class="entry-image position-relative mb-md-4">
                                  <div class="row">
                                    <div class="col-lg-6 col-md-3 bottommargin">
                                        <div class="team">
                                            <img src="{{ asset('assets/demos/kindergarten/images/gotakegiatan.png') }}" alt="Image 1" class="rounded-5 float-left">
                                            <a href="{{ url('gotakeg') }}">Kegiatan GOTA</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 bottommargin">
                                        <div class="team">
                                        <img src="{{ asset('assets/demos/kindergarten/images/report.png') }}" alt="Image 1" class="rounded-5">
                                        <a href="{{ url('lapkeuangan') }}">Laporan Keuangan</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-3 bottommargin">
                                        <div class="team">
                                        <img src="{{ asset('assets/demos/kindergarten/images/donation.png') }}" alt="Image 1" class="rounded-5">
                                        <a href="{{ url('donasi') }}">Donasi</a>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="entry-title nott">
                                    <h3><a class="ls0 h3 centered" href="#">Kegiatan</a></h3>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60" id="shape-divider-8537">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none"
                    class="op-ts op-1">
                    <path class="shape-divider-fill"
                        d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z">
                    </path>
                </svg></div>
        </div>
    </section>
    <section>
        <div class="container clearfix mt-5">
            <div class="row clearfix">
                <!-- Second Posts Area
                    ============================================= -->
                <div class="col-lg-12">
                    <!-- Gallery Slider
                        ============================================= -->
                    <div class="clearfix">
                        <h4 style="background: #9ADCFF" class="ls1 text-uppercase fw-bold">
                            BERITA/INFORMASI</h4>
                        <!-- Flex Thumbs Slider
                            ============================================= -->
                        <div class="row col-mb-50 mb-0">
                            @foreach ($berita as $post)
                                <div class="col-md-6 mt-0">
                                    <!-- Post Article -->
                                    <div class="posts-md">
                                        <div class="entry">
                                            <div class="entry-image">
                                                <a href="{{route('berita.show',$post->id)}}"><img class="img-fit"
                                                        src="{{ asset('gambar_berita/' . $post->foto) }}" alt="Image 3"></a>
                                                <div class="entry-categories"><a href="{{route('berita.show',$post->id)}}"
                                                        class="bg-lifestyle">Berita</a>
                                                </div>
                                            </div>
                                            <div class="entry-title title-sm nott">
                                                <h3 class="mb-0"><a href="{{route('berita.show',$post->id)}}">{{ $post->judul }}</a>
                                                </h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><span>Penyunting: </span> <a href="#">{{ $post->editor }}</a>
                                                    </li>
                                                    <li><i class="icon-time"></i><a
                                                            href="#">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('D MMMM Y') }}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{ $berita->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="section" style="padding: 100px 0; background-color: #ECF4F1">
            <div class="shape-divider" data-shape="wave-5" data-height="50" id="shape-divider-4352"><svg
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none" class="op-ts op-1">
                    <path class="shape-divider-fill"
                        d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z">
                    </path>
                </svg></div>
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: url('demos/kindergarten/images/hero-bg-icons.svg') center center / cover; opacity: 0.04">
            </div>
            <div class="container z-3">
                <h2 class="color text-center h1 fw-bold mb-5 pb-2">Prestasi:</h2>
                <div class="row gutter-50">
                    @foreach($prestasi as $achievement)
                    <div class="col-lg-4">
                        <div class="posts-md">
                            <div class="entry">
                                <div class="entry-image position-relative mb-md-4">
                                    <a href="#">
                                        <img src="{{ asset('gambar_prestasi/' . $achievement->foto) }}" alt="Image 3" class="rounded-5">
                                        <div class="shape-divider" data-shape="wave-5" data-position="bottom"
                                            data-width="110" data-height="30" data-fill="#ECF4F1" id="shape-divider-2316">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140"
                                                preserveAspectRatio="none" class="op-ts op-1">
                                                <path class="shape-divider-fill"
                                                    d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z">
                                                </path>
                                            </svg></div>
                                    </a>
                                    <div class="entry-date">{{ \Carbon\Carbon::parse($achievement->created_at)->isoFormat('D') }}<span>{{ \Carbon\Carbon::parse($achievement->created_at)->isoFormat('MMMM') }}</span></div>
                                </div>
                                <div class="entry-title nott">
                                    <h3><a class="ls0 h3" href="{{route('achievement.show',$achievement->id)}}">{{ $achievement->nama_prestasi }}</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="shape-divider" data-shape="wave-5" data-position="bottom" data-height="60" id="shape-divider-8537">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 140" preserveAspectRatio="none"
                    class="op-ts op-1">
                    <path class="shape-divider-fill"
                        d="M0 0v100c20 17.3 40 29.51 80 29.51 51.79 0 74.69-48.57 151.75-48.57 73.72 0 91 54.88 191.56 54.88C543.95 135.8 554 14 665.69 14c109.46 0 98.85 87 188.2 87 70.37 0 69.81-33.73 115.6-33.73 55.85 0 62 39.62 115.6 39.62 58.08 0 57.52-46.59 115-46.59 39.8 0 60 22.48 79.89 39.69V0z">
                    </path>
                </svg></div>
        </div>
    </section>
    <section class="mb-4">
        <div class="container clearfix mt-5 mb-4">
            <div class="row clearfix">
                <!-- Second Posts Area
                    ============================================= -->
                <div class="col-lg-12 mb-4">
                    <!-- Gallery Slider
                        ============================================= -->
                    <h4 style="background: #9ADCFF" class="ls1 text-uppercase fw-bold">
                        Video</h4>
                    <!-- Flex Thumbs Slider
                        ============================================= -->
                    <div class="row col-mb-50">
                        @foreach ($videos as $video)
                            <div class="col-md-6 mt-0">
                                <!-- Post Article -->
                                <div class="posts-md">
                                    <div class="entry">
                                        <div class="entry-title title-sm nott">
                                            <h3 class="mb-0"><a href="#">{{ $video->keterangan }}</a>
                                            </h3>
                                        </div>
                                        <div class="entry-image img-fit">
                                            {!! $video->link !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{ $videos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer id="footer" class="mt-4 border-0"
            style="background-image: linear-gradient(to top, #61BFDB, #E0F2C2, #FFF);">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: transparent url('demos/kindergarten/images/footer.png') center bottom / cover;">
            </div>

            <div class="col-auto text-center mt-4 text-smaller pb-3 font-primary">
                SMKN 1 Situbondo - Solusi Tepat Menjawab Tantangan
            </div>
        </footer>
    </section>
@endsection
