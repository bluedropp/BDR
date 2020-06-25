@extends('layouts.app')
@section('content')

<form action="messagerie" method="post">
  @csrf
  <div class="field" style="width: 43%; margin-left: 25%;">
    <label class="label">À </label>
    <div class="control">
      <input class="input" type="text" name="destinataire" placeholder="Entrez le pseudo de votre correspondant">
    </div>
  </div>

  <div class="field" style="width: 43%; margin-left: 25%;">
    <label class="label">Contenu</label>
    <div class="control">
      <textarea class="textarea" type="text" placeholder="Votre message" name="contenu"></textarea>
    </div>
  </div>

  <div class="field" style="margin-left: 60%;">
    <input type="submit" class="button is-primary" name="envoyer" value="Envoyer">
  </div>

</form>

@endsection
