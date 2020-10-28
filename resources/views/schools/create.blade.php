@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Tambah Sekolah"
            :back-url="route('deafcare.forum.user.sekolah.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.forum.admin.sekolah.store')}}" class="row">
            @csrf
            <div class="col-12">
                <x-inputs.input
                    label="Nama Sekolah"
                    name="nama"
                    placeholder="cth: SDN 01 Yogyakarta"
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
                    placeholder="Ceritakan tentang sekolah anda..."
                    required
                ></x-inputs.textarea>
                <x-inputs.input
                    label="Website Sekolah"
                    name="website"
                    placeholder="cth: www.sdn01yogyakarta.com"
                ></x-inputs.input>
                <x-inputs.file-input
                    label="Foto Sekolah"
                    name="gambar"
                ></x-inputs.file-input>
                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Tambah Sekolah
                </button>
            </div>
        </form>
    </main>
@endsection
