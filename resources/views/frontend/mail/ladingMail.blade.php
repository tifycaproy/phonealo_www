@extends ('frontend.mail.layout')


@section('titulo')
<strong>Gracias Por suscribirte</strong>
@endsection
@section ('block1')

<p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px; text-align: center;">Tu amigo <strong> {{ $usu_name }}</strong>  te ha inivtado a que pruebes nuestra app.</p>
<br>
<p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px; text-align: center;">Descargala ahora y con tu primera recarga recibe el doble del importe. </p>
<br>
<p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px; text-align: center;">Phonealo es la unica app que hace recarga doble. </p>
<br>
<br>

 <p style="margin: 1em 0px; margin-bottom: 0px; margin-top: 0px;"><strong>IMPORTANTE !!!</strong> Tu saldo <strong>nunca caduca</strong>, y el pago lo haces directamente en nuestro banco, <strong>no guardamos</strong> tus tarjetas de cr&eacute;dito/debito y nunca te pediremos estos datos por correo</p>
<br>
 <p style="margin: 1em 0px; margin-top: 0px;">En <a href="https://www.phonealo.com/" target="_blank" rel="noopener noreferrer" style="color: #3f3f3f; color: #3f3f3f; text-decoration: underline;">www.phonealo.com</a> puedes<a href="https://app.phonealo.net/payment/init" target="_blank" rel="noopener noreferrer" style="color: #3f3f3f; color: #3f3f3f; text-decoration: underline;"> recargar</a> directamente el saldo de la aplicaci&oacute;n y tambi&eacute;n podr&aacute;s <a href="https://app.phonealo.net/balance" target="_blank" rel="noopener noreferrer" style="color: #3f3f3f; color: #3f3f3f; text-decoration: underline;">consultar todas tus llamadas realizadas.</a></p>

@endsection




