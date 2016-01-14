<div id="ajout-client-mdl" class="modal fade" role="dialog">
    <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4>Ajouter Client</h4>
                </div>
                <div class="modal-body">
                    <form for="form" method="POST" action="{{ route('client.store') }}">
                        
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="nom">Nom Client</label>
                            <input class="form-control" type="text" name="nom" value="{{ old('nom') }}" />
                        </div>

                        <div class="form-group">
                            <label for="description">Adresse Article</label>
                            <input class="form-control" type="text" name="adresse" value="{{ old('adresse') }}" />
                        </div>

                        <div class="form-group">
                            <label for="code">Ville Article</label>
                            <input class="form-control" type="text" name="ville" value="{{ old('ville') }}" />
                        </div>

                        <div class="form-group">
                            <label for="code">Pays Article</label>
                            <input class="form-control" type="text" name="pays" value="{{ old('pays') }}" />
                        </div>

                        <div class="form-group">
                            <label for="code">Tel Article</label>
                            <input class="form-control" type="text" name="tel" value="{{ old('tel') }}" />
                        </div>

                        <div class="form-group">
                            <label for="code">Fax Article</label>
                            <input class="form-control" type="text" name="fax" value="{{ old('fax') }}" />
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