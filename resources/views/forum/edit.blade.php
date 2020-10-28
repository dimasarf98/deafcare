@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Edit Komunitas"
            :back-url="route('deafcare.forum.user.komunitas.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.forum.admin.komunitas.update', $komunitas->id)}}" class="row">
            @csrf
            @method('PUT')
            <div class="col-12">
                <div class="mb-3 mx-auto position-relative w-100" style="height: 200px">
                    <img class="rounded-lg border h-100 w-100" src="{{$komunitas->gambar}}" alt="Foto {{$komunitas->nama}}" style="object-fit: cover">
                    <button data-toggle="modal" data-target="#modalChangeProfile" type="button" class="btn btn-success btn-sm position-absolute" style="right: 0.5rem; bottom: 0.5rem">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
                <x-inputs.input
                    label="Nama Komunitas"
                    name="nama"
                    placeholder="cth: Komunitas Panah"
                    value="{{$komunitas->nama}}"
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Alamat"
                    name="alamat"
                    value="{{$komunitas->alamat}}"
                    required
                    placeholder="cth: Jl. Pandanaran, Yogyakarta"
                ></x-inputs.textarea>
                <x-inputs.input
                    label="Kontak"
                    name="no_telp"
                    value="{{$komunitas->no_telp}}"
                    placeholder="cth: WA: 08123xxxxxxx, dst..."
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Deskripsi"
                    name="deskripsi"
                    required
                    value="{{$komunitas->profilForum->deskripsi}}"
                    placeholder="Ceritakan tentang komunitas anda..."
                ></x-inputs.textarea>
                <button type="submit" class="btn btn-success btn-block mb-3">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </main>
    <!-- Modal -->
    <div class="modal fade" id="modalChangeProfile" tabindex="-1" role="dialog" aria-labelledby="modalChangeProfileTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalChangeProfileTitle">Upload Foto Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <x-inputs.file-input
                        name="gambar"
                        label="Foto Komunitas"
                    ></x-inputs.file-input>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
@endsection
