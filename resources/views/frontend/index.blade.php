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

        });


        if (ancho <= 1350){
            $('.parallax').css({
                'background-size': 'initial'
            });
        }

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
            new SelectFx(el, {
                stickyPlaceholder: false
            });
        } );



    });

    SelectFx.prototype._changeOption = function() {

        // if pre selected current (if we navigate with the keyboard)...
        if( typeof this.preSelCurrent != 'undefined' && this.preSelCurrent !== -1 ) {
            this.current = this.preSelCurrent;
            this.preSelCurrent = -1;
        }

        // current option
        var opt = this.selOpts[ this.current ];

        // update current selected value
        this.selPlaceholder.textContent = opt.textContent;
        
        // change native select element´s value
        this.el.value = opt.getAttribute( 'data-value' );

        // remove class cs-selected from old selected option and add it to current selected option
        var oldOpt = this.selEl.querySelector( 'li.cs-selected' );
        if( oldOpt ) {
            classie.remove( oldOpt, 'cs-selected' );
        }
        classie.add( opt, 'cs-selected' );

        // if there´s a link defined
        if( opt.getAttribute( 'data-link' ) ) {
            // open in new tab?
            if( this.options.newTab ) {
                window.open( opt.getAttribute( 'data-link' ), '_blank' );
            }
            else {
                window.location = opt.getAttribute( 'data-link' );
            }
        }

        // callback
        this.options.onChange( this.el.value );

        var pais = this.el.value;
        //console.log(pais);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: '{{ url('tarifas') }}',
            dataType: "json",
            data: { pais: pais,_token: '{{csrf_token()}}' },
            success: function (data){

                //$('#tarifas').removeClass('display-none');

                if (data.tar_currency == 'EUR') {
                 $('.moneda').append('€'); 
             }


         }

     });

        $.get("https://ipinfo.io", function(response) {
          console.log(response.ip, response.country);
      }, "jsonp")
    }


    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

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


