@extends('layout.main')
@section('title', 'Dota')

@section('container')
<div class="bgimg">
    <div class="container" style="background-color: #383838">
        <h1 class="d-flex justify-content-center p-4" style="color: white">HEROES - DOTA 2</h1>
        <div class="row d-flex justify-content-evenly">
            @foreach ($dotaherolist as $hero)
                <div class="card mb-4 bg-dark text-white" style="width: 15rem">
                    <img src="{{$hero->image_url}}" class="card-img-top mt-2" style="width=15rem; height=15rem">
                    <div class="card-body">
                        <h5 class="card-title">{{$hero->hero_name}}</h5>
                        <p class="card-text">{{$hero->hero_title}}</p>
                    </div>
                    <ul class="mb-2 list-group">
                        <li class="list-group-item">PRIMARY ATTRIBUTE: {{$hero->primary_attribute}}</li>
                        <li class="list-group-item">ATTACK TYPE: {{$hero->attack_type}}</li>
                        <li class="list-group-item">ROLE(S): {{$hero->roles}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
