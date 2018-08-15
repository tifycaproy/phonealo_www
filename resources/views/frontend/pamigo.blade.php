<!-- Large modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

<div class="modal fade bd-example-modal-lg" id="pamigo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered col-12" >
    <div class="modal-content p-3 p-md-5" style="background-image: url('assets/pamigobg.jpg'); background-repeat: no-repeat; background-size: cover;">
      <div class="row">
        <div class="col-12">
          <h3 class>Phonealo con tus amigos y gana minutos para disfrutar aun más
          </h3>
        </div>
        <div class="col-12 col-lg-6"></div>
        <div class="col-12 col-lg-6">
          <div id="momento" class="d-none">
            Momentooooooooo
          </div>
          <div id="success" class="col-12 p-3 mb-2 d-none text-center c-white" style="background: #32CD32">
            Registro Guardado Exitosamente
          </div>
          <div id="erro" class="col-12 p-3 mb-2 d-none text-center c-white" style="background: #DC143C">
            Error al registrar.
          </div>
          <form action="#" id="form_pamigo" method="post" accept-charset="utf-8" onsubmit="return false">
            <div class="row">
              <div class="form-group col-12">
                <span id="error" class="d-none error "> Usuario no Existe</span>
                <input type="text" class="form-control input-landing " name="referente" id="referente" placeholder="Tu Telefono"  required>
              </div>
              <div class="form-group col-12">
                <input type="text" class="form-control input-landing" name="nom_amigo" id="nom_amigo" placeholder="Nombre de tu amigo"  required>
              </div>
              <div class="form-group col-12">
                <input type="email" class="form-control input-landing" name="email_amigo" id="email_amigo" placeholder="Email de tu amigo"  required>
              </div>
              <div class="form-group col-12">
                <select name="pais_amigo" id="pais_amigo" class="form-control input-landing" required>
                  <option value="">País de tu amigo</option>
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
                  <span id="invitar" class="">INVITAR</span>
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

<script  type="text/javascript" charset="utf-8">


{{-- NO PERMITE ESCRIBIR LETRAS EN LOS CAMPOS DE TELEFONOS --}}
$(document).ready(function(){ 
  $("input#referente, input#num_amigo").keydown(function(event) {
     if(event.shiftKey)
     {
          event.preventDefault();
     }

     if (event.keyCode == 46 || event.keyCode == 8)    {
     }
     else {
          if (event.keyCode < 95) {
            if (event.keyCode < 48 || event.keyCode > 57) {
                  event.preventDefault();
            }
          } 
          else {
                if (event.keyCode < 96 || event.keyCode > 105) {
                    event.preventDefault();
                }
          }
        }
     });
  });
/////////

   //VALIDA USUARIO AL TERMINAR DE ESCRIBIR EL NUMERO
        $("input#referente").change(function(){

          var referente = $("input#referente").val();

           $.ajax({
                type: "get",
                url: '{{ route('verifica_usuario') }}',
                dataType: "json",
                data: { referente: referente },
                success: function (data){

                    if (data > 0) {
                        $('#enviar').prop('disabled', false);  
                      $('#error').addClass('d-none'); 
                      $("input#referente").removeClass('input-error');


                    }else{
                    
                      $('#enviar').prop('disabled', true);
                      $('#error').removeClass('d-none');
                      $("input#referente").addClass('input-error');
                    }
                }

            });

        });
    // FIN VALIDACION DE USUARIO
    // //////////////////
    //ALMACENA LOS DATOS
    $("#form_pamigo").submit(function(){
      $('#loading').removeClass('d-none');
      $('#invitar').addClass('d-none');

    var referente = $("input#referente").val();
    var nom_amigo = $('input#nom_amigo').val();
    var email_amigo = $('input#email_amigo').val();
    var pais_amigo = $('#pais_amigo').val();
    var num_amigo = $('input#num_amigo').val();

        //FIN VALIDACION EMAIL
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "post",
            url: '{{ route('registroAmigo') }}',
            dataType: "json",
            data: { referente:referente,nom_amigo:nom_amigo, email_amigo:email_amigo,pais_amigo:pais_amigo,num_amigo:num_amigo,_token: '{{csrf_token()}}' },
            success: function (data){

                

              if (data == 1) {
                $('#success').removeClass('d-none');
                $('#erro').addClass('d-none');
                $('#loading').addClass('d-none');
                $('#invitar').removeClass('d-none');
              }

              if (data == 0) {
                $('#erro').removeClass('d-none');
                $('#success').addClass('d-none');
                $('#loading').addClass('d-none');
                $('#invitar').removeClass('d-none');
                
              }

            }

        });
    });
    //FIN ALMACENAR DATOS
</script>

@endpush