@extends('layouts.app')

@section('content')
    <div style="min-height: 100vh">
        <header class="text-center bg-danger bg-danger text-white" style="padding-top: 6rem; padding-bottom:6rem;">
            <i class="fas fa-deaf fa-6x mb-4"></i> <br>
            <h1>
                <strong>Deaf</strong><span class="rounded-pill border px-3" style="margin-left: -1rem">care</span>
            </h1>
        </header>
        <main class="p-5">
            <div class="form-group">
                <a href="{{route('register')}}" class="btn btn-danger btn-block rounded-pill text-uppercase">
                    {{ __('Daftar Akun Baru') }}
                </a>
            </div>
            <div class="form-group mb-0">
                <a href="{{route('login')}}" class="btn btn-danger btn-block rounded-pill text-uppercase">
                    {{ __('Login') }}
                </a>
            </div>
        </main>
    </div>
@endsection