@extends('layouts.app')
@section('content')


<div id="wrapper">
    <div class= "container has-texted-centered">
            <h4 class="title is-1 has-text-centered">{{$user->pseudo}}</h4>
            <figure class="has-text-centered">
            <img src="/{{$user->PP}}" height="600px" width="600px" >
            </figure>
            <div class="box has-text-centered "><p>{{$user->bio}}</p></div>


            <p class="label has-text-centered">Genre : {{$user->genre}}</p>
		    <p class="label has-text-centered">Age : {{$user->age}}</p>
            <p class="label has-text-centered">Taille (en cm) : {{$user->taille}}</p>
            <p class="label has-text-centered">Bureau : {{$user->hobby}} </p>

        </div>

    </div>
</div>


@endsection
