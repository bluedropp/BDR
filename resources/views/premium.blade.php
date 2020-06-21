@extends('layout')

@section('content')

<nav class="navbar is-fixed-top" role="navigation" aria-label="Main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="{{ URL:asset('..\LogoBDR.png')}}" width="112" height="28">
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
      <a href="profil" class="button is-primary">
        <span class="icon">
          <i class="fas fa-user"></i>
        </span>
        <span>MyProfile</span>
      </a>
    </a>

    <a class="navbar-item">
      <a href="premium" class="button is-link">
        <span class="icon">
          <i class="fas fa-star"></i>
        </span>
        <span>Premium</span>
      </a>
    </a>

  </div>


</nav>

<section class="hero is-warning">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-size-2">
          Premium
        </h1>
        <h2 class="subtitle">
            What you get with premium
        </h2>
      </div>
    </div>
  </section>
  <div class="tile is-ancestor">
    <div class="tile is-4 is-vertical is-parent">
      <div class="tile is-child box">
        <span class="icon has-text-success">
        <i class="far fa-comment-dots"></i>
        </span>
        Messages illimité.

      </div>
      <div class="tile is-child box">
        <span class="icon has-text-danger">
        <i class="fas fa-heart"></i>
        </span>
        Toutes les consultations de ton profil.
      </div>
    </div>
    <div class="tile is-parent">
      <div class="tile is-child box">
        <form method="GET" action="/premium/payement">
          @csrf
        <div class="control">
            <label class="radio">
             <input type="radio" name="prix" value="1">
              1 mois<br>
              €10.99/mois
            </label><br><br>
            <label class="radio">
             <input type="radio" name="prix" value="2">
              6 mois<br>
              €6.99/mois 36% de reduction
            </label><br><br>
            <label class="radio">
             <input type="radio" name="prix" value="3">
              12 mois<br>
              €4.99/mois 53% de reduction
              </label><br><br>
              <button class="button is-warning">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
