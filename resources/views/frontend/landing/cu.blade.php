@extends ('frontend.landing.layout')

@section('title', 'Phonealo')

@section('img', 'background-image: url("assets/cuba.jpg");')

@section ('form')
<div class="col-12">
   <form id="form_landing" onsubmit="return false" >
        <div class="row align-items-center no-gutters">
            <div id="error" class="col-12 error d-none">Email ya existe</div>
            <div class="col-12 col-lg-10">
              <input type="email" autocomplete="off" name="email" id="email" class="form-control input-landing" id="inlineFormInput" required placeholder="email@example.com" filter="email" data-invalid="example@service.com">
            </div>
            <div class="col-12 col-lg-2 text-center">
                <input type="hidden" name="pais" id="pais" required value="CU" readonly >
                <input name="_token" value="{{ csrf_token() }}" type="hidden" onclick=""></input>
                {{-- <button type="submit" class="btn btn-success input-landing" id="enviar" >Enviar</button> --}}
              <input type="submit" class="btn btn-success input-landing" id="enviar" value="Enviar">
            </div>
        </div>
   </form> 
</div>
@endsection

@push('scripts')
    
@endpush


