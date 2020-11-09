@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Informasi" :back-url="route('deafcare.home')" />
    </header>
    <main class="px-3 pt-3">
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
            <div class="col-12 w-100" style="overflow-x: auto; white-space: nowrap">
                <a href="{{route('deafcare.informasi.artikel.index')}}" class="btn {{ $active == 0 ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">Semua</a>
                @foreach ($tags as $tag)
                    <a href="{{route('deafcare.informasi.artikel.getbytag', $tag->id)}}" class="btn {{ $active == $tag->id ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">{{ $tag->nama }}</a>
                @endforeach
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                @foreach ($articles as $article)
                    <a class='card rounded-xl text-dark mb-3' href="{{route('deafcare.informasi.artikel.show', $article->id)}}">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ $article->image }}" alt="..."
                                style="width: 120px; height:82px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div>
                                    <p class="font-weight-bold mb-1" style="line-height:1rem">
                                        {{ $article->judul }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @if (Auth()->user()->roles()->admin())
            <x-floating-add-button
                :url="route('deafcare.informasi.artikel.create')"
            ></x-floating-add-button>
        @endif
    </main>
@endsection
