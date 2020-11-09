@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Halaman Utama"
    />
</header>
<main class="px-4 pt-4" style="padding-bottom: 64px">
    <div class="row mb-3">
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Apapun" aria-label="Cari Informasi"
                    aria-describedby="btn-search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fab fa-youtube"
                title="Edukasi"
                :url="route('deafcare.edukasi.video.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-stethoscope"
                title="Expert"
                :url="route('deafcare.kesehatan.user.jenis.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-hands-helping"
                title="Sekolah dan komunitas"
                :url="route('deafcare.forum.user.komunitas.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-bullhorn"
                title="Berita dan Artikel"
                :url="route('deafcare.informasi.artikel.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-shopping-bag"
                title="Hearing Technology"
                :url="route('deafcare.belanja.user.item.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-deaf"
                title="Hearing Center"
                :url="route('deafcare.tespendengaran.user.jenis.index')"
            />
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0; max-width:480px">
    <x-navigation/>
</div>
@endsection
