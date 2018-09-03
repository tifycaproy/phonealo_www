@extends ('frontend.layout.layout')

@section('title', 'Phonealo')

@section('slider')
@include('frontend.layout.slider')
@endsection

@section ('content')

@include('frontend.recarga')

<div style="background: #F6F7FA" class="py-5 ">
  @include('frontend.tarifas')

</div>

<!--Full Width Image-->
<div class="parallax" style="background-image: url('assets/alemania.png');" >
    <div class="container padding-200">
        <div class="row w-100">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10  pl-2-xs">

                <h1 class="title-h1 c-black">{{trans('messages.indice1')}}</h1>
                <h2 class=" title-h2">{{trans('messages.indice2')}}</h2>

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
<div class="" style="background: #F6F7FA">
    <div class="container">

      <h1 class="c-black text-center py-5 title-h1">{{trans('messages.titulopreguntas')}}</h1>
        <div class="row pb-5">
            
          <div class=" col-12 col-sm-2 col-md-3" >
            <div class="col-12">
              <h2>{{trans('messages.pregunta1')}}</h2>
              <p>{{trans('messages.respuesta1')}}</p>
            </div>
            
          </div>
          <div class=" col-12 col-sm-2 col-md-3" >
            <h2>{{trans('messages.pregunta2')}}</h2>
                <p>{{trans('messages.respuesta2')}}</p>
          </div>
          <div class=" col-12 col-sm-2 col-md-3" >
            <h2>{{trans('messages.pregunta3')}}</h2>
                <p>{{trans('messages.respuesta3')}}</p>
          </div>
          <div class=" col-12 col-sm-2 col-md-3" >
           <h2>{{trans('messages.pregunta4')}}</h2>
                <p>{{trans('messages.respuesta4')}} </p>
          </div>
          
          <div class="col-12 col-sm-9"></div>
          <div class="col-12 col-sm-3 text-right"><a href="{{ route('questions') }}" title="">{{trans('messages.mas')}}</a></div>
        </div>
        <hr class="m-0">
    </div>

</div>
 

@include('frontend.contacto')
 @include('frontend.pamigo')
@endsection

@push('scripts')

<script type="text/javascript">

    $(document).ready(function(){
        var ancho = $(window).width();


        $(window).scroll(function(){
            var barra = $(window).scrollTop();
            // var posicion =  (barra * 0.1);
            
            // $('.parallax').css({
            //     'background-position': '0 -' + posicion + 'px'
            // });

            // if (barra > 30) {
            //     $('#menu').addClass('fixed-top');
            //     $('#menu').css('top':'0px');
            //     $('.iPhone').css({'top':'120px'});
               
            // }else{
            //      $('#menu').removeClass('fixed-top');
            //     $('#menu').css('top':'30px');
            //     $('.iPhone').css({'top':'70px'});
            // }
           
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


         $(function () {
            $('#que').bind("click", function () {
                var dest = $("#quees").offset().top - 150;
                $("html, body").animate({scrollTop: dest},1000);
            });

        });



// TARIFAS

$(function(){
  $('#input-tarifas').keyup(function(event) {
    var input_pais = $(this).val();
    if (input_pais.length > 0) {
   
      
      $('#content-tarifa').addClass('d-none');
        $.ajax({
            type: "get",
            url: '{{ route('trae_paises') }}',
            dataType: "json",
            data: { pais: input_pais },
            success: function (data){

              if (data.length == 0) {
                $('#content-pais').addClass('d-none');
              }else{
                $('#content-pais').removeClass('d-none');
                $("#tbody-pais").html(''); 

                $.each(data, function(l, item) {
                  $("#tbody-pais").append('<tr id="pais" onclick="captura(this)" data-value="'+item.pais_country_prefix+'" ><td>'+item.pais_desc+'</td></tr>');
                });

              }

              
            }

        });
    } else{
      //console.log('vacio');
      $('#content-pais').addClass('d-none');
      $('#content-tarifa').addClass('d-none');
    }
    
  });

  
});

function captura(elemento){
    var value = $(elemento).data('value');

    $('#input-tarifas').val('');
    
    $('#content-pais').addClass('d-none');
    $('#content-tarifa').removeClass('d-none');

    var pais = '{{$pais}}';

    if (pais == 'DE' || pais == 'AT' || pais == 'BE' || pais == 'BG' || pais == 'CY' || pais == 'HR' || pais == 'DK' || pais == 'SI' || pais == 'ES' || pais == 'EE' || pais == 'FI' || pais == 'FR' || pais == 'IT' || pais == 'LV' || pais == 'LT' || pais == 'LU' || pais == 'MT' || pais == 'NL' || pais == 'PL' || pais == 'PT' || pais == 'GB' || pais == 'GB' || pais == 'RO' || pais == 'SE') {

      var moneda = '€';
    }else{
      var moneda = '$';
    }

      $.ajax({
          type: "get",
          url: '{{ route('trae_tarifa') }}',
          dataType: "json",
          data: { value: value },
          success: function (data){

             $('.nombre_pais').html(data.pais+' ('+data.cod+') ');

             $('#monto_tarifa').html(data.tarifa+moneda);

             $('#recarga_tarifa').html('<a href="https://app.phonealo.net/payment/init?amount=10&country='+value+'" class="btn" style="background: white; color: #c80000">{{trans('messages.btn_tarifas')}}</a>');


          }

      });


}

</script>



@endpush


