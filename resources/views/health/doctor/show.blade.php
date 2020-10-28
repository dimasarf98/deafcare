@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        :title="$dokter->nama"
        :back-url="route('deafcare.kesehatan.user.tenagaKesehatan.show', $dokter->jenisKesehatan->id)"
    />
</header>
<main class="px-3 pt-3">
    <div class="row">
        <div class="col-12">
            @forelse ($jadwals as $jadwal)
            <div class = 'card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex">
                    <img class="rounded mr-3" src="{{$jadwal->gambar}}" alt="..." style="width: 90px; height:90px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">{{$jadwal->nama}}</p>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt mr-3"></i>
                                    <div>
                                        {{$jadwal->alamat}}
                                    </div>
                                </div>
                            </small>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-receipt mr-3"></i>
                                    <div>
                                        Tarif Konsultasi: {{$jadwal->pivot->tarif_konsultasi}}
                                    </div>
                                </div>
                            </small>
                            <small class="mb-0">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-receipt mr-3"></i>
                                    <div>
                                        Tarif Buat Janji: {{$jadwal->pivot->tarif_buat_janji}}
                                    </div>
                                </div>
                            </small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div href="" class="badge badge-success rounded-pill px-3 py-1 mr-2">
                                {{$jadwal->pivot->jam}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>
</main>
@endsection
