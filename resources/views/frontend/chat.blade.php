<!-- Large modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

<div class="modal fade bd-example-modal-lg" id="mchat">
  <div class="modal-dialog modal-lg modal-dialog-centered col-12" >
    <div class="modal-content p-3 p-md-5">
      <div class="row">
        <div class="col-4">
          <h3 class>
            {{trans('messages.chattitulo')}}
          </h3>
        </div>
        <div class="col-12 col-lg-4"></div>
        <div class="col-12 col-lg-4">
          <div id="success" class="col-4 p-3 mb-2 d-none text-center c-white" style="background: #32CD32">
            {{trans('messages.chatSuccess')}}
          </div>
          <div id="erro" class="col-4 p-3 mb-2 d-none text-center c-white" style="background: #DC143C">
           {{trans('messages.chatError')}} 
          </div>
          <form action="{{ route('enviar_mensaje') }}" id="form_chat" method="post" accept-charset="utf-8" onsubmit="return false">
            <div class="row">
              <div class="form-group col-4">
               <textarea name="txtmensaje" id="txtmensaje" cols="30" rows="5" placeholder="{{trans('messages.chatlblmensaje')}}"></textarea>  
              
              </div>
              <div class="form-group col-14  text-center">
                  <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
                  <button type="submit" id="enviar" class="btn btn-amigo input-landing col-4">
                  <span id="enviar" class="">{{trans('messages.chatbutton')}}</span>
                  <span id="loading" class="loading d-none">
                    <img src="{{ asset('assets/loading.gif') }}" class="col-3"  alt="">
                  </span>
                  </button>
                  
                </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
</div>

@push('scripts')



@endpush