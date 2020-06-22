
@extends ('layout')
@section ('content')


<div class="title is-1 has-text-centered">
  Recherche par critère
</div>

<form method="post">

  <div class="columns has-text-centered">
    <div class="column is-third">

        <label class="label">Pseudonyme</label>
        <input class="input" type="text" name="user" placeholder="Pseudonyme" style="width: 50%;">
        <label class="label">Ville ou Région</label>
        <input class="input" type="text" name="ville" placeholder="Ville ou Région" style="width: 50%;">
    </div>
    <div class="column">
      <div class="container">
        <label class="label">Tranche d'âge</label>
        <div class="columns">

          <div class="column">
            <input class="input"type="text" name="agemin" placeholder="Âge minimum">
          </div>
          <div class="column">
            <input class="input" type="text" name="agemax" placeholder="Âge maximum">
          </div>
        </div>
      </div>

    </div>
    <div class="column">
      <div class="container">
        <label class="label">Options supplémentaires</label>
      <label class="checkbox">
        <input type="checkbox">
        Bio vide
      </label>
    </div>
    <div class="container">
      <label class="checkbox">
        <input type="checkbox">
        Fûmeur/fûmeuse
      </label>
      </div>
      <div class="container">
      <label class="checkbox">
        <input type="checkbox">
        Avec photo de profil
      </label>
      </div>
    </div>
  </div>

  <div class="field">

  </div>

</form>



@endsection
