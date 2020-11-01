@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="{{$video->judul}}"
            :back-url="route('deafcare.edukasi.video.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <div class="row">
            <div class="col-12">
                <div class="w-100 d-flex justify-content-center mb-3">
                    {{!!$video->player!!}}
                </div>
                <article>
                    <h1 class="h3 font-weight-bold">{{$video->judul}}</h1>
                    <p>{{$video->deskripsi}}</p>
                </article>
            </div>
        </div>
    </main>
@endsection
