
@extends('layouts.app')
@section ('content')


<div class="title is-1 has-text-centered">
  Recherche par critère
</div>

<form method="post">

  @csrf

  <div class="columns has-text-centered">
    <div class="column">

        <label class="label">Pseudonyme</label>
        <input class="input" type="text" name="pseudo" placeholder="Pseudonyme" style="width: 50%;">

    </div>
    <div class="column">
    <input class="slider is-fullwidth is-info" step="1" min="0" max="100" value="50" type="range">
    </div>
    
    
  <br>

  <div class="field">
    <input style="left: 43%;" type="submit" class="button is-primary" value="Search">
  </div>

</form>



@endsection
