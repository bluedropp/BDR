@extends('layout')

@section('content')

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

<section class="section">
  <div class="container">
    Blah blah blah
  </div>
</section>


@endsection
