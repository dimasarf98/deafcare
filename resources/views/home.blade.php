@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar title="Halaman Utama" />
</header>
<main class="px-3 pt-3" style="padding-bottom: 64px;">
    <div class="row mb-3">
        <div class="col-12">
            <div id="carouselBanner" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselBanner" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselBanner" data-slide-to="1"></li>
                    <li data-target="#carouselBanner" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="banner">
                            <img src="{{asset('img/banner-1.png')}}" class="d-block rounded-xl w-100 h-100" alt="1"
                                style="object-fit: cover">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner">
                            <img src="{{asset('img/banner-2.png')}}" class="d-block rounded-xl w-100 h-100" alt="2"
                                style="object-fit: cover">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="banner">
                            <img src="{{asset('img/banner-3.png')}}" class="d-block rounded-xl w-100 h-100" alt="3"
                                style="object-fit: cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <form action="{{route('deafcare.search')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Apapun" aria-label="Cari Informasi"
                        aria-describedby="btn-search" name="query">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="btn-search">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="module-wrapper mb-3">
        {{-- <div class="module-item">
            <x-card-module bg-color="#7d7fff" icon-class="fab fa-youtube" title="Edukasi"
                :url="route('deafcare.edukasi.video.index')" />
        </div> --}}
        <div class="module-item">
            <x-card-module bg-color="#f5770a" icon-class="fas fa-stethoscope" title="Expert"
                :url="route('deafcare.kesehatan.user.tenagaKesehatan.index')" />
        </div>
        <div class="module-item">
            <x-card-module bg-color="#73c949" icon-class="fas fa-hands-helping" title="Sekolah dan komunitas"
                :url="route('deafcare.forum.user.komunitas.index')" />
        </div>
        <div class="module-item">
            <x-card-module bg-color="#7295ab" icon-class="fas fa-bullhorn" title="Forum"
                :url="route('deafcare.informasi.artikel.index')" />
        </div>
        <div class="module-item">
            <x-card-module icon-class="fas fa-shopping-bag" title="Hearing Technology"
                :url="route('deafcare.belanja.user.item.index')" />
        </div>
        <div class="module-item">
            <x-card-module bg-color="#a6079b" icon-class="fas fa-deaf" title="Hearing Center"
                :url="route('deafcare.tespendengaran.user.hearingcenter.index')" />
        </div>
        <div class="module-item">
            <x-card-module bg-color="#ff8a8a" icon-class="fas fa-calendar-week" title="Event dan Donasi"
                :url="route('deafcare.event.index')" />
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0; max-width:480px">
    <x-navigation />
</div>
@endsection