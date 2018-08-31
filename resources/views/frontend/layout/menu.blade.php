<nav id="menu" class="navbar p-0 fixed-top navbar-expand-lg d-flex justify-content-between navbar-light background-menu" style="flex-flow: wrap !important;">
  <div class="col-12 c-white d-flex justify-content-between py-1" style="background: #192430; font-size: .8rem;  height: 30px">
    <div>
        <span>{{$pais}} - {{$region}}, {{$ciudad}}</span>  
    </div>
    <div>
        <a class="c-white" href="{{url('locale/en')}}">{{trans('messages.link1')}}</a> |
        <a class="c-white" href="{{url('locale/es')}}">{{trans('messages.link2')}}</a>
    </div>
  </div>
  <div class="col-7 col-md-3 col-lg-2">
   <a href="https://www.phonealo.com/" title=""> <img src="{{ asset('assets/logo.png') }}" class="img-fluid" alt=""></a>
  </div>
  <div class="p-3 text-right">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="https://app.phonealo.net/balance">{{trans('messages.menuItem1')}} <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="modal" data-target="#pamigo">{{trans('messages.menuItem2')}}</a>
        </li>
      </ul>
    </div>
  </div>
</nav>