@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Informasi" :back-url="route('deafcare.home')" />
    </header>
    <main class="px-3 pt-3" style="padding-bottom: 64px">
        <div class="row mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Informasi" aria-label="Cari Informasi"
                        aria-describedby="btn-search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="btn-search">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">

            <div class="col-12 " style="overflow-x: scroll">
                <a href="{{route('deafcare.informasi.artikel.index')}}" class="btn mt-1 {{ $active == 0 ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill">Semua</a>
                @foreach ($tags as $tag)
                    <div class="btn-group" role="group" aria-label="Basic example" >
                        <a href="{{route('deafcare.informasi.artikel.getbytag', $tag->id)}}" class="btn mt-1 {{ $active == $tag->id ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill">{{ $tag->nama }}</a>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                @foreach ($articles as $article)
                    <div class='card rounded-xl link-style-none mb-3' href="#">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ asset('img/dummy.jpg') }}" alt="..."
                                style="width: 120px; height:82px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div>
                                    <p class="font-weight-bold mb-1" style="line-height:1rem">
                                        {{ $article->judul }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
