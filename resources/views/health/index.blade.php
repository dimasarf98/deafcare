@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Kesehatan"
        :back-url="route('deafcare.home')"
    />
</header>
<main class="px-3 pt-3">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                <small>
                    "Seluruh tenaga ahli kami berpengalaman dan bersetifikat. Informasi anda aman bersama kami."
                </small>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @forelse ($jenisKesehatan as $jenis)
            <x-health-item
                :url="route('deafcare.kesehatan.user.tenagaKesehatan.show', $jenis->id)"
                :imgSrc="asset('img/dummy.jpg')"
                :title="$jenis->judul"
                :description="$jenis->deskripsi"
                class="mb-3"
            />                
            @empty
  
            @endforelse
        </div>
    </div>
</main>
@endsection
