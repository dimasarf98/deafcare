@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="{{$forum->nama}}"
            :back-url="route('deafcare.forum.user.komunitas.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <div class="row">
            <div class="col-12">
                <div class="w-100 d-flex justify-content-center mb-3">
                    <img src="{{$forum->gambar}}" class="border rounded-lg w-100" alt="Foto {{$forum->nama}}" style="height: 200px; object-fit: cover">
                </div>
                <article>
                    <h1 class="h3 font-weight-bold">{{$forum->nama}}</h1>
                    <p>{{$forum->profilForum->deskripsi}}</p>
                    <div class="mb-3">
                        <i class="fas fa-phone mr-2"></i> <span>{{$forum->no_telp}}</span>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i> <span>{{$forum->alamat}}</span>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-globe mr-2"></i> <span>{{$forum->website ?? '-'}}</span>
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection
