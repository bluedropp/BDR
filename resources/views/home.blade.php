@extends('layouts.app')

@section('content')
<<<<<<< HEAD



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
=======
		@foreach ($users as $user)
		<div id="content">
			<div class="title">
				
				<h2><a href='/profil/{{$user->pseudo}}' style="text-decoration: none"> {{$user->pseudo}}</a></h2>
				<span class="byline">{{$user->age}}</span> </div>
			<p>{{$user->hobby}}</p>
				@endforeach
		</div>
	</div>
>>>>>>> 06e5b4dfd39645d6b4664b3c0afe8a44e51e3b58
</div>
@endsection
