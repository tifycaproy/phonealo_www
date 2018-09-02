<div class="container pt-5 pb-5" >
  <div class="row">
    <div class="col-12 text-center pb-5">
      <h1 class="c-black title-h1">{{trans('messages.recarga1')}}</h1>
    </div>
    <div class="col-12 pb-5">
      <div class="row d-flex justify-content-center"> 
          <div class="col-9 col-md-5 col-lg-4">
          <form action="https://app.phonealo.net/payment/init" method="get" accept-charset="utf-8"> 
            <select name="amount" class="input ">
               <option value="">{{trans('messages.recarga2')}}</option>
                <option value="5"><span class='moneda'></span>5 €</option>
                <option value="10"><span class='moneda'></span>10 €</option>
                <option value="20"><span class='moneda'></span>20 €</option>
                <option value="50"><span class='moneda'></span>50 €</option>
                <option value="100"><span class='moneda'></span>100 €</option>
                <option value="500"><span class='moneda'></span>500 €</option>
             </select>
          </div>
          <div class="col-12 col-md-5 col-lg-2 justify-content-center d-flex align-items-center">
            <input type="submit" class="btn btn-outline-danger btn-lg" value="{{trans('messages.btn_recarga')}}">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container py-5 mb-5">
  <div class="row justify-content-center d-flex align-items-center">
    <div class="col-12 text-center pb-2">
      <h2 class="c-black title-h1">{{trans('messages.tarifasTitulo')}}</h2>
    </div>
    <div class="col-12 justify-content-center d-flex align-items-center">
      <input type="text" id="input-tarifas" class="input col-12 col-md-6 mb-0" name="tarifas" placeholder="{{trans('messages.tarifasPlaceholder')}}" style="color: black; text-align: center;">
    </div>
    <div class="col-12 col-md-6 d-none" id="content-pais" style="overflow: scroll; "  >
      <div class="mx-1" style=" color: black">
        <table class="table table-hover table-tarifas mt-3">
          <tbody id="tbody-pais">
            
          </tbody>
        </table>
      </div>
    </div>
   
      <div class="col-12 col-md-6 mt-5 justify-content-center d-none" id="content-tarifa" >
        <div class="card text-white  mb-3 w-100  mx-auto"  style="max-width: 25rem; background: #c80000">
          <div class="card-header text-center">
            <h2 id="" class="title-h1 text-white mb-0 nombre_pais"></h2>
          </div>
          <div class="card-body text-center">

            <h5 class="card-title" style="font-size: .9rem"> {{trans('messages.textoTarifas1')}} <span class="nombre_pais"></span> {{trans('messages.textoTarifas2')}}</h5>

            <h2 id="monto_tarifa" class="text-white"></h2>
            <div id="recarga_tarifa">
              
            </div>
            
          </div>
        </div>
      </div>
   
  </div>
</div>