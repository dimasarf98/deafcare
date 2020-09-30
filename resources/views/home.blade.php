@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar/>
</header>
<main class="px-4 pt-4" style="padding-bottom: 64px">
    <div class="row">
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <x-card-module
                icon-class="fab fa-youtube"
                title="Edukasi"
                url="#"
            />
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <x-card-module
                icon-class="fas fa-stethoscope"
                title="Kesehatan"
                url="#"
            />
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <x-card-module
                icon-class="fas fa-hands-helping"
                title="Forum"
                url="#"
            />
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <x-card-module
                icon-class="fas fa-bullhorn"
                title="Informasi"
                url="#"
            />
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <x-card-module
                icon-class="fas fa-shopping-bag"
                title="Belanja"
                url="#"
            />
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <x-card-module
                icon-class="fas fa-deaf"
                title="Tes Pendengaran"
                url="#"
            />
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0">
    <x-navigation/>
</div>
@endsection
