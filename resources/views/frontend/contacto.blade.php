<!--Buying Row-->
    <div class="row-buying">
        <div class="container">
            <div class="row">
                <div class="col-md-6 active">
                    {{-- <span class="badge">Legacy</span> --}}
                   
                    <h2 class="text-center">{{trans('messages.contacto1')}}</h2>
                    <form action="{{route('contacto_submit')}}" method="post" accept-charset="utf-8">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                        <div class="form-group">
                            <label class="label-text" for="email">Email</label>
                            <input type="email" class="col-md-12 form-control email" id="email" name="email" required placeholder="Tu Email">
                        </div>
                        <div class="form-group">
                            <label class="label-text" for="tel">{{trans('messages.contacto2')}}</label>
                            <input type="text" class="col-md-12 form-control email" id="tel" name="tel" required placeholder="Tu Telefono">
                        </div>
                        <div class="form-group">
                            <label class="label-text" for="mensaje">{{trans('messages.contacto3')}}</label>
                            <textarea name="mensaje" class="form-control mensaje" id="mensaje" rows="5" required></textarea>
                        </div>
                        <div class="form-group text-right">
                            
                           <input type="submit" class="btn btn-success mt-3" value="Enviar" name="">
                        </div>


                    </form> 
                </div>
                <div class="col-12 col-md-6 mt-3-xs p-0-xs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.9355199415127!2d25.456864316180347!3d44.92464677730216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2f69e97c94545%3A0xb66ae1b8a437787b!2sApel+Global+gsma!5e0!3m2!1ses!2ses!4v1532976445438" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>                    

                </div>
            </div>
        </div>
    </div>
</div>