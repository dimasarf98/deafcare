@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Hearing Technology" :back-url="route('deafcare.home')" />
    </header>
    <main class="px-3 py-3">
        <div class="row mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari barang" aria-label="Cari barang" aria-describedby="btn-search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="btn-search">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12 w-100" style="overflow-x: auto; white-space: nowrap">
                <a href="{{route('deafcare.belanja.user.item.index')}}" class="btn {{ $active == 0 ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">Semua</a>
                @foreach ($tags as $tag)
                    <a href="{{route('deafcare.belanja.user.item.jenis', $tag->id)}}" class="btn {{ $active == $tag->id ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">{{ $tag->name }}</a>
                @endforeach
            </div>

        </div>
        <div class="row">
            @forelse ($items as $item)
                <div class="col-6 mb-3">
                    <a class="card rounded-xl link-style-none" href="{{route('deafcare.belanja.user.item.show', $item->id)}}">
                        <div class="card-body text-center">
                            <img class="rounded mr-3 w-100 mb-3" src="{{$item->gambar  ??  asset('img/dummy.jpg')}}" alt="..." style="object-fit:cover">
                            <p class="font-weight-bold mb-1" style="line-height:1rem">{{$item->nama}}</p>
                            <p class="mb-0">Rp. {{$item->harga}}</p>
                        </div>
                    </a>
                </div>
            @empty
            <div class="col-6 mb-3">
                Tidak ada barang.
            </div>
            @endforelse
        </div>
        <x-floating-add-button
            :url="route('deafcare.belanja.vendor.item.create')"
        ></x-floating-add-button>
    </main>
@endsection
