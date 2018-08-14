@extends ('frontend.layout.layout')

@section('title', 'Phonealo')

@section ('content')
@include('frontend.recarga')

<!--Full Width Image-->
<div class="parallax" style="background-image: url('assets/alemania.png');" >
    <div class="container padding-200">
        <div class="row w-100">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10  pl-2-xs">

                <h1 class="title-h1">{{trans('messages.indice1')}}</h1>
                <h2 class="c-white title-h2">{{trans('messages.indice2')}}</h2>

            </div>
        </div>
    </div>
</div>

<div class="row-green">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10  pl-2-xs">
                <h2>{{trans('messages.indice3')}}</h2>
                <h3>{{trans('messages.indice4')}}</h3>

            </div>

        </div>
    </div>
</div>

@include('frontend.contacto')
@endsection

@push('scripts')

<script type="text/javascript">

    $(document).ready(function(){
        var ancho = $(window).width();

        $(window).scroll(function(){
            var barra = $(window).scrollTop();
            var posicion =  (barra * 0.05);
            
            $('.parallax').css({
                'background-position': '0 -' + posicion + 'px'
            });

            if (barra > 30) {
                $('#menu').addClass('fixed-top');
                $('.iPhone').css({'top':'120px'});
               
            }else{
                $('#menu').removeClass('fixed-top');
                $('.iPhone').css({'top':'70px'});
            }
           
        });


        if (ancho <= 1350){
            $('.parallax').css({
                'background-size': 'initial'
            });
        }


    $.get("https://ipinfo.io", function(response) {
          //console.log(response.ip, response.country);
      }, "jsonp")


    });

</script>

<!--Geolocalización-->
<script type="text/javascript">// <![CDATA[

if (navigator.geolocation) {
  var tiempo_de_espera = 3000;
  navigator.geolocation.getCurrentPosition(mostrarCoordenadas, mostrarError, { enableHighAccuracy: true, timeout: tiempo_de_espera, maximumAge: 0 } );
}
else {
  //alert("La Geolocalización no es soportada por este navegador");
}

function mostrarCoordenadas(position) {
  //var salida = document.getElementByid('map');
  //alert("Latitud: " + position.coords.latitude + ", Longitud: " + position.coords.longitude);
  var x = position.coords.latitude;
  var y = position.coords.longitude;
  //document.getElementById('map').innerHTML = "Latitud:"+x+"longitud: "+y;
  //var imURL = "https://maps.googleapis.com/maps/api/staticmap?center="+x+","+y+"&size=300x100&markers=color:red%7C"+x+","+y+"&key=AIzaSyBaUGy-if65M1uS78Xemk77CxFvgEYU-Pk";
  //document.getElementById('map').innerHTML = "<img src='"+imURL+"'>";
  //salida.innerHTML = "<p>Latitud:"+x+"<br>Longitud:"+y+"</p>";
}

function mostrarError(error) {
  var errores = {1: 'Permiso denegado', 2: 'Posición no disponible', 3: 'Expiró el tiempo de respuesta'};
  //alert("Error: " + errores[error.code]);
}

</script>



@endpush


