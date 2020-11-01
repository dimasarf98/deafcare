@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Informasi" :back-url="route('deafcare.home')" />
    </header>
    <main class="px-3 pt-3" style="padding-bottom: 64px">
        <div class="row mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Informasi" aria-label="Cari Informasi"
                        aria-describedby="btn-search">
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
                @foreach ($videos as $video)
                    <div class='card rounded-xl link-style-none mb-3' href="#">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ $video->thumbnail }}" alt="..."
                                style="width: 120px; height:82px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div>
                                    <a href="{{route('deafcare.edukasi.video.show', $video->id)}}">
                                        <p class="font-weight-bold mb-1" style="line-height:1rem">
                                            {{ $video->judul }}
                                        </p>
                                    </a>
                                    <p class="mt-2" style="line-height:1rem">
                                        <small>
                                            <i class="fas fa-clock"></i> {{ $video->durasi}}
                                            <i class="fas fa-eye"></i> {{ $video->viewCount}}
                                        </small>
                                    </p>
                                </div>
                                <div class="mt-2">
                                    @if (Auth()->user()->roles()->admin())
                                        <a href="{{route('deafcare.edukasi.admin.video.edit', $video->id)}}" class="badge badge-success rounded-pill px-3 py-1 mr-1">Edit</a>
                                        <a href="#" class="badge badge-secondary rounded-pill px-3 py-1" data-toggle="modal" data-target="#modalHapusVideo-{{$video->id}}">Hapus</a>
                                    @endif
                                    <!-- Modal -->
                                    <div class="modal fade" id="modalHapusVideo-{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusVideo-{{$video->id}}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalHapusVideo-{{$video->id}}Label">Apakah anda yakin?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Video yang dipilih akan terhapus!
                                                </div>
                                                <form method="POST" action="{{route('deafcare.edukasi.admin.video.destroy', $video->id)}}" class="modal-footer">
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
                @endforeach
            </div>
        </div>
        @if (Auth()->user()->roles()->admin()))
            <x-floating-add-button
                :url="route('deafcare.edukasi.admin.video.create')"
            ></x-floating-add-button>
        @endif
    </main>
@endsection
