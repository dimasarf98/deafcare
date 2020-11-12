@extends('layouts.app')

@section('content')
<div class="" style="min-height:100vh">
    <header class="text-center py-4 bg-danger text-white">
        <i class="fas fa-deaf fa-6x mb-4"></i> <br>
        <h1>
            <strong>Deaf</strong><span class="rounded-pill border px-3" style="margin-left: -1rem">care</span>
        </h1>
        <h2 class="h5 mb-0 mt-4">Login</h2>
    </header>
    <main class="p-4">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
                
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                            <label class="form-check-label" for="remember">
                                {{ __('Ingat Saya') }}
                            </label>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <button type="submit" class="btn btn-danger btn-block rounded-pill text-uppercase">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="form-group">
                        <a href="{{route('register')}}" class="btn btn-outline-danger btn-block rounded-pill text-uppercase">
                            {{ __('Daftar') }}
                        </a>
                    </div>
                    <div class="form-group mb-0">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link btn-block text-danger" href="{{ route('password.request') }}">
                                {{ __('Lupa password') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>
@endsection