@extends('layouts.app')

@section('content')
	@foreach ($users as $user)
	<article id="content">
		<div class="container" style="margin-left: 43%;">
			<div class="box" style="width: 300px; height: 300px;">
				<p class="image is-100x100 text-align-center">
					<img src="/{{$user->PP}}" >
				</p>
				<strong class="title is-3"><a href={{ url("/profil/".$user->pseudo) }} style="text-decoration: none"> {{$user->pseudo}}</a></strong>
				</p>
				<p> Genre : {{$user->genre}} </p>
				<p> {{$user->age}} ans</small>
				<p>Association : {{$user->hobby}}</p>
			</div>
			</div>
	</article>
	@endforeach
@endsection
