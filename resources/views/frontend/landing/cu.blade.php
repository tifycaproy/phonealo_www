@extends ('frontend.landing.layout')

@section('title', 'Phonealo')

@section('img', 'background-image: url("assets/cuba.jpg");')

@section ('form1')
  <form id="form_landing" onsubmit="return false" >
    @include('frontend.landing.form') 
    <input type="hidden" name="pais" id="pais" required value="CU" readonly >
  </form>
@endsection
@section ('form2')
  <form id="form_landing" onsubmit="return false" >
    @include('frontend.landing.form') 
    <input type="hidden" name="pais" id="pais" required value="CU" readonly >
  </form>
@endsection

@push('scripts')
    
@endpush


