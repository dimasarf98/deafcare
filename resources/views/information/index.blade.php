@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Informasi"
        :back-url="route('home')"
    />
</header>
<main class="px-3 pt-3" style="padding-bottom: 64px">
    <div class="row mb-3">
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Informasi" aria-label="Cari Informasi" aria-describedby="btn-search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">Artikel</button>
                <button type="button" class="btn btn-outline-danger">Berita</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class='card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 120px; height:82px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1" style="line-height:1rem">
                                Adakah Penyebab Khusus Orang Mengalami Tunarungu?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class='card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 120px; height:82px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1" style="line-height:1rem">
                                Mitos dan Fakta Seputar Tunarungu
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
