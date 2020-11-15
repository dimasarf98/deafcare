@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Edit Tenaga Kesehatan"
            :back-url="route('deafcare.kesehatan.user.tengakaKesehatan.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.kesehatan.admin.tenagaKesehatan.update', $tenagaKesehatan->id)}}" class="row">
            @method('PUT')
            @csrf
            <div class="col-12">
                <div class="mb-3 mx-auto position-relative w-100" style="height: 200px">
                    <img class="rounded-lg border h-100 w-100" src="{{$tenagaKesehatan->gambar}}" alt="Foto {{$tenagaKesehatan->nama}}" style="object-fit: cover">
                    <button data-toggle="modal" data-target="#modalChangeProfile" type="button" class="btn btn-success btn-sm position-absolute" style="right: 0.5rem; bottom: 0.5rem">
                        <i class="fas fa-edit"></i>
                    </button>
                </div>
                <input type="hidden" name="gambar_old" value="{{$tenagaKesehatan->gambar}}">
                <x-inputs.select
                    label="Jenis Kesehatan"
                    name="jenis_kesehatan_id"
                    required
                    placeholder="Pilih Jenis Kesehatan"
                    :value="$tenagaKesehatan->jenisKesehatan->id"
                    :option-values="$jenis->map(fn($j)=>$j->id)"
                    :option-names="$jenis->map(fn($j)=>$j->judul)"
                ></x-inputs.select>
                <x-inputs.input
                    label="Nama Tenaga Kesehatan"
                    :value="$tenagaKesehatan->nama"
                    name="nama"
                    placeholder="cth: dr. Eko"
                    required
                ></x-inputs.input>
                <x-inputs.input
                    label="Pengalaman (tahun)"
                    name="pengalaman"
                    :value="$tenagaKesehatan->pengalaman"
                    type="text"
                    placeholder="cth: 2 tahun"
                ></x-inputs.input>
                <hr>
                <schedule-list
                    :rumah-sakits="{{$rumahSakits}}"
                    :jadwal-sekarang="{{$tenagaKesehatan->rumahSakits}}"
                ></schedule-list>
                <button type="submit" class="btn btn-success btn-block mb-3">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </main>
@endsection
