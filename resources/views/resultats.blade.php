@extends('layouts.app')

@section('content')
	@foreach ($users as $user)
	<article id="content">
		<div class="container" style="margin-left: 43%;">
			<div class="box" style="width: 250px; height: 250px;">
				<p class="image is-64x64">
					<img src="/{{$user->PP}}" height="600px" width="600px">
				</p>
				<strong class="title is-3"><a href={{URL('/profil/')}}{{'/'.$user->pseudo}} style="text-decoration: none"> {{$user->pseudo}}</a></strong>
				</p>
				<small class="subtitle is-5">{{$user->age}} ans</small>
				<p>Association : {{$user->hobby}}</p>
			</div>
			</div>
	</article>
	@endforeach
@endsection
