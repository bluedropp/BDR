
@extends('layouts.app')
@section ('content')


<div class="title is-1 has-text-centered">
  Recherche par critère
</div>

<form method="post">

  @csrf

  <div class="columns has-text-centered">
    <div class="column ">

        <label class="label">Pseudonyme</label>
        <input class="input" type="text" name="qpseudo" placeholder="Pseudonyme" style="width: 50%;">

    </div>
    <div class="column">
      <div class="container">
        <div class="control">
          <label class="label">Âge maximum</label>
          <div class="select">
            <select name="qage">
              <option value="">-selectionez-</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="40">40</option>
              <option value="50">50</option>
              <option value="50+">50+</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    
  
    <div class="column ">
      <div class="field">
        <label class="label" for="aaa"> Association : </label>
       
          <div class="select">
            <select name="qhobby" id="aaa">
              <option value="">-selectionez-</option>
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
    <div class="column">
      <label class="label" for="bb">
        Fumeur
      </label>
      <div class="select">
        <select name="qfumeur" id="bbb">
          <option value="">-selectionez-</option>
          <option value="1">oui</option>
          <option value="0">non</option>
        </select>

      </div>





    </div>





  </div>


  <br><br>
  <div class="field">
    <input style="left: 43%;" type="submit" class="button is-primary" value="Rechercher">
  </div>

</form>
























@endsection
