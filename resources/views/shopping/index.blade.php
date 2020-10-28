@extends('layouts.app')

@section('content')
    <shopping-page :items="{{$items}}"/>
@endsection
