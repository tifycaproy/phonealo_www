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
          <div class="col-12 col-md-5 col-lg-4 justify-content-center d-flex align-items-center">
            <input type="submit" class="btn btn-outline-danger btn-lg" value="Recarga">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>