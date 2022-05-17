@extends('layouts.app')

@section('title', 'User')

@section('main-content')
<section class="container text-center">
    <h1> Tinder User </h1>
    <div class="row g-2">
        @foreach ($users as $user)
                <div class="col-4 border border-dark border-3 rounded-3 p-0">
                    <div>
                        <img src="{{$user->image}}" alt="photo {{$user->first_name}} {{$user->last_name}}">
                        <h4>{{$user->first_name}} | {{$user->last_name }} &#x2192; {{$user->age}}</h4>
                        <h5>{{$user->bio}}, {{ $user->location }}</h5>
                        <h6>Single: {{ ($user->is_single) ? "No" : "Si"}}</h6>
                    </div>
                </div>
        @endforeach
        <div class="col-12">
        </div>
    </div>
</section>
@endsection
