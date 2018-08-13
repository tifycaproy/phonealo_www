<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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
<body class="container-fluid " style="padding: 0px;">
    {{-- BOTONES DE TIENDAS --}}
    <div id="btn-tiendas" class="col-12 col-sm-2 position-fixed d-md-block d-none">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 col-sm-6">
                <a href="" title="">
                    <img src="{{ asset('assets/btn_googleplay.svg') }}" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-sm-6">
                <a href="" title="">
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
                <a href="https://t.me/phonealo" title="">
                     <img src="{{asset('assets/tw_circle.svg')}}" alt="@Phonealo1" class="w-25"> 

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
                <a target="blank_" href="">
                     <img src="{{asset('assets/tg_circle.png')}}" alt=""  class="w-25">

                </a>
            </div>
        </div> 
    </div>

    {{-- MENU --}}
    <div id="menu" class="col-12 position-fixed position-absolute-xs" >   
        <div class="row d-flex justify-content-center justify-content-sm-between align-items-center background-white">
            <div class="col-10 col-sm-2 pl-5 py-3 pl-1-xs" >
                <img src="assets/logo.svg" class=" img-fluid"/>
            </div>
            <div class="col-12 col-sm-auto pb-1-xs pr-5 p-0-xs text-center">
                {{-- <a href="" title="">ES</a> | <a href="" title="">EN</a>  --}}
                    <a href="https://app.phonealo.net//balance" title="Ingresa">{{trans('messages.link3')}}</a> |
                    <a href="{{url('locale/en')}}">{{trans('messages.link1')}}</a> |
                    <a href="{{url('locale/es')}}">{{trans('messages.link2')}}</a>
                    
            </div> 
        </div> 
    </div>
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
    {{-- PARA ASEGURAR EL AJUSTE DE LA IMAGENES VERIFIQUE QUE LAS IMAGENES POSEAN LAS MISMAS DIMENCIONES 1920 × 1279/ PUEDE AYUDARSE EMPLEADO EL ARCHIVO .PSD QUE SE ENCUENTRA EN PUBLIC/ASSETS/IMG.PSD --}}
    <div id="carouselExampleSlidesOnly" class="carousel slide row-masthead col-12 p-0" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" >
              <div class="position-absolute col-12 col-md-8 col-lg-6 p-5  p-1-sm ml-5 c-white background-black top-30 text-center invisible-xs">
                  <h2 class="c-white size-13" >{{trans('messages.layout1')}}</h2>
                  <h3 class="c-white normal size-1"> {{trans('messages.layout2')}}</h3>
              </div>  
              <img class="d-block w-100" src="{{asset('assets/usa.png')}}" alt="">
            </div>
            <div class="carousel-item">
                <div class="position-absolute col-12 col-md-8 col-lg-6 p-5 p-1-sm ml-5 c-white background-black top-30 text-center invisible-xs">
                    <h2 class="c-white size-13 ">{{trans('messages.layout3')}}</h2>  
                    <h3 class="c-white normal size-1" >{{ trans('messages.layout4')}}</h3>
                </div>
              <img class="d-block w-100" src="{{asset('assets/ecuador.jpg')}}" alt="">
            </div>
            <div class="carousel-item">
                <div class="position-absolute col-12 col-md-8 col-lg-6 p-5 p-1-sm ml-5 c-white background-black top-30 text-center invisible-xs">
                  <h2 class="c-white size-13 ">{{trans('messages.layout5')}}</h2>
                  <h3 class="c-white normal  size-1">{{trans('messages.layout6')}}</h3>
              </div>
              <img class="d-block w-100" src="{{asset('assets/cuba.jpg')}}" alt="">
            </div>
        </div>
    </div>
    {{-- FIN SLIDER --}}
    {{-- IPHONE --}}
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-lg-6">
            </div>
            <div class="col-md-2 d-md-block d-none">
                <img src="assets/iPhone1.png" class="iPhone"/>
            </div>
        </div>
    </div>
    {{-- FIN IPHONE --}}
    {{-- CONTENEDOR --}}
    <div class="pt-xs-1 pt-5 bg-white content">
        @yield('content')
    </div>
    {{-- FIN CONTENEDOR --}}
    <!-- FOOTER -->
    <div class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    2018 © Phonealo - ALL Rights Reserved.
                    <br>
                    B-Duc Mircea Cel Batran H5, Targoviste, Romania
                    <br>
                    <b>Telefono: </b>+34 607333715
                </div>
                <div class="col-12 mt-3-xs col-md-5 col-md-offset-1 col-sm-6">
                    <div class="row d-flex justify-content-center justify-content-sm-end ">
                        <div class="col-2">
                            <a target="blank_" href="https://www.instagram.com/phonealo_app/" title="Instagram">
                                <img src="{{ asset('assets/ig_circle.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="https://www.facebook.com/Phonealo-642900916095975/?modal=admin_todo_tour" title="Facebook">
                                <img src="{{ asset('assets/fb_circle.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="#">
                                <img src="{{ asset('assets/tw_circle.svg') }}" alt="@Phonealo1">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="skype:phonealo app">
                                <img src="{{ asset('assets/sk_circle.svg') }}" alt="">
                            </a>
                        </div>
                         <div class="col-2">
                            <a target="blank_" href="https://t.me/phonealo">
                                <img src="{{asset('assets/tg_circle.png')}}" alt=""  class="img-fluid">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- FIN FOOTER --}}

    <!--Scripts-->
    <script language="JavaScript" type="text/javascript">
       TrustLogo("http://www.phonealo.com/comodo_secure_seal_76x26_transp.png", "CL1", "none");
   </script>
   <a href="https://www.positivessl.com/" id="comodoTL">Positive SSL</a>
    <script src="https://maps.googleapis.com/js?Key=AIzaSyBaUGy-if65M1uS78Xemk77CxFvgEYU-Pk"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    

@stack('scripts') 

</body>
</html>