@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Dokter Spesialis Telinga Hidung Tenggorokan"
        :back-url="route('deafcare.kesehatan.user.jenis.index')"
    />
</header>
<main class="px-3 pt-3" style="padding-bottom: 64px">
    <div class="row mb-3">
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari dokter" aria-label="Cari dokter" aria-describedby="btn-search">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="btn-search">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            {{-- Filter Area --}}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class = 'card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 90px; height:90px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">dr. Candra Syaputra, Sp.THT-KL</p>
                            <p class="mb-0">
                                <small>
                                    <i class="fas fa-heart mr-1"></i> 100% <i class="fa fa-briefcase ml-3 mr-1"></i> 3 tahun
                                </small>
                            </p>
                            <p class="mb-0">
                                <small>
                                    Rp. 100.000
                                </small>
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="" class="badge badge-success rounded-pill px-3 py-1 mr-2">Chat</a>
                            <a href="" class="badge badge-secondary rounded-pill px-3 py-1">Jadwal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
