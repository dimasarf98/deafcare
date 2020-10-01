@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Kesehatan"
        :back-url="route('home')"
    />
</header>
<main class="px-3 pt-3" style="padding-bottom: 64px">
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
            <x-health-item
                :url="route('kesehatan.dokter')"
                :imgSrc="asset('img/dummy.jpg')"
                title="Dokter Spesialis Telinga Hidung Tenggorokan"
                description="Dapatkan diagnosa dan perawatan medis dari dokter THT"
                class="mb-3"
            />
            <x-health-item
                url="#"
                :imgSrc="asset('img/dummy.jpg')"
                title="Dokter Spesialis Anak"
                description="Konsultasikan kesehatan anak anda dengan kami"
                class="mb-3"
            />
            <x-health-item
                url="#"
                :imgSrc="asset('img/dummy.jpg')"
                title="Dokter Spesialisasi Rehabilitasi Medis"
                description="Lakukan rehabilitasi medis dengan dokter pilihan anda"
                class="mb-3"
            />
        </div>
    </div>
</main>
@endsection
