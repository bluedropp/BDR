

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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST"  enctype="multipart/form-data">
                        @csrf








                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                              <input id="name" class="input" type="text" placeholder="Entrez votre nom" required name="name" value="{{ Auth::user()->name }}">
                            </div>

                        </div>

                        <div class="field">
                            <label class="label">Prenom</label>
                            <div class="control">
                              <input id="prenom" class="input" type="text" placeholder="Entrez votre prenom" required name="prenom" value="{{ Auth::user()->prenom }}">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Age</label>
                            <div class="control">
                              <input id="age" class="input @error('age') is-invalid @enderror" type="Integer" placeholder="Entrez votre age" required name="age" value="{{ Auth::user()->age }}">
                              @error('age')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Taille</label>
                            <div class="control">
                              <input id="taille" class="input @error('taille') is-invalid @enderror" type="Integer" placeholder="Entrez votre taille en cm" required name="taille" value="{{ Auth::user()->taille }}">
                              @error('taille')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                              <input id="email" class="input" type="email" placeholder="Entrez votre E-mail" name="email" required value="{{ Auth::user()->email }}">
                              <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                              </span>
                              <span class="icon is-small is-right">

                              </span>
                            </div>

                        </div>


                         <div class="field">
                             <label class="label" > Choisissez une photo de profil </label>
                             <input multiple enctype="multipart/form-data" type="file" class="form" name="PP" id="PP" required>
                         </div>



                        <div class="field">
                            <label class="label">Pseudonyme</label>
                            <div class="control has-icons-left has-icons-right">
                              <input id="pseudo" name="pseudo" class="input @error('pseudo') is-invalid @enderror"  type="text" placeholder="Entrez votre pseudonyme"  required value="{{ Auth::user()->pseudo }}">
                              @error('pseudo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                              </span>
                            </div>
                        </div>



                          <div class="field">
                            <label class="label">Genre</label>
                            <div class="control">
                              <div class="select">
                                <select name="genre" >
                                  <option name="genre" value="homme">Homme</option>
                                  <option name="genre" value="femme">Femme</option>
                                  <option name="genre" value="autre">Autre</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Choisissez une association </label>
                            <div class="control">
                              <div class="select">
                                <select name="hobby">
                                  <option  value="sciences">bureau des sciences</option>
                                  <option  value="litterature">burea de la litterature</option>
                                  <option  value="jeu video">bureau des jeux videos</option>
                                  <option  value="histoire">bureau de l'histoire</option>
                                  <option  value="sport">bureau des sports</option>
                                  <option  value="cuisine">bureau de la cuisine</option>
                                  <option  value="art">bureau de l'art</option>
                                  <option  value="astronomie">bureau de l'astronomie</option>
                                  <option  value="jardinage">bureau du jardinage</option>

                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Bio</label>
                            <div class="control">
                              <textarea id="bio"  class="textarea" placeholder="Entrez votre bio" required name="bio">{{ Auth::user()->bio }}</textarea>
                            </div>
                          </div>



                          <div class="field">
                            <div class="control">
                            <label class="label">Etes vous un fumeur ?</label>

                              <label class="radio">
                                <input  value="1" type="radio" name="fumeur">
                                Oui
                              </label>
                              <label class="radio">
                                <input  value="0" type="radio" name="fumeur">
                                Non
                              </label>
                            </div>
                          </div>

                          <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                          </div>





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
