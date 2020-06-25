@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.update', $user) }}" enctype="multipart/form-data">
                      
                        @csrf
                        @method('PUT')
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                              <input id="name" class="input" type="text" placeholder="Entrez votre nom" required name="name" value="{{ $user->name }}">
                            </div>

                        </div>

                        <div class="field">
                            <label class="label">Prenom</label>
                            <div class="control">
                              <input id="prenom" class="input" type="text" placeholder="Entrez votre prenom" required name="prenom" value="{{ $user->prenom }}">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Age</label>
                            <div class="control">
                              <input id="age" class="input @error('age') is-invalid @enderror" type="Integer" placeholder="Entrez votre age" required name="age" value="{{ $user->age }}">
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
                              <input id="taille" class="input @error('taille') is-invalid @enderror" type="Integer" placeholder="Entrez votre taille en cm" required name="taille" value="{{ $user->taille}}">
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
                              <input id="email" class="input" type="email" placeholder="Entrez votre E-mail" name="email" required value="{{ $user->email}}">
                              <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                              </span>
                              <span class="icon is-small is-right">

                              </span>
                            </div>

                        </div>



                         <div class="field">
                             <label class="label" > Choisissez une photo de profil </label>
                             <img src="/{{$user->PP}}" height="100px" width="100px" class="mx-1"><input multiple enctype="multipart/form-data" type="file" class="form" name="PP" id="PP" >
                         </div>



                        <div class="field">
                            <label class="label">Pseudonyme</label>
                            <div class="control has-icons-left has-icons-right">
                              <input id="pseudo" name="pseudo" class="input @error('pseudo') is-invalid @enderror"  type="text" placeholder="Entrez votre pseudonyme"  required value="{{ $user->pseudo }}">
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
                                  <option  value="homme" @if ($user->genre == "homme")
                                      selected
                                  @endif >Homme</option>
                                  <option @if ($user->genre == "femme")
                                    selected
                                @endif value="femme" >Femme</option>
                                  <option @if ($user->genre == "autre")
                                    selected
                                @endif value="autre" >Autre</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Choisissez une association </label>
                            <div class="control">
                              <div class="select">
                                <select name="hobby">
                                  <option @if ($user->hobby == "sciences")
                                    selected
                                @endif value="sciences">bureau des sciences</option>
                                  <option @if ($user->hobby == "litterature")
                                    selected
                                @endif value="litterature">burea de la litterature</option>
                                  <option @if ($user->hobby == "jeu video")
                                    selected
                                @endif value="jeu video">bureau des jeux videos</option>
                                  <option @if ($user->hobby == "histoire")
                                    selected
                                @endif value="histoire">bureau de l'histoire</option>
                                  <option @if ($user->hobby == "sport")
                                    selected
                                @endif value="sport">bureau des sports</option>
                                  <option @if ($user->hobby == "cuisine")
                                    selected
                                @endif value="cuisine">bureau de la cuisine</option>
                                  <option @if ($user->hobby == "art")
                                    selected
                                @endif value="art">bureau de l'art</option>
                                  <option @if ($user->hobby == "astronomie")
                                    selected
                                @endif value="astronomie">bureau de l'astronomie</option>
                                  <option @if ($user->hobby == "jardinage")
                                    selected
                                @endif value="jardinage">bureau du jardinage</option>

                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="field">
                            <label class="label">Bio</label>
                            <div class="control">
                              <textarea id="bio"  class="textarea" placeholder="Entrez votre bio" required name="bio">{{ $user->bio }}</textarea>
                            </div>
                          </div>



                          <div class="field">
                            <div class="control">
                            <label class="label">Etes vous un fumeur ?</label>

                              <label class="radio">
                                <input  value="1" type="radio" name="fumeur" @if ($user->fumeur == "1")
                                checked
                            @endif>
                                Oui
                              </label>
                              <label class="radio">
                                <input  value="0" type="radio" name="fumeur" @if ($user->fumeur == "0")
                                checked
                            @endif>
                                Non
                              </label>
                            </div>
                          </div>

                          <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmer') }}
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











  