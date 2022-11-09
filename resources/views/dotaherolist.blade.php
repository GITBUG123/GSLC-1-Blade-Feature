@extends('layout.main')
@section('title','Dota Hero Lists')
@section('container')
<div class="bgimg">
    <div class="container pt-2 pb-2"  style="min-height: 70vh background-color: #383838">
        <div class="card bg-dark border-white">
            <div class="card-header text-center text-white border-white">
                <h1>DOTA 2 HERO LISTS</h1>
            </div>
        <div class="card-body" style="min-height:70vh">
            <div class="d-grid d-md-flex gap-1 justify-content-center">
                <div class="btn-group gap-1">
                    <a href="/heroes" class="btn btn-outline-secondary">Grid View</a>
                    <a href="/herolists" class="btn btn-primary">Lists View</a>
                </div>
            </div>
            <br>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">HERO NAME</th>
                    <th scope="col">HERO TITLE</th>
                    <th scope="col">PRIMARY ATTRIBUTE</th>
                    <th scope="col">ATTACK TYPE</th>
                    <th scope="col">ROLE(S)</th>
                    <th scope="col">ACTION</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($dotahero as $hero)
                    <tr>
                        <th scope="row">{{$hero->id}}.</th>
                        <td>
                            <img width="100px" height="50px" src="{{$hero->image_url}}">
                        </td>
                        <td class="text-uppercase">{{$hero->hero_name}}</td>
                        <td class="text-uppercase">{{$hero->hero_title}}</td>
                        <td class="text-uppercase">{{$hero->primary_attribute}}</td>
                        <td class="text-uppercase">{{$hero->attack_type}}</td>
                        <td class="text-uppercase">{{$hero->roles}}</td>
                        <td>
                            <div class="d-grid gap-2">
                                <form action="/herolists/{{$hero->id}}/delete" method="POST">
                                    {{method_field('DELETE')}}
                                    @csrf
                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="d-flex text-center justify-content-center">
            {!! $dotahero->links('pagination::bootstrap-4') !!}
        </div>
        </div>
    </div>
</div>
@endsection
