
@extends('layouts.app')
@section ('content')

    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <img src='\images\LogoBdr.png'>
                <div class="title is-1">
                    Le Bureau des Rencontres
                </div>
                <div class="links subtitle is-3">
                    <a class="button is-dark" href={{ url("/register") }}>S'inscrire</a>
                </div>
            </div>
        </div>


    </body>
</html>

@endsection
