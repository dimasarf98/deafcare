@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar title="Aktivitas" />
</header>
<main class="px-3" style="padding-bottom: 64px;">
    <div class="row">
        <div class="col-12">
            <div class="py-3">
                <div class="d-flex">
                    <img src="{{asset('img/dummy.jpg')}}" class="rounded-circle mr-3" style="width: 50px; height: 50px" alt="Dummy Photo">
                    <div>
                        <h2 class="h6 font-weight-bold">Akun 1</h2>
                        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse beatae, voluptate voluptas quia quaerat numquam adipisci! Commodi exercitationem sint quaerat beatae, dolor, numquam nostrum velit obcaecati delectus sed possimus iste.</small></p>
                    </div>
                </div>
            </div>
            <hr class="m-0">

            <div class="py-3">
                <div class="d-flex">
                    <img src="{{asset('img/dummy.jpg')}}" class="rounded-circle mr-3" style="width: 50px; height: 50px" alt="Dummy Photo">
                    <div>
                        <h2 class="h6 font-weight-bold">Akun 2</h2>
                        <p><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse beatae, voluptate voluptas quia quaerat numquam adipisci!</small></p>
                    </div>
                </div>
            </div>
            <hr class="m-0">
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0; max-width:480px">
    <x-navigation />
</div>
@endsection