@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Edit Donasi"
            :back-url="route('donasi.show')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <x-inputs.file-input
                    name="poster"
                    label="Poster Penggalangan Donasi"
                ></x-inputs.file-input>
                <x-inputs.input
                    label="Judul Donasi"
                    name="judul"
                    placeholder="Masukkan judul..."
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Deskripsi Donasi"
                    name="deskripsi"
                    required
                    tiny-mce
                    placeholder="Tulis deskripsi di sini..."
                ></x-inputs.textarea>


                <button type="submit" class="btn btn-success btn-block mb-3">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </main>
@endsection

@push('scripts')
    <script>
        tinymce.init({
            selector: '.tiny-mce',
            height: 500,
            menubar: false,
        });
    </script>
@endpush
