@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar title="Event dan Donasi" :back-url="route('deafcare.home')" />
    </header>
    <main class="px-3 py-3">
        <div class="row mb-3">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari event dan donasi"
                        aria-label="Cari event dan donasi" aria-describedby="btn-search">
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
                    <a href="{{route('event.index')}}" class="btn btn-danger">Event</a>
                    <a href="{{route('donasi.index')}}" class="btn btn-outline-danger">Donasi</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                {{-- @foreach ($sekolahs as $sekolah) --}}

                    <a class='card rounded-xl link-style-none mb-3' href="{{route('event.show')}}">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ asset('img/dummy.jpg') }}" alt="..."
                                style="width: 120px; height:169px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div>
                                    <div class="font-weight-bold mb-1 text-truncate text-dark" style="line-height:1rem">
                                        {{-- <a class="text-dark" href="{{route('deafcare.forum.user.sekolah.show', $sekolah->id)}}">
                                            {{$sekolah->nama}}
                                        </a> --}}
                                        Event Sosialisasi Alat Bantu Dengar
                                    </div>
                                    <small class="mb-0">
                                        <div class="text-truncate-4">
                                            {{-- {{$sekolah->alamat}} --}}
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque magni non ipsam? Illo error, maxime maiores consectetur commodi cumque odit a veniam consequatur perferendis. Accusamus quod beatae possimus consequuntur eius!
                                        </div>
                                    </small>
                                    {{-- <div class="mt-2"> --}}
                                        {{-- @if (Auth()->user()->roles()->admin() || Auth()->user()->roles()->sekolah()) --}}
                                            {{-- <a href="{{route('event.edit')}}" class="badge badge-success rounded-pill px-3 py-1 mr-1">Edit</a>
                                            <a href="#" class="badge badge-secondary rounded-pill px-3 py-1" data-toggle="modal" data-target="#modalHapusKomunitas-[ID]">Hapus</a> --}}
                                        {{-- @endif --}}
                                        <!-- Modal -->
                                        {{-- <div class="modal fade" id="modalHapusKomunitas-{{$sekolah->id}}" tabindex="-1" role="dialog" aria-labelledby="modalHapusKomunitas-{{$sekolah->id}}Label" aria-hidden="true">
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
                                        </div> --}}
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </a>
                {{-- @endforeach --}}
            </div>
        </div>
        {{-- @if (Auth()->user()->roles()->admin()) --}}
            <x-floating-add-button
                :url="route('event.create')"
            ></x-floating-add-button>
        {{-- @endif --}}
    </main>
@endsection
