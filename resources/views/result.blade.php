@extends('layouts.app')
@section('content')

@foreach ($users as $user)
<article id="content" class="media">
    <div class="container" style="border-style: solid;">
    <div class="media-left">
      <figure>
      <p class="image is-64x64">
        <img src='\images\LogoBdr.png'>
      </p>
      <strong class="title is-3"><a href='/profil/{{$user->pseudo}}' style="text-decoration: none"> {{$user->pseudo}}</a></strong>
      <small class="subtitle is-5">{{$user->age}} ans</small>
      <p>Association : {{$user->hobby}}</p>
    </figure>
  </div>
    <div class="media-content">
      <div class="content">
        <p>{{$user->bio}}</p>
      </div>
    </div>
</div>
</article>
  @endforeach

@endsection
