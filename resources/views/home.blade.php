@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Halaman Utama"
    />
</header>
<main class="px-4 pt-4" style="padding-bottom: 64px">
    <div class="row">
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fab fa-youtube"
                title="Edukasi"
                url="#"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-stethoscope"
                title="Kesehatan"
                :url="route('deafcare.kesehatan.jenis.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-hands-helping"
                title="Forum"
                :url="route('deafcare.forum.komunitas.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-bullhorn"
                title="Informasi"
                :url="route('deafcare.informasi.artikel.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-shopping-bag"
                title="Belanja"
                :url="route('deafcare.belanja.item.index')"
            />
        </div>
        <div class="col-6 mb-4">
            <x-card-module
                icon-class="fas fa-deaf"
                title="Tes Pendengaran"
                :url="route('deafcare.tespendengaran.jenis.index')"
            />
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0; max-width:480px">
    <x-navigation/>
</div>
@endsection
