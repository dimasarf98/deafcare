@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Buat Artikel"
            :back-url="route('deafcare.informasi.artikel.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.informasi.artikel.store')}}" class="row">
            @csrf
            <div class="col-12">
                <x-inputs.file-input
                    name="gambar"
                    label="Foto Artikel"
                ></x-inputs.file-input>
                <x-inputs.input
                    label="Judul Artikel"
                    name="judul"
                    placeholder="Masukkan judul..."
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Isi Artikel"
                    name="isi"
                    required
                    tiny-mce
                    placeholder="Isi artikel di sini..."
                ></x-inputs.textarea>
                <x-inputs.select
                    label="Tag"
                    name="tags"
                    placeholder="Pilih tag"
                    :option-values="$tags->map(fn($j)=>$j->id)"
                    :option-names="$tags->map(fn($j)=>$j->nama)"
                    required
                    multiple
                    search
                ></x-inputs.select>

                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Buat Artikel
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
