<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pamigo">
  Launch demo modal
</button> --}}

<!-- Modal -->
<div class="modal fade" id="pamigo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Phonealo con tú amigo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="registroAmigo" method="post" accept-charset="utf-8">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="referente" id="referente" placeholder="Tu Telefono" >
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="nom_amigo" id="nom_amigo" placeholder="Nombre de tu amigo" >
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="email_amigo" id="email_amigo" placeholder="Email de tu amigo" >
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <select name="pais_amigo" id="pais_amigo" class="form-control">
                    <option value="">Seleccione País</option>
                    @foreach ($paises as $pais)
                      <option value="{{ $pais->pais_cod }}">{{ $pais->pais_desc }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-8">
                <div class="form-group">
                  <input type="text" class="form-control" name="num_amigo" id="num_amigo" placeholder="Telefono de tu amigo" >
                </div>
              </div>
              <div class="col-12">
                <div class="form-group text-center">
                  <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
                  <input type="submit" class="btn btn-primary" value="Invitar">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
     {{--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>