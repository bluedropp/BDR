@extends('layouts.app')

@section('content')
		@foreach ($users as $user)
		<div id="content">
			<div class="title">
				
				<h2><a href='/profil/{{$user->pseudo}}' style="text-decoration: none"> {{$user->pseudo}}</a></h2>
				<span class="byline">{{$user->age}}</span> </div>
			<p>{{$user->hobby}}</p>
				@endforeach
		</div>
	</div>
</div>
@endsection
