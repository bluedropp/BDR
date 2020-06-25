@extends('layouts.app')
@section('content')


<div class="container">
  <a type="button" href="/nouveau" class="button is-link">Nouveau Message</a>
</div>

@if ($messages ?? '' != null)
  @foreach ($messages ?? '' as $message)

  <div class="container" style="border: solid; width: 100%; height: 25%; padding: 25px;">


    <div name="message" class="media">
      <div class="media-left">
        <figure class="has-text-centered">
          <img src="">
        </figure>
        <div class="media-content">
          <div class="content">
            {{ $message -> destinateur}} dit :
            {{$message->contenu }}
          </div>
        </div>
      </div>
      <div class="media-right">
        <div class="content">

        </div>
      </div>
    </div>
  </div>

  @endforeach
@endif
@if ($messages ?? '' == null or $message ?? '' == 0)


  <div class="container has-text-centered">
    Vous n'avez pas de messages
  </div>

@endif




@endsection
