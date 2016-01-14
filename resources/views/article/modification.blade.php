<div id="modification-article-mdl" class="modal fade" role="dialog">
    <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4>Modifier Article</h4>
                </div>
                <div class="modal-body">
                    <form for="form" method="POST" action="{{ route('article.update',[$article->id]) }}">
                        
                        <input name="_method" type="hidden" value="PUT">
                        {!! csrf_field() !!}
                        
                        <div class="form-group">
                            <label for="nom">Nom Article</label>
                            <input class="form-control" type="text" name="nom" value="{{ $article->nom }}" />
                        </div>

                        <div class="form-group">
                            <label for="description">Description Article</label>
                            <input class="form-control" type="text" name="description" value="{{ $article->description }}" />
                        </div>

                        <div class="form-group">
                            <label for="code">Code Article</label>
                            <input class="form-control" type="text" name="code" value="{{ $article->code }}" />
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Valider</button>
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
            
    </div>
</div>