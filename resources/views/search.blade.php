
@extends('layouts.app')
@section ('content')


<div class="title is-1 has-text-centered">
  Recherche par critère
</div>

<form method="post" action="result">
  @csrf
  <div class="columns has-text-centered">
    <div class="column is-third">

        <label class="label">Pseudonyme</label>
        <input class="input" type="text" name="pseudonyme" placeholder="Pseudonyme" style="width: 50%;">

    </div>
    <div class="column">
      <div class="container">
        <label class="label">Tranche d'âge</label>
        <div class="columns">

          <div class="column">
            <div class="control">
              <label class="label">Âge minimum</label>
              <div class="select">
                <select>
                  <option>20+</option>
                  <option>30+</option>
                  <option>40+</option>
                </select>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="control">
              <label class="label">Âge maximum</label>
              <div class="select">
                <select>
                  <option>30-</option>
                  <option>40-</option>
                  <option>50-</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="column">
    <div class="container">
      <label class="label">Options supplémentaires</label>
      <label class="checkbox">
        <input type="checkbox">
        Non-Fumeur/fumeuse
      </label>
      </div>
    </div>
  </div>

  <div class="field">
    <input style="left: 43%;" type="submit" class="button is-primary" value="Search">
  </div>

</form>



@endsection
