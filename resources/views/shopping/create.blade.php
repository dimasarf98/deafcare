@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Tambah Barang"
            :back-url="route('deafcare.belanja.user.item.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.belanja.vendor.item.store')}}" class="row" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <x-inputs.input
                    label="Nama"
                    name="nama"
                    placeholder="cth: Alat Bantu Dengar"
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Deskripsi"
                    name="deskripsi"
                    placeholder="Deskripsi barang..."
                ></x-inputs.textarea>
                <x-inputs.input
                    label="Harga"
                    name="harga"
                    type="number"
                    placeholder="cth: 200000"
                ></x-inputs.input>
                <x-inputs.input
                    label="Stok"
                    name="stok"
                    type="number"
                    placeholder="cth: 2"
                ></x-inputs.input>
                <x-inputs.select
                    label="Jenis Barang"
                    name="jenis_belanja_id"
                    placeholder="Pilih jenis"
                    :option-values="$jenises->map(fn($j)=>$j->id)"
                    :option-names="$jenises->map(fn($j)=>$j->name)"
                    required
                    search
                ></x-inputs.select>
                <x-inputs.file-input
                    label="Foto Barang"
                    name="gambar"
                ></x-inputs.file-input>
                <button type="submit" class="btn btn-danger btn-block mb-3">
                    Tambah Barang
                </button>
            </div>
        </form>
    </main>
@endsection
