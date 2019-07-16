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
                {{-- Mostra os Filmes --}}
                <li><a data-toggle="collapse" href="#films" role="button" aria-expanded="false" aria-controls="collapseExample">Films</a></li>
                <div class="collapse" id="films">
                    <div class="card-body">
                            @foreach ($pessoa->films as $film)
                                @php
                                    $the_films = json_decode(file_get_contents($film));
                                @endphp
                                <li>{{$the_films->title}}</li>
                            @endforeach  
                    </div>
                </div>  
                {{-- Mostra as especies --}}
                <li><a data-toggle="collapse" href="#species" role="button" aria-expanded="false" aria-controls="collapseExample">Species</a></li>
                <div class="collapse" id="species">
                    <div class="card-body">
                            @foreach ($pessoa->species as $specie)
                                @php
                                    $the_specie = json_decode(file_get_contents($specie));
                                @endphp
                                <li>{{$the_specie->name}}</li>
                            @endforeach  
                    </div>
                </div>
                {{-- Mostra os Veiculos --}}
                <li><a data-toggle="collapse" href="#vehicles" role="button" aria-expanded="false" aria-controls="collapseExample">Vehicles</a></li>
                <div class="collapse" id="vehicles">
                    <div class="card-body">
                            @foreach ($pessoa->vehicles as $vehicle)
                                @php
                                    $the_vehicle = json_decode(file_get_contents($vehicle));
                                @endphp 
                                <li>{{$the_vehicle->name}}</li> 
                            @endforeach  
                    </div>
                </div>
                {{-- Mostra as naves --}}
                <li><a data-toggle="collapse" href="#starships" role="button" aria-expanded="false" aria-controls="collapseExample">Starships</a></li>
                <div class="collapse" id="starships">
                    <div class="card-body">
                            @foreach ($pessoa->starships as $starship)
                                @php
                                    $the_starship = json_decode(file_get_contents($starship));
                                @endphp
                                <li>{{$the_starship->name}}</li>
                            @endforeach  
                    </div>
                </div>
                         
            </ul>
        </div>
    </div>

@endsection