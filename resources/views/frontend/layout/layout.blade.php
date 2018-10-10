<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" style="height: 100%">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" >
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123045744-1"></script>
            <script>
                 window.dataLayer = window.dataLayer || [];
                 function gtag(){dataLayer.push(arguments);}
                 gtag('js', new Date());

                 gtag('config', 'UA-123045744-1');
            </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '446522365864453'); 
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" 
            src="https://www.facebook.com/tr?id=446522365864453&ev=PageView
            https://www.facebook.com/tr?id=446522365864453&ev=PageView

            &noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->

           <script type="text/javascript"> //<![CDATA[ 
        var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
        document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
        //]]>
        </script>
</head>
<body class="container-fluid" style="padding: 0px; height: 100%">
    
    {{-- BOTONES DE TIENDAS --}}
    <div id="btn-tiendas" class="col-12 col-sm-2 position-fixed d-md-block d-none">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 col-sm-6">
                <a href="https://play.google.com/store/apps/details?id=com.phonealo" title="">
                    <img src="{{ asset('assets/btn_googleplay.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-sm-6">
                <a href="https://itunes.apple.com/us/app/phonealo/id1425979442?l=es&ls=1&mt=8" title="">
                    <img src="{{ asset('assets/btn_appstore.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
        </div> 
    </div>
    {{--FIN BOTONES DE TIENDAS --}}

     <div id="btn-redes" class="col-1  position-fixed d-md-block d-none">
        <div class="row d-flex justify-content-right align-items-center">
            <div class="col pt-1 text-right">
                <a target="blank_" href="https://www.instagram.com/phonealo_app/" title="Instagram">
                    <img src="{{asset('assets/ig_circle.svg')}}" alt="" class="w-25">
                </a>
            </div>
            <div class="w-100"></div>
            
            <div class="col pt-1 text-right">
                <a target="blank_" href="https://www.facebook.com/Phonealo-642900916095975/?modal=admin_todo_tour" title="Facebook">
                     <img src="{{asset('assets/fb_circle.svg')}}" alt=""  class="w-25">

                </a>
            </div>
         <div class="w-100"></div>
             <div class="col pt-1 text-right">
                <a href="https://twitter.com/PhonealoA?lang=es" title="">
                     <img src="{{asset('assets/tw_circle.svg')}}" alt="@PhonealoA" class="w-25"> 

                </a>
            </div>
         <div class="w-100"></div>
             <div class="col pt-1 text-right">
                <a target="blank_" href="skype:phonealo app">
                     <img src="{{asset('assets/sk_circle.svg')}}" alt=""  class="w-25">

                </a>
            </div>
        <div class="w-100"></div>
             <div class="col pt-1 text-right">
                <a href="https://t.me/phonealo" target="blank_" href="">
                     <img src="{{asset('assets/tg_circle.png')}}" alt=""  class="w-25">

                </a>
            </div>
        </div> 
    </div>

    {{-- MENU --}}

   @include('frontend.layout.menu')
    {{--FIN MENU --}}



     @if($notificacion=Session::get('notificacion'))
        <div class="col-12 d-flex justify-content-center" style="position: absolute; top: 3%; z-index: 9999">
            <div class=" col-12 col-md-6 alert alert-success alert-dismissible fade show" role="alert">
              <strong>Envio Satisfactorio</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
     @endif

    {{-- SLIDER --}}

    @yield('slider')
   
    
    {{-- FIN SLIDER --}}

    {{-- CONTENEDOR --}}
    <div class="pt-xs-1 pt-5 bg-white " >
        @yield('content')
    </div>
    {{-- FIN CONTENEDOR --}}
    <!-- FOOTER -->
    @include('frontend.layout.footer')
    {{-- FIN FOOTER --}}

    @include('frontend.pamigo')

    <!--Scripts-->
    
   {{--  <script src="https://maps.googleapis.com/js?Key=AIzaSyBaUGy-if65M1uS78Xemk77CxFvgEYU-Pk"></script> --}}
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
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
    //////////////////
  //  ALMACENA LOS DATOS
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

@stack('scripts') 

</body>
</html>