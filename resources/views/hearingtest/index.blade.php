@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Tes Pendengaran"
        :back-url="route('deafcare.home')"
    />
</header>
<main class="px-3 py-3">
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning text-center" role="alert">
                <small>
                    Lakukan tes pendengaran untuk mengetahui kemampuan mendengar anda. Pemeriksaan dilakukan dengan mengukur seberapa baik suara terhantar ke otak. Pilihlah tempat tes pendengaran anda disini.
                </small>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-column align-items-center">
        <div class="col-7">
            <a class='card rounded-xl link-style-none mb-3' href="{{route('deafcare.tespendengaran.hearingcenter.index')}}">
                <div class="card-body d-flex flex-column align-items-center">
                    <img class="rounded mb-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 120px; height:120px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <h4 class="font-weight-bold mb-1 text-center">
                                Hearing Center
                            </h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-7">
            <a class='card rounded-xl link-style-none mb-3' href="#">
                <div class="card-body d-flex flex-column align-items-center">
                    <img class="rounded mb-3" src="{{asset('img/dummy.jpg')}}" alt="..." style="width: 120px; height:120px; object-fit:cover">
                    <div class="flex-fill d-flex flex-column justify-content-between" style="min-width: 0">
                        <div>
                            <h4 class="font-weight-bold mb-1 text-center">
                                Rumah Sakit
                            </h4>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</main>
@endsection
