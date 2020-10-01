@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Hearing Center"
        :back-url="route('tespendengaran')"
    />
</header>
<main class="px-3 py-3">
    <div class="row mb-3">
        <div class="col-12">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari tempat tes" aria-label="Cari tempat tes" aria-describedby="btn-search">
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
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 90px; height:120px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">
                                Hearing Center XY
                            </p>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    <div>
                                        Jl. Amora, Gondangdia, Menteng, Jakarta Pusat
                                    </div>
                                </div>
                            </small>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-phone-alt mr-3"></i>
                                    <div>
                                        021-50890908
                                    </div>
                                </div>
                            </small>
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
