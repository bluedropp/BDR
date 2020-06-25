@extends('layouts.app')

@section('content')
	@foreach ($users as $user)
	<article id="content">
		<div class="container" style="margin-left: 43%;">
			<div class="box" style="width: 400px; height: 400px;">
				<p class="text-align-center">
					<img style="width: 300px; height: 200px; text-align-center" src="/{{$user->PP}}" >
				</p>
				<strong class="title is-5"><a href={{ url("/profil/".$user->pseudo) }} style="text-decoration: none"> {{$user->pseudo}}</a></strong>
				</p>
				<p> Genre : {{$user->genre}} </p>
				<p> {{$user->age}} ans</small>
				<p>Association : {{$user->hobby}}</p>
			</div>
			</div>
	</article>
	@endforeach
@endsection
