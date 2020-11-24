@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="Edit Barang"
            :back-url="route('deafcare.belanja.user.item.show', $item->id)"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <form method="POST" action="{{route('deafcare.belanja.vendor.item.update', $item->id)}}" class="row" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-12">
                <x-inputs.input
                    label="Nama"
                    name="nama"
                    :value="$item->nama"
                    placeholder="cth: Alat Bantu Dengar"
                    required
                ></x-inputs.input>
                <x-inputs.textarea
                    label="Deskripsi"
                    name="deskripsi"
                    :value="$item->deskripsi ?? ''"
                    placeholder="Deskripsi barang..."
                ></x-inputs.textarea>
                <x-inputs.input
                    label="Harga"
                    name="harga"
                    type="number"
                    :value="$item->harga"
                    placeholder="cth: 200000"
                ></x-inputs.input>
                <x-inputs.input
                    label="Stok"
                    name="stok"
                    type="number"
                    :value="$item->stok"
                    placeholder="cth: 2"
                ></x-inputs.input>
                <x-inputs.select
                    label="Jenis Barang"
                    name="jenis_belanja_id"
                    placeholder="Pilih jenis"
                    :value="$item->jenis->id"
                    :option-values="$jenises->map(fn($j)=>$j->id)"
                    :option-names="$jenises->map(fn($j)=>$j->name)"
                    required
                    search
                ></x-inputs.select>
                <x-inputs.file-input
                    label="Foto Barang"
                    name="gambar"
                ></x-inputs.file-input>
                <button type="submit" class="btn btn-success btn-block mb-3">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </main>
@endsection
