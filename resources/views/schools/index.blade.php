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
        <div class="row mb-3">
            <div class="col-12 w-100" style="overflow-x: auto; white-space: nowrap">
                <a href="{{route('deafcare.forum.user.sekolah.index')}}" class="btn {{ $active == 0 ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">Semua</a>
                @foreach ($tags as $tag)
                    <a href="{{route('deafcare.forum.user.sekolah.jenis', $tag->id)}}" class="btn {{ $active == $tag->id ? 'btn-danger' : 'btn-outline-danger' }} btn-sm px-3 py-1 rounded-pill mr-1 my-1">{{ $tag->nama }}</a>
                @endforeach
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
                                        <a class="text-dark" href="{{route('deafcare.forum.user.sekolah.show', $sekolah->id)}}">
                                            {{$sekolah->nama}}
                                        </a>
                                    </p>
                                    <small class="mb-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-map-marker-alt mr-3"></i>
                                            <div class="text-truncate">
                                                {{$sekolah->alamat}}
                                            </div>
                                        </div>
                                    </small>
                                    <small class="mb-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-phone-alt mr-3"></i>
                                            <div class="text-truncate">
                                                {{$sekolah->no_telp}}
                                            </div>
                                        </div>
                                    </small>
                                    <div class="mt-2">
                                        @if (Auth()->user()->roles()->admin() || Auth()->user()->roles()->sekolah())
                                            <a href="{{route('deafcare.forum.admin.sekolah.edit', $sekolah->id)}}" class="badge badge-success rounded-pill px-3 py-1 mr-1">Edit</a>
                                            <a href="#" class="badge badge-secondary rounded-pill px-3 py-1" data-toggle="modal" data-target="#modalHapusKomunitas-{{$sekolah->id}}">Hapus</a>
                                        @endif
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalHapusKomunitas-{{$sekolah->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusKomunitas-{{$sekolah->id}}Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalHapusKomunitas-{{$sekolah->id}}Label">Apakah anda yakin?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Data sekolah yang dipilih akan terhapus!
                                                    </div>
                                                    <form method="POST" action="{{route('deafcare.forum.admin.sekolah.destroy', $sekolah->id)}}" class="modal-footer">
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
                    </div>
                @endforeach
            </div>
        </div>
        @if (Auth()->user()->roles()->admin())
            <x-floating-add-button
                :url="route('deafcare.forum.admin.sekolah.create')"
            ></x-floating-add-button>
        @endif
    </main>
@endsection
