@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Tambah Lokasi Tes Pendengaran"
            :back-url="route('deafcare.tespendengaran.user.jenis.hearingcenter.index', $jenis->id)"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.tespendengaran.admin.jenis.hearingcenter.store', $jenis->id)}}" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <x-inputs.select
                    label="Jenis Tes"
                    name="jenis_tes_pendengaran_id[]"
                    placeholder="Pilih Jenis Kesehatan"
                    :value="$jenis->id"
                    :option-values="$jenises->map(fn($j)=>$j->id)"
                    :option-names="$jenises->map(fn($j)=>$j->nama)"
                    required
                    multiple
                    search
                ></x-inputs.select>
                <x-inputs.input
                    label="Nama Lokasi"
                    name="nama"
                    placeholder="cth: Pusat Alat Bantu Dengar Yogyakarta"
                    required
                ></x-inputs.input>
                <x-inputs.input
                    label="Kontak"
                    name="no_telp"
                    placeholder="cth: Telp: 08xxxxxxxxxx"
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Alamat"
                    name="alamat"
                    placeholder="cth: Jl. Pandanaran"
                ></x-inputs.textarea>
                <x-inputs.file-input
                    label="Foto"
                    name="gambar"
                    required
                ></x-inputs.file-input>
                <hr>
                <schedule-list-hearing-test></schedule-list-hearing-test>
                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Tambah Lokasi Tes Pendengaran
                </button>
            </div>
        </form>
    </main>
@endsection
