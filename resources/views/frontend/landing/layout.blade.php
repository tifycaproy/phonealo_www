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
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script> --}}

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
<div class="col-12 p-0 parallax1 " style="@yield('img')  ">
    <div class="container py-5">
        <div class="row d-flex align-items-center justify-content-center h-75 pt-5">
            <div class="col-12 col-md-10 d-flex justify-content-center row mt-4 text-shadow">
                <h1 class="col-12 c-white bold title-landing text-center  " >
                   @yield('titulo')
                </h1>
                <h2 class="col-12 c-white text-white conten-landing my-2 my-md-4 text-center">
                    <b>Descarga Phonealo, tu app de llamas internacionales, con la que podrás comunicarte con tus seres queridos en todo momento.</b>
                </h2>
            </div>
            <div class="col-12 col-md-6 text-center mt-2 text-shadow">
                <h3 class="conten-landing c-white"> Déjanos tu email y descarga el app.</h3>
<h3 class="conten-landing c-white"> Con tu primera recarga te obsequiamos el doble de tu importe </h3>
                @yield('form1')
            </div> 
        </div>
    </div>
</div>
<div class="col-12 pb-5 pt-md-2">
    <div class="container py-3 py-md-5">
         <h1 class="col-12 c-black text-white title-landing my-2 my-md-4 text-center">
                   Con Phonealo podrás...
                </h1>
        <div class="row py-5">
            <div class="col-12 col-md-4">
                <ul class="pl-2">
                    <li class="info">
                        <p>
                            Llamar a cualquier operadora y tus contactos no verán ninguna diferencia en la llamada que recibe.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <ul class="pl-2 ">
                    <li class="info" >
                        <p>Comunicarte desde cualquier parte del mundo sin generar gastos en tu operador.</p>
                    </li>
                </ul>
            </div>
            
            <div class="col-12 col-md-4">
                <ul class="pl-2">
                    <li class="info">
                        <p>
                            Paga por lo que hablas, tarificado por segundos. No redondeamos el tiempo de llamada.
                        </p>
                        
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-5">
                <ul class="pl-2">
                    <li class="info">
                        <p>
                            Llamar a todo el mundo y funciona con cualquier operador en cualquier país por el mismo coste.
                        </p>
                        
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-5">
                <ul class="pl-2">
                    <li class="info">
                        <p>
                            Estar siempre conectado. Tu saldo no caduca nunca, recarga ahora y utilizalo en el momento que desees. 
                        </p>
                        
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 mt-5">
                <ul class="pl-2">
                    <li class="info">
                        <p>
                            Obtener Beneficios. Invita a todos tus amigos y llama gratis.  
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row-green" id="quees">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center py-2 py-sm-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-6  pl-2-xs">
              <h2>{{trans('messages.indice3')}}</h2>
              <h3>{{trans('messages.indice4')}}</h3>
          </div>
          <div class="col-12 col-md-6  text-center mt-3 mt-sm-0 ">
            <iframe  src="https://www.youtube.com/embed/zY83HOW_458?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video-youtube"></iframe>
          </div>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="container">

      <h1 class=" text-center py-5 title-h1" style="color: #c80000">{{trans('messages.titulocomentario')}}</h1>
        <div class="row pb-5">
            
          <div class=" col-12 col-sm-4 text-center " >
            <div class="row d-flex justify-content-center">
              <div class="text-center " style="border-radius: 50%; overflow: hidden; width: 200px; height: 200px">
              <img class="card-img-top" style="height: 100%; width: auto; margin-left: -40px; " src="{{ asset('assets/mail2.jpeg') }}" alt="Card image cap">
            </div>
            
            <div class="card-body col-12">
              <i class="card-text">"{{trans('messages.comentario1')}}"</i>
            </div>
            </div>
            
          </div>
          <div class=" col-12 col-sm-4 text-center " >
            <div class="row d-flex justify-content-center">
              <div class="text-center " style="border-radius: 50%; overflow: hidden; width: 200px; height: 200px">
              <img class="card-img-top" style="height: 100%; width: auto; margin-left: -40px; " src="{{ asset('assets/mail4.jpeg') }}" alt="Card image cap">
            </div>
            
            <div class="card-body col-12">
              <i class="card-text">"{{trans('messages.comentario3')}}"</i>
            </div>
            </div>
            
          </div>
          <div class=" col-12 col-sm-4 text-center " >
            <div class="row d-flex justify-content-center">
              <div class="text-center " style="border-radius: 50%; overflow: hidden; width: 200px; height: 200px">
              <img class="card-img-top" style="height: 100%; width: auto; margin-left: -40px; " src="{{ asset('assets/mail3.jpeg') }}" alt="Card image cap">
            </div>
            
            <div class="card-body col-12">
              <i class="card-text">"{{trans('messages.comentario2')}}"</i>
            </div>
            </div>
            
          </div>
        </div>
    </div>
</div>
<div class="col-12">
    <div class="row d-flex align-items-center justify-content-center  py-5" style="background: #F6F7FA">
        <div class="col-12 col-md-10 d-flex justify-content-center row mt-4 ">
            <div class="col-12 col-md-6 text-center mt-2 ">
                <h3 class="conten-landing "> Déjanos tu email y descarga el app.</h3>
                <h3 class="conten-landing "> Con tu primera recarga te obsequiamos el doble de tu importe </h3>
                @yield('form2')
            </div> 
        </div>
    </div>
</div>
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
                <a href="https://play.google.com/store/apps/details?id=com.phonealo" title="">
                    <img src="{{ asset('assets/btn_googleplay.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-6 col-sm-4">
                <a href="https://itunes.apple.com/us/app/phonealo/id1425979442?l=es&ls=1&mt=8" title="">
                    <img src="{{ asset('assets/btn_appstore.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
    @include('frontend.layout.footer')
    {{-- FIN FOOTER --}}


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/valida.2.1.7.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript">

        // // $(window).scroll(function(){
        // //     var barra = $(window).scrollTop();
        // //     var posicion =  (barra * 0.9);
            
        // //     $('.parallax').css({
        // //         'background-position': '0 -' + posicion + 'px'
        // //     });
     
        // // });

        // // if (ancho <= 1350){
        // //     $('.parallax').css({
        // //         'background-size': 'initial'
        // //     });
        // // }

        // var scene = document.getElementById('scene');
        // var parallaxInstance = new Parallax(scene, {
        //   relativeInput: true
        // });
        // parallaxInstance.friction(0.1, 0.1);

        $(function () {
            $('#verMas').bind("click", function () {
                var dest = $("#one").offset().top;
                $("html, body").animate({scrollTop: dest},1000);
            });

        });

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

                            console.log(data);
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