@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Edit Video"
            :back-url="route('deafcare.edukasi.video.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.edukasi.admin.video.update', $video->id)}}" class="row" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="w-100 d-flex justify-content-center mb-3">
                    {{!!$video->player!!}}
                </div>
                <x-inputs.input
                    label="judul"
                    name="judul"
                    placeholder="cth: Komunitas Panah"
                    value="{{$video->judul}}"
                    required
                ></x-inputs.input>
                <x-inputs.input
                    label="Link Video"
                    name="link"
                    value="{{$video->link}}"
                    placeholder="cth: WA: 08123xxxxxxx, dst..."
                ></x-inputs.input>
                <button type="submit" class="btn btn-success btn-block mb-3">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </main>
@endsection
