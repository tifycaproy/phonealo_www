<div class="modal fade" id="mchat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{trans('messages.chattitulo')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('enviar') }}" id="form1" method="post" accept-charset="utf-8">
        <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
      <div class="modal-body">
       <textarea name="txtmensaje" id="txtmensaje" class="form-control" cols="15" rows="3" placeholder="{{trans('messages.chatlblmensaje')}}"></textarea>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="enviar">{{trans('messages.chatbutton')}}</button>
      </div>
    </form>
    </div>
  </div>
</div>