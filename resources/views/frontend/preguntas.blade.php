@extends ('frontend.layout.layout')

@section('title', 'Phonealo')


@section ('content')


<div class="col-12 mt-5"></div>
<div class="container py-5">
        <div class="row">
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿En quê paises está disponible?</h2>
                <p>Está disponible en todos los paises.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>¿Necesito internet en mi móvil?</h2>
                <p>Si es necesario tener internet en tu movil, de esta manera no tendras ningun gasto adicional ni oculto, que generalmente son generados por tu operador de telefonia.</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>{{trans('messages.pregunta1')}}</h2>
              <p>{{trans('messages.respuesta1')}}</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>{{trans('messages.pregunta2')}}</h2>
                <p>{{trans('messages.respuesta2')}}</p>
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
                <h2>{{trans('messages.pregunta3')}}</h2>
                <p>{{trans('messages.respuesta3')}}</p>
            </div>
            <div class="info col-12 col-sm-6 col-md-4 my-2">
                <h2>{{trans('messages.pregunta4')}}</h2>
                <p>{{trans('messages.respuesta4')}} </p>
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
 

@endsection

@push('scripts')





@endpush


