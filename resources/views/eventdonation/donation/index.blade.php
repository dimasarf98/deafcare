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
                    <a href="{{route('deafcare.event.index')}}" class="btn btn-outline-danger">Event</a>
                    <a href="{{route('deafcare.donasi.index')}}" class="btn btn-danger">Donasi</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @foreach ($donations as $donation)

                    <div class='card rounded-xl link-style-none mb-3' href="{{route('deafcare.donasi.show', $donation->id)}}">
                        <div class="card-body d-flex">
                            <img class="rounded mr-3" src="{{ $donation->gambar ?? asset('img/dummy.jpg') }}" alt="..."
                                style="width: 120px; height:169px; object-fit:cover">
                            <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                                <div>
                                    <div class="font-weight-bold mb-1 text-truncate text-dark" style="line-height:1rem">
                                        <a class="text-dark" href="{{route('deafcare.donasi.show', $donation->id)}}">
                                            {{$donation->name}}
                                        </a>
                                        
                                    </div>
                                    <small class="mb-0">
                                        <div class="text-truncate-4">
                                            {{$donation->created_at}}
                            
                                        </div>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (Auth()->user()->roles()->admin())
            <x-floating-add-button
                :url="route('deafcare.donasi.create')"
            ></x-floating-add-button>
        @endif
    </main>
@endsection
