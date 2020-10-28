@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Tambah Komunitas"
            :back-url="route('deafcare.forum.user.komunitas.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.forum.admin.komunitas.store')}}" class="row">
            @csrf
            <div class="col-12">
                <x-inputs.input
                    label="Nama Komunitas"
                    name="nama"
                    placeholder="cth: Komunitas Panah"
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Alamat"
                    name="alamat"
                    required
                    placeholder="cth: Jl. Pandanaran, Yogyakarta"
                ></x-inputs.textarea>
                <x-inputs.input
                    label="Kontak"
                    name="no_telp"
                    placeholder="cth: WA: 08123xxxxxxx, dst..."
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Deskripsi"
                    name="deskripsi"
                    required
                    placeholder="Ceritakan tentang komunitas anda..."
                ></x-inputs.textarea>
                <x-inputs.file-input
                    name="gambar"
                    label="Foto Komunitas"
                ></x-inputs.file-input>
                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Tambah Komunitas
                </button>
            </div>
        </form>
    </main>
@endsection
