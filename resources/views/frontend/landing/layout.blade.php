<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" >
        <link rel="stylesheet" href="{{asset('css/landing.css')}}" >
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

</head>
<body class="container-fluid p-0">

{{-- MENU --}}
<div id="menu" class="col-12 position-absolute p-0" >
    <div class="container-fluid p-0">
     <div class="row m-0 d-flex justify-content-center justify-content-sm-start align-items-center background-white" style="height: 70px">
        <div class="h-100 py-1 pl-sm-5" >
            <img src="assets/logo.svg" height="100%" class="" >
        </div>
    </div>    
    </div>
    
</div>
{{-- FIN MENU --}}
<div class="col-12 p-0 parallax overflow-content h-100-an" style="@yield('img')  ">
    <div class="container">
        {{-- TITULO --}}
        <h1 class="c-white bold title-landing text-center " style="margin-top: 80px"  >Phonealo es una aplicación para llamar a todo el mundo al mejor precio.</h1>
        
        {{-- PHONEHEAD --}}
        <div data-input-element="true" id="scene" class="col-5 position-absolute invisible-xs invisible-sm" style=" bottom: -20px; left: -10px">
            <img data-depth="0.1" src="{{ asset('assets/phone.png') }}" class="img-fluid" alt="">
            <div data-depth="0.2" class="col-3 position-absolute" style=" margin-left: 54%; margin-top: 30%;">
                <img   src="{{ asset('assets/burbujaphone.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        {{-- FIN PHONEHEAD --}}
    
        <div class="row justify-content-end margin-top">
            <div class="col-12  col-lg-7  ">
                <h2 class="c-white conten-landing">Déjanos tu correo electrónico y mantente informado</h2>
                {{-- FORMULARIO --}}
                @yield('form')
                {{-- FIN FORMULARIO --}}
                {{-- PASOS --}}
                <div class="mt-5 col-12  left-xs-0">
                    <div class="row mt-5">
                        <div class="col-4 text-center py-2" >
                            <img src="{{ asset('assets/download_icn.svg') }}" alt=""  class="icon-pasos">
                            <p class="conten-landing c-white pt-3">Descarga el App</p>
                        </div>
                        <div class="col-4 text-center py-2" style="border-left: 2px solid white; border-right: 2px solid white">
                            <img src="{{ asset('assets/recarga_icn.svg') }}" alt=""  class="icon-pasos">
                            <p class="conten-landing c-white pt-3">Recarga tu cuenta</p>
                        </div>
                        <div class="col-4 text-center py-2" >
                            <img src="{{ asset('assets/phonoealo_icn.svg') }}" alt=""  class="icon-pasos">
                            <p class="conten-landing c-white pt-3">¡Phonealo!</p>
                        </div>
                    </div>

                    <h3 class="c-white conten-landing text-center mt-3">¡Aprovecha nuestra oferta ahora! <br> Con tu primera recarga obtendrás el doble lo esperado. </h3>

                    {{-- BOTONES TIENDAS --}}
                    <div class="row mt-4 mb-5 mb-sm-3 mt-sm-5  d-flex justify-content-center align-items-center">
                        <div class="col-4 col-sm-3">
                           <a href="https://play.google.com/store/apps/details?id=com.phonealo" title="">
                                <img src="{{ asset('assets/btn_googleplay.svg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-4 col-sm-3">
                            <a href="https://itunes.apple.com/us/app/phonealo/id1425979442?l=es&ls=1&mt=8" title="">
                                <img src="{{ asset('assets/btn_appstore.svg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    {{-- FIN BOTONES TIENDAS --}}
                </div>
                {{-- FIN PASOS --}}
            </div>
        </div>
               

        
            <div id="verMas" class="cursor container position-absolute invisible-xs invisible-sm" style="bottom: 8px">
                <div class="row d-flex justify-content-center text-center  " >
                    <div class="col-12 c-white cursor" style="font-size: 0.8rem">Más información</div>
                    <div class="col-12 cursor"> <img src="{{ asset('assets/arrow.svg') }}" width="30px" class="" alt=""></div>
                </div>
            </div>


    </div>
    
        
</div>
<div class="" id="one">
    <div class="container py-5">
        <div class="row">
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿En qué paises está disponible?</h2>
                <p>Está disponible en todos los paises.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Necesito internet en mi móvil?</h2>
                <p>Si es necesario tener internet en tu movil, de esta manera no tendras ningun gasto adicional ni oculto, que generalmente son generados por tu operador de telefonia.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Puedo llamar a cualquier teléfono?</h2>
                <p>Sí, puedes llamar a cualquier país del mundo, siempre que no sea a un destino con tarificación especial, como 902.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿El destino al que llamo necesita tener Phonealo?</h2>
                <p>No, la llamada de Phonealo es una llamada como las demás. Tu contacto no ve ninguna diferencia en la llamada que recibe.</p>
            </div>
           
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Cómo puedo conocer la tarifa?</h2>
                <p>Tienes varias formas de conocer el precio de la llamada. En nuestra pagina web <a href="http://www.phonealo.com/" title="">www.phonealo.com</a> y desde la propia app</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Si la otra persona no descuelga ¿me cobran la llamada?</h2>
                <p>No, si la otra persona no descuelga o comunica la llamada no te cuesta nada.</p>
            </div>
 <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Funciona con un teléfono de cualquier operador?</h2>
                <p>Sí, funciona con cualquier operador.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">

                <h2>¿Cómo puedo recargar saldo?</h2>
                <p>Puedes recargar saldo entrando en nuestra web <a href="http://www.phonealo.com/" title="">www.phonealo.com</a></p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Cuándo caduca?</h2>
                <p>Su saldo no caduca nunca.</p>
            </div>
                        <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Cómo se tarifican las llamadas?</h2>
                <p>En Phonealo pagaras por lo que hablas, tarificado por segundos. No redondeamos el tiempo de llamada, si hablas 3 minutos con 35 segundos pagaras exactamente esto.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Con Phonealo en el extranjero?</h2>
                <p>Con Phonealo llamaras desde cualquier parte del mundo sin generar gastos en tu operador. Recuerda es importante este conectado a una red wifi o de lo contrario si consumes datos de tu operador es possible que este te los tarifique. </p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>No me llega el sms de verificación</h2>
                <p>Comprueba que el teléfono que has introducido en el alta es correcto, revisa tu correo electronico que te hemos enviado un mail con el codigo de activacion, simultaneamente con el sms. Si aun así no recibes el codigo ponte en contacto con nosotros a <a href="mailto:contact@phonealo.com" title="">contact@phonealo.com</a> con tu número de móvil y pais de registro,  te atenderemos inmediatamente. </p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>No me deja recargar con mi tarjeta de débito/crédito</h2>
                <p>En ese caso, ponte en contacto con nosotros por correo electronico <a href="mailto:contact@phonealo.com" title="">contact@phonealo.com</a> o por facebook, para que comprovemos  tu cuenta y te podamos ayudar.</p>
            </div>
        </div>
    </div>
</div>
    <!-- FOOTER -->
    @include('frontend.layout.footer')
    {{-- FIN FOOTER --}}

<!-- Modal -->
<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <button type="button" class="close close-an" data-dismiss="modal" aria-label="Close" style="">
        <span aria-hidden="true">&times;</span>
    </button>
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">
      <div class="modal-header  d-flex justify-content-center" style="border: 0px">
        <h5 class="modal-title text-center content-landing" id="exampleModalLongTitle">Gracias por dejarnos tu email <br> Te mantendremos informado de todo.</h5>
      </div>
      <div class="modal-body">
       <img src="{{ asset('assets/check.gif') }}" class="img-fluid" alt="">
       <div class="row d-flex justify-content-center align-items-center">
        <h2 class="c-black content-landing px-3 text-center">Descarga el App y <b>¡Phonealo!</b> </h2>
            <div class="col-6 col-sm-4">
                <a href="" title="">
                    <img src="{{ asset('assets/btn_googleplay.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-6 col-sm-4">
                <a href="" title="">
                    <img src="{{ asset('assets/btn_appstore.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/valida.2.1.7.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript">

        // $(window).scroll(function(){
        //     var barra = $(window).scrollTop();
        //     var posicion =  (barra * 0.9);
            
        //     $('.parallax').css({
        //         'background-position': '0 -' + posicion + 'px'
        //     });
     
        // });

        // if (ancho <= 1350){
        //     $('.parallax').css({
        //         'background-size': 'initial'
        //     });
        // }

        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene, {
          relativeInput: true
        });
        parallaxInstance.friction(0.1, 0.1);

        $(function () {
            $('#verMas').bind("click", function () {
                var dest = $("#one").offset().top;
                $("html, body").animate({scrollTop: dest},1000);
            });

        });
     
            // jQuery(document).ready(function(){
            //    $('#form_landing').valida();
            // });

            //VALIDA EMAIL MIENTRAS ESCRIBE
            $("input#email").keyup(function(){
               
               var email = $("input#email").val();

               $.ajax({
                    type: "get",
                    url: '{{ route('verifica_email') }}',
                    dataType: "json",
                    data: { email: email },
                    success: function (data){

                        if (data > 0) {
                            $('#enviar').prop('disabled', true);
                            $('#error').removeClass('d-none');

                        }else{
                          $('#enviar').prop('disabled', false);  
                          $('#error').addClass('d-none');
                        }
                    }

                });

            });
            //FIN VALIDACION EMAIL
            //
            //ALMACENA LOS DATOS
            $("#form_landing").submit(function(){

            var email = $("input#email").val();
            var pais = $("input#pais").val();
        
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "post",
                    url: '{{ route('email_landing') }}',
                    dataType: "json",
                    data: { email: email, pais:pais ,_token: '{{csrf_token()}}' },
                    success: function (data){

                        if (data == 0) {
                         
                            $('#error').removeClass('d-none');

                        }else{
                          
                          $('#error').addClass('d-none');
                          $('#modalSuccess').modal('show');
                        }
                    }

                });
            });
            //FIN ALMACENAR DATOS

     </script>

@stack('scripts') 

</body>
</html>