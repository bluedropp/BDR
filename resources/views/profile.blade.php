@extends('layouts.app')
@section('content')

<div id="wrapper">
    <div class= "container has-texted-centered">
            <h4 class="title is-1">{{$user->pseudo}}</h4>
            <span class="subtitle is-3"> {{$user->age}} </span>
            <img src= "/{{$user->PP}}">
				<div>
				<p class="label">Age : {{$user->genre}}</p>
            <p class="label">Taille (en cm) : {{$user->taille}}</p>
            <p class='label'>Hobby : {{$user->hobby}} </p>
            
        </div>
<p>{{$user->bio}}</p>		
    </div>
</div>

 
@endsection










