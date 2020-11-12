@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar title="Profil" />
</header>
<main class="px-3 pt-3" style="padding-bottom: 64px;">
    <div class="row">
        <div class="col-12">
            <div class="square mx-auto mb-3" style="width: 40%">
                <img class="w-100 rounded-circle" src="{{asset('img/dummy.jpg')}}" alt="Foto Profil {{$user->name}}">
            </div>
            <h2 class="h5 w-100 text-center font-weight-bold mb-3 text-capitalize">{{$user->name}}</h2>
            <div class="w-100 text-center mb-3">
                @foreach ($user->roles as $role)
                    <div class="d-inline-block badge badge-danger badge-pill px-3 py-2 mb-1 text-capitalize">{{$role->role}}</div>
                @endforeach
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <p class="small mb-1 text-uppercase font-weight-bold">Email</p>
                    {{$user->email}}    
                </li>
                <li class="list-group-item">
                    <p class="small mb-1 text-uppercase font-weight-bold">Password</p>
                    ***********
                </li>
                <li class="list-group-item">
                    <a href="#" class="text-danger">Pengaturan Akun</a>
                </li>
                <li class="list-group-item">
                    <a href="#" class="text-danger" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="logoutModalLabel">Anda yakin?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Logout jika anda siap untuk mengakhiri sesi.</div>
                                <div class="modal-footer">
                                    <button class="btn btn-light" type="button" data-dismiss="modal">Batal</button>
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Logout</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
              </ul>
        </div>
    </div>
</main>
<div class="position-fixed w-100" style="bottom: 0; max-width:480px">
    <x-navigation />
</div>
@endsection