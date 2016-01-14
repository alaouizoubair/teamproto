@extends("default_index")

@section('content')

<div class="article-show-header jumbotron text-center">
	<h3>{{ $article->nom }}</h3>
</div>

<table class="table table-striped table-bordered table-hover">
	<tbody>
		<tr>
			<td class="table-article-show-left-bar">Description</td>
			<td>{{ $article->description }}</td>
		</tr>
		<tr>
			<td class="table-article-show-left-bar">Code</td>
			<td>{{ $article->code }}</td>
		</tr>
		<tr>
			<td class="table-article-show-left-bar">Date Creation</td>
			<td>{{ $article->created_at }}</td>
		</tr>
		<tr>
			<td class="table-article-show-left-bar">Date Modification</td>
			<td>{{ $article->updated_at }}</td>
		</tr>
	</tbody>
</table>
@include('article/modification')
@endsection



@section('sidemenu')
<div class="cbp-open"  id="showLeft"><span class="glyphicon glyphicon-list"></span></div>

<div class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
          <h3>Menu</h3>
          <a href="#" data-toggle="modal" data-target="#modification-article-mdl">Modifier Article</a>
          <a href="{{url('article/duplicate/'.$article->id)}}" >Dupliquer Article</a>
          <a href="#" data-toggle="modal" data-target="">Suppimer Article</a>
        </nav>
</div>
@endsection