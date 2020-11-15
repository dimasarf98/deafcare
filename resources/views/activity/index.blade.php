@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar title="Aktivitas" />
</header>
<main class="px-3" style="padding-bottom: 64px;">
    <div class="row">
        <div class="col-12">
            @foreach ($activities as $item)
                <div class="py-3">
                    <div class="d-flex">
                        <img src="{{asset('img/dummy.jpg')}}" class="rounded-circle mr-3" style="width: 50px; height: 50px" alt="Dummy Photo">
                        <div>
                            <h2 class="h6 font-weight-bold">{{$item['nama']}}</h2>
                            <p><small> <a href="" class="btn btn-danger btn-sm px-3 py-1 rounded-pill mr-1 my-1">{{ $item['kategori'] }}</a></small></p>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
            @endforeach
            
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0; max-width:480px">
    <x-navigation />
</div>
@endsection