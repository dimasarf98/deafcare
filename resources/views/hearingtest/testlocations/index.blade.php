@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        :title="$jenis->nama"
        :back-url="route('deafcare.home')"
    ></x-title-bar>
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
    <div class="row mb-3">
        <div class="col-12 w-100" style="overflow-x: auto; white-space: nowrap">
            @foreach ($jenisAll as $item)
                <a href="{{route('deafcare.tespendengaran.user.hearingcenter.show', $item->id)}}" class="btn {{ $active == $item->id ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">{{ $item->nama }}</a>
            @endforeach
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            {{-- Filter Area --}}
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                <small>
                    {{$jenis->deskripsi}}
                </small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @forelse ($hearingCenters as $hearingCenter)
                <div class = 'card rounded-xl link-style-none mb-3'>
                    <div class="card-body d-flex">
                        <img class="rounded mr-3" src="{{$hearingCenter->gambar ?? asset('img/dummy.jpg')}}" alt="..." style="width: 90px; height:120px; object-fit:cover">
                        <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                            <div>
                                <p class="font-weight-bold mb-1 text-truncate" style="line-height:1rem">
                                    {{$hearingCenter->nama}}
                                </p>
                                <small class="mb-0">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-map-marker-alt mr-3"></i>
                                        <div>
                                            {{$hearingCenter->alamat}}
                                        </div>
                                    </div>
                                </small>
                                <small class="mb-0">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-phone-alt mr-3"></i>
                                        <div>
                                            {{$hearingCenter->no_telp}}
                                        </div>
                                    </div>
                                </small>
                            </div>
                            <div class="">
                                <div class="dropdown d-inline-block ">
                                    <a href="#" class="badge badge-danger badge-pill px-3 px-1 dropdown-toggle" type="button" id="dropDownJadwal-{{$hearingCenter->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Jadwal
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropDownJadwal-{{$hearingCenter->id}}">
                                        @foreach ($hearingCenter->jadwals as $jadwal)
                                            <div class="px-3 py-1 small">{{$jadwal->hari}}, {{$jadwal->jam}}</div>
                                        @endforeach
                                    </div>
                                </div>
                                <a class=" d-inline-block badge badge-pill badge-success px-3 py-1" href="{{route('deafcare.tespendengaran.admin.jenis.hearingcenter.edit', ['jeni' => $jenis->id, 'hearingcenter' => $hearingCenter->id])}}">
                                    Edit
                                </a>
                                <a href="#" class="badge badge-secondary rounded-pill px-3 py-1" data-toggle="modal" data-target="#modalHapusDokter-{{$hearingCenter->id}}">Hapus</a>

                            <!-- Modal -->
                                <div class="modal fade" id="modalHapusDokter-{{$hearingCenter->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusDokter-{{$hearingCenter->id}}Label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalHapusDokter-{{$hearingCenter->id}}Label">Apakah anda yakin?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Data tes pendengaran yang dipilih akan terhapus!
                                            </div>
                                            <form method="POST" action="{{route('deafcare.tespendengaran.admin.jenis.hearingcenter.destroy', ['jeni' => $jenis->id, 'hearingcenter' => $hearingCenter->id])}}" class="modal-footer">
                                                @method('DELETE')
                                                @csrf
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="w-100 text-center">
                    Tidak ada hearing center di dekat Anda.
                </div>
            @endforelse
        </div>
    </div>
    <x-floating-add-button
        :url="route('deafcare.tespendengaran.admin.jenis.hearingcenter.create', $jenis->id)"
    ></x-floating-add-button>
</main>
@endsection
 