@extends('default_index')

@section('content')
	<table class="table table-striped table-bordered article-index-table ">
		<thead>
			<tr >
				<th class="text-center" >Nom</th>
				<th class="text-center" >Description</th>
				<th class="text-center" >Code</th>
				<th class="text-center" >Date Création</th>
				<th class="text-center" >Date Modification</th>
			</tr>
		</thead>
		<tbody>
			@if(count($articles)==0)
				<tr class="text-center" >
					<td colspan="5" style="color: rgb(150,150,150);">Aucun article n'a été trouvé</td>
				</tr>
			@else
				@foreach($articles as $article)
				<tr>
					<td><a href="{{ url('article',[$article->id]) }}">{{ $article->nom }}</a></td>
					<td>{{ $article->description }}</td>
					<td>{{ $article->code }}</td>
					<td>{{ $article->created_at }}</td>
					<td>{{ $article->updated_at }}</td>
				</tr>
				@endforeach
			@endif
		</tbody>
	</table>
	@include('article/ajout')
	@include('article/recherche')
@endsection

@section('sidemenu')
	<div class="cbp-open"  id="showLeft"><span class="glyphicon glyphicon-list"></span></div>

	<div class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
          <h3>Menu</h3>
          <a href="#" data-toggle="modal" data-target="#ajout-article-mdl">Nouveau Article</a>
          <a href="#" data-toggle="modal" data-target="#recherche-article-mdl">Recherche Article</a>
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




