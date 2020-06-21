@extends('layouts.app')

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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
