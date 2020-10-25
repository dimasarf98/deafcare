@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Tambah Tenaga Kesehatan"
            :back-url="route('deafcare.kesehatan.user.jenis.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.kesehatan.admin.tenagaKesehatan.store')}}" class="row">
            @csrf
            <div class="col-12">
                <x-inputs.select
                    label="Jenis Kesehatan"
                    name="jenis_kesehatan_id"
                    placeholder="Pilih Jenis Kesehatan"
                    :option-values="$jenis->map(fn($j)=>$j->id)"
                    :option-names="$jenis->map(fn($j)=>$j->judul)"
                    required
                ></x-inputs.select>
                <x-inputs.input
                    label="Nama Tenaga Kesehatan"
                    name="nama"
                    placeholder="cth: dr. Eko"
                    required
                ></x-inputs.input>
                <x-inputs.input
                    label="Pengalaman (tahun)"
                    name="pengalaman"
                    type="text"
                    placeholder="cth: 2 tahun"
                ></x-inputs.input>
                <hr>
                <schedule-list
                    :rumah-sakits="{{$rumahSakits}}"
                ></schedule-list>
                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Tambah Tenaga Kesehatan
                </button>
            </div>
        </form>
    </main>
@endsection
