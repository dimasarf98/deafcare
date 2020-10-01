@extends('layouts.app')

@section('content')
<header class="sticky-top">
    <x-title-bar
        title="Keranjang"
        :back-url="route('belanja')"
    />
</header>
<cart-page/>
@endsection
