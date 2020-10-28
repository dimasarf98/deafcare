@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Forum" :back-url="route('deafcare.home')" />
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
                    <a href="{{route('deafcare.forum.user.komunitas.index')}}" class="btn btn-danger">Komunitas</a>
                    <a href="{{route('deafcare.forum.user.sekolah.index')}}" class="btn btn-outline-danger">Sekolah</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach ($forums as $forum)

                    <div class='card rounded-xl link-style-none mb-3' href="#">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ $forum->gambar }}" alt="..."
                                style="width: 82px; height:82px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div class="w-100" style="min-width: 0">
                                    <a href="{{route('deafcare.forum.user.komunitas.show', $forum->id)}}">
                                        <div class="font-weight-bold w-100 text-dark mb-1 text-truncate" style="line-height:1rem">
                                            {{$forum->nama}}
                                        </div>
                                    </a>
                                    <small class="mb-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-map-marker-alt mr-3"></i>
                                            <div class="text-truncate">
                                                {{$forum->alamat}}
                                            </div>
                                        </div>
                                    </small>
                                    <small class="mb-0">
                                        <div class="d-flex align-items-center">
                                            <i class="fas fa-phone-alt mr-3"></i>
                                            <div class="text-truncate">
                                                {{$forum->no_telp}}
                                            </div>
                                        </div>
                                    </small>
                                    <div class="mt-2">
                                        <a href="{{route('deafcare.forum.admin.komunitas.edit', $forum->id)}}" class="badge badge-success rounded-pill px-3 py-1 mr-1">Edit</a>
                                        <a href="#" class="badge badge-secondary rounded-pill px-3 py-1" data-toggle="modal" data-target="#modalHapusKomunitas-{{$forum->id}}">Hapus</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalHapusKomunitas-{{$forum->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusKomunitas-{{$forum->id}}Label" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalHapusKomunitas-{{$forum->id}}Label">Apakah anda yakin?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Data komunitas yang dipilih akan terhapus!
                                                    </div>
                                                    <form method="POST" action="{{route('deafcare.forum.admin.komunitas.destroy', $forum->id)}}" class="modal-footer">
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
        <x-floating-add-button
            :url="route('deafcare.forum.admin.komunitas.create')"
        ></x-floating-add-button>
    </main>
@endsection
