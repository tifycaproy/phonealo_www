

    <div class="row align-items-center no-gutters justify-content-center">
        <div id="error" class="col-12 error d-none">Email ya existe</div>
        <div class="col-12 col-12">
          <input type="email" autocomplete="off" name="email" id="email" class="form-control input-landing" id="inlineFormInput" required placeholder="email@example.com" filter="email" data-invalid="example@service.com">
        </div>
        <div class="col-12 col-md-6 text-center mt-4">
            
            <input name="_token" value="{{ csrf_token() }}" type="hidden" onclick=""></input>
            {{-- <button type="submit" class="btn btn-success input-landing" id="enviar" >Enviar</button> --}}
          <input type="submit" class="btn btn-amigo input-landing" id="enviar" value="¡Phonealo!">
        </div>
    </div>
