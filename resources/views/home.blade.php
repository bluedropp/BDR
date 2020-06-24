@extends('layouts.app')

@section('content')
	@foreach ($users as $user)
	<article id="content" style="background-color: grey;">
		<div class="container" style="margin-left: 43%;">
			<div class="box" style="width: 300px; height: 300px;">
				<p class="image is-128x128" style="margin-left: 20%;">
					<img src="/{{$user->PP}}">
				</p>
				<strong class="title is-3"><a href='/profil/{{$user->pseudo}}' style="text-decoration: none"> {{$user->pseudo}},</a></strong><small class="subtitle is-5"> {{$user->age}} ans</small>
				<p>Association : {{$user->hobby}}</p>
			</div>
		</div>
	</article>
	@endforeach
@endsection
