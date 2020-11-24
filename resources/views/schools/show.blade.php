@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="{{$sekolah->nama}}"
            :back-url="route('deafcare.forum.user.komunitas.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <div class="row">
            <div class="col-12">
                <div class="w-100 d-flex justify-content-center mb-3">
                    <img src="{{$sekolah->gambar ?? asset('img/dummy.jpg')}}" class="border rounded-lg w-100" alt="Foto {{$sekolah->nama}}" style="height: 200px; object-fit: cover">
                </div>
                <article>
                    <h1 class="h3 font-weight-bold">{{$sekolah->nama}}</h1>
                    <p>{{$sekolah->profilSekolah->deskripsi}}</p>
                    <div class="mb-3">
                        <i class="fas fa-phone mr-2"></i> <span>{{$sekolah->no_telp}}</span>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-map-marker-alt mr-2"></i> <span>{{$sekolah->alamat}}</span>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-globe mr-2"></i> <span>{{$sekolah->website ?? '-'}}</span>
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection
