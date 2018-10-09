@extends ('frontend.landing.layout')

@section('title', 'Phonealo')

@section('img', 'background-image: url("assets/phonehand2.jpg");')

@section('titulo')
	{{trans('messages.titulo_landing_ec')}}
@endsection

@section ('form1')
  <form id="form_landing" onsubmit="return false" >
    @include('frontend.landing.form') 
    <input type="hidden" name="pais" id="pais" required value="EC" readonly >
  </form>
@endsection
@section ('form2')
  <form id="form_landing" onsubmit="return false" >
    @include('frontend.landing.form') 
    <input type="hidden" name="pais" id="pais" required value="EC" readonly >
  </form>
@endsection

@push('scripts')
    
@endpush


