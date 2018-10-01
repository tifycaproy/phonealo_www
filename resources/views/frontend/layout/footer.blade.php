<div class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    2018 © Phonealo - ALL Rights Reserved.
                    <br>
                    B-Duc Mircea Cel Batran H5, Targoviste, Romania
                    <br>
                    <b>Telefono: </b>+34 607333715
                    <br>
                    <a href="https://www.phonealo.com/privacity" title="Políticas de Privacidad">Políticas de Privacidad</a>

                </div>
                <div class="col-12 mt-3-xs col-md-5 col-md-offset-1 col-sm-6">
                    <div class="row d-flex justify-content-center justify-content-sm-end ">
                        <div class="col-2">
                            <a target="blank_" href="https://www.instagram.com/phonealo_app/" title="Instagram">
                                <img src="{{ asset('assets/ig_circle.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="https://www.facebook.com/Phonealo-642900916095975/?modal=admin_todo_tour" title="Facebook">
                                <img src="{{ asset('assets/fb_circle.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="#">
                                <img src="{{ asset('assets/tw_circle.svg') }}" alt="@Phonealo1">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="skype:phonealo app">
                                <img src="{{ asset('assets/sk_circle.svg') }}" alt="">
                            </a>
                        </div>
                         <div class="col-2">
                            <a target="blank_" href="https://t.me/phonealo">
                                <img src="{{asset('assets/tg_circle.png')}}" alt=""  class="img-fluid">
                            </a>
                        </div>
                      <div class="col-2">
                           <a href="#" class="chatbutton">
                                <img src="{{asset('assets/tg_circle.png')}}" alt=""  class="img-fluid">
                            </a>
                       </div>

                    </div>
                    
                </div>
            </div>
            <hr>
            <script language="JavaScript" type="text/javascript">
                 TrustLogo("{{ asset('assets/comodo_secure_seal_76x26_transp.png') }}", "CL1", "none");
               </script>
            <a href="https://www.positivessl.com/" id="comodoTL"></a>
        </div>

    </div>

 

    <div class="modal fade" id="mchat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
          <div class="modal-content">
             <div class="modal-body">
                <form id="frmchat" action="{{ route('enviar_mensaje') }}" name="frmchat"  novalidate="">

                   <div class="row">
                      <div class="form-group row col-5 col-md-2">
                       <textarea name="txtmensaje" id="txtmensaje" cols="20" rows="3" placeholder="{{trans('messages.chatlblmensaje')}}"></textarea>
                      </div>
                      <div class="form-group row col-5 col-md-2">
                        <input type="submit" class="btn-primary" value="{{trans('messages.chatbutton')}}">
                         
                      </div>

                  </div>
               </form>
           </div>


  </div>
</div>
</div>








@push('scripts')

<script type="text/javascript" language="javascript">
    $(document).on('click', '.chatbutton', function () {
    var id = $(this).val();
    $('#mchat').modal('show');
    
});
</script>
@endpush
