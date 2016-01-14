@extends('default_index')

@section('content')

	<table class="table table-striped table-bordered article-index-table ">
		<thead>
			<tr >
				<th class="text-center" >Nom</th>
				<th class="text-center" >Adresse</th>
				<th class="text-center" >Ville</th>
				<th class="text-center" >Pays</th>
				<th class="text-center" >Tel</th>
				<th class="text-center" >Date Création</th>
				<th class="text-center" >Date Modification</th>
			</tr>
		</thead>
		<tbody>
			@if(count($clients)==0)
				<tr class="text-center" >
					<td colspan="7" style="color: rgb(150,150,150);">Aucun article n'a été trouvé</td>
				</tr>
			@else
				@foreach($clients as $client)
				<tr>
					<td><a href="{{ url('client',[$client->id]) }}">{{ $client->nom }}</a></td>
					<td>{{ $client->adresse }}</td>
					<td>{{ $client->ville }}</td>
					<td>{{ $client->pays }}</td>
					<td>{{ $client->tel }}</td>
					<td>{{ $client->created_at }}</td>
					<td>{{ $client->updated_at }}</td>
				</tr>
				@endforeach
			@endif
		</tbody>
	</table>
	@include('client/ajout')
	@include('client/recherche')

@endsection

@section('sidemenu')
	<div class="cbp-open"  id="showLeft"><span class="glyphicon glyphicon-list"></span></div>

	<div class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
          <h3>Menu</h3>
          <a href="#" data-toggle="modal" data-target="#ajout-client-mdl">Nouveau Client</a>
          <a href="#" data-toggle="modal" data-target="#recherche-client-mdl">Recherche Client</a>
          <a href="#">Supprimer Article</a>
          <a href="#">Catsear azuki bean</a>
          <a href="#">Dandelion bunya</a>
          <a href="#">Rutabaga</a>
          <a href="#">Celery seakale</a>
          <a href="#">Dulse daikon</a>
          <a href="#">Zucchini garlic</a>
        </nav>
      </div>

@endsection
