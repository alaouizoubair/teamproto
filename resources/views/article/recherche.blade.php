<div id="recherche-article-mdl" class="modal fade" role="dialog">
    <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4>Recherche Article</h4>
                </div>
                <div class="modal-body">
                    <form for="form" method="POST" action="{{ route('article.recherche') }}">
                        
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="nom">Nom Article</label>
                            <input class="form-control" type="text" name="nom" value="{{ old('nom') }}" />
                        </div>

                        <div class="form-group">
                            <label for="description">Description Article</label>
                            <input class="form-control" type="text" name="description" value="{{ old('description') }}" />
                        </div>

                        <div class="form-group">
                            <label for="code">Code Article</label>
                            <input class="form-control" type="text" name="code" value="{{ old('code') }}" />
                        </div>

                        <div class="form-group">
                            <label for="orderby">Trie</label>
                            <select class="form-control" name="orderby" style="margin-bottom:2px;">
                                <option value="updated_at" selected="selected"></option>
                                <option value="nom">Nom</option>
                                <option value="description">Description</option>
                                <option value="code">Code</option>
                            </select>
                             <select class="form-control" name="ordertype" >
                                <option value="asc">Ascendant</option>
                                <option value="desc">Descendant</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Chercher</button>
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
            
    </div>
</div>