@extends('layouts.base')
@section('title', 'SWAPI')
@section('content')

    <div class="container-fluid">
        
        <div class="content">
            <div class="row d-flex justify-content-center"> 
                <ul class="list-group list">   
                    @foreach ($pessoas->results as $persons)
                        
                        <li>
                            {{-- passando apenas o id do personagem para rota pessoa/ --}}
                            <a href="/personagem/{{str_ireplace("https://swapi.co/api/people/", "", $persons->url)}}">{{$persons->name}}</a>
                        </li>
                        
                    @endforeach
                </ul>
            </div> 
            <div class="row d-flex justify-content-center">

                <div>
                    <ul class="pagination list">
                        {{-- Se se a condição previous for nulo então ele não sera mostrado, caso contrario vai tirar -1 da pagina --}}
                       @if($pessoas->previous)  
                            <li class="item-list"><a href="/?page={{$page-1}}">Anterior</a></li>
                       @endif
                        {{-- Se a condição for verdadeira ele continuara mostrando o next e adicionando +1 na página --}}
                       @if($pessoas->next)
                            <li class="item-list"><a href="/?page={{$page+1}}">Próximo</a></li>
                       @endif
                   </ul>
                </div>                

            </div>   
        </div>    
    </div>

@endsection