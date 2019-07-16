@extends('layouts.base')
@section('title', 'SWAPI')
@section('content')

    <div class="container-fluid">

        
        <div class="title-name d-flex justify-content-center text-uppercase">
            <p>{{$pessoa->name}}</p>
        </div>
        <div class="row d-flex justify-content-center">
            <ul class="list-group list-info">
                <li><strong>Height: </strong>{{$pessoa->height}}</li>
                <li><strong>Mass: </strong>{{$pessoa->mass}}</li>
                <li><strong>Hair Color: </strong>{{$pessoa->hair_color}}</li>
                <li><strong>Skin Color: </strong>{{$pessoa->skin_color}}</li>
                <li><strong>Eye Color: </strong>{{$pessoa->eye_color}}</li>
                <li><strong>Birth Year: </strong>{{$pessoa->birth_year}}</li>
                <li><strong>Gender: </strong>{{$pessoa->gender}}</li>
            </ul>
        </div>
    </div>

@endsection