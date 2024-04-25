@extends('layouts.base')

@section('content')

    <div class="flex flex-col	text-center pt-20">
        <h1 class="text-xl font-bold underline">Workshop DA et DEV 2024 </h1>
    </div>

    @include('component.card')
    <div><a href="/recipe">Accéder aux recettes</a></div>

@endsection
    
