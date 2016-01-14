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

		<form method="POST" action="{{ url('/auth/register') }}">
		    {!! csrf_field() !!}

		    <div class="form-group">
		        <label for="nom">Nom</label>
		        <input class="form-control" type="text" name="nom" value="{{ old('nom') }}">
		    </div>

		    <div class="form-group">
		        <label for="prenom">Prenom</label>
		        <input class="form-control" type="text" name="prenom" value="{{ old('prenom') }}">
		    </div>

		    <div class="form-group">
		        <label for="email" >email</label>
		        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
		    </div>

		    <div class="form-group">
		        <label for="tel" >Téléphone</label>
		        <input class="form-control" type="text" name="tel" value="{{ old('tel') }}">
		    </div>

		    <div class="form-group">
		        <label for="adresse" >Adresse</label>
		        <input class="form-control" type="text" name="adresse" value="{{ old('adresse') }}">
		    </div>

		    <div class="form-group">
		        <label for="code_postal" >Code Postal</label>
		        <input class="form-control" type="text" name="code_postal" value="{{ old('code_postal') }}">
		    </div>

		    <div class="form-group">
		        <label for="ville" >Ville</label>
		        <input class="form-control" type="text" name="ville" value="{{ old('ville') }}">
		    </div>

		    <div class="form-group">
		        <label for="password" >password</label>
		        <input class="form-control" type="password" name="password" id="password">
		    </div>

		    <div class="form-group">
		        <label for="conf-password" >confirmer password</label>
		        <input class="form-control" type="password" name="password_confirmation" id="conf-password">
		    </div>

		    <div class="form-group">
		        <button class="btn btn-default" type="submit">Register</button>
		    </div>
		</form>
	</div>


@endsection

