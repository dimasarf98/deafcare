@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Sekolah" :back-url="route('deafcare.home')" />
    </header>
    <main class="px-3 py-3">
        <div class="row mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari komunitas atau sekolah"
                        aria-label="Cari komunitas atau sekolah" aria-describedby="btn-search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="btn-search">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <div class="btn-group w-100" role="group" aria-label="Category">
                    <a href="{{route('deafcare.forum.user.komunitas.index')}}" class="btn btn-outline-danger">Komunitas</a>
                    <a href="{{route('deafcare.forum.user.sekolah.index')}}" class="btn btn-danger">Sekolah</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach ($sekolahs as $sekolah)

                    <div class='card rounded-xl link-style-none mb-3' href="#">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ $sekolah->gambar }}" alt="..."
                                style="width: 82px; height:82px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div>
                                    <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">
                                        {{$sekolah->nama}}
                                    </p>
                                    <small class="mb-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-map-marker-alt mr-3"></i>
                                            <div>
                                                {{$sekolah->alamat}}
                                            </div>
                                        </div>
                                    </small>
                                    <small class="mb-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-phone-alt mr-3"></i>
                                            <div>
                                                {{$sekolah->no_telp}}
                                            </div>
                                        </div>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
