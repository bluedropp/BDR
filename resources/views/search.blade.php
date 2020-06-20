
@extends ('layout')
@section ('content')

<nav class="navbar is-fixed-top" role="navigation" aria-label="Main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>
  </div>

  <!-- Nécessite des liens pour les <a> -->
  <div class="navbar-start">
    <a class="navbar-item" href="discovery">
      Discovery
    </a>
    <div class="navbar-item">
      <a class="navbar-item" href="search">
        Search
      </a>

    </div>
  </div>
  <div class="navbar-end">
    <a class="navbar-item">
      <a class="button is-primary">
        <span class="icon">
          <i class="fas fa-user"></i>
        </span>
        <span>MyProfile</span>
      </a>
    </a>

    <a class="navbar-item">
      <a class="button is-link">
        <span class="icon">
          <i class="fas fa-star"></i>
        </span>
        <span>Premium</span>
      </a>
    </a>

  </div>


</nav>

<div class="title is-1 has-text-centered">
  Recherche par critères
</div>

<form method="post">

  <div class="columns has-text-centered">
    <div class="column is-third">

      <div class="container">
        <label class="label">Pseudonyme</label>
        <input class="input" type="text" name="user" placeholder="Pseudonyme">
      </div>

        <div class="container">
          <label class="label">Ville ou Région</label>
          <input class="input" type="text" name="ville" placeholder="Ville ou Région">
        </div>

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

    </div>
  </div>

</form>



@endsection
