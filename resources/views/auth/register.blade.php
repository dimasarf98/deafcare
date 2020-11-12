@extends('layouts.app')

@section('content')
<div style="min-height: 100vh">
    <header class="text-center py-3 bg-danger text-white">
        <h1 class="h3">
            <strong>Deaf</strong><span class="rounded-pill border px-2" style="margin-left: -0.5rem">care</span>
        </h1>
        <h2 class="h5 mb-0 mt-4">Daftar Akun Baru</h2>
    </header>
    <main class="p-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <x-inputs.input
                label="Nama"
                name="name"
                required
                class="rounded-pill"
            ></x-inputs.input>

            <x-inputs.input
                label="Email"
                name="email"
                required
                type="email"
                class="rounded-pill"
            ></x-inputs.input>

            <x-inputs.input
                label="Password"
                name="password"
                required
                type="password"
                class="rounded-pill"
            ></x-inputs.input>

            <x-inputs.input
                label="Konfirmasi Password"
                name="password_confirmation"
                required
                type="password"
                class="rounded-pill"
            ></x-inputs.input>

            <div class="form-group">
                <button type="submit" class="btn btn-danger rounded-pill btn-block text-uppercase">
                    {{ __('Daftar') }}
                </button>
            </div>
            <div class="form-group mb-0">
                <a href="{{route('login')}}" class="btn btn-outline-danger rounded-pill btn-block text-uppercase">
                    {{ __('Login') }}
                </a>
            </div>
        </form>
    </main>
</div>
@endsection
