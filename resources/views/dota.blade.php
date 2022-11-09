@extends('layout.main')
@section('title', 'Dota')

@section('container')
<div class="bgimg">
    <div class="container pt-2 pb-2"  style="min-height: 70vh">
        <div class="card bg-dark border-white">
            <div class="card-header text-center text-white border-white">
                <h1>DOTA 2 HERO</h1>
            </div>
        <div class="card-body" style="min-height: 70vh">
            <div class="d-grid d-md-flex gap-1 justify-content-center">
                <div class="btn-group gap-1">
                    <a href="/heroes" class="btn btn-primary">Grid View</a>
                    <a href="/herolists" class="btn btn-outline-secondary">Lists View</a>
                </div>
            </div>
            <br>
            <div class="row d-flex justify-content-evenly">
                @foreach ($dotahero as $hero)
                    <div class="card mb-4 bg-dark text-white border-white" style="width: 15rem">
                        <img src="{{$hero->image_url}}" class="card-img-top mt-2" style="width=15rem; height=15rem">
                        <div class="card-body">
                            <h5 class="card-title text-center text-uppercase">{{$hero->hero_name}}</h5>
                            <p class="card-text text-center text-uppercase">{{$hero->hero_title}}</p>
                        </div>
                        <ul class="mb-2 list-group">
                            <li class="list-group-item text-uppercase">PRIMARY ATTRIBUTE: {{$hero->primary_attribute}}</li>
                            <li class="list-group-item text-uppercase">ATTACK TYPE: {{$hero->attack_type}}</li>
                            <li class="list-group-item text-uppercase">ROLE(S): {{$hero->roles}}</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex text-center justify-content-center">
            {!! $dotahero->links('pagination::bootstrap-4') !!}
        </div>
    </div>
</div>
@endsection
