@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Edit Tenaga Kesehatan"
            :back-url="route('deafcare.kesehatan.user.jenis.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.kesehatan.admin.tenagaKesehatan.update', $tenagaKesehatan->id)}}" class="row">
            @method('PUT')
            @csrf
            <div class="col-12">
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
