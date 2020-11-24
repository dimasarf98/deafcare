@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Unggah Video"
            :back-url="route('deafcare.edukasi.video.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.edukasi.admin.video.store')}}" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <x-inputs.input
                    label="Judul"
                    name="judul"
                    placeholder="cth: Jangan Panggil Aku Tuna Rungu"
                    required
                ></x-inputs.input>
                <x-inputs.input
                    label="Link Youtube Video"
                    name="link"
                    placeholder="cth: https://www.youtube.com/watch?v=pNfTK39k55U&ab_channel=JYPEntertainment"
                    required
                ></x-inputs.input>
                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Unggah Video
                </button>
            </div>
        </form>
    </main>
@endsection
