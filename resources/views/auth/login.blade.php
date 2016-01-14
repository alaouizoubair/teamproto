@extends('default')

@section('content')

	<div class="thumbnail sp-content">
		{!! HTML::image('images/auth-airplane.jpg','cobham airplane'); !!}
		<div class="caption">
			<h4>Store Project Intranet</h4>
			<p>TEAM.COBHAM intranet est un portail qui gère les dossiers de ventes de l'entreprise. Cette intranet répond aux exigences 
			des différents département en mettant à disposition les fonctionnalités indisponsable pour la gestion interne.
			En parallèle, ce portail dote d'une interface graphique plus performante afin de simplifier l'utilisation de l'application. </p>
		</div>
	</div>

	

@endsection

@section('sidebar')

	<div class="sp-authcontainer">

		<form role="form" method="POST" action=" {{ url('/auth/login') }}"> 
		    {!! csrf_field() !!}

		    <div class="form-group">
		        <label for="email" >email</label>
		        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        <label for="password" >password</label>
		        <input class="form-control" type="password" name="password" id="password">
		    </div>

		    <div class="form-group">
		    	<label for="remember" class="sr-only"></label>
		        <input  type="checkbox" name="remember" id="remember"> Remember Me
		    </div>

		    <div class="form-group">
		        <button type="submit" class="btn btn-default">Login</button>
		    </div>

		    
		</form>

	</div>


	
@endsection

