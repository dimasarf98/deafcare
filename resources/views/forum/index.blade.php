@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Forum"
        :back-url="route('home')"
    />
</header>
<main class="px-3 pt-3" style="padding-bottom: 64px">
    <div class="row mb-3">
        <div class="col-12">
            <div class="btn-group w-100" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-danger">Komunitas</button>
                <button type="button" class="btn btn-outline-danger">Sekolah</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class='card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 82px; height:82px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">
                                Deaf Art Community: Menginspirasi Seperti Kupu-Kupu
                            </p>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    <div>
                                        Jl. Langenarjan Lor No.16 A, Panembahan, Yogyakarta
                                    </div>
                                </div>
                            </small>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-phone-alt mr-3"></i>
                                    <div>
                                        082251919416
                                    </div>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class='card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 82px; height:82px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">
                                Deaf Art Community: Menginspirasi Seperti Kupu-Kupu
                            </p>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    <div>
                                        Jl. Langenarjan Lor No.16 A, Panembahan, Yogyakarta
                                    </div>
                                </div>
                            </small>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-phone-alt mr-3"></i>
                                    <div>
                                        082251919416
                                    </div>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class='card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 82px; height:82px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">
                                Deaf Art Community: Menginspirasi Seperti Kupu-Kupu
                            </p>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    <div>
                                        Jl. Langenarjan Lor No.16 A, Panembahan, Yogyakarta
                                    </div>
                                </div>
                            </small>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-phone-alt mr-3"></i>
                                    <div>
                                        082251919416
                                    </div>
                                </div>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
