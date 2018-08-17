<!-- Large modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

<div class="modal fade bd-example-modal-lg" id="pamigo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered col-12" >
    <div class="modal-content p-3 p-md-5" style="background-image: url('assets/pamigobg.jpg'); background-repeat: no-repeat; background-size: cover;">
      <div class="row">
        <div class="col-12">
          <h3 class>
            {{trans('messages.pamigotitulo')}}
          </h3>
        </div>
        <div class="col-12 col-lg-6"></div>
        <div class="col-12 col-lg-6">
          <div id="success" class="col-12 p-3 mb-2 d-none text-center c-white" style="background: #32CD32">
            {{trans('messages.pamigoSuccess')}}
          </div>
          <div id="erro" class="col-12 p-3 mb-2 d-none text-center c-white" style="background: #DC143C">
           {{trans('messages.pamigoError')}} 
          </div>
          <form action="#" id="form_pamigo" method="post" accept-charset="utf-8" onsubmit="return false">
            <div class="row">
              <div class="form-group col-12">
                <span id="error" class="d-none error ">{{trans('messages.pamigoNoexiste')}} </span>
                <input type="text" class="form-control input-landing " name="referente" id="referente" placeholder="{{trans('messages.pamigoTelefono')}}"  required>
              </div>
              <div class="form-group col-12">
                <input type="text" class="form-control input-landing" name="nom_amigo" id="nom_amigo" placeholder="{{trans('messages.pamigoAmigo')}} "  required>
              </div>
              <div class="form-group col-12">
                <input type="email" class="form-control input-landing" name="email_amigo" id="email_amigo" placeholder="{{trans('messages.pamigoEmail')}}"  required>
              </div>
              <div class="form-group col-12">
                <select name="pais_amigo" id="pais_amigo" class="form-control input-landing" required>
                  <option value="">{{trans('messages.pamigoPais')}}</option>
                  @foreach ($paises as $pais)
                    <option value="{{ $pais->pais_cod }}">{{ $pais->pais_desc }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-12  ">
                <input type="text" class="form-control input-landing" name="num_amigo" id="num_amigo" placeholder="Telefono de tu amigo"  required>
              </div>
              <div class="form-group col-12  text-center">
                  <input name="_token" value="{{ csrf_token() }}" type="hidden"></input>
                  <button type="submit" id="enviar" class="btn btn-amigo input-landing col-12">
                  <span id="invitar" class="">{{trans('messages.Invite')}}</span>
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