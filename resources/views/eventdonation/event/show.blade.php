@extends('layouts.app')

@section('content')
    <header class="sticky-top">
        <x-title-bar
            title="{{$event->name}}"
            :back-url="route('deafcare.event.index')"></x-title-bar>
    </header>
    <main class="px-3 pt-3">
        <article>
            <div class="row mb-3">
                <div class="col-6">
                    <div class="poster">
                        <img class="rounded mr-3" src="{{ asset('img/dummy.jpg') }}" alt="..." style="width: 100%; height:100%; object-fit:cover">
                    </div>
                </div>
                <div class="col-6">
                    <h1 class="font-weight-bold h4">
                       {{$event->name}}
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>
                        {{$event->deskripsi}}
                    </p>
                </div>
            </div>
        </article>
        @if (Auth()->user()->roles()->admin())
        <div class="mb-3">
            <a href="{{route('event.edit')}}" class="btn btn-success">
                <i class="fas fa-edit"></i>
                Edit Event
            </a>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus">
                <i class="fas fa-trash"></i>
                Hapus Event
            </a>
            <!-- Modal -->
            <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="modalHapusLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalHapusLabel">Apakah anda yakin?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Data event yang dipilih akan terhapus!
                        </div>
                        <form method="POST" action="" class="modal-footer">
                            @method('DELETE')
                            @csrf
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endif
        
    </main>
@endsection
